@extends('layouts.master')

@section('title', 'create')

@section('sidebar')
  @parent
  <form action="post">
    <input type="text">
    <button>button</button>
  </form>
@endsection

@section('content')
@endsection