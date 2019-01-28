@extends('layouts.app')

@section('content')
<div class="container">


<div class="jumbotron">
    <h1>{{$posts->title}}</h1>
    <div>
    {!!$posts->body!!}  
    </div>
    <img src="\blog\storage\app\public\cover_images/{{$posts->cover_image}}"style="width:300px;height:300px">
    <hr>
    <small>Written at {{$posts->created_at}} by{{$posts->user->name}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id==$posts->user_id)
    <a href="/blog/posts/{{$posts->id}}/edit"class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy',$posts->id],'method'=>'POST','class'=>'float-right']) !!}
    {{Form::hidden('_method','DELETE')}}
  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!} 
@endif
@endif 
</div>
   

</div>
    
@endsection