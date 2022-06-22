<h2 class="text-4xl mt-4 md:mt-0 font-semibold">
	{{ $tvshow['name'] }}
</h2>

<!-- info tvshow -->
<div class="flex flex-wrap items-center text-gray-400 text-sm">
	<span style="color: orange;">
		<i class="fas fa-star"></i>
	</span>

	<span class="ml-1">
		{{ $tvshow['vote_average'] }}
	</span>

	<span class="mx-2">|</span>
	
	<span>
		{{ $tvshow['first_air_date'] }}
	</span>

	<span class="mx-2">|</span>

	<span>
		{{ $tvshow['genres'] }}
	</span>
</div>


<!-- overview -->
<div class="mt-12">
	<h3 class="font-semibold text-lg text-teal-400">
		Overview
	</h3>
	<p class="text-gray-300 mt-2">
		{{ $tvshow['overview'] }}
	</p>
</div>


<!-- crew -->
<div class="mt-12">
	<div class="mt-2 flex">
		@foreach($tvshow['created_by'] as $crew)
			<div class="mr-8">
				<div>{{ $crew['name'] }}</div>
				<div class="text-sm text-gray-400">
					Creator
				</div>
			</div>
		@endforeach
	</div>
</div>