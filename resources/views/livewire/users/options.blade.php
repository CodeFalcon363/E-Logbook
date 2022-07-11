<div class="row justify-content-sm-center my-2">
	<div class="col-12 col-sm-5">
		<x-cards.default>
			<x-cards.card-header>
				<h4 class="mt-2 text-center">
					User Profile
				</h4>
			</x-cards.card-header>

			<div class="card-body">
				<div class="d-block text-center text-success">
					{{$status_msg ?? ''}}
				</div>
				<x-forms.users.edit :user="$user" />


			</div>
		</x-cards.default>
	</div>
</div>
