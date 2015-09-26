@extends('layouts.master')

@section('content')
  <a href="{{$post->id}}/edit">edit</a>
  <h1>{{ $post->id }}</h1>

{!! Form::open(['route' => ['post.destroy', $post->id], 'method' => 'delete']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close() !!}
@endsection