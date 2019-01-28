@extends('layouts.app')

@section('content')
<div class="container">
<h1>  edit Post</h1>
{!! Form::open(['action' => ['PostsController@update',$posts->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
          {{Form::label('title','Title')}}
          {{Form::text('title',$posts->title,['class'=>'form-control','placeholde'=>'Title'])}} 

    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$posts->body,['id'=>'editor','class'=>'form-control','placeholde'=>'Body Text'])}} 

  </div>
  {{Form::hidden('_method','PUT')}}
  <div class="form-group">
            {{Form::file('cover_image')}}
      </div>
  {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
    
@endsection