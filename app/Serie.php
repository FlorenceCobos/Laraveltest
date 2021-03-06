<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
  public function genres()
  {
    return $this->belongsToMany('App\Genre'); //clé étrangère // faire le lien entre les tables
  }
  public function authors()
  {
    return $this->belongsToMany('App\Author'); //La méthode authors appartient à la table Author
    // Le modèle permet de rendre accessible l'intérieur de la table en question
  }
}
