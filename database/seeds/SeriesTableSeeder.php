<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('series')->insert([
          'title' => "Breaking Bad",
          'publication_year' => 2008,
      ]);
    }
}
