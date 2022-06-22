<div class="movie-cast border-b border-gray-800">
	<div class="container mx-auto px-16 py-16">
		<h2 class="text-4xl font-semibold text-teal-400">
			Top Billed Cast
		</h2>

		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
			
			@if($movie['cast'] != null)
				@foreach($movie['cast'] as $cast)
					<div class="mt-8">
						<a href="{{ route('actors.show', $cast['id']) }}">
							<img 
								src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}" 
								class="rounded-md hover:opacity-75 duration-150"
								alt="movie-cast">
						</a>

						<div class="mt-2">
							<a href="{{ route('actors.show', $cast['id']) }}" class="text-lg hove:text-teal-500">
								{{ $cast['name'] }}
							</a>
							<div class="text-gray-400 text-sm mt-1">
								{{ $cast['character'] }}
							</div>
						</div>
					</div>
				@endforeach

			@else
				<p class="text-sm text-gray-700">No Image Cast</p>

			@endif

		</div>
	</div>
</div>