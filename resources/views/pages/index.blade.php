@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
            <div class="jumbtron-content">
            <h1>Welcome To Laravel!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deleniti!</p>
            {{--<p>--}}
                {{--@if(Auth::guest())--}}
                    {{--<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>--}}
                {{--@endif--}}
                {{--@if(!Auth::guest())--}}
                    {{--@if(Auth::user()->id == 3)--}}
                        {{--<a href="/register" class="btn btn-success btn-lg" role="button">Register</a>--}}
                    {{--@endif--}}
                {{--@endif--}}
            {{--</p>--}}
        </div>
    </div>
@endsection


