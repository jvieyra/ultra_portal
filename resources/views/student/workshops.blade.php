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
		@include('student.nav-left',array('some'=>'data'))
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
						<li ><span>{{ $user->name }} {{ $student->homeroom }}</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Product Row One -->
				<div class="row">

					@if($student->workshopEnrollment())

					<!-- Workshop Enrollment -->
       		<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="alert alert-success alert-dismissable">
									<i class="zmdi zmdi-check pr-15 pull-left"></i>
									<p class="pull-left">
										Ya te encuentras inscrito a una clase de Workshop.
										<a href="{{ route('student.workshops.show',$student->workshopEnrollment()->subject_id) }}">Ver clase</a>
									</p> 
									<div class="clearfix"></div>
								</div>
							</div>	
						</div>	
					</div>
					<!-- ./ Workshop Enrollment  -->	
					@else
						@if($student->setWorkshops()->isNotEmpty())
							@if(session('fullError'))
								<div class="alert alert-danger alert-dismissable alert-style-1">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<i class="zmdi zmdi-block"></i>{{ session()->get('fullError') }}
								</div>
							@endif

							@if($errors->any())
								<div class="alert alert-danger alert-dismissable alert-style-1">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<i class="zmdi zmdi-block"></i>{{ $errors->first('workshops') }}
								</div>
							@endif

						<form action="{{ route('student.workshops.store') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" class="form-control" name="subjects" value="{{ $student->setWorkshops()->count() }}">
						@foreach($student->setWorkshops() as $workshop)
							<!-- Workshop -->
		       		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
								<div class="panel panel-default card-view pa-0">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<article class="col-item">
												<div class="photo">
													<img src="{{ asset('img/workshop/'.$workshop['picture']) }}" class="img-responsive" alt="Product Image" /> 
												</div>
												<div class="info">
													<h6>{{ $workshop['id'] }} - {{ $workshop['name'] }}</h6>
													<div class="product-rating inline-block">
														{{ $workshop['days'] }}
													</div>
													<div class="product-rating inline-block">
														{{ $workshop['start_time'] }} - {{ $workshop['end_time'] }}
													</div>
													<div class="checkbox checkbox-primary">
														<input id="a{{ $workshop['id'] }}" 
																	value="{{ $workshop['id'] }}" type="checkbox" name="workshops[]"
																	{{ (is_array(old('workshops')) && in_array($workshop['id'], old('workshops'))) ? ' checked' : '' }}>
														<label for="a{{ $workshop['id'] }}"> Seleccionar </label>
													</div>
												</div>
											</article>
										</div>
									</div>	
								</div>	
							</div>
							<!-- ./ Workshop -->
						@endforeach
						
							<div class="form-group mb-0 col-lg-12 col-md-12">
								<button type="submit" class="btn btn-success btn-lg btn-anim">
									<i class="icon-like"></i>
									<span class="btn-text">Inscribir</span></button>
							</div>
			
							
						</form>
					@else
					<!-- no classes-->
       		<div class="col-lg-6 col-md-4 col-sm-4 col-xs-6">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="alert alert-warning alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i>
										<p class="pull-left">No hay clases disponibles con cupo para tu plan de estudios.</p>
										<p class="pull-left">
											 Dirígete al departamento de Afterschool para realizar tu inscripción.
										</p>
									<div class="clearfix"></div>
								</div>
							</div>	
						</div>	
					</div>
					<!-- ./ no classes  -->	
					@endif
					@endif
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
	
