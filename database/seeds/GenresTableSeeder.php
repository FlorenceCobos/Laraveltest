<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          "name" => "Fantasy",
        ],
        [
          "name" => "Horror",
        ],
        [
          "name" => "Drama",
        ],
        [
          "name" => "Thriller",
        ],
        [
          "name" => "Science-fiction",
        ],
        [
          "name" => "Adventure",
        ],
      ]);
    }
}
