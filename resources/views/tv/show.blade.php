@extends('layouts.main')

@section('title', 'Tv Show Detail')

@section('content')
	
	<div class="tv-info border-b border-gray-800">

		<div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">

			<div class="flex-none">
				<img src="{{ $tvshow['poster_path'] }}" alt="tv-poster" class="w-64 lg:w-128">
			</div>

			<div class="md:ml-24">

				@include('layouts-tv._info-tv')
				
				<!-- play trailer area -->
				@include('layouts-tv._play-trailer-tv')

			</div>
		</div>
		
	</div>
	<!-- end tv-info -->

	<!-- tv cast -->
	@include('layouts-tv._cast-tv')

	<!-- tv image -->
	@include('layouts-tv._images-tv')

@endsection