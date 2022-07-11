<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Records extends Component
{
	public $title; //Current page title
	public $role; //Current user role
	public $submitted_records = []; //Student records list
	public $submitted_records_profile; //Student submissions profile

    public function render()
    {
        return view('livewire.records');
    }

    public function mount()
    {
		# code...
    	$this->role = Auth::user()->role;
    	switch (Auth::user()->role) { 
			case 1:
    			# code...
    		$this->title="Access Denied";
    			break;
    		case 2:
    			# code...
    		$this->title="Students Records";
    			break;

    		case 3:
    			# code...
    		$this->title="Submitted Records";
    			break;
    		
    		default:
    			# code...
				break;
			}
    	
    }
}
