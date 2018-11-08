<?php

namespace App\Http\Controllers;

use App\Serie as Serie;
use Illuminate\Http\Request;


class View extends Controller
{
    //Une methode
    public function home()
    {
      return view('welcome');
    }
    public function series()
    {
      // je retourne toutes mes series de ma table series via le model serie
      $series = Serie::all();
      return view('series', ['series' => $series]);
    }
    public function addSeries()
    {
      $authors = \App\Author::all(); //Récupère tout ce qu'il y a dans ma table author qui est le modele qui récupère tout (app author) //donnée de la db stocké dans la variable
      $genres = \App\Genre::all();
      return view ('addseries', [ // on renvoie le fichier addserie.blade.php
        "authors" => $authors, // les données de la variable sont transférés dans un tableau sous le nom authors
        "genres" => $genres,
      ]);
    }
    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $authors = \App\Author::all();
      $genres = \App\Genre::all();
      return view('update', [
        'serie' => $serie,
        'authors' => $authors,
        'genres' => $genres,
      ]);
    }
    public function addAuthor(Request $request)
    {
      return view ('addauthor');
    }
    public function addGenre(Request $request)
    {
      return view ('addgenre');
    }
    public function deleteAuthor(Request $request)
    {
      $authors = \App\Author::all();
      
      return view ('deleteauthor', [
        'authors' => $authors,
      ]);
    }

    public function deleteGenre(Request $request)
    { 
      
      $genres = \App\Genre::all();
      
      return view ('deletegenre', [
        'genres' => $genres,
      ]);
    }
}
