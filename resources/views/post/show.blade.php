@extends('layouts.master')

@section('content')

  @if( $post->user_id === Auth::user()->id)
    <a href="{{$post->id}}/edit">edit</a>
    {!! Form::open(['route' => ['post.destroy', $post->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
  @endif
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->content}}</p>


@endsection