<form wire:submit.prevent="search_user">
<div class="input-group">
	<input type="search"  wire:model.defer="search_query" class="form-control @error('search_query') is-invalid @enderror"
	placeholder="Search users with email....">

	<button class="btn btn-primary" wire:click="search_user" type="submit">
		<div wire:loading wire:target="search_user">
			<i class="fa fa-spinner fa-spin"></i>
		</div>
		<div wire:loading.remove wire:target="search_user">
			<i class="fa fa-search"></i>
		</div>
	</button>

	<button class="btn btn-dark" wire:click="close_search" type="button">
		<div wire:loading wire:target="close_search">
			<i class="fa fa-spinner fa-spin"></i>
		</div>
		<div wire:loading.remove wire:target="close_search">
			<i class="fa fa-refresh"></i>
		</div>
	</button>
</div>
</form>