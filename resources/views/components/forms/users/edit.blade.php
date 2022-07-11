<!-- <form wire:submit.prevent="save"> -->
	<form action="{{route('users.saveNote',$user['id'])}}" method="post">

	@csrf

	<div class="d-flex justify-content-center">
		<img src="{{$user['profile_photo_url'] ?? '/storage/default/default-icon.png'}}" class="rounded shadow-lg" width="100">
	</div>

	<h4 class="text-center mt-3">
		{{$user['name']}}
	</h4>

	@if(Auth::user()->role == 1)
	<div class="py-2 mt-2 border-top">
		<label>
			Leave a Note
		</label>
		<textarea class="form-control" name="user_note" wire:model.defer="user_note"></textarea>
	</div>
	@endif

	<div class="py-2">
		<table class="table responsive-fluid">
			<thead>
				@if($user['role'] == 1)
				<tr>
					<th>
						Supervisors
					</th>
					<th>
						Contacts
					</th>
				</tr>

				@elseif($user['role'] == 2)
				<tr>
					<th>
						Students
					</th>
					<th>
						Supervisors
					</th>
				</tr>

				@elseif($user['role'] == 3)
				<tr>
					<th>
						Records
					</th>
					<th>
						Reports
					</th>
				</tr>

				@endif
			</thead>
		</table>
	</div>

	@if(Auth::user()->role== 1)
	<div class="py-3 mt-2 border-top d-flex justify-content-center align-items-sm-center" type="submit">
		<button class="btn btn-lg btn-primary w-50 rounded-pill">
			<i class="fa fa-check-square"></i> save changes
		</button>
	</div>
	@endif


	<div class="pt-3 d-flex justify-content-center">
		<a href="{{ route('users') }}" class="btn btn-lg px-5 rounded-pill btn-dark">
			<i class="fa fa-arrow-left"></i> cancel
		</a>
	</div>

</form>