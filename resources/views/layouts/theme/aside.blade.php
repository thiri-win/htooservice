
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
			<ul class="kt-menu__nav ">

				<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="/dashboard" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span class="kt-menu__link-text">Dashboard</span></a></li>

				<li class="kt-menu__section ">
					<h4 class="kt-menu__section-text">Category</h4>
					<i class="kt-menu__section-icon flaticon-more-v2"></i>
				</li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('employers.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Employers</span></a></li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('invoices.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Invoices</span></a></li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('expenses.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-telegram-logo"></i><span class="kt-menu__link-text">Expenses</span></a></li>

				<li class="kt-menu__section ">
					<h4 class="kt-menu__section-text">Settings</h4>
					<i class="kt-menu__section-icon flaticon-more-v2"></i>
				</li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('experiences.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-contract"></i><span class="kt-menu__link-text">Experiences</span></a></li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('positions.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-contract"></i><span class="kt-menu__link-text">Positions</span></a></li>

				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{ route('categories.index') }}" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-contract"></i><span class="kt-menu__link-text">Category</span></a></li>

			</ul>
		</div>
	</div>

	<!-- end:: Aside Menu -->
</div>
