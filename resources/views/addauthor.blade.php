@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Add one author</h1>
    <form class="" action="/insertauthor" method="post">
      @csrf
      <label for="firstname">Firstname : </label>
      <input required type="text" name="first_name" placeholder="Firstname">
      <label for="lastname">Lastname : </label>
      <input required type="text" name="last_name" placeholder="Lastname">
      <input type="submit" name="" value="Insert">
    </form>
@endsection
