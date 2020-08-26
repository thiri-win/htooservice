<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services</title>
	<meta name="author" content="David Grzyb">
	<meta name="description" content="">
	
	<!-- Tailwind -->
	<link href="/public/css/app.css" rel="stylesheet">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
		.font-family-karla { font-family: karla; }
		.bg-sidebar { background: #3d68ff; }
		.cta-btn { color: #3d68ff; }
		.upgrade-btn { background: #1947ee; }
		.upgrade-btn:hover { background: #0038fd; }
		.active-nav-link { background: #1947ee; }
		.nav-item:hover { background: #1947ee; }
		.account-link:hover { background: #3d68ff; }
	</style>
</head>
<body class="bg-gray-100 font-family-karla flex">
	
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
					
					{{-- <div class="flex flex-wrap mt-6">
						<div class="w-full lg:w-1/2 pr-0 lg:pr-2">
							<p class="text-xl pb-3 flex items-center">
								<i class="fas fa-plus mr-3"></i> Monthly Reports
							</p>
							<div class="p-6 bg-white">
								<canvas id="chartOne" width="400" height="200"></canvas>
							</div>
						</div>
						<div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
							<p class="text-xl pb-3 flex items-center">
								<i class="fas fa-check mr-3"></i> Resolved Reports
							</p>
							<div class="p-6 bg-white">
								<canvas id="chartTwo" width="400" height="200"></canvas>
							</div>
						</div>
					</div> --}}
					
				</main>
				
				@include('layouts.theme.footer')
			</div>
			
		</div>
	
	<!-- ChartJS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
	
	<script>
		var chartOne = document.getElementById('chartOne');
		var myChart = new Chart(chartOne, {
			type: 'bar',
			data: {
				labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
		
		var chartTwo = document.getElementById('chartTwo');
		var myLineChart = new Chart(chartTwo, {
			type: 'line',
			data: {
				labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	<script src="/public/js/app.js"></script>
	@stack('scripts')
	
</body>
</html>