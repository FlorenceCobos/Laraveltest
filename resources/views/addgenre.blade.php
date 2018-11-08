@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Add one genre</h1>
    <form class="" action="/insertgenre" method="post">
      @csrf
      <label for="genre">Genre: </label>
      <input required type="text" name="name" placeholder="Genre">
      <input type="submit" name="" value="Insert">
    </form>
@endsection
