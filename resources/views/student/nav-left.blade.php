<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Portal</span>
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Workshops  </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="dashboard_dr" class="collapse collapse-level-1">
				<li>
					<a href="{{ route('student.workshops.index') }}">Seleccionar clases</a>
				</li>

				@if($user->student->workshopEnrollment())
					<li>
					<a href="{{ route('student.workshops.show',$user->student->workshopEnrollment()->subject_id ) }}">Tu clase</a>
				</li>
				@endif
				

			</ul>
		</li>
		<li><hr class="light-grey-hr mb-10"/></li>
	</ul>
</div>
<!-- /Left Sidebar Menu -->