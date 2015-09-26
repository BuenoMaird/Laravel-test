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
            <a href="{{ URL::to('post/create') }}">create post</a>
            <a href="{{ URL::to('/')}}">Take me home</a>
            <a href="{{ URL::to('post') }}">All posts</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>