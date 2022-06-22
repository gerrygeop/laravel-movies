<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">

	<title>GeopMovie - @yield('title')</title>

	<script src="https://kit.fontawesome.com/65de9e2828.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<link rel="stylesheet" href="/css/main.css">

	@livewireStyles

	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body class="bg-gray-900 text-white">

	<nav class="border-b border-gray-700" style="font-family: Roboto;">
		<div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-4">
			<ul class="flex flex-col md:flex-row items-center">
				<li>
					<a href="/" class="flex items-center">
						<svg class="w-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M54.21 249.7s20.23 29.72 62.63 54.87c0 0-30.71-259.5 169.35-304.57-51.25 188.12 65.2 241.17 107.65 141.79C464.74 236.44 410.91 319 410.91 319c29.07 4.2 53.49-27.57 53.49-27.57.22 3.92.34 7.86.34 11.82C464.74 418.55 371.28 512 256 512S47.26 418.55 47.26 303.26c0-18.52 2.43-36.47 6.95-53.56z" fill="#ff6536"/><path d="M464.4 291.44s-24.42 31.76-53.49 27.57c0 0 53.83-82.57-17.07-177.22C351.4 241.17 234.95 188.12 286.2 0A224.42 224.42 0 00256 9.02V512c115.28 0 208.74-93.45 208.74-208.74 0-3.96-.12-7.9-.34-11.81z" fill="#ff421d"/><path d="M164.46 420.46a91.54 91.54 0 10152.68-68.14c-35.4 48.08-85.84-24.86-46.53-78.12 0 0-106.15 13.3-106.15 146.26z" fill="#fbbf00"/><path d="M347.54 420.46a91.31 91.31 0 00-30.4-68.14c-35.4 48.08-85.84-24.86-46.53-78.12 0 0-5.77.72-14.61 3.51V512a91.54 91.54 0 0091.54-91.54z" fill="#ffa900"/></svg>
						<h4 class="font-semibold">GeopMovie</h4>
					</a>
				</li>
				<li class="md:ml-6 lg:ml-16">
					<a href="{{ route('movie.index') }}" class="text-gray-400 hover:text-teal-300">
						Movies
					</a>
				</li>
				<li class="md:ml-6">
					<a href="{{ route('tv.index') }}" class="text-gray-400 hover:text-teal-300">
						TV Shows
					</a>
				</li>
				<li class="md:ml-6">
					<a href="{{ route('actors.index') }}" class="text-gray-400 hover:text-teal-300">
						Actors
					</a>
				</li>
			</ul>
			<div class="flex flex-col md:flex-row items-center">
				
				<!-- search dropdown menggunakan livewire -->
				@livewire('search-dropdown')

				<div class="md:ml-4 mt-3 md:mt-0">
					<a href="#">
						<img src="https://i.pravatar.cc/" alt="avatar" class="rounded-full w-8">
					</a>
				</div>

			</div>
		</div>
	</nav>
	<!-- End of Navbar -->

	@yield('content')

	@livewireScripts

	@yield('script')

</body>
</html>