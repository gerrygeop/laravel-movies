<div class="tvshow-images" x-data="{ isOpen: false, image: ''}">
	<div class="container mx-auto px-16 py-16">

		<h2 class="text-4xl font-semibold text-teal-400">
			Backdrops
		</h2>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
			
			@if($tvshow['images'] != null)
				@foreach($tvshow['images'] as $image)
						<div class="mt-8">
							<a @click.prevent="
									isOpen = true
									image = '{{ 'https://image.tmdb.org/t/p/original/' . $image['file_path'] }}'
								"
								href="#">
								<img 
									src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" 
									class="rounded-md hover:opacity-75 duration-150"
									alt="tvshow-image">
							</a>
						</div>
				@endforeach

			@else
				<p class="text-sm text-gray-700">No Image</p>
				
			@endif

		</div>

		<!-- modal images -->
		<div 
			style="background-color: rgba(0, 0, 0, .5);"
			class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
			x-show.transition.opacity="isOpen">

			<div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
				<div class="bg-gray-900 rounded">
					<div class="flex justify-end pr-4 pt-2">
						<button 
							@click="isOpen = false"
							@keydown.escape.window="isOpen = false"
							class="text-3xl leading-none hover:text-gray-300">&times;
						</button>
					</div>
					<div class="modal-body p-6">
						<img :src="image" alt="poster">
					</div>
				</div>
			</div>
		</div>
		<!-- end modal images -->

	</div>
</div>