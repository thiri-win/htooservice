<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Metronic | Dashboard</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="{{ asset('public/assets/media/logos/htoo-logo-1.jpg') }}" />

	<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	@include('layouts.theme.header-mobile')
	<!-- end:: Header Mobile -->


	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
					<div class="kt-container  kt-container--fluid ">

						<!-- begin:: Brand -->
						@include('layouts.theme.brand')
						<!-- end:: Brand -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<!--begin: Search -->
							{{-- @include('layouts.theme.search') --}}
							<!--end: Search -->

							<!--begin: Notifications -->
							@include('layouts.theme.notifications')
							<!--end: Notifications -->

							<!--begin: Quick actions -->
							{{-- @include('layouts.theme.quick-action') --}}
							<!--end: Quick actions -->

							<!--begin: Cart -->
							{{-- @include('layouts.theme.cart') --}}
							<!--end: Cart-->

							<!--begin: Quick panel toggler -->
							@include('layouts.theme.quick-pannel-toggler')
							<!--end: Quick panel toggler -->

							<!--begin: Language bar -->
							{{-- @include('layouts.theme.language') --}}
							<!--end: Language bar -->

							<!--begin: User bar -->
							@include('layouts.theme.user-bar')
							<!--end: User bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>
				</div>

				<!-- end:: Header -->
				<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
					<div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

						<!-- begin:: Aside -->
						<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
						<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

							<!-- begin:: Aside Menu -->
							@include('layouts.theme.aside-menu')
							<!-- end:: Aside Menu -->
						</div>

						<!-- end:: Aside -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							<!-- begin:: Subheader -->
							@include('layouts.theme.subheader')
							<!-- end:: Subheader -->

							<!-- begin:: Content -->
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
								@yield('content')
							</div>
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

	<!-- begin::Sticky Toolbar -->
	{{-- @include('layouts.theme.sticky-toolbar') --}}
	<!-- end::Sticky Toolbar -->

	<!--Begin:: Chat-->
	@include('layouts.theme.chat')
	<!--ENd:: Chat-->

	<!--begin::Page Vendors(used by this page) -->
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<!--end::Page Vendors -->

	<script src="{{ asset('js/app.js') }}"></script>

</body>
<!-- end::Body -->

@stack('scripts')

</html>