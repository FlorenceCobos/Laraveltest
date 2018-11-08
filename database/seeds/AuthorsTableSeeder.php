<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('authors')->insert([
        [
          "first_name" => "Henry",
          "last_name" => "Cavill",
        ],
        [
          "first_name" => "Bryan",
          "last_name" => "Cranston",
        ],
        [
          "first_name" => "Aaron",
          "last_name" => "Paul",
        ],
        [
          "first_name" => "Kit",
          "last_name" => "Harington",
        ],
        [
          "first_name" => "Peter",
          "last_name" => "Dinklage",
        ],
        [
          "first_name" => "Andrew",
          "last_name" => "Lincoln",
        ],
        [
          "first_name" => "Pedro",
          "last_name" => "Pascal",
        ],
        [
          "first_name" => "Wagner",
          "last_name" => "Moura",
        ],
      ]);
    }
}
