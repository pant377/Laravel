@extends('pages.testing')

@section('content')
    <h1>{{$post->title}}</h1>
    <h2>{{$post->body}}</h2>
    <hr>
    <a href="/lsapp/public/posts/{{$post->id}}/edit">Edit</a>
    
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy',$post->id], 'method' => 'DELETE']) !!}
        {{Form::hidden('_methid','DELETE')}}
        {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection