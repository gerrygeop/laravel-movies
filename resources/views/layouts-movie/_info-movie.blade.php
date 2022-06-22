<h2 class="text-4xl mt-4 md:mt-0 font-semibold">
	{{ $movie['title'] }}
</h2>

<!-- info movie -->
<div class="flex flex-wrap items-center text-gray-400 text-sm">
	<span style="color: orange;">
		<i class="fas fa-star"></i>
	</span>

	<span class="ml-1">
		{{ $movie['vote_average'] }}
	</span>

	<span class="mx-2">|</span>
	
	<span>
		{{ $movie['release_date'] }}
	</span>

	<span class="mx-2">|</span>

	<span>
		{{ $movie['genres'] }}
	</span>
</div>


<!-- overview -->
<div class="mt-12">
	<h3 class="font-semibold text-lg text-teal-400">
		Overview
	</h3>
	<p class="text-gray-300 mt-2">
		{{ $movie['overview'] }}
	</p>
</div>


<!-- crew -->
<div class="mt-12">
	<h3 class="font-semibold text-lg text-teal-400">
		Featured Crew
	</h3>

	<div class="mt-2 flex">
		@foreach($movie['crew'] as $crew)
			<div class="mr-8">
				<div>{{ $crew['name'] }}</div>
				<div class="text-sm text-gray-400">
					{{ $crew['job'] }}
				</div>
			</div>
		@endforeach
	</div>
</div>