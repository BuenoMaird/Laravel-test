@extends('layouts.master')

@section('content')

  @if(count($posts) > 0)
      @foreach($posts as $key => $post)
        <div class="post">
         <a href="post/{{$post->id}}"><h1 class="post-title">Title: {{ $post->title }} </h1> </a>
          <p> Content: {{ $post->content }}</p>
        </div>
      @endforeach
  @else
   <h1>There is no posts</h1>
  @endif

@endsection