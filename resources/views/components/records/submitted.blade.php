<div class="p-2 rounded  shadow border h-100">
	<x-records.search-form />
	<table class="table clearfix responsive-fluid overflow-auto">
		<thead>
			<tr>
				<th>
					Name
				</th>
				<th>
					Submitted On
				</th>
				@if(Auth::user()['role'] == 1)
				<th>
					Student
				</th>
				@endif
				<th>
					Grade
				</th>
				<th>
					Comments
				</th>
				<th>
					Actions
				</th>
			</tr>
		</thead>

		<tbody>
			@if($submissions != 0)
				@foreach ($submissions as $submission)   
					<x-records.profile-display :$submission="$submission" />
		        @endforeach
		    @else
		    <x-records.empty-state />
			@endif
		</tbody>
	</table>
</div>