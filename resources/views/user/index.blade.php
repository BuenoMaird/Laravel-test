@extends('layouts.master')

  @section('content')
  <h1>boogers</h1>
    @foreach($users as $key => $user)
      <h1> {{ $user->id }} </h1>
      <h1> {{ $user->name }} </h1>
    @endforeach
  @endsection
  
</body>
</html>