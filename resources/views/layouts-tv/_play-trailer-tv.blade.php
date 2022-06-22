<div x-data="{ isOpen: false }">
	@if(count($tvshow['videos']['results']) > 0)
		<div class="mt-12">
			<button 
				@click="isOpen = true"
				class="bg-teal-400 hover:bg-teal-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded duration-150">

				<span>
					<i class="far fa-play-circle"></i>
				</span>

				Play Trailer

			</button>
		</div>

		<!-- modal play trailer -->
		<div 
			style="background-color: rgba(0, 0, 0, .5);"
			class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
			x-show.transition.opacity="isOpen">

			<div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
				<div class="bg-gray-900 rounded">
					<div class="flex justify-end pr-4 pt-2">
						<button 
							@click="isOpen = false" 
							class="text-3xl leading-none hover:text-gray-300">
							&times;
						</button>
					</div>
					<div class="modal-body p-8">
						<div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
							<iframe
								width="560" 
								height="315" 
								class="responsive-iframe absolute top-0 left-0 w-full h-full" 
								src="https://www.youtube.com/embed/{{ $tvshow['videos']['results'][0]['key'] }}"
								style="border:0;" 
								allow="autoplay; encrypted-media" 
								allowfullscreen>		
							</iframe>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- end modal play trailer -->
		
	@endif
</div>