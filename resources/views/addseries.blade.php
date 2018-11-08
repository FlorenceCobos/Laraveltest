@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Add one serie</h1>
    <form class="" action="/insertserie" method="post">
      @csrf
      <input required type="text" name="title" placeholder="Title">
      <input required type="number" name="publication_year" value="Year Movie" placeholder="0000">
      <select multiple class="" name="authors[]">
          @foreach ($authors as $author)
            <option value="{{ $author->id }}">
            {{ $author->completeName() }}
            </option>
          @endforeach
      </select>
      <select multiple class="" name="genres[]">
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}">
          {{ $genre->name }}
          </option>
        @endforeach
      </select>
      <input type="submit" name="" value="Insert">
    </form>
@endsection
