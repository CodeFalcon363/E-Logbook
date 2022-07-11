<div class="card shadow h-100">
	<div class="card-header">
		<h4 class="mt-2 text-center">
			Users Overview Report
		</h4>
	</div>

	<div class="card-body">
		@if(Auth::user()->role == 1)
		<p>
			Total supervisors count: <b>{{$users_overview['supervisors_count'] ?? '00'}}</b>
		</p>

		<p>
			Total students count: <b>{{$users_overview['students_count'] ?? '00'}}</b>
		</p>
		@else
		<p>
			Users overview report available for admins only!
		</p>
		@endif

		<h5>
			Create New	
		</h5>

		<p>
			To create a new user account, click below;
		</p>

		<a href="{{route('users.create')}}" class="btn btn-primary btn-md">
			<i class="fa fa-plus"></i> create
		</a>
	</div>
</div>