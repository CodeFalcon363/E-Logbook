<form wire:submit.prevent="save">
	@csrf
	<div class="py-2">
		<label>
			Name
		</label>
		@error('name') <span class="d-block text-danger">{{ $message }}</span> @enderror
		<input type="text" wire:model.defer="name" class="form-control">
	</div>

	<div class="py-2">
		<label>
			Email
		</label>
		@error('email') <span class="d-block text-danger">{{ $message }}</span> @enderror
		<input type="email" name="email" wire:model.defer="email" class="form-control">
	</div>

	<div class="py-2">
		<label>
			New Password
		</label>
		@error('password') <span class="d-block text-danger">{{ $message }}</span> @enderror
		<input type="password" class="form-control" wire:model.defer="password">
	</div>

	<div class="py-2">
		<label>
			Confirm Password
		</label>
		@error('password_confirmation') <span class="d-block text-danger">{{ $message }}</span> @enderror
		<input type="password" wire:model.defer="password_confirmation" class="form-control">
	</div>

	@if(Auth::user()->role == 1)
	<div class="py-2">
		<label>
			Supervisor
		</label>
		@error('supervisor') <span class="d-block text-danger">{{ $message }}</span> @enderror
		<select wire:model.defer="supervisor" class="form-control">
			<option>
				Click to select
			</option>
			<option value="1">
				Industry-Based
			</option>
			<option value="2">
				School Based
			</option>
		</select>
	</div>
	
	@endif


	<div class="py-3 d-flex justify-content-center">
		<button class="btn btn-primary w-75 text-uppercase rounded-pill btn-lg" type="submit">
			<i class="fa fa-check-square" wire:loading.remove></i>
			<i class="fa fa-spinner fa-spin" wire:loading></i> save
		</button>
	</div>

	<div class="py-2 d-flex justify-content-center">
		<a href="{{route('users')}}" class="btn btn-dark w-50 text-uppercase rounded-pill btn-lg">
			<i class="fa fa-arrow-left" ></i> cancel
		</a>
	</div>

</form>