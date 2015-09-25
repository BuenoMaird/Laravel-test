<!DOCTYPE html>
<html lang="en">
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('nav')
        @yield('nav')
            <a href="{{ URL::to('user/create') }}">blah</a>
            <a href="{{ URL::to('/')}}">bleh</a>
            <a href="{{ URL::to('/greeting') }}">boop</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>