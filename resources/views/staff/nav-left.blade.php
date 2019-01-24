<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Portal</span>
			<i class="zmdi zmdi-more"></i>
		</li>

		<!-- Tickets -->
		<li>
			<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#tickets_menu">
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
					<a href="index2.html">Crear ticket</a>
				</li>
				<li>
					<a href="index3.html">Pendientes</a>
				</li>
				<li>
					<a href="index4.html">Terminados</a>
				</li>
			</ul>
		</li>
		<!--./Tickets  -->
		
		<!-- Eventos-->
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#events_menu">
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
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#afterschool">
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
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#workshops">
				<div class="pull-left">
					<i class="zmdi zmdi-puzzle-pieyeapce mr-20"></i>
					<span class="right-nav-text">Workshops</span>
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
					<a href="blank.html">Crear Clases</a>
				</li>
				<li>
					<a href="blank.html">Clases</a>
				</li>
				<li>
					<a href="gallery.html">Reportes</a>
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
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="panels-wells.html">Panels & Wells</a>
				</li>
				<li>
					<a href="modals.html">Modals</a>
				</li>
				<li>
					<a href="sweetalert.html">Sweet Alerts</a>
				</li>
				<li>
					<a href="notifications.html">notifications</a>
				</li>
				<li>
					<a href="typography.html">Typography</a>
				</li>
				<li>
					<a href="buttons.html">Buttons</a>
				</li>
				<li>
					<a href="accordion-toggle.html">Accordion / Toggles</a>
				</li>
				<li>
					<a href="tabs.html">Tabs</a>
				</li>
				<li>
					<a href="progressbars.html">Progress bars</a>
				</li>
				<li>
					<a href="skills-counter.html">Skills & Counters</a>
				</li>
				<li>
					<a href="pricing.html">Pricing Tables</a>
				</li>
				<li>
					<a href="nestable.html">Nestables</a>
				</li>
				<li>
					<a href="dorpdown.html">Dropdowns</a>
				</li>
				<li>
					<a href="bootstrap-treeview.html">Tree View</a>
				</li>
				<li>
					<a href="carousel.html">Carousel</a>
				</li>
				<li>
					<a href="range-slider.html">Range Slider</a>
				</li>
				<li>
					<a href="grid-styles.html">Grid</a>
				</li>
				<li>
					<a href="bootstrap-ui.html">Bootstrap UI</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="form_dr" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="form-element.html">Basic Forms</a>
				</li>
				<li>
					<a href="form-layout.html">form Layout</a>
				</li>
				<li>
					<a href="form-advanced.html">Form Advanced</a>
				</li>
				<li>
					<a href="form-mask.html">Form Mask</a>
				</li>
				<li>
					<a href="form-picker.html">Form Picker</a>
				</li>
				<li>
					<a href="form-validation.html">form Validation</a>
				</li>
				<li>
					<a href="form-wizard.html">Form Wizard</a>
				</li>
				<li>
					<a href="form-x-editable.html">X-Editable</a>
				</li>
				<li>
					<a href="cropperjs.html">Cropperjs</a>
				</li>
				<li>
					<a href="form-file-upload.html">File Upload</a>
				</li>
				<li>
					<a href="dropzone.html">Dropzone</a>
				</li>
				<li>
					<a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
				</li>
				<li>
					<a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
				</li>
				<li>
					<a href="summernote-wysihtml5.html">summernote</a>
				</li>
				<li>
					<a href="typeahead-js.html">typeahead</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="flot-chart.html">Flot Chart</a>
				</li>
				<li>
					<a href="morris-chart.html">Morris Chart</a>
				</li>
				<li>
					<a href="chart.js.html">chartjs</a>
				</li>
				<li>
					<a href="chartist.html">chartist</a>
				</li>
				<li>
					<a href="easy-pie-chart.html">Easy Pie Chart</a>
				</li>
				<li>
					<a href="sparkline.html">Sparkline</a>
				</li>
				<li>
					<a href="peity-chart.html">Peity Chart</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="basic-table.html">Basic Table</a>
				</li>
				<li>
					<a href="bootstrap-table.html">Bootstrap Table</a>
				</li>
				<li>
					<a href="data-table.html">Data Table</a>
				</li>
				<li>
					<a href="export-table.html"><span class="pull-right"><span class="label label-success">New</span></span>Export Table</a>
				</li>
				<li>
					<a href="responsive-data-table.html"><span class="pull-right"><span class="label label-success">New</span></span>RSPV DataTable</a>
				</li>
				<li>
					<a href="responsive-table.html">Responsive Table</a>
				</li>
				<li>
					<a href="editable-table.html">Editable Table</a>
				</li>
				<li>
					<a href="foo-table.html">Foo Table</a>
				</li>
				<li>
					<a href="jsgrid-table.html">Jsgrid Table</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="icon_dr" class="collapse collapse-level-1">
				<li>
					<a href="fontawesome.html">Fontawesome</a>
				</li>
				<li>
					<a href="themify.html">Themify</a>
				</li>
				<li>
					<a href="linea-icon.html">Linea</a>
				</li>
				<li>
					<a href="simple-line-icons.html">Simple Line</a>
				</li>
				<li>
					<a href="pe-icon-7.html">Pe-icon-7</a>
				</li>
				<li>
					<a href="glyphicons.html">Glyphicons</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">Configuración</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="maps_dr" class="collapse collapse-level-1">
				<li>
					<a href="{{ route('users.index') }}">Usuarios</a>
				</li>
				<li>
					<a href="google-map.html">Edificios</a>
				</li>
				<li>
					<a href="google-map.html">Grados</a>
				</li>
				<li>
					<a href="{{ route('campus.staff') }}">Campus</a>
				</li>
			</ul>
		</li>


	

	</ul>
</div>
<!-- /Left Sidebar Menu -->