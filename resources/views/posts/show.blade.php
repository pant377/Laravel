@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>{{$post->title}}</h1>
                        <h3>{{$post->body}}</h3>
                        <hr>
                        <a href="/lsapp/public/posts/{{$post->id}}/edit">Edit</a>
                        {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy',$post->id], 'method' => 'DELETE']) !!}
                            {{Form::hidden('_methid','DELETE')}}
                            {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection