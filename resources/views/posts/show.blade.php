@extends('layouts.app')

@section('content')
    <a href="/posts" style="margin-top: 1rem; margin-bottom: 1rem" class="btn btn-light btn-outline-dark" >Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <hr>
    <div>
        {!!$post->body!!}
    </div>

    <hr>
    <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-light btn-outline-dark">Edit</a>
            {!! Form::Open(['action' => ['PostController@destroy', $post->id], 'method' => 'post', 'class' => 'text-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
            @endif
    @endif
@endsection
