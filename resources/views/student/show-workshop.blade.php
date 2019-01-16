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
						<li><a href="{{ asset('home.student') }}">Inicio</a></li>
						<li class="active"><span>Workshop</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Product Row One -->
				<div class="row">
							<!-- Workshop -->
							Tu clase seleccionada
		       		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
								<div class="panel panel-default card-view pa-0">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<article class="col-item">
												<div class="photo">
													<img src="{{ asset('img/workshop/'.$subject->workshop->picture) }}" class="img-responsive" alt="Product Image" /> 
												</div>
												<div class="info">
													<h6>{{ $subject->id }} - {{ $subject->workshop->name }}</h6>
													<div class="product-rating inline-block">
														{{ $subject->subjectDays() }}
													</div>
													<div class="product-rating inline-block">
														{{ $subject->start_time }} - {{ $subject->end_time }}
													</div>
												</div>
											</article>
										</div>
									</div>	
								</div>	
							</div>
							<!-- ./ Workshop -->
				</div>	
				<!-- /Product Row Four -->
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
	
