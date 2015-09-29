@extends('layouts.master')

@section('title', 'create')

@section('content')
      {!! csrf_field() !!}

{!! Html::ul($errors->all()) !!}

  {!! Form::open(array('url' => 'post')) !!}

    <div class="form-block">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', Input::old('text')) !!}

      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', Input::old('text')) !!}

      {!! Form::label('content', 'Content') !!}
      {!! Form::text('content', Input::old('textarea')) !!}
    </div>

    {!! Form::submit('Create Post') !!}
    {!!Form::close()!!}
@endsection