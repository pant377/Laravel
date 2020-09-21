@extends('pages.testing')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="well">{{$post->title}}</div>
        @endforeach
    @else 
        <p>No posts here broo</p>
    @endif        
@endsection