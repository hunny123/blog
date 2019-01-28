@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                        <h3> Your blog posts</h3>
                        <a class="btn btn-primary" href="/blog/posts/create">Create Post</a>
                        <table class="table  mt-2 table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @if(count($posts)>0)
                            @foreach($posts as $post)
                            <tr>
                            <th> <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Written at {{$post->created_at}} by{{$post->user->name}}</small></th>
                            <th><a href="/blog/posts/{{$post->id}}/edit"class="btn btn-default">Edit</a>
                            </th>
                            <th> {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!! Form::close() !!} </th>
                            </tr>
                         
                            @endforeach
                            @else 
                            <h4> No posts Create One </h4>
                            @endif
                        </table>   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
