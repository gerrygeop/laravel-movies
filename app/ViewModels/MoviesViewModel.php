<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Illuminate\Support\Carbon;

class MoviesViewModel extends ViewModel
{
	public $popularMovies;
	public $nowPlayingMovies;
	public $genres;

    public function __construct($popularMovies, $nowPlayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
    	return $this->formatMovies($this->popularMovies);
    }

    public function nowPlayingMovies()
    {
    	return $this->formatMovies($this->nowPlayingMovies);
    }

    public function genres()
    {
    	return collect($this->genres)->mapWithKeys(function($genre) {
            return [$genre['id'] =>$genre['name']];
        });
    }

    private function formatMovies($movies)
    {
    	return collect($movies)->map(function($movies) {

    		$genresFormat = collect($movies['genre_ids'])->mapWithKeys(function($value) {
	    		return [$value => $this->genres()->get($value)];
	    	})->implode(', ');

    		return collect($movies)
    		->merge([
    			'poster_path' 	=> 'https://image.tmdb.org/t/p/w500/' . $movies['poster_path'],
    			'vote_average'	=> $movies['vote_average'] * 10 . '%',
    			'release_date' 	=> Carbon::parse($movies['release_date'])->format('M d, Y'),
    			'genres'		=> $genresFormat,

    		])
    		->only([
    			'poster_path',
    			'id',
    			'genre_ids',
    			'title',
    			'vote_average',
    			'release_date',
    			'genres',
    		]);
    	});
    }

}
