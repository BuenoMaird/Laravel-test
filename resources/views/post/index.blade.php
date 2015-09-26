@extends('layouts.master')

@section('content')

  @if(count($posts) > 0)
      @foreach($posts as $key => $post)
      <h1> {{ $post->id }} </h1>
      <a href="post/{{$post->id}}"> {{ $post->title }} </a>
    @endforeach

  @else
   <h1>There is no posts</h1>
  @endif

@endsection