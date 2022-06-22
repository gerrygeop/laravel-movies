@extends('layouts.main')

@section('title', 'Movies')

@section('content')

	<div class="container mx-auto px-16 pt-16">

		<div class="popular-movie border-b border-gray-800 pb-16">
			<h2 class="uppercase tracking-wider font-semibold text-teal-400 text-lg">Popular Movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

				@foreach($popularMovies as $movies)
					<x-movie-card :movies="$movies" :genres="$genres"/>
				@endforeach

			</div>
		</div>

		<div class="now-playing-movies py-24">
			<h2 class="uppercase tracking-wider font-semibold text-teal-400 text-lg">Now Playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

				@foreach($nowPlayingMovies as $movies)
					<x-movie-card :movies="$movies"/>
				@endforeach
				
			</div>
		</div>

	</div>

@endsection