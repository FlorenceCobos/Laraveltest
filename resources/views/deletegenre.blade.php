@extends('layouts.master')

@section('title', 'Home')
@section('content')
    <h1>Supprimer un genre</h1>
    <form class="" action="/deletegenre" method="post">
      @csrf
      <select name="genre" >
          @foreach ($genres as $genres)
            <option value="{{ $genres->id }}">{{ $genres->name }}</option>
          @endforeach
          <input type="submit" value="supprimer">
      </select>
    </form>
@endsection