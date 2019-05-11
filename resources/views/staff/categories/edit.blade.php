@extends('layouts.app')

@section('meta-title','Editar Categoria | Portal ITJ Vallereal')

@push('scripts-header')
<!-- Jasny-bootstrap CSS -->
		<link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<!--alerts CSS -->
		<link href="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endpush

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
					  <h5 class="txt-dark">Categorias</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
							<li>
								<a href="{{ route('home.employee') }}">Inicio</a>
							</li>
							<li class="active">
								<a href="#" ><span> Editar Categoria</span></a>
							</li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										@if(session()->has('category-save') == 1)
											<div class="alert alert-success alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<i class="zmdi zmdi-check pr-15 pull-left"></i>
												<p class="pull-left">La categoria fue actualizada correctamente.</p> 
												<div class="clearfix"></div>
											</div>
										@endif
										<!-- Form wrap -->
										<div class="form-wrap">
											<form action="{{ route('categories.update',$category->id )}}" method="POST">
												@csrf
												<input type="hidden" name="_method" value="PUT">
												<h6 class="txt-dark capitalize-font">
													<i class="zmdi zmdi-account-add mr-10"></i>Editar categoria</h6>
												<hr class="light-grey-hr">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="exampleInputEmail1">Nombre de la categoria </label>
    													<input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Categoria">
    													@if ($errors->has('name'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa un nombre para la categoria.</li>
																	</ul>
																</div>
															@endif
														</div>
													</div>
													<!--/span-->
												</div>
											<!-- /row -->
											<div class="">
												<button  class="btn btn-success btn-icon left-icon mr-10 pull-left">
												 <i class="fa fa-check"></i> <span>Guardar</span>
												</button>
												<a href="{{ route('categories.index') }}" class="btn btn-primary btn-icon left-icon mr-10 pull-left" >
												 Listado de categorias
												</a>
												<div class="clearfix"></div>
											</div>
											</form>
										</div>
										<!-- ./Form-wrap-->
									</div>
								</div>
							</div>
						</div>
					</div>

				
			</div>
			<!-- ./ container fluid -->
				
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
	
	<!-- Bootstrap Switch JavaScript -->
	<script src="{{ asset('vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>

	<!-- Sweet-Alert  -->
	<script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
	<script src="{{ asset('dist/js/sweetalert-data.js') }}"></script>


	@endpush
@endsection