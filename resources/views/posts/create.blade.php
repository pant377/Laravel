@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Create Some Posts</h1>
                        {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('title','Title')}}
                                {{Form::text('title', '',['class' => 'form-control','placeholder' => 'Title'])}}
                            </div>   
                            <div class="form-group">
                                {{Form::label('body','body')}}
                                {{Form::text('body', '',['class' => 'form-control','placeholder' => 'bodytext'])}}
                            </div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection