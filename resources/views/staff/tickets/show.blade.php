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
											<a href="" data-toggle="modal" title="Compose" class="btn btn-success btn-block">
											Nuevo
											</a>
										</div>
										<ul class="inbox-nav mb-30">
											<li class="active">
												<a href="{{ route('tickets.index') }}"><i class="zmdi zmdi-inbox"></i> 
													Bandeja de entrada <span class="label label-danger ml-10">{{ $unreadNotifications->count() }}</span>
												</a>
											</li>
											<li>
												<a href="#"><i class="zmdi zmdi-email-open"></i> Enviados</a>
											</li>
											<li>
												<a href="#"><i class="zmdi zmdi-bookmark-outline"></i> Finalizados</a>
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
													<a href="#" class="pull-left inline-block refresh">
														<i class="zmdi zmdi-replay"></i>
													</a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="panel-wrapper collapse in">
												<div class="panel-body inbox-body pa-0">
													<div class="heading-inbox">
														<div class="container-fluid">
															<div class="pull-left">
																<div class="compose-btn">
																	<a class="btn btn-sm mr-10" href="#" data-toggle="modal" title="Compose"><i class="zmdi zmdi-chevron-left"></i></a>
																</div>
															</div>
															<div class="pull-right text-right">
																<button class="btn btn-sm mr-10" title="" type="button">
																	<i class="zmdi zmdi-print"></i>
																</button>
																<div class="inline-block dropdown">
																	<a class="dropdown-t	oggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more"></i></a>
																	<ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
																		<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Reasignar</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<hr class="light-grey-hr mt-10 mb-15">	
													</div>
													<div class="sender-info">
														<div class="container-fluid">
															<div class="sender-img-wrap pull-left mr-20">
																<img class="sender-img" alt="user" src="{{ asset('img/nav/'.Auth::user()->image)}}">
															</div>
															<div class="sender-details   pull-left">
																<span class="capitalize-font pr-5 txt-dark block font-15 weight-500 head-font">
																	{{ $userSend->name }} {{ $userSend->last_name }}
																</span>
																<span class="block">
																	para 
																	<span>mi</span>
																</span>	
															</div>	
															<div class="pull-right">
																<div class="inline-block mr-5">
																	<span class="inbox-detail-time-1 font-12">{{$ticket->created_at->format('d-m-y h:s')}}</span>
																	<span class="inbox-detail-time-2 font-12 inline-block">({{$ticket->created_at->diffForHumans()}})</span>
																</div>
																<div class="inline-block dropdown">
																	<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi   zmdi-more-vert"></i></a>
																	<ul class="dropdown-menu bullet dropdown-menu-right" role="menu">
																		<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Mensaje directo</a></li>
																	</ul>
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="container-fluid view-mail mt-20">
														<p>{{ $ticket->description }}</p>
													</div>
													<hr class="light-grey-hr mt-20 mb-20">
														<!--  Attachment-mail -->
														@if(count($files) > 0)
															<div class="container-fluid attachment-mail mt-30 mb-30">
														<div class="download-blocks mb-20">
															<span class="pr-15"><i class="zmdi zmdi-attachment-alt pr-10"></i>{{ $files->count() }} Adjunto(s)</span>
															
														</div>
														<ul>
															@foreach($files as $file)
															<li>
																<a href="#" class="atch-thumb" download>
																	<div class="file-name">
																		<a href="/ultraportal/storage/app/{{ $file->file_path }}" download="">
																			<i class="zmdi zmdi-download pr-10"></i>{{$file->name}}
																		</a>
																	</div>
																</a>
															</li>
															@endforeach
														</ul>
													</div>
														@endif
													<!-- attached-->

													<hr class="light-grey-hr mt-20 mb-20">
													<div class="col-sm-12">
														<div class="form-wrap">
															<form method="POST" enctype="multipart/form-data" action="">
																<div class="form-group">
																	<label class="control-label mb-10" for="review">Comentar ticket </label>
																</div>
																<div class="form-group">
																	<label class="control-label mb-10" for="review">Mensaje</label>
																	<textarea class="form-control" id="review" placeholder="Envia informacion extra al ticket"></textarea>
																</div>
																<div class="form-group">
																	<label class="control-label mb-10 text-left">Subir archivos</label>
																	<input class="form-control" type="file" ref="files" accept="image/*" multiple="multiple">
																</div>
																<div class="form-group mb-0">
																	<button type="submit" class="btn btn-success  mr-10">Enviar</button>
																</div>
															</form>
														</div>
													</div>
													<hr class="light-grey-hr mt-20 mb-20">
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
