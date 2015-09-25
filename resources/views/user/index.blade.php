@extends('layouts.master')

  @section('content')
  <h1>boogers</h1>
    @foreach($users as $key => $value)
      <h1> {{ $value->id }} </h1>
    @endforeach
  @endsection
  
</body>
</html>