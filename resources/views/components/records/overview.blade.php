<div class="card shadow h-100">
	<div class="card-header">
		<h4 class="mt-2 text-center">
			Records Overview Report
		</h4>
	</div>

	<div class="card-body">
		@if(Auth::user()->role == 3)
		<p>
			Total submissions count: <b>{{$users_overview['supervisors_count'] ?? '00'}}</b>
		</p>

		<p>
			Overal grade: <b>{{$users_overview['students_count'] ?? '00'}}</b>
		</p>

		@endif

		<h5>
			Create New	
		</h5>

		@if(Auth::user()->role == 3)
		<p>
			To submit a new record, please click below;
		</p>

		@endif

		<a href="{{route('records.create')}}" class="btn btn-primary btn-md">
			<i class="fa fa-plus"></i> submit new
		</a>
	</div>
</div>