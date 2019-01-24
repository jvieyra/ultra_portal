@extends('layouts.app')

@section('meta-title','Workshops | Portal ITJ Vallereal')

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
				  <h5 class="txt-dark">Workshops</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				  <ol class="breadcrumb">
						<li>
							<a href="index.html">Inicio</a>
						</li>
						<li class="active">
							<span>Crear Workshops</span>
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
									<!-- Row -->
									<div class="row">
										<div class="col-sm-12">
											<div class="panel panel-default card-view">
												<div class="panel-wrapper collapse in">
													<div class="panel-body">
														<div class="form-wrap">
															@if($errors->any())
															<div class="alert alert-danger alert-dismissable">
																<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																<i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left">{{ $errors->first() }}</p>
																<div class="clearfix"></div>
															</div>
															@endif
															<form action="{{ route('workshops.store') }} " method="POST" enctype="multipart/form-data">
																{{ csrf_field() }}
																<h6 class="txt-dark capitalize-font">
																	<i class="zmdi zmdi-brush mr-10"></i></i>Crear Workshop</h6>
																<hr class="light-grey-hr"/>
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group {{ $errors->has('name') ? ' has-error has-danger' : '' }}">
																			<label class="control-label mb-10">Nombre del workshop</label>
																			<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Jazz">
																			@if ($errors->has('name'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Ingresa un nombre para el workshop</li>
																					</ul>
																				</div>
																			@endif
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-12">
																		<div class="form-group {{ $errors->has('description') ? ' has-error has-danger' : '' }}">
																			<label class="control-label mb-10 text-left">Descripción </label>
																			<textarea class="form-control" name="description" rows="5" placeholder="Descripción, actividades del taller" >{{ old('description') }}</textarea>
																			@if ($errors->has('description'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Añade una descripción para el workshop.</li>
																					</ul>
																				</div>
																			@endif
																		</div>
																	</div>

																	<div class="col-md-12">
																		<div class="form-group {{ $errors->has('description') ? ' has-error has-danger' : '' }} ">
	    																<label for="control-label exampleFormControlFile1 mb-10 text-left">Agregar una imagen para el workshop </label>
																	    <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
																	    @if ($errors->has('picture'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li class="text-danger">Solo se permiten subir imagenes.</li>
																					</ul>
																				</div>
																			@endif
																  	</div>
																	</div>
																	<!--/span-->
																</div>
																<!-- /row -->
																<div class="form-actions">
																	<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> 
																		<i class="fa fa-check"></i> <span>Guardar</span>
																	</button>
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