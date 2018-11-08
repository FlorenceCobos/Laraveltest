<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function completeName()
  {
    return $this->first_name . " " . $this->last_name;
  }
}
