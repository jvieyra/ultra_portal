<template>
	<li class="dropdown alert-drp">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="zmdi zmdi-notifications top-nav-icon"></i>
				<span class="top-nav-icon-badge">1</span>
		</a>
		<ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
		<li>
			<div class="notification-box-head-wrap">
				<span class="notification-box-head pull-left inline-block">Notificaciones</span>
				<div class="clearfix"></div>
				<hr class="light-grey-hr ma-0"/>
			</div>
		</li>
		<li>
			<div class="streamline message-nicescroll-bar">
				<div class="sl-item">
					<a href="javascript:void(0)">
						<div class="icon bg-green">
							<i class="zmdi zmdi-flag"></i>
						</div>
						<div class="sl-content">
							<span class="inline-block capitalize-font  pull-left truncate head-notifications">
							Tienes tareas pendientes</span>
							<span class="inline-block font-11  pull-right notifications-time">2pm</span>
							<div class="clearfix"></div>
							<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus .</p>
						</div>
					</a>
				</div>
					<hr class="light-grey-hr ma-0"/>
					<div class="sl-item">
						<a href="javascript:void(0)">
							<div class="icon bg-yellow">
								<i class="zmdi zmdi-trending-down"></i>
							</div>
							<div class="sl-content">
								<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Servidor no responde responding</span>
								<span class="inline-block font-11 pull-right notifications-time">1pm</span>
								<div class="clearfix"></div>
								<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus ..</p>
							</div>
						</a>
					</div>
					<hr class="light-grey-hr ma-0"/>
					<div class="sl-item">
						<a href="javascript:void(0)">
							<div class="icon bg-blue">
								<i class="zmdi zmdi-email"></i>
							</div>
							<div class="sl-content">
								<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 nuevos  tickets</span>
								<span class="inline-block font-11  pull-right notifications-time">4pm</span>
								<div class="clearfix"></div>
								<p class="truncate"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus ..</p>
							</div>
						</a>
					</div>
					<hr class="light-grey-hr ma-0"/>
					<div class="sl-item">
						<a href="javascript:void(0)">
							<div class="sl-avatar">
								<img class="img-responsive" src="#" alt="avatar"/>
							</div>
							<div class="sl-content">
								<span class="inline-block capitalize-font  pull-left truncate head-notifications">Usuario Demo</span>
								<span class="inline-block font-11  pull-right notifications-time">1pm</span>
								<div class="clearfix"></div>
								<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							</div>
						</a>
					</div>
					<hr class="light-grey-hr ma-0"/>
					<div class="sl-item">
						<a href="javascript:void(0)">
							<div class="icon bg-red">
								<i class="zmdi zmdi-storage"></i>
							</div>
							<div class="sl-content">
								<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">Tienes bajas en inventario.</span>
								<span class="inline-block font-11  pull-right notifications-time">1pm</span>
								<div class="clearfix"></div>
								<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse deleniti at illo vel fuga minus .</p>
							</div>
						</a>
					</div>
				</div>
			</li>
			<li>
				<div class="notification-box-bottom-wrap">
					<hr class="light-grey-hr ma-0"/>
					<a class="block text-center read-all" href="/ultraportal/public/staff/tickets"> Leer Todas </a>
					<div class="clearfix"></div>
				</div>
			</li>
		</ul>
	</li>
</template>

<script>
	import axios from 'axios'

  export default {
    mounted() {
      axios.get('/ultraportal/public/staff/tickets').then(res =>{
      	console.log(res.unreadNotifications);

      });
    }
  };
</script>