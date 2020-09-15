<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services</title>
	<meta name="author" content="David Grzyb">
	<meta name="description" content="">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	{{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>
<body class="bg-gray-100 flex">
	
		<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
			<div class="p-6">
				<a href="/" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Services</a>
			</div>
			@include('layouts.theme.nav')
		</aside>
		
		<div class="w-full flex flex-col h-screen overflow-y-hidden">
			<!-- Desktop Header -->
			@include('layouts.theme.desktop_header')
			
			<!-- Mobile Header & Nav -->
			@include('layouts.theme.mobile_header')
			
			<div class="w-full overflow-x-hidden border-t flex flex-col bg-gray-100">
				<main class="w-full flex-grow p-6">
					
					@yield('content')
					
				</main>
				
				@include('layouts.theme.footer')
			</div>
			
		</div>
	
	<!-- ChartJS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	@stack('scripts')
	
</body> 
</html>