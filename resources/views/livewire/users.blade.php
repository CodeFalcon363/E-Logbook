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
						
						<x-users.display :users="$users_list"/>
					</div>

					<div class="col-12 col-sm-5">
						<x-users.overview :users_overview="$users_overview"/>
					</div>
				</div>

			</div>

		</x-cards.default>
	</div>
</div>
