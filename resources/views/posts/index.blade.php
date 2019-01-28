@extends('layouts.app')

@section('content')
<div class="container  ">
	<p>{{$posts}}</p>
<h1 class="mt-4"> Your Post</h1>
<div class="row text-center">
@if (count($posts)>0)
@foreach ($posts as $post)

<div class="jumbotron-fluid col-lg-5 m-4 text-white bg-dark">
    <img src="storage\app\public\cover_images/{{$post->cover_image}}"style="width:300px;height:300px">
    <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
    <p>{!!$post->body!!}</p>
    <small>Written at {{$post->created_at}} by{{$post->user->name}}</small>
</div>
   
@endforeach
</div>
{{$posts->links() }}
    
@else
    <h3>"No post fount"</h3>
@endif

</div>
    
@endsection