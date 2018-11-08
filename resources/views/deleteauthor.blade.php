@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Delete author</h1>
<form action="/deleteauthor" method="post">
  @csrf
<select class="" name="author">
          @foreach ( $authors as $author)
            <option value="{{ $author->id }}">
            {{ $author->completeName() }}
            </option>
          @endforeach 
          <input type="submit" name="" value="Insert">    
</select>

</form>

@endsection

