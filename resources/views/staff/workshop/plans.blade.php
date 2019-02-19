@extends('layouts.app')

@section('meta-title','Workshops Planes | Portal ITJ Vallereal')

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
				  <h5 class="txt-dark">Workshops Planes </h5>
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
										<li class="" role="presentation">
											<a aria-expanded="true" data-toggle="tab" role="tab" id="descri_tab" href="#studyplans">	
												<span>Planes de estudio </span>
											</a>
										</li>
										<li role="presentation" class="active">
											<a data-toggle="tab" id="adi_info_tab" role="tab" href="#planstudent" aria-expanded="false">
												<span>Plan Alumno </span>
											</a>
										</li>
									</ul>
										<!-- Content Tabs -->
									<div class="tab-content" id="myTabContent_7">

										<div id="studyplans" class="tab-pane fade pt-0" role="tabpanel">
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
										<!-- /content study plans -->
										</div>

										<div id="planstudent" class="tab-pane pt-0 active in fade" role="tabpanel">
											<!-- content Plan Student -->
											<!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="panel panel-default card-view">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
																@if(session()->has('planstudent-save') == 1)
																<div class="alert alert-success alert-dismissable">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<i class="zmdi zmdi-check pr-15 pull-left"></i>
																	<p class="pull-left">El alumno fue asignado al plan de estudios correctamente</p> 
																	<div class="clearfix"></div>
																</div>
																@endif
																<div class="form-wrap">
																	<form action="{{ route('plan-student.create') }}" method="POST">
																		{{ csrf_field() }}
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('matricula') ? ' has-error has-danger' : '' }}">
																			
																			<input type="text" name="matricula"  value="{{ old('matricula') }}" placeholder="19-9999-1" class="form-control">
																			@if ($errors->has('matricula'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa la matricula del alumno.</li>
																				</ul>
																			</div>
																			@endif
																		</div>
																		<div class="col-md-6 col-sm-12 col-xs-12 form-group {{ $errors->has('plan_id') ? ' has-error has-danger' : '' }}">
																			<select class="form-control" data-placeholder="Elige una sección" name="plan_id" tabindex="1">
																				<option value="">Selecciona un plan</option>
																				@foreach($plans as $plan => $value)
																				<option value="{{ $value->id }}">{{ $value->name }}</option>
																				@endforeach
																			</select>
																			@if ($errors->has('plan_id'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa el plan de estudio para workshop.</li>
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

										<div id="buildings" class="tab-pane pt-0 fade" role="tabpanel">
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



