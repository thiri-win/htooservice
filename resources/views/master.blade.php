<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-aside--enabled kt-aside--fixed kt-page--loading">

		<div id=app>
					<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		@include('layouts.theme.header-mobile')
		<!-- end:: Header Mobile -->

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					@include('layouts.theme.header')
					<!-- end:: Header -->

					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

							<!-- begin:: Aside -->
							@include('layouts.theme.aside')
							<!-- end:: Aside -->

							<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

								<!-- begin:: Content -->
								@yield('content')
								<!-- end:: Content -->
							</div>
						</div>
					</div>

					<!-- begin:: Footer -->
					@include('layouts.theme.footer')
					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		@include('layouts.theme.quick-panel')
		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		@include('layouts.theme.scrolltop')
		<!-- end::Scrolltop -->

	</div>
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"light": "#ffffff",
					"dark": "#282a3c",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
					"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
				}
			}
		};
	</script>
	<script src="{{ asset('js/app.js') }}"></script>
	@stack('scripts')

		<!--ENd:: Chat-->
	</body>

	<!-- end::Body -->
</html>