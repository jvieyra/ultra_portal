@extends('layouts.app')

@section('meta-title','Tickets | Portal ITJ Vallereal')

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
						<li><a href="{{ route('home.employee') }}">Incio</a></li>
						<li><span>Tickets</span></li>
						<li class="active"><span>Entrada</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="{{ route('tickets.create') }}" title="ticket" class="btn btn-success btn-block">
														Crear Ticket
													</a>
												</div>
												<ul class="inbox-nav mb-30">
													<li class="active">
														<a href="#">
															<i class="zmdi zmdi-inbox"></i> 
															Bandeja de entrada 
															<span class="label label-danger ml-10">
														{{ $unreadNotifications->count() }}</span></a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-email-open"></i> Enviados</a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-folder-outline"></i> Finalizados <span class="label label-info ml-10">30</span></a>
													</li>
												</ul>
											</aside>
											
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">Entrada</h6>
														</div>
														<div class="pull-right">
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Search" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																	</span>
																</div>
															</form>
															<a href="#" class="pull-left inline-block refresh">
																<i class="zmdi zmdi-replay"></i>
															</a>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="mail-option pl-15 pr-15">
																<!-- Pagination tickets -->
																<ul class="unstyled inbox-pagination">

																	<li><span>1-10 de 3</span></li>
																	<li>
																		<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																	</li>
																</ul>
																<!-- ./ Pagination tickets -->
															</div>
															<!-- Grid tickets -->
															<div class="table-responsive mb-0">
																<table class="table table-inbox table-hover mb-0">
																	<tbody>
																		
																		@foreach($notifications as $notification)
																			
																			<tr class="{{ $notification->read_at ? '' : 'unread' }}">
																				
																			<td class="view-message  dont-show">
																				<a href="{{ route('tickets.show',$notification->id ) }}" > 
																				{{ $notification->data['send_user_name']}}
																				<span class="label label-success pull-right">{{ $notification->read_at ? '' : 'nuevo' }}
																				</span>
																				</a>
																			</td>
																			<td class="view-message ">
																				<a href="{{ route('tickets.show',$notification->id ) }}">
																				{{ str_limit($notification->data['description'],40) }}
																				</a>
																			</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">
																					{{ App\Ticket::find($notification->data['id'])->created_at->diffForHumans() }}
																				</span>
																			</td>
																			</tr>
																		@endforeach
																		

																		{{-- <tr class="">
																			<td class="view-message dont-show">Usuario Demo</td>
																			<td class="view-message">No salen llamadas.
																			<td class="view-message text-right">
																				<span  class="time-chat-history inline-block">Enero 22</span>
																			</td>
																		</tr>

																		<tr class="">
																			<td class="view-message dont-show">Usuario Demo</td>
																			<td class="view-message">Cambio de toner </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">Diciembre 15</span>
																			</td>
																		</tr> --}}

																	</tbody>
																</table>
															</div>
															<!-- ./ Grid tickets -->

														</div>
													</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
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
	
			<!-- wysuhtml5 Plugin JavaScript -->
			<script src="{{ asset('vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js') }}"></script>
			
			<script src="{{ asset('vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js') }}"></script>
			
			<!-- Fancy Dropdown JS -->
			<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>
			
			<!-- Bootstrap Wysuhtml5 Init JavaScript -->
			<script src="{{ asset('dist/js/bootstrap-wysuhtml5-data.js') }}"></script>
		
			<!-- Owl JavaScript -->
			<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
			
			<!-- Switchery JavaScript -->
			<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
	@endpush

@endsection
