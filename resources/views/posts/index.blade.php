@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h1>Posts</h1>
                            @foreach ($posts as $post)
                                <div class="well">
                                    <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection