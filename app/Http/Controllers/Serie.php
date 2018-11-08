<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    // Je crée une fonction que je nomme insertone qui me permettra d'ajouter une serie
    public function insertOne(Request $request)
    {
        //dd($request->input('authors'));
        $serie = new \App\Serie;
        $serie->title = $request->input('title');
        $serie->publication_year = $request->input('publication_year');
        $serie->save();
        // Je lie mes acteurs à ma serie
        $serie->authors()->attach($request->input('authors'));
        // Je lie mes genres à ma serie
        $serie->genres()->attach($request->input('genres'));
        return redirect('/series');
    }
    // Je crée une fonction que je nomme deleteOne qui me permettra de supprimer une serie
    public function deleteOne(Request $request)
    {
        $id = $request->id;
        $serie = \App\Serie::find($id);
        $serie->delete();
        return redirect('/series');
    }
    // Je crée une fonction que je nomme updateOne qui me permettra d'update une serie
    public function updateOne(Request $request)
    {
      $id = $request->id;
      $serie = \App\Serie::find($id);
      $serie->title = $request->input('title');
      $serie->publication_year = $request->input('publication_year');

      $serie->save(); //on save avant car la table principale doit etre créer avant de pouvoir lui ratacher des données de genre et d'acteurs
      $serie->authors()->detach(); //pour pas cumuler les authors
      $serie->genres()->detach();
      $serie->authors()->attach($request->input('authors'));
      $serie->genres()->attach($request->input('genres'));
      return redirect('/series');
    }
    public function insertAuthor(Request $request)
    {
        $author = new \App\Author;
        $author->first_name= $request->input('first_name');
       
        $author->last_name = $request->input('last_name');
        $author->save();
        return redirect('/series');

    }
    public function insertGenre(Request $request)
    {
        $genre = new \App\Genre;
        $genre->name= $request->input('name');

        $genre->save();
        return redirect('/series');

    }

    public function deleteAuthor(Request $request)
    {
        $id = $request->input('author');
        $author = \App\Author::find($id);
        $author->delete($id);
        return redirect('/series');
    }
   
    public function deleteGenre(Request $request)
    {

        $id = $request->input('genre');
        $genre = \App\Genre::find($id);
        $genre->delete($id);
        return redirect('/series');
    }
}
