<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Portal</span>
			<i class="zmdi zmdi-more"></i>
		</li>
		<!-- Tickets -->
		<li>
			<a class="active" href="#" data-toggle="collapse" data-target="#tickets_menu">
				<div class="pull-left">
					<i class="zmdi zmdi-attachment mr-20"></i>
					<span class="right-nav-text">Tickets </span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="tickets_menu" class="collapse collapse-level-1">
				<li>
					<a href="{{ route('tickets.index') }}">Tickets</a>
				</li>
				<li>
					<a href="#">Crear Ticket</a>
				</li>
				<li>
					<a href="#">Pendientes</a>
				</li>
				<li>
					<a href="#">Terminados</a>
				</li>
			</ul>
		</li>
		<!--./Tickets  -->
		
		<!-- Eventos-->
		<li>
			<a href="#" data-toggle="collapse" data-target="#events_menu">
				<div class="pull-left">
					<i class="zmdi zmdi-calendar-alt mr-20"></i>
					<span class="right-nav-text">Eventos </span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="events_menu" class="collapse collapse-level-1">
				<li>
					<a href="#">Crear evento</a>
				</li>
				<li>
					<a href="#">Ver calendario</a>
				</li>
			</ul>
		</li>
		<!-- ./ Eventos-->

		
		<!--  Afterschool -->
		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>Afterschool </span>
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="#" data-toggle="collapse" data-target="#afterschool">
				<div class="pull-left">
					<i class="zmdi zmdi-library mr-20"></i>
					<span class="right-nav-text">Academico</span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="afterschool" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="#">Clases </a>
				</li>
				<li>
					<a href="#">Reportes </a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#" data-toggle="collapse" data-target="#workshops">
				<div class="pull-left">
						<i class="zmdi zmdi-puzzle-piece mr-20"></i><span class="right-nav-text">Workshops</span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="workshops" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="{{ route('workshops.create') }}">Crear Workshops</a>
				</li>
				<li>
					<a href="#">Crear Clases</a>
				</li>
				<li>
					<a href="#">Clases</a>
				</li>
				<li>
					<a href="{{ route('crear-plan') }}">Planes</a>
				</li>
				<li>
					<a href="#">Reportes</a>
				</li>
				
			</ul>
		</li>
		<!-- ./ Afterschool -->


		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>Administración </span>
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="#" data-toggle="collapse" data-target="#maps_dr">
				<div class="pull-left">
					<i class="zmdi zmdi-dns mr-20"></i><span class="right-nav-text">Configuración</span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="maps_dr" class="collapse collapse-level-1">
				<li>
					<a href="{{ route('users.index') }}">Usuarios</a>
				</li>
				<li>
					<a href="{{ route('campus.staff') }}">Campus</a>
				</li>
				<li>
					<a href="{{ route('tickets.config') }}">Tickets</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#" data-toggle="collapse" data-target="#statistics">
				<div class="pull-left">
					<i class="zmdi zmdi-chart mr-20"></i><span class="right-nav-text">Analítica </span>
				</div>
				<div class="pull-right">
					<i class="zmdi zmdi-caret-down"></i>
				</div>
				<div class="clearfix"></div>
			</a>
			<ul id="statistics" class="collapse collapse-level-1">
				<li>
					<a href="{{ route('tickets.charts') }}"> Estadisticas Tickets</a>
				</li>
				<li>
					<a href="#">Reportes</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
<!-- /Left Sidebar Menu -->