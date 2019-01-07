@extends('layouts.app')

@section('meta-title','Secciones | Portal ITJ Vallereal')

@push('scripts-header')

<!-- vector map CSS -->
<link href="{{ asset('vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>
<!-- Data table CSS -->
<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

<!-- Custom styles -->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>

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
				  <h5 class="txt-dark">Campus</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				  <ol class="breadcrumb">
						<li>
							<a href="index.html">Configuración</a>
						</li>
						<li>
							<a href="{{ route('campus.staff') }}"><span>Campus</span></a>
						</li>
						<li class="active"><span>Secciones</span></li>
				  </ol>
				</div>
				<!-- /Breadcrumb -->
			</div>
			<!-- /Title -->

			<!-- Tabs content -->
			<!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-assignment mr-10"></i>Secciones</h6>
							</div>
						</div>
						<hr class="light-grey-hr">
						<div class="panel-wrapper collapse in">
							<div class="panel-body row">
								<!-- Table wrap -->
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table display responsive product-overview mb-30" id="sections">
											<thead>
												<tr>
													<th>ID</th>
													<th>Nombre</th>
													<th class="no-sort">Acciones</th>
												</tr>
											</thead>
											
										</table>
									</div>
								</div>
								<!-- /Table wrap -->	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- container fluid -->
				
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
<!-- Data table JavaScript -->
<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/js/productorders-data.js') }}"></script>

<!-- Owl JavaScript -->
<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<!-- Switchery JavaScript -->
<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>



<script type="text/javascript">
  $(document).ready(function() {
    oTable = $('#sections').DataTable({
    	language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },

    	"lengthMenu":['4','10','25','50'],
  		"pageLength":4,
      "processing": true,
      "serverSide": true,
      "ajax": "{{ route('datatable.sections') }}",
      "columns": [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {
          	data:null,
          	orderable:false,
          	searchable: false,
          	defaultContent:
          		'<a href="javascript:void(0)" class="text-inverse pr-10" title="" data-toggle="tooltip" data-original-title="Edit">'+
          			'<i class="zmdi zmdi-edit txt-warning"></i>'+
          		'</a>'+
          		'<a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete">'+
          			'<i class="zmdi zmdi-delete txt-danger"></i>'+
          		'</a>'
          }
      ]
    });
  });
</script>

@endpush

@endsection



