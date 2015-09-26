@extends('layouts.master')

@section('content')

  @foreach($posts as $key => $post)
      <h1> {{ $post->id }} </h1>
      <a href="post/{{$post->id}}"> {{ $post->title }} </a>
  @endforeach

@endsection