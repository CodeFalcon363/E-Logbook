<div class="row">
	<div class="col">
		<x-cards.default >
			<x-cards.card-header>
				<h4 class="text-center mt-2">
					{{$this->title}} 
				</h4>
			</x-cards.card-header>

			<div class="card-body">
				<div class="row align-items-sm-strech">
					
					<div class="col-12 col-sm-7">
						@if($role == 2)

						@endif

						@if($role == 3)
						<x-records.submitted :submissions="$submitted_records"/>
						@endif
						
					</div>

					<div class="col-12 col-sm-5">
						
						@if($role == 3)
						<x-records.overview :overview="$submitted_records_profile"/>
						@endif
					</div>
				</div>

			</div>

		</x-cards.default>
	</div>
</div>
