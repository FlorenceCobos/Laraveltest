@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1>Update one serie</h1>
  <form class="" action="/updateserieaction" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <input required type="text" name="title" value="{{ $serie->title }}">
    <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
    <select multiple class="" name="authors[]">
        @foreach ($authors as $author)
          <option value="{{ $author->id }}"
            @foreach ($serie->authors as $serieauthor)
              @if ($serieauthor->id == $author->id)
                selected
              @endif
            @endforeach
            >{{ $author->completeName() }}</option>
        @endforeach

    </select>
    <select multiple class="" name="genres[]">

        @foreach ($genres as $genre)
        <option value="{{ $genre->id }}"
          @foreach ($serie->genres as $serieGenre)
            @if ($serieGenre->id == $genre->id)
              selected
            @endif
          @endforeach
          >{{ $genre->name }}</option>
      @endforeach

    </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection









<!-- @ if ($author->id == $serie->authors[0]->id)
  <option selected value="{ { $author->id }}">{ { $author->completeName() }}</option> //sert a préséléctionner l'acteur
@ else
  <option value="{ { $author->id }}">{ { $author->completeName() }}</option>
@ endif-->
