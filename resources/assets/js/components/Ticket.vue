<template>
	<form action="#" method="POST">
		<input type="hidden" name="_token" value="LnwT1ABZsrNnPy3lYFUdJ5XfKrR7xLESUnA2HJKn">
		<h6 class="txt-dark capitalize-font">
			<i class="zmdi zmdi-account-add mr-10"></i>Crear Ticket</h6>
		<hr class="light-grey-hr">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group ">
					<label class="control-label mb-10">Seleciona un Departamento</label>
					<select class="form-control select2">
						<option>Selecciona</option>
						<option value=""></option>
					</select>
				</div>
			</div>
			<!--/span-->
			<div class="col-md-6 ">
				<div class="form-group ">
					<label class="control-label mb-10">Seleciona un Usuario</label>
					<select class="form-control select2">
						<option>Selecciona</option>
						<option value="">Hugo Flores | hflores@itjvallereal.edu.mx </option>
						<option value="">Pablo Vieyra | pvieyra@itjvallereal.edu.mx </option>
						<option value="">Israel San Luis | igarcia@itjvallereal.edu.mx </option>
						<option value="">Moises Camara | mcamara@itjvallereal.edu.mx </option>
						<option value="">Saul Fernandez | sfernandez@itjvallereal.edu.mx </option>
					</select>
				</div>
			</div>
			<!--/span-->
		</div>
		<!-- Row -->
		<div class="row">
			<div class="col-md-6">
					<div class="form-group ">
						<label class="control-label mb-10">Categoria</label>
						<select class="form-control select2">
						<option>Selecciona</option>
						<option value="">Smart </option>
						<option value="">Impresoras </option>
						<option value="">Configuración , Instalación de Software </option>
						<option value="">Reparación de equipo</option>
						<option value="">Inconvenientes de internet</option>
						<option value="">Excel</option>
						<option value="">Servo</option>
					</select>
					</div>
				</div>
			<div class="col-md-6">
				<div class="form-group ">
						<label class="control-label mb-10">Prioridad</label>
						<select class="form-control select2">
						<option>Selecciona</option>
						<option value="">Baja </option>
						<option value="">Alta </option>
					</select>
					</div>
			</div>
		</div>
	<!-- row -->

	<!-- Row-->
		<div class="row">
			<div class="col-md-12 ">
				<div class="form-group mb-30">
			<label class="control-label mb-10 text-left">Subir archivos</label>
			<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
				<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
				<input type="file" name="...">
				</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
			</div>
		</div>
		</div>

	</div>
				<!-- /row -->


				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
			<label class="control-label mb-10 text-left">Detalle del ticket</label>
			<textarea class="form-control" rows="5"></textarea>
		</div>
					</div>
				</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left">
				 <i class="fa fa-check"></i> <span>Guardar</span>
				</button>
				<button type="button" class="btn btn-warning pull-left">Cancelar</button>
				<div class="clearfix"></div>
			</div>
	</form>
</template>

<script>

	import axios from 'axios'
    export default {
    	data(){
    		return {
    			sections : [],
    			section:''
    		}
    	},

    	created:function(){
    		this.getSections();
    	},

    	methods:{

    		getSections:function(){
    			var urlSections = '/ultraportal/public/staff/get-sections';
    			axios.get(urlSections).then(response => {

    				console.log(response);
    				this.sections = response.data;
    			});
    		}
    	}
    }
</script>
