@extends('layouts.app')

@section('meta-title','Crear Ticket | Portal ITJ Vallereal')

@push('scripts-header')
<!-- Jasny-bootstrap CSS -->
		<link href="{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	
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
					  <h5 class="txt-dark">Tickets</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
							<li>
								<a href="{{ route('home.employee') }}">Inicio</a>
							</li>
							<li class="active">
								<a href="#" ><span> Crear Ticket</span></a>
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
										
										<!-- Form wrap -->
										<div class="form-wrap">
											<ticket></ticket>
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
	

		@endpush
	@endsection