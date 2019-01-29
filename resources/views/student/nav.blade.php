
<!-- Top Menu Items -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="mobile-only-brand pull-left">
		<div class="nav-header pull-left">
			<div class="logo-wrap">
				<a href="{{ route('home.student')}}">
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
			
			<li class="dropdown auth-drp">
				<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
				
					@if(Auth::user()->gender =='F')
					<img src="{{ asset('img/nav/girl.png')}}" alt="user_auth" class="user-auth-img img-circle"/>
					@else
					<img src="{{ asset('img/nav/boy.png')}}" alt="user_auth" class="user-auth-img img-circle"/>
					@endif
					<span class="user-online-status"></span>
				</a>
				<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
					<li>
						<a href="#"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
					</li>
					
					<li class="divider"></li>
					<li class="sub-menu show-on-hover">
						<a href="#" class="dropdown-toggle pr-0 level-2-drp">
							<i class="zmdi zmdi-check text-success"></i> available
						</a>
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
