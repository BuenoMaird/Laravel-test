<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ben Laravel @yield('title')</title>
        {!! Html::style('css/style.css') !!}
        {!! Html::script('js/main.js'); !!}
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header>
            @if(Auth::check())
            <div class="nav">
                <a href="{{ URL::to('auth/logout')}}">Logout {{Auth::user()->name}}</a>
                <a href="{{ URL::to('post/create') }}">Create post</a>
                <a href="{{ URL::to('/')}}">Take me home</a>
                <a href="{{ URL::to('post') }}">All posts</a>
            </div>
            @else
            <div class="nav">
                <a href="{{ URL::to('/')}}">Take me home</a>
                <a href="{{ URL::to('post') }}">All posts</a>
                <a href="{{ URL::to('auth/register')}}">User register</a>
                <a href="{{ URL::to('auth/login')}}">Login</a>
            </div>
            @endif
        @show
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        
    </footer>

    </body>
</html>