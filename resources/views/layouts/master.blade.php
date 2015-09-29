<!DOCTYPE html>
<html lang="en">
    <head>
        <title>App Name - @yield('title')</title>
        {!! Html::style('css/style.css') !!}
        {!! Html::script('js/main.js'); !!}
    </head>
    <body>

        @section('nav')
        @yield('nav')
            @if(Auth::check())
                <h1>Welcome {{Auth::user()->name}}</h1>
                <a href="{{ URL::to('auth/logout')}}">logout {{Auth::user()->name}}</a>
                <a href="{{ URL::to('post/create') }}">create post</a>
                <a href="{{ URL::to('/')}}">Take me home</a>
                <a href="{{ URL::to('post') }}">All posts</a>
            @else
                <a href="{{ URL::to('post/create') }}">create post</a>
                <a href="{{ URL::to('/')}}">Take me home</a>
                <a href="{{ URL::to('post') }}">All posts</a>
                <a href="{{ URL::to('auth/register')}}">User register</a>
                <a href="{{ URL::to('auth/login')}}">login</a>
            @endif
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>