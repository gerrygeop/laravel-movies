@extends('layouts.main')

@section('title', 'Actor Detail')

@section('content')
	
	<div class="actor-info border-b border-gray-800">

		<div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">

			<div class="flex-none">
				<img src="{{ $actor['profile_path'] }}" alt="actor-poster" class="w-64 lg:w-128">
				
				<!-- Sosmed -->
				<ul class="flex items-center mt-2">
					@if ($social['facebook'])
						<li class="mr-4">
							<a href="{{ $social['facebook'] }}" title="Facebook">
								<i class="fab fa-facebook-square"></i>
							</a>
						</li>
					@endif

					@if ($social['instagram'])
						<li class="mr-4">
							<a href="{{ $social['instagram'] }}" title="Instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					@endif

					@if ($social['twitter'])
						<li class="mr-4">
							<a href="{{ $social['twitter'] }}" title="Twitter">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
					@endif

					@if ($actor['homepage'])
						<li>
							<a href="{{ $actor['homepage'] }}" title="Website">
								<i class="fas fa-globe-americas"></i>
							</a>
						</li>
					@endif
				</ul>
				<!-- End sosmed -->

			</div>

			<div class="md:ml-24">

				<h2 class="text-4xl mt-4 md:mt-0 font-semibold">
					{{ $actor['name'] }}
				</h2>

				<!-- info actor birthday -->
				<div class="flex flex-wrap items-center text-gray-400 text-sm">
					<span>
						<i class="fas fa-birthday-cake"></i>
					</span>

					<span class="ml-1">
						{{ $actor['birthday'] }} ({{ $actor['age'] }} years old) in {{ $actor['place_of_birth'] }}
					</span>
				</div>
				<!-- End info birthday -->


				<!-- overview -->
				<div class="mt-12">
					<h3 class="font-semibold text-lg text-teal-400">
						Biography
					</h3>
					<p class="text-gray-300 mt-2">
						@if ($actor['biography'] == null)
							<small class="text-gray-700"><i>Don't have a biography yet</i></small>
						@else
							{{ $actor['biography'] }}
						@endif
					</p>
				</div>
				<!-- End overview -->

				
				<!-- Known For -->
				<div class="mt-12">
					<h4 class="font-semibold text-teal-400">Known For</h4>
					
					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">

						@foreach ($knownForMovies as $movie)
							<div class="mt-4">
								<a href="{{ $movie['linkToPage'] }}">
									<img src="{{ $movie['poster_path'] }}"
										 class="hover:opacity-75 transition duration-150"
										 alt="poster">
									<p class="text-sm leading-normal block text-gray-400 hover:text-white mt-2">
										{{ $movie['title'] }}
									</p>
								</a>
							</div>
						@endforeach

					</div>

				</div>
				<!-- End Known For-->

			</div>
		</div>
		
	</div>
	<!-- end actor-info -->


	<!-- actor credits -->
	<div class="movie-credits border-b border-gray-800">
		<div class="container mx-auto px-16 py-16">

			<h2 class="text-4xl font-semibold text-teal-400">
				Credits
			</h2>

			<ul class="list-disc leading-loose pl-5 mt-8">

				@foreach ($credits as $credit)
					<li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] ? $credit['character'] : 'Anonymous' }}</li>
				@endforeach

			</ul>

		</div>
	</div>
	<!-- end actor credits -->

@endsection