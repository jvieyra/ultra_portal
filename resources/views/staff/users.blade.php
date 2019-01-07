@extends('layouts.app')

@section('meta-title','Usuarios | Portal ITJ Vallereal')

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
					  <h5 class="txt-dark">Usuarios</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
							<li>
								<a href="index.html">Dashboard</a>
							</li>
							<li>
								<a href="#"><span>e-commerce</span></a>
							</li>
							<li class="active">
								<span>add-products</span>
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
										<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
											<li class="active" role="presentation">
												<a aria-expanded="true" data-toggle="tab" role="tab" id="descri_tab" href="#staff">	
													<span>Staff</span>
												</a>
											</li>
											<li role="presentation" class="next">
												<a data-toggle="tab" id="adi_info_tab" role="tab" href="#students" aria-expanded="false">
													<span>Alumnos</span>
												</a>
											</li>
											<li role="presentation" class="">
												<a data-toggle="tab" id="review_tab" role="tab" href="#guardians" aria-expanded="false">
													<span>Papás</span>
												</a>
											</li>
										</ul>
										<!-- Content Tabs -->
										<div class="tab-content" id="myTabContent_7">
											<div id="staff" class="tab-pane fade pt-0 active in" role="tabpanel">
												<!-- content staff -->
												<!-- Row -->
												<div class="row">
													<div class="col-sm-12">
														<div class="panel panel-default card-view">
															<div class="panel-wrapper collapse in">
																<div class="panel-body">
																	<div class="form-wrap">
																		<form action="#">
																			<h6 class="txt-dark capitalize-font">
																				<i class="zmdi zmdi-account-add mr-10"></i>Crear Usuarios Staff</h6>
																			<hr class="light-grey-hr"/>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group">
																						<label class="control-label mb-10">Nombre(s)</label>
																						<input type="text" id="firstName" class="form-control" name="name" placeholder="Nombre del usuario">
																					</div>
																				</div>
																			<!--/span-->
																			<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label mb-10">Apellido Paterno</label>
																					<input type="text" id="lastName" class="form-control" name="last_name" placeholder="Apellido paterno">
																				</div>
																			</div>
																			<!--/span-->
																		</div>
																	<!-- Row -->
																	<div class="row">
																		<div class="col-md-6">
																				<div class="form-group">
																					<label class="control-label mb-10">Apellido Materno</label>
																					<input type="text" id="lastName" class="form-control" name="second_last_name" placeholder="Campo opcional">
																				</div>
																			</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<label class="control-label mb-10">Fecha de nacimiento</label>
																				<input type="text" placeholder="Coloca una fecha valida" data-mask="99/99/9999" class="form-control">
																			</div>
																		</div>
																	</div>
															<!--/row-->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group mb-30">
																	<label class="control-label mb-10 text-left">Sexo</label>
																	<div class="radio radio-info">
																		<input type="radio" name="gender" id="radio1" value="F" checked="">
																		<label for="radio1">
																			F
																		</label>
																	</div>
																	<div class="radio radio-info">
																		<input type="radio" name="gender" id="radio2" value="M">
																		<label for="radio2">
																			M
																		</label>
																	</div>	
																</div>
															</div>
															<!--/span-->
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label mb-10">Nacionalidad</label>
																		<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Mexicana">
																</div>
															</div>
															<!--/span-->
														</div>
														<!--/row-->
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label mb-10"> Puesto</label>
																	<input type="text" class="form-control" placeholder="Puesto que desempeña">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label mb-10"> Departamento </label>
																	<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																			<option value="Category 1"></option>
																			<option value="Category 2">Category 2</option>
																			<option value="Category 3">Category 5</option>
																			<option value="Category 4">Category 4</option>
																		</select>
																</div>
															</div>
														</div>
														<!-- row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group mb-30">
																		<label class="control-label mb-10 text-left">Correo electrónico </label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="ti-email"></i></div>
																			<input type="text" class="form-control" id="exampleInputuname_1" placeholder="Correo electrónico">
																		</div>
																</div>
															</div>
															<!--/span-->
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label mb-10">Contraseña</label>
																	<div class="input-group">
																		<div class="input-group-addon"><i class="ti-lock"></i></div>
																		<input type="password" class="form-control" id="exampleInputuname_1" placeholder="contraseña segura">
																	</div>
																</div>
															</div>
															<!--/span-->
														</div>
														<!-- /row -->
													<div class="form-actions">
														<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Guardar</span></button>
														<button type="button" class="btn btn-warning pull-left">Cancelar</button>
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
					<!-- /content staff -->
					</div>
					<div id="students" class="tab-pane pt-0 fade" role="tabpanel">
						<!-- content student -->
						hola  students
						<!-- /content student -->
					</div>
					<div id="guardians" class="tab-pane pt-0 fade" role="tabpanel">
						<!-- content guardians -->
						hola  guardians
						<!-- /content guardians -->
					</div>
										</div>
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
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2017 &copy; Philbert. Pampered by Hencework</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		@push('scripts-footer')
		
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>
		
		<!-- Owl JavaScript -->
		<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
		<!-- Switchery JavaScript -->
		<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
		<!-- Init JavaScript -->
		<script src="{{ asset('dist/js/init.js') }}"></script>
		@endpush
	@endsection