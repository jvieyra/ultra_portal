@extends('layouts.app')

@section('meta-title','Configuración Campus | Portal ITJ Vallereal')

@section('content')

<!--Preloader-->
<div class="preloader-it">
	<div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper theme-1-active pimary-color-green">
		
	<!-- Top Menu Items -->
	@include('staff.nav')
	<!-- /Top Menu Items -->
	
	<!-- Left Sidebar Menu -->
	@include('staff.nav-left')
	<!-- /Left Sidebar Menu -->
		
	<!-- Right Sidebar Menu -->
	
	<!-- /Right Sidebar Menu -->
			
	<!-- Right Sidebar Backdrop -->
	<div class="right-sidebar-backdrop"></div>
	<!-- /Right Sidebar Backdrop -->
			
	<!-- Main Content -->
	<div class="page-wrapper">
		<div class="container-fluid">
			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				  <h5 class="txt-dark">Campus</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				  <ol class="breadcrumb">
						<li>
							<a href="{{ route('campus.staff') }}">Configuración</a>
						</li>
						<li class="active">
							<a href="#"><span>Campus</span></a>
						</li>
				  </ol>
				</div>
				<!-- /Breadcrumb -->
			</div>
			<!-- /Title -->

			<!-- Tabs content -->
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default card-view">
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="tab-struct custom-tab-1 product-desc-tab">
									<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
										<li class="{{ (session()->has('department-active') or session()->has('building-active') or session()->has('place-active'))  ? '' : 'active' }}" role="presentation">
											<a aria-expanded="true" data-toggle="tab" role="tab" id="descri_tab" href="#sections">	
												<span>Secciones </span>
											</a>
										</li>
										<li role="presentation" class="{{ session()->has('department-active') ? 'active':''}}">
											<a data-toggle="tab" id="adi_info_tab" role="tab" href="#departments" aria-expanded="false">
												<span>Departamentos </span>
											</a>
										</li>
										<li role="presentation" class="{{ session()->has('building-active') ? 'active':''}}">
											<a data-toggle="tab" id="review_tab" role="tab" href="#buildings" aria-expanded="false">
												<span>Edificios </span>
											</a>
										</li>
										<li role="presentation" class="{{ session()->has('place-active') ? 'active':''}}">
											<a data-toggle="tab" id="review_tab" role="tab" href="#places" aria-expanded="false">
												<span>Ubicaciones </span>
											</a>
										</li>
									</ul>
										<!-- Content Tabs -->
									<div class="tab-content" id="myTabContent_7">

										<div id="sections" class="tab-pane fade pt-0 
										{{ (session()->has('department-active') or session()->has('building-active') or session()->has('place-active')) ? '' : 'active in' }}" role="tabpanel">
											<!-- content sections -->
											<!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																@if(session()->has('section-save') == 1)
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i>
																	<p class="pull-left">La sección fue agregada correctamente.</p> 
																	<div class="clearfix"></div>
																</div>
																@endif
																<div class="form-wrap">
																	<form action="{{ route('sections.store') }}" method="POST">
																		<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-edit mr-10"></i>Crear Secciones</h6>
																		<hr class="light-grey-hr">
																		{{ csrf_field() }}
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('name') ? ' has-error has-danger' : '' }}">
																			<input type="text" name="name" placeholder="Nombre de la sección" class="form-control">
																			@if ($errors->has('name'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa un nombre para la sección</li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="form-actions">
																			<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
																			 <i class="fa fa-check"></i> <span>Guardar</span></button>
																			<button type="button" class="btn btn-warning pull-left">Cancelar</button>
																			<div class="clearfix"></div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																<div class="form-wrap">
																	<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-assignment mr-10"></i>Administrar secciones</h6>
																	<hr class="light-grey-hr">
																		<a href="{{ route('sections.index') }}" class="btn btn-primary btn-icon left-icon mr-10 pull-left">
																		 <i class="zmdi zmdi-eye"></i> <span>Ver secciones</span>
																		</a>
																		<div class="clearfix"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										<!-- /content sections -->
										</div>

										<div id="departments" class="tab-pane pt-0 {{ session()->has('department-active') ? 'active in':''}} fade" role="tabpanel">
											<!-- content departments -->
											<!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																@if(session()->has('department-save') == 1)
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i>
																	<p class="pull-left">El departamento fue agregado correctamente.</p> 
																	<div class="clearfix"></div>
																</div>
																@endif
																<div class="form-wrap">
																	<form action="{{ route('departments.store') }}" method="POST">
																		{{ csrf_field() }}
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('name_d') ? ' has-error has-danger' : '' }}">
																			<input type="text" name="name_d"  value="{{ old('name_d') }}" placeholder="Nombre del departamento" class="form-control">
																			@if ($errors->has('name_d'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa un nombre para el departamento</li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('section') ? ' has-error has-danger' : '' }}">
																			<select class="form-control" data-placeholder="Elige una sección" name="section" tabindex="1">
																				<option value="">Seccion del departamento</option>
																				@foreach($sections as $section => $value)
																				<option value="{{ $value->id }}">{{ $value->name }}</option>
																				@endforeach
																			</select>
																			<span class="help-block"> Selecciona una sección</span>
																
																			@if ($errors->has('department'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Debes de seleccionar una sección </li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="form-actions">
																			<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
																			 <i class="fa fa-check"></i> <span>Guardar</span></button>
																			<button type="button" class="btn btn-warning pull-left">Cancelar</button>
																			<div class="clearfix"></div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Row -->
											<!-- /content departments -->
										</div>

										<div id="buildings" class="tab-pane pt-0 {{ session()->has('building-active') ? 'active in':''}} fade" role="tabpanel">
											<!-- content buildings -->
											<!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																@if(session()->has('building-save') == 1)
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i>
																	<p class="pull-left">El edificio fue agregado correctamente.</p> 
																	<div class="clearfix"></div>
																</div>
																@endif
																<div class="form-wrap">
																	<form action="{{ route('buildings.store') }}" method="POST">
																		{{ csrf_field() }}
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('name_b') ? ' has-error has-danger' : '' }}">
																			<input type="text" name="name_b"  value="{{ old('name_b') }}" placeholder="Nombre del edificio" class="form-control">
																			@if ($errors->has('name_b'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa un nombre para el edificio</li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="form-actions">
																			<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
																			 <i class="fa fa-check"></i> <span>Guardar</span></button>
																			<button type="button" class="btn btn-warning pull-left">Cancelar</button>
																			<div class="clearfix"></div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Row -->
											<!-- /content buildings -->
										</div>

										<div id="places" class="tab-pane pt-0 {{ session()->has('place-active') ? 'active in':''}} fade" role="tabpanel">
											<!-- content departments -->
											<!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																@if(session()->has('place-save') == 1)
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i>
																	<p class="pull-left">La ubicación fue agregada correctamente.</p> 
																	<div class="clearfix"></div>
																</div>
																@endif
																<div class="form-wrap">
																	<form action="{{ route('places.store') }}" method="POST">
																		{{ csrf_field() }}
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('name_p') ? ' has-error has-danger' : '' }}">
																			<input type="text" name="name_p"  value="{{ old('name_p') }}" placeholder="Nombre de la ubicación" class="form-control">
																			@if ($errors->has('name_p'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa un nombre para la ubicación</li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('building') ? ' has-error has-danger' : '' }}">
																			<select class="form-control" data-placeholder="Elige una sección" name="building" tabindex="1">
																				<option value="">Edificio de la ubicación</option>
																				@foreach($buildings as $building => $value)
																				<option value="{{ $value->id }}">{{ $value->name }}</option>
																				@endforeach
																			</select>
																			<span class="help-block"> Selecciona un edificio para la ubicación en el campus.</span>
																
																			@if ($errors->has('building'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Debes de seleccionar un edificio para la ubicación. </li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="form-actions">
																			<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
																			 <i class="fa fa-check"></i> <span>Guardar</span></button>
																			<button type="button" class="btn btn-warning pull-left">Cancelar</button>
																			<div class="clearfix"></div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Row -->
											<!-- /content departments -->
										</div>
									</div>
										<!-- /Content Tabs -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- / Tabs content -->		
		</div>

		<!-- Footer -->
		@include('staff.footer')
		<!-- /Footer -->

	</div>
	<!-- /Main Content -->
		
</div>
<!-- /#wrapper -->
		
<!-- JavaScript -->
		
@push('scripts-footer')

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

@endpush


@endsection



