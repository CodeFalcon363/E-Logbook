<div class="row justify-content-sm-center my-2">
	<div class="col-12 col-sm-5">
		<x-cards.default>
			<x-cards.card-header>
				<h4 class="mt-2 text-center">
					Create New User
				</h4>
			</x-cards.card-header>

			<div class="card-body">
				<div wire:loading wire:target="save">
					<p class="text-center">
						Creating new user account...
					</p>
				</div>
				<div class="d-block text-center text-success">
					{{$status_msg ?? ''}}
				</div>
				@if(Auth::user()->role == 1)
				<x-forms.users.create />

				@elseif(Auth::user()->role == 2)
				<x-forms.users.create />
				@else
				<x-alerts.access />
				@endif


			</div>
		</x-cards.default>
	</div>
</div>
