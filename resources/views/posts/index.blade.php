@section('meta')
    <meta name="description" content="All The Posts Article And Blogs of Ashish Kumar Bhoi is present Hear Any One can view it With out any Security Credentials">
    <meta name="keywords" content="Login, Blog, Ashish Kumar Bhoi, Laravel, Article, posts">
@endsection

@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="alert alert-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="height: 20vh" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach

        {{$posts->links()}}

    @else
        <p>No Post Found</p>
    @endif
@endsection
