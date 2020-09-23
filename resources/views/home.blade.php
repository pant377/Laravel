@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('What would you like to do') }}</div>
                <div class="card-body">
                    <a href="/lsapp/public/posts/create">Create Some Posts</a>
                    <hr>
                    <a href="/lsapp/public/posts">View Posts</a>
                    <hr>
                    <a href="/lsapp/public/users">View Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
