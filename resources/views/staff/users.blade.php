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
								<a href="index.html">Inicio</a>
							</li>
							<li class="active">
								<a href="#" ><span>Usuarios</span></a>
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
													<span>Usuarios</span>
												</a>
											</li>
											<li  role="presentation" class="next">
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
																		@if(session()->has('user-save') == 1)
																			<div class="alert alert-success alert-dismissable">
																				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																				<i class="zmdi zmdi-check pr-15 pull-left"></i>
																				<p class="pull-left">El usuario fue agregado correctamente.</p> 
																				<div class="clearfix"></div>
																			</div>
																		@endif
																		<form action="{{ route('users.store') }}" method="POST">
																			{{ csrf_field() }}
																			<h6 class="txt-dark capitalize-font">
																				<i class="zmdi zmdi-account-add mr-10"></i>Crear Usuarios</h6>
																			<hr class="light-grey-hr"/>
																			<div class="row">
																				<div class="col-md-6">
																					<div class="form-group {{ $errors->has('name') ? ' has-error has-danger' : '' }}">
																						<label class="control-label mb-10">Nombre(s)</label>
																						<input type="text" class="form-control" name="name"  value="{{ old('name') }}" placeholder="Nombre del usuario">
																						@if ($errors->has('name'))
																							<div class="help-block with-errors">
																								<ul class="list-unstyled">
																									<li>Ingresa un nombre.</li>
																								</ul>
																							</div>
																						@endif
																					</div>
																				</div>
																			<!--/span-->
																			<div class="col-md-6 {{ $errors->has('last_name') ? ' has-error has-danger' : '' }}">
																				<div class="form-group">
																					<label class="control-label mb-10">Apellido Paterno</label>
																					<input type="text" class="form-control" name="last_name"  value="{{ old('last_name') }}" placeholder="Apellido paterno">
																					@if ($errors->has('last_name'))
																							<div class="help-block with-errors">
																								<ul class="list-unstyled">
																									<li>Ingresa el apellido paterno.</li>
																								</ul>
																							</div>
																						@endif
																				</div>
																			</div>
																			<!--/span-->
																		</div>
																	<!-- Row -->
																	<div class="row">
																		<div class="col-md-6">
																				<div class="form-group ">
																					<label class="control-label mb-10">Apellido Materno</label>
																					<input type="text"class="form-control" name="second_last_name" value="{{ old('second_last_name') }}" placeholder="Campo opcional">
																				</div>
																			</div>
																		<div class="col-md-6">
																			<div class="form-group {{ $errors->has('birthday') ? ' has-error has-danger' : '' }}">
																				<label class="control-label mb-10">Fecha de nacimiento</label>
																				<input type="text" name="birthday" placeholder="Coloca una fecha valida" value="{{ old('birthday') }}" class="form-control">
																				@if ($errors->has('birthday'))
																							<div class="help-block with-errors">
																								<ul class="list-unstyled">
																									<li>Ingresa una fecha de nacimiento valida.</li>
																								</ul>
																							</div>
																					@endif
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
															<div class="col-md-6 {{ $errors->has('nationality') ? ' has-error has-danger' : '' }}">
																<div class="form-group">
																	<label class="control-label mb-10">Nacionalidad</label>
																		<input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" placeholder="Mexicana">
																		@if ($errors->has('nationality'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Ingresa una nacionalidad.</li>
																					</ul>
																				</div>
																		@endif
																</div>
															</div>
															<!--/span-->
														</div>
														<!--/row-->
														<div class="row">
															<div class="col-md-6">
																<div class="form-group {{ $errors->has('specific_position') ? ' has-error has-danger' : '' }}">
																	<label class="control-label mb-10"> Posición específica</label>
																	<input type="text" class="form-control" name="specific_position"  value="{{ old('specific_position') }}" placeholder="Puesto que desempeña">
																	@if ($errors->has('specific_position'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Cual es el puesto que desempeña en la empresa.</li>
																					</ul>
																				</div>
																		@endif
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group {{ $errors->has('department_id') ? ' has-error has-danger' : '' }}">
																	<label class="control-label mb-10"> Departamento </label>
																	<select class="form-control" name="department_id" data-placeholder="Elige un departamento" tabindex="1">
																		<option value=""></option>
																			@foreach($departments as $department)
																				<option value="{{ $department->id }}">{{ $department->name }}</option>
																			@endforeach
																	</select>
																	@if ($errors->has('department_id'))
																			<div class="help-block with-errors">
																				<ul class="list-unstyled">
																					<li>Ingresa el departamento del usuario.</li>
																				</ul>
																			</div>
																		@endif
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-md-6">
																<div class="form-group mb-30 {{ $errors->has('roles') ? ' has-error has-danger' : '' }}">
																	<label class="control-label mb-10 text-left">Roles del usuario</label>
																	@foreach($roles as $id => $name)
																		<div class="checkbox checkbox-success">
																			<input id="checkbox{{ $id }}" type="checkbox" name="roles[]" value="{{ $id }}">
																			<label for="checkbox{{ $id }}">
																				{{ $name }}
																			</label>
																		</div>	
																	@endforeach
																	@if ($errors->has('roles'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Selecciona al menos un rol.</li>
																					</ul>
																				</div>
																		@endif
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group mb-30" {{ $errors->has('allow_ticket') ? ' has-error has-danger' : '' }}>
																	<label class="control-label mb-10 text-left">Recibe tickets</label>
																	<select class="form-control" name="allow_ticket" >
																		<option disabled value="" >¿El usuario puede recibir tickets?</option>
																			<option value="0">No</option>
																			<option value="1">Si</option>
																	</select>
																		@if ($errors->has('allow_ticket'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Indica si el usuario puede recibir tickets.</li>
																					</ul>
																				</div>
																		@endif
																</div>
															</div>
														</div>
														<!-- row -->
															<div class="row">
																<div class="col-md-6 {{ $errors->has('email') ? ' has-error has-danger' : '' }}">
																	<div class="form-group mb-30">
																		<label class="control-label mb-10 text-left">Correo electrónico </label>
																		<div class="input-group">
																			<div class="input-group-addon"><i class="ti-email"></i></div>
																			<input type="text" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Correo electrónico">
																			@if ($errors->has('email'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>{!! $errors->first('email',':message') !!}</li>
																					</ul>
																				</div>
																			@endif
																		</div>
																</div>
															</div>
															<!--/span-->
															<div class="col-md-6">
																<div class="form-group {{ $errors->has('password') ? ' has-error has-danger' : '' }}">
																	<label class="control-label mb-10">Contraseña</label>
																	<div class="input-group">
																		<div class="input-group-addon"><i class="ti-lock"></i></div>
																		<input type="password" class="form-control" name="password" placeholder="contraseña segura">
																		@if ($errors->has('password'))
																				<div class="help-block with-errors">
																					<ul class="list-unstyled">
																						<li>Ingresa un password.</li>
																					</ul>
																				</div>
																			@endif
																	</div>
																</div>
															</div>
															<!--/span-->
														</div>
														<!-- /row -->
													<div class="form-actions">
														<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
														 <i class="fa fa-check"></i> <span>Guardar</span>
														</button>
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
					<div id="students" class="tab-pane pt-0 fade " role="tabpanel">
						<!-- content student -->
						<!-- Row -->
						<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-default card-view">
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="form-wrap">
												@if(session()->has('student-save') == 1)
													<div class="alert alert-success alert-dismissable">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<i class="zmdi zmdi-check pr-15 pull-left"></i>
														<p class="pull-left">El alumno fue agregado correctamente.</p> 
														<div class="clearfix"></div>
													</div>
												@endif
												<form action="{{ route('create-students') }}" method="POST">
													{{ csrf_field() }}
													<h6 class="txt-dark capitalize-font">
														<i class="zmdi zmdi-account-add mr-10"></i>Crear Alumnos</h6>
													<hr class="light-grey-hr"/>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group {{ $errors->has('name') ? ' has-error has-danger' : '' }}">
																<label class="control-label mb-10">Nombre(s)</label>
																<input type="text" class="form-control" name="name" placeholder="Nombre del usuario">
																@if ($errors->has('name'))
																	<div class="help-block with-errors">
																		<ul class="list-unstyled">
																			<li>Ingresa el nombre del alumno.</li>
																		</ul>
																	</div>
																@endif
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group {{ $errors->has('last_name') ? ' has-error has-danger' : '' }}">
																<label class="control-label mb-10">Apellido Paterno</label>
																<input type="text" class="form-control" name="last_name" placeholder="Apellido paterno">
																@if ($errors->has('name'))
																	<div class="help-block with-errors">
																		<ul class="list-unstyled">
																			<li>Ingresa el apellido paterno del alumno.</li>
																		</ul>
																	</div>
																@endif
															</div>
														</div>
														<!--/span-->
													</div>
														<!-- Row -->
														<div class="row">
															<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Apellido Materno</label>
																		<input type="text" class="form-control" name="second_last_name" placeholder="Campo opcional">
																	</div>
																</div>
															<div class="col-md-6">
																<div class="form-group {{ $errors->has('birthday') ? ' has-error has-danger' : '' }}">
																	<label class="control-label mb-10">Fecha de nacimiento</label>
																	<input type="text" placeholder="aaaa-mm-dd" name="birthday" data-mask="9999-99-99" class="form-control">
																	@if ($errors->has('birthday'))
																	<div class="help-block with-errors">
																		<ul class="list-unstyled">
																			<li>Ingresa una fecha valida.</li>
																		</ul>
																	</div>
																	@endif
																</div>
															</div>
														</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group mb-30">
														<label class="control-label mb-10 text-left">Sexo</label>
														<div class="radio radio-info">
															<input type="radio" name="gender" value="F" checked="">
															<label for="radio1">
																F
															</label>
														</div>
														<div class="radio radio-info">
															<input type="radio" name="gender"  value="M">
															<label for="radio2">
																M
															</label>
														</div>	
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group {{ $errors->has('nationality') ? ' has-error has-danger' : '' }}">
														<label class="control-label mb-10">Nacionalidad</label>
															<input type="text" class="form-control" name="nationality" placeholder="Mexicana">
															@if ($errors->has('nationality'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa la nacionalidad del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
												<!--/span-->
											</div>
											<!--/row-->
											<div class="row">
												
												<div class="col-md-6">
													<div class="form-group {{ $errors->has('department_id') ? ' has-error has-danger' : '' }}">
														<label class="control-label mb-10"> Departamento </label>
														<select class="form-control" name="department_id" data-placeholder="Choose a Category" tabindex="1">
															<option value=""></option>
																@foreach($departments as $department)
																	<option value="{{ $department->id }}">{{ $department->name }}</option>
																@endforeach
														</select>
														@if ($errors->has('department_id'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa el departamento del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
											</div>
											<!-- row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group mb-30 {{ $errors->has('grade') ? ' has-error has-danger' : '' }}">
															<label class="control-label mb-10 text-left">Grado </label><input type="text" class="form-control" name="grade" placeholder="9º">
															@if ($errors->has('grade'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa el grado del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
													<div class="col-md-6">
														<div class="form-group mb-30 {{ $errors->has('group') ? ' has-error has-danger' : '' }}">
															<label class="control-label mb-10 text-left">Grupo </label>
															<input type="text" class="form-control" name="group" placeholder="A">
															@if ($errors->has('group'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa el grupo del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
											
											</div>

											<!-- row -->
											<!-- row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group mb-30 {{ $errors->has('matricula') ? ' has-error has-danger' : '' }}">
															<label class="control-label mb-10 text-left">Matricula </label>
															<input type="text" class="form-control" name="matricula" placeholder="19-9999-9">
															@if ($errors->has('matricula'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa la matricula del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
													<div class="col-md-6">
														<div class="form-group mb-30 {{ $errors->has('email') ? ' has-error has-danger' : '' }}">
															<label class="control-label mb-10 text-left">Correo electrónico </label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-email"></i></div>
																<input type="text" class="form-control" name="email" placeholder="Correo electrónico">
															</div>
															@if ($errors->has('matricula'))
																<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>Ingresa el correo del alumno.</li>
																	</ul>
																</div>
															@endif
													</div>
												</div>
											
											</div>

											<!-- row -->
												<div class="row">
												
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group {{ $errors->has('password') ? ' has-error has-danger' : '' }}">
														<label class="control-label mb-10">Contraseña</label>
														<div class="input-group">
															<div class="input-group-addon"><i class="ti-lock"></i></div>
															<input type="password" class="form-control" name="password" placeholder="contraseña segura" required="">
															 
														</div>
														@if ($errors->has('password'))
														<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>{{ $errors->first('password') }}</li>
																	</ul>
																</div>
                                   
                                @endif
													</div>
												</div>
												<!--/span-->

												 <div class="col-md-6">
												 	<div class="form-group {{ $errors->has('password') ? ' has-error has-danger' : '' }}">
												 		<label class="control-label mb-10">Repetir contraseña</label>
												 		<div class="input-group">
												 			<div class="input-group-addon"><i class="ti-lock"></i></div>
												 			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
												 		</div>
												 		@if ($errors->has('password'))
														<div class="help-block with-errors">
																	<ul class="list-unstyled">
																		<li>{{ $errors->first('password_confirmation') }}</li>
																	</ul>
																</div>
                                   
                                @endif
												 			
												 	</div>
                                
                            </div>
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
	
		<!-- Switchery JavaScript -->
		<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

		@endpush
	@endsection