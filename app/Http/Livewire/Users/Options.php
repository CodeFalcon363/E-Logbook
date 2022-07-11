<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Options extends Component
{
	public $user; //Current active user
	public $user_note;//User admin/supervisor note
    public function render()
    {
        return view('livewire.users.options');
    }


    public function save()
    {
    	# code...Save user profile update!
    }
}
