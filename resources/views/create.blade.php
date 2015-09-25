@extends('layouts.master')

@section('title', 'create')

@section('sidebar')
  @parent
  <form action="post">
    <input type="text" name="name" id="name">
    <label for="name" id="name">Name</label>
    <button>Submit</button>
  </form>
@endsection

@section('content')
@endsection