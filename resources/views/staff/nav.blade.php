
<!-- Top Menu Items -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="mobile-only-brand pull-left">
		<div class="nav-header pull-left">
			<div class="logo-wrap">
				<a href="{{route('home.employee') }}">
					<img class="brand-img" src="{{ asset('img/nav/logo-nav.svg')}}"  width="30" height="30" alt="brand"/>	
					<span class="brand-text"> {{ Auth::user()->name }} </span>
				</a>
			</div>
		</div>
		<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);">
			<i class="zmdi zmdi-menu"></i>
		</a>
		<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);">
			<i class="zmdi zmdi-search"></i>
		</a>
		<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);">
			<i class="zmdi zmdi-more"></i>
		</a>
	</div>
	<div id="mobile_only_nav" class="mobile-only-nav pull-right">
		<ul class="nav navbar-right top-nav pull-right">
{{-- 			<li class="dropdown alert-drp">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="zmdi zmdi-notifications top-nav-icon"></i>
					@if($count = Auth::user()->notifications->count())
						<span class="top-nav-icon-badge">{{ $count }}</span>
					@endif
				</a>
				<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
					<li>
						<div class="notification-box-head-wrap">
							<span class="notification-box-head pull-left inline-block">Notificaciones</span>
							<div class="clearfix"></div>
							<hr class="light-grey-hr ma-0"/>
						</div>
					</li>
					<li>
						<div class="streamline message-nicescroll-bar">
							<div class="sl-item">
								<a href="javascript:void(0)">
									<div class="icon bg-green">
										<i class="zmdi zmdi-flag"></i>
									</div>
									<div class="sl-content">
										<span class="inline-block capitalize-font  pull-left truncate head-notifications">
										Tienes tareas pendientes</span>
										<span class="inline-block font-11  pull-right notifications-time">2pm</span>
										<div class="clearfix"></div>
										<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus .</p>
									</div>
								</a>
							</div>
							<hr class="light-grey-hr ma-0"/>
							<div class="sl-item">
								<a href="javascript:void(0)">
									<div class="icon bg-yellow">
										<i class="zmdi zmdi-trending-down"></i>
									</div>
									<div class="sl-content">
										<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Servidor no responde responding</span>
										<span class="inline-block font-11 pull-right notifications-time">1pm</span>
										<div class="clearfix"></div>
										<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus ..</p>
									</div>
								</a>
							</div>
							<hr class="light-grey-hr ma-0"/>
							<div class="sl-item">
								<a href="javascript:void(0)">
									<div class="icon bg-blue">
										<i class="zmdi zmdi-email"></i>
									</div>
									<div class="sl-content">
										<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 nuevos  tickets</span>
										<span class="inline-block font-11  pull-right notifications-time">4pm</span>
										<div class="clearfix"></div>
										<p class="truncate"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus ..</p>
									</div>
								</a>
							</div>
							<hr class="light-grey-hr ma-0"/>
							<div class="sl-item">
								<a href="javascript:void(0)">
									<div class="sl-avatar">
										<img class="img-responsive" src="{{ asset('img/nav/'.Auth::user()->image) }}" alt="avatar"/>
									</div>
									<div class="sl-content">
										<span class="inline-block capitalize-font  pull-left truncate head-notifications">Usuario Demo</span>
										<span class="inline-block font-11  pull-right notifications-time">1pm</span>
										<div class="clearfix"></div>
										<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
									</div>
								</a>
							</div>
							<hr class="light-grey-hr ma-0"/>
							<div class="sl-item">
								<a href="javascript:void(0)">
									<div class="icon bg-red">
										<i class="zmdi zmdi-storage"></i>
									</div>
									<div class="sl-content">
										<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">Tienes bajas en inventario.</span>
										<span class="inline-block font-11  pull-right notifications-time">1pm</span>
										<div class="clearfix"></div>
										<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus .</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li>
						<div class="notification-box-bottom-wrap">
							<hr class="light-grey-hr ma-0"/>
							<a class="block text-center read-all" href="javascript:void(0)"> Leer Todas </a>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
			</li> --}}
			<notification></notification>

			<li class="dropdown auth-drp">
				<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
					<img src="{{ asset('img/nav/'.Auth::user()->image)}}" alt="user_auth" class="user-auth-img img-circle"/>
					<span class="user-online-status"></span>
				</a>
				<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
					<li>
						<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
					</li>
					<li>
						<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
					</li>
					<li>
						<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
					</li>
					<li>
						<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
					</li>
					<li class="divider"></li>
					<li class="sub-menu show-on-hover">
						<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
						<ul class="dropdown-menu open-left-side">
							<li>
								<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
							</li>
						</ul>
					</li>
					<li class="divider"></li>
					<li>
						<a 	href="{{ url('/logout') }}"
							 	onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
							<i class="zmdi zmdi-power"></i>
							<span>Cerrar sesión</span>
						</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<!-- /Top Menu Items -->
