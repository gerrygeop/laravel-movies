@extends('layouts.main')

@section('title', 'Home')

@section('content')

	<div class="container mx-auto px-16 py-16">

		<div class="popular-actors border-b border-teal-500 pb-16">
			<h2 class="uppercase tracking-wider font-semibold text-teal-400 text-lg">Popular Actors</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
				
				@foreach($popularActors as $actor)
					<div class="actor mt-8 bg-teal-800 rounded-lg">

						<a href="{{ route('actors.show', $actor['id']) }}">
							<img src="{{ $actor['profile_path'] }}"
								 alt="profile"
								 class="hover:opacity-75 transition duration-150 rounded-t">
						</a>

						<div class="my-2 pl-2">
							<a href="{{ route('actors.show', $actor['id']) }}" class="text-lg font-semibold hover:text-gray-400">
								{{ $actor['name'] }}
							</a>
							<div class="text-sm truncate text-gray-300">
								{{ $actor['known_for'] }}
							</div>
						</div>

					</div>
				@endforeach

			</div>
		</div>

		<div class="page-load-status my-8">
			<div class="flex justify-center">
			  	<p class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</p>
			</div>
		</div>

		
		<!-- pagination using link (optional) -->
		{{-- <div class="flex justify-between mt-16">
			@if($previous)
				<a href="/actors/page/{{ $previous }}">Previous</a>
			@else
				<div></div>

			@endif

			@if($next)
				<a href="/actors/page/{{ $next }}">Next</a>
			@else
				<div></div>

			@endif
		</div> --}}

	</div>

@endsection

@section('script')

<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>

	var elem = document.querySelector('.grid');
	var infScroll = new InfiniteScroll( elem, {
	  // options
	  path: '/actors/page/@{{#}}',
	  append: '.actor',
	  status: 'page-load-status',
	  history: false,
	});

	
</script>
@endsection