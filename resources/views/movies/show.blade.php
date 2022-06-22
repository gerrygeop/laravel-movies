@extends('layouts.main')

@section('title', 'Movie Detail')

@section('content')
	
	<div class="movie-info border-b border-gray-800">

		<div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">

			<div class="flex-none">
				<img src="{{ $movie['poster_path'] }}" alt="movie-poster" class="w-64 lg:w-128">
			</div>

			<div class="md:ml-24">

				@include('layouts-movie._info-movie')
				
				<!-- play trailer area -->
				@include('layouts-movie._play-trailer-movie')

			</div>
		</div>
		
	</div>
	<!-- end movie-info -->

	<!-- movie cast -->
	@include('layouts-movie._cast-movie')

	<!-- movie image -->
	@include('layouts-movie._images-movie')

@endsection