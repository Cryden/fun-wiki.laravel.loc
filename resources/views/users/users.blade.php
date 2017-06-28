@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach ($users_data as $user_data)
                        <p> {{ $user_data->user_name }} 
                        @if($user_data->user_isOnline)
                            user is online!!
                        @endif
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
