@extends('layouts.app')

@section('meta-title','Workshops | Portal ITJ Valle Real')

@section('content')
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
 	<div class="wrapper theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
		@include('student.nav')
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		@include('student.nav-left')
		<!-- /Left Sidebar Menu -->
		
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
						<li><a href="{{ route('home.student') }}">Inicio</a></li>
						<li class="active"><span>Workshop</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- workshop -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-4">
											<img src="{{ asset('img/workshop/'.$subject->workshop->picture) }}" class="img-fluid" width="90%"> 
										</div>
										<div class="col-md-9 col-sm-9 col-xs-9">
											<div class="product-detail-wrap">
												<h3 class="mb-20 weight-500">{{ $subject->id }} - {{ $subject->workshop->name }}</h3>
												<div class="product-price head-font mb-30">¡Esta es tu nueva clase de workshop!</div>
												<p class=" mb-10">
													<span class="text-primary">Profesor:</span> {{ $subject->user->name}} {{ $subject->user->last_name}}
												</p>
												<p class=" mb-10">
													<span class="text-primary">Dia:</span> {{ $subject->subjectDays() }}
												</p>
												<p class=" mb-10">
													<span class="text-primary">Horario:</span> {{ $subject->start_time }} - {{ $subject->end_time }}
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ./ workshop -->
			</div>
			
			<!-- Footer -->
			@include('student.footer')
			<!-- /Footer -->

     </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->

  @push('scripts-footer')
	
	<!-- Owl JavaScript -->
	<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
	<!-- Sweet-Alert  -->
	<script src="{{ asset('vendors/bower_components/sweetalert/dist/sweetalert.min.js') }}"></script>
	<script src="{{ asset('dist/js/sweetalert-data.js') }}"></script>
		
	<!-- Switchery JavaScript -->
	<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>
		
	@endpush

	@endsection
	
