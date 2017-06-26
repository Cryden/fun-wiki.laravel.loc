<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersData extends Model
{
    protected $table = 'users_data';

    protected $fillable = ['user_id', 'user_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
