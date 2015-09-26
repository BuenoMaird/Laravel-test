@extends('layouts.master')

@section('title', 'create')

@section('content')

{!! Html::ul($errors->all()) !!}

  {!! Form::open(array('url' => 'post')) !!}

    <div class="form-block">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', Input::old('text')) !!}

      {!! Form::label('title', 'title') !!}
      {!! Form::text('title', Input::old('text')) !!}

      {!! Form::label('content', 'content') !!}
      {!! Form::text('content', Input::old('text')) !!}
    </div>

    {!! Form::submit('Create Post') !!}
    {!!Form::close()!!}
@endsection