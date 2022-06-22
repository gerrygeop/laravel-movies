<div class="mt-8">

	<a href="{{ route('movie.show', $movies['id']) }}">
		<img
			src="{{ $movies['poster_path'] }}" 
			alt="movie" 
			class="rounded-md hover:opacity-75 duration-150"
		/>
	</a>

	<div class="mt-2">
		<a href="{{ route('movie.show', $movies['id']) }}" class="text-lg hove:text-teal-300">{{ $movies['title'] }}</a>
		<div class="flex items-center text-gray-400 text-sm mt-1">
			<span style="color: orange;">
				<i class="fas fa-star"></i>
			</span>
			<span class="ml-1">
				{{ $movies['vote_average'] }}
			</span>
			<span class="mx-2">|</span>
			<span>
				{{ $movies['release_date'] }}
			</span>
		</div>

		<div class="text-gray-400 text-sm">
			{{ $movies['genres'] }}
		</div>
	</div>

</div>