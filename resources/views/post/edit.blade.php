@extends('layouts.master')

@section('title', 'create')

@section('content')

<h1>{{$post->title}}</h1>

{!! Html::ul($errors->all()) !!}

  {!! Form::model($post, array('route' => array('post.update', $post->id), 'method' => 'PUT')) !!}

    <div class="form-block">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', $post->name) !!}

      {!! Form::label('title', 'title') !!}
      {!! Form::text('title', $post->title) !!}

      {!! Form::label('content', 'content') !!}
      {!! Form::text('content', $post->content) !!}
    </div>

    {!! Form::submit('Update Post') !!}
    {!!Form::close()!!}
@endsection