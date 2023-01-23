<?php


use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_movies = config('movie');

        foreach($array_movies as $elem){
            $new_movie = new Movie();
            $new_movie->title = $elem['title'];
            $new_movie->director = $elem['director'];
            $new_movie->year = $elem['year'];
            $new_movie->rating = $elem['rating'];
            $new_movie->save();
        }
    }
}
