<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
		<ul class="kt-menu__nav ">

			<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true">
				<a href="{{ route('employers.index') }}" class="kt-menu__link ">
					<i class="kt-menu__link-icon flaticon2-architecture-and-city"></i>
					<span class="kt-menu__link-text">Dashboard</span>
				</a>
			</li>

			<li class="kt-menu__section ">
				<h4 class="kt-menu__section-text">Custom</h4>
				<i class="kt-menu__section-icon flaticon-more-v2"></i>
			</li>

			<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="{{ route('employers.index') }}" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-icon flaticon-users"></i>
					<span class="kt-menu__link-text">Employers</span>
				</a>
			</li>

			<li class="kt-menu__section ">
				<h4 class="kt-menu__section-text">Setting</h4>
				<i class="kt-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-icon flaticon-user-settings"></i>
					<span class="kt-menu__link-text">Setting</span>
					<i class="kt-menu__ver-arrow la la-angle-right"></i>
				</a>

				<div class="kt-menu__submenu ">
					<span class="kt-menu__arrow"></span>
					<ul class="kt-menu__subnav">				
						<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
							<a href="{{ route('positions.index') }}" class="kt-menu__link kt-menu__toggle">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
								<span class="kt-menu__link-text">Position</span>
							</a>						
						</li>						
					</ul>
				</div>

				<div class="kt-menu__submenu ">
					<span class="kt-menu__arrow"></span>
					<ul class="kt-menu__subnav">				
						<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
							<a href="{{ route('experiences.index') }}" class="kt-menu__link kt-menu__toggle">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
								<span class="kt-menu__link-text">Experience</span>
							</a>						
						</li>						
					</ul>
				</div>

			</li>
		</ul>
	</div>
</div>