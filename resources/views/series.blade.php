@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>List all series</h1>
    <table>
      <tr>
        <td><h3>TITLE</h3></td>
        <td><h3>YEAR</h3></td>
        <td><h3>AUTHORS</h3></td>
        <td><h3>GENRES</h3></td>
        <td><h3>DELETE</h3></td>
        <td><h3>UPDATE</h3></td>
      </tr>
        @foreach($series as $serie)
          <tr>
            <td>{{ $serie->title }}</td>
            <td>{{ $serie->publication_year }}</td>
            <td>
                @foreach ($serie->authors as $author)
                  {{ $author->completeName() }}
                @endforeach
              </td>
              <td>
                @foreach ($serie->genres as $genre)
                  {{ $genre->name }}
                @endforeach
              </td>
            <td><form class="" action="/deleteserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="X">
            </form></td>
            <td><form class="" action="/updateserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="U">
            </form></td>
          </tr>
        @endforeach
    </table>
@endsection
