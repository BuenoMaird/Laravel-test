@extends('layouts.master')
    @section('content')
    
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div>
            <label for="name" id="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" id="name">
            </div>

            <div>
            <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email">
            </div>

            <div>
            <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
            <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    @endsection