<tr>
	<td>
		{{$submission['name']}}
	</td>
	<td>
		{{$user['email']}}
	</td>
	@if(Auth::user()['role'] == 1)
	<td>
		@if($submission['supervisor'] == 1)
		School-Based
		@elseif($user['supervisor'] == 2)
		Industrial
		@endif
	</td>
	@endif
	<td>
		{{$user['created_at']->format('F j, Y, g:i a')}}
	</td>
	<td>
		<a href="{{ route('users.options', ['id' => $user['id']]) }}" class="btn btn-primary py-1">
			<i class="fa fa-cog"></i>
		</a>
		<a href="{{ route('users.delete', ['id' => $user['id']]) }}" class="btn btn-danger py-1 ms-2">
			<i class="fa fa-trash"></i>
		</a>
	</td>
</tr>