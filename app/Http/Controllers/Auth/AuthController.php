<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Socialite;

use App\User;
use App\UsersProvider;

class AuthController extends Controller
{

    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    protected $redirectTo = '/home';

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */

    public function findOrCreateUser($user, $provider)
    {
        
        $authUser = UsersProvider::where('provider_id', $user->id)->first();

        //dd($authUser->user);
        //$authUser = User::where('provider_id', $user->id)->first();
        //dd($authUser)

        if ($authUser) {
            $user = User::where('id', $authUser)->first();
            return $user;
        }

        $user_auth = User::where( 'email', $user->getEmail())->first();

        if (!$user_auth) {
            $user_auth = User::createByProvider($user);
        }

        
        $account = new UsersProvider([
            'provider_id' => $user->getId(),
            'provider' => $provider]);
            
        $account->user()->associate($user_auth);
        $account->save();

        return $user_auth;
    }
}
