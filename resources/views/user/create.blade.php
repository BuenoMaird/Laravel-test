@extends('layouts.master')

@section('title', 'create')

@section('content')

{!! Html::ul($errors->all()) !!}

  {!! Form::open(array('url' => 'user')) !!}

    <div class="form-block">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', Input::old('text')) !!}

      {!! Form::label('email', 'Email') !!}
      {!! Form::text('email', Input::old('email')) !!}

      {!! Form::label('password', 'Password') !!}
      {!! Form::text('password', Input::old('password')) !!}
    </div>

    {!! Form::submit('Create User') !!}
    {!!Form::close()!!}
@endsection