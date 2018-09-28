@section('meta')
    <meta name="description" content="Services Provided by Ashish Kumar Bhoi">
    <meta name="keywords" content="Login, Blog, Ashish Kumar Bhoi, Laravel, Services, Jobs, Solution">
@endsection

@extends('layouts.app')

@section('content')

    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
        </ul>
    @endif

@endsection
