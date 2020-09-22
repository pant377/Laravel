@extends('pages.testing')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
            </div>
        @endforeach
    @else 
        <p>No posts here broo</p>
    @endif        
@endsection