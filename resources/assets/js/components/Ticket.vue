<template>
	<form action="" method="POST" enctype="multipart/form-data" v-on:submit.prevent="sendTicket()">
		<input type="hidden" name="_token" value="LnwT1ABZsrNnPy3lYFUdJ5XfKrR7xLESUnA2HJKn">
		<h6 class="txt-dark capitalize-font">
			<i class="zmdi zmdi-account-add mr-10"></i>Crear Ticket</h6>
		<hr class="light-grey-hr">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group" :class="{'has-error has-danger':errors.userTicket }">
					<input type="hidden" name="user_send" v-model="userSend">
					<label class="control-label mb-10">Seleciona un Usuario</label>
					<v-select :on-search="getUsers" :options="users" :onChange="selectUser"
						placeholder="Buscar usuarios" label="full_name">
					</v-select>
					<span class="help-block" v-if="errors.userTicket">No has seleccionado ningun usuario </span>
				</div>
			</div>
			<!--/span-->
		</div>
		<!-- Row -->
		<div class="row">
			<div class="col-md-6">
				<div class="form-group" :class="{'has-error has-danger':errors.category}">
					<label class="control-label mb-10">Categoría</label>
					<select class="form-control" v-model="category" @change="cleanError('category')">
						<option disabled value="">Seleccione una categoría </option>
						<option v-for="category in categories" v-text="category.name" v-bind:value="category.id">
						</option>
					</select>
					<span class="help-block" v-if="errors.category">No has seleccionado niguna categoría</span>
				</div>
			</div>
			<div class="col-md-6">
			<div class="form-group" :class="{'has-error has-danger':errors.civil_protection}">
				<label class="control-label mb-10">Protección Civil</label>
				<select class="form-control" v-model="civil_protection" @change="cleanError('civil_protection')">
					<option disabled value="">¿Se corre algun riesgo?</option>
					<option value="0">No</option>
					<option value="1">Si</option>
					</option>
				</select>
				<span class="help-block" v-if="errors.civil_protection">Indica si tu ticket tiene que ver con protección civil</span>
				</div>
			</div>
		</div>
	<!-- row -->

	<!-- Row-->
		<div class="row">
			<div class="col-md-12 ">
				<div class="form-group mb-30">
			<label class="control-label mb-10 text-left">Subir archivos</label>
			<input class="form-control" type="file" ref="files"  multiple="multiple" v-on:change="handleFileUploads()">
		</div>
		</div>

	</div>
	<!-- /row -->
	<div class="row">
			<div class="col-md-12">
				<div class="form-group" :class="{'has-error has-danger':errors.description}">
				<label class="control-label mb-10 text-left">Detalle del ticket</label>
				<textarea class="form-control" rows="5" name="description" v-model="description" @focus="cleanError('description')"></textarea>
				<span class="help-block" v-if="errors.description">Añade una descripcion a tu ticket.</span>
			</div>
		</div>
	</div>
	<div class="">
		<button  class="btn btn-success btn-icon left-icon mr-10 pull-left">
		 <i class="fa fa-check"></i> <span>Guardar</span>
		</button>
		<button type="button"  class="btn btn-warning pull-left">Cancelar</button>
		<div class="clearfix"></div>
	</div>
	</form>
</template>

<script>

	import axios from 'axios'
	import vSelect from 'vue-select'
	import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})

    export default {
    	data(){
    		return {
    			user:'',
    			users:[],
    			categories:[],
    			idUser:'',
    			loading:'',
    			category:'',
    			description:'',
    			civil_protection:'',
    			userSend:'',
    			errors:[],
    			files:[]
    		}
    	},

    	components: {
    		vSelect
    	},

    	mounted(){
  			let me = this;
  			let url = '/ultraportal/public/staff/allCategories';
           
  			axios.get(url).then(function(response){
  				console.log(response.data);
  				me.categories = response.data;
  			})
  			.catch(function(error){
  				//console.log(error);
  			});

    	},

    	methods:{

    		dataReset(){
    			
    			this.civil_protection = '';
    			this.description = '';
    			this.files = [];
    			this.category = '';
    			this.users = [];
    			this.user = '';
    			//this.$refs.files.files = '';
    			const input = this.$refs.files;
	        input.type = 'text';
	        input.type = 'file';
    		},

    		selectUser(user){
    			this.errors = [];
    			this.loading = true;
    			this.idUser = user.id;
    		},

    		getUsers(search,loading){
    			let me=this;
    			var urlUsers = '/ultraportal/public/staff/selectUsers?keyword='+search;
    			loading(true)
    			axios.get(urlUsers).then(function(response){
    				let sUsers = response.data;
    				q:search
    				me.users = sUsers.users;
    				loading(false)
    			})
    			.catch(function(error){
    				
    			});
    		},

    		cleanError(obj){
    			this.errors[obj] = '';	
    		},

    		handleFileUploads(){
    			this.files = this.$refs.files.files;
    		},

    		sendTicket:function(){
    			this.$Progress.start();
    			this.errors = [];

    			let formData = new FormData();
    			let me = this;

    			for( var i = 0; i < this.files.length; i++ ){
  					let file = this.files[i];
  					formData.append('files[' + i + ']', file);
					}

					formData.append('userTicket', me.idUser);
					formData.append('category', me.category);
					formData.append('civil_protection', me.civil_protection);
					formData.append('description', me.description);

					//console.log(formData);

    			axios.post('/ultraportal/public/staff/tickets',
						
						formData
    				
    			).then(function(response){
    				me.$Progress.finish();
    				me.dataReset();
  					//console.log(response);
  					swal({   
							title: "Enviado!",
				      type: "success",
							text: "Tu ticket se ha enviado correctamente",
							confirmButtonColor: "#2ecd99",
					  })
    			})
    			.catch(function(error){
    				me.$Progress.fail();
    				if(typeof(error.response.status) !== 'undefined'){
    					//error.response.status == 422)
    					me.errors = error.response.data.errors;
    				}
    			});
    		}

    		
    	}
    };

</script>
