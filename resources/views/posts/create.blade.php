@extends('layouts.app')

@section('content')
<div class="container">
<h1>  Create Post</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
          {{Form::label('title','Title')}}
          {{Form::text('title','',['class'=>'form-control','placeholde'=>'Title'])}} 

    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=>'editor','class'=>'form-control','placeholde'=>'Body Text'])}} 

  </div>
  <div class="form-group">
        {{Form::file('cover_image')}}
  </div>
  {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
    
@endsection