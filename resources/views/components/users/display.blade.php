<div class="p-2 rounded  shadow border h-100">
	<x-users.search-form />
	<table class="table clearfix responsive-fluid overflow-auto">
		<thead>
			<tr>
				<th>
					User Names
				</th>
				<th>
					Email Address
				</th>
				@if(Auth::user()['role'] == 1)
				<th>
					Supervisor
				</th>
				@endif
				<th>
					Created On
				</th>
				<th>
					Actions
				</th>
			</tr>
		</thead>

		<tbody>
			@if($users != false)
				@foreach ($users as $user)
		            <x-users.profile-display :user="$user" />
		        @endforeach
		    @else
		    <x-states.empty-user />
			@endif
		</tbody>
	</table>
</div>