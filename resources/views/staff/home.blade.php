@extends('layouts.app')

@section('meta-title','Inicio | Portal ITJ Vallereal')

@section('content')
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
		@include('staff.nav')
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		@include('staff.nav-left')
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
			<!-- Posible menu -->
		<!-- /Right Sidebar Menu -->

		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
	
				
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
	


	@endpush

@endsection