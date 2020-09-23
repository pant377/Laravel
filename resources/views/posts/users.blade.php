@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h1>Users</h1>
                            @if(count($users) > 0)
                                @foreach ($users as $user)
                                    <div class="well">
                                        <h3><a href="/lsapp/public/users/{{$user->id}}">{{$user->name}} , {{$user->email}}</a></h3>
                                    </div>
                                @endforeach
                            @else 
                                <p>No users here broo</p>
                            @endif        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection