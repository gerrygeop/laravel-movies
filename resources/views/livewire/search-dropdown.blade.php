<div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false">

	<input 
		wire:model.debounce.500ms="search" 
		type="text" 
		class="bg-gray-800 rounded-full text-sm w-64 mt-2 md:mt-0 pr-4 pl-8 py-1 focus:outline-none focus:shadow-outline" 
		placeholder="Search (Press '/' to focus)"
		x-ref="search"
		@keydown.window="
			if(event.keyCode == 191){
				event.preventDefault();
				$refs.search.focus();
			}
		"
		@focus="isOpen = true"
		@keydown="isOpen = true"
		@keydown.escape.window="isOpen = false"
		@keydown.shift.tab="isOpen = false">

	<div class="absolute top-0">
		<svg class="w-4 mt-4 md:mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 427.701 427.701"><path d="M419.168 381.2c10.532 9.86 11.076 26.391 1.216 36.923-.392.419-.797.824-1.216 1.216a25.078 25.078 0 01-18.808 8.359 25.603 25.603 0 01-19.331-8.359L289.6 328.433a221.119 221.119 0 0020.898-17.763 161.428 161.428 0 0017.241-20.376l2.09 1.567 89.339 89.339z" fill="#fff"/><path d="M310.498 53.102c64.047 63.722 71.4 164.877 17.241 237.192a161.486 161.486 0 01-17.241 20.376 220.845 220.845 0 01-20.898 17.763c-80.975 59.377-194.753 41.868-254.13-39.107S-6.397 94.572 74.578 35.196c72.299-53.015 172.451-45.413 235.92 17.906zm-28.212 229.355c55.448-55.544 55.37-145.521-.175-200.968s-145.52-55.369-200.968.175c-55.38 55.476-55.38 145.318 0 200.794 55.635 55.324 145.508 55.324 201.143-.001z" fill="#fff"/></svg>
	</div>

	<div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

	@if(strlen($search) > 2)
		<div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-2" x-show="isOpen">

			@if($searchResults->count() > 0)
				<ul>
					@foreach($searchResults as $searches)
						<li class="border-b border-gray-700">
							<a 	
								href="{{ route('movie.show', $searches['id']) }}" 
								class="block hover:bg-teal-700 px-3 py-3 flex items-center  duration-150"
								@if($loop->last) @keydown.tab="isOpen = false" @endif
							>

								@if($searches['poster_path'])
									<img src="{{ 'https://image.tmdb.org/t/p/w92/' . $searches['poster_path'] }}" alt="poster" class="w-8">
								@else
									<img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
								@endif

								<span class="ml-4">{{ $searches['title'] }}</span>
							</a>
						</li>
					@endforeach
				</ul>

			@else
				<div class="px-3 py-3">No result for "{{ $search }}"</div>

			@endif

		</div>
	@endif

</div>
