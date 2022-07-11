<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Records;
use App\Models\User;

class Dashboard extends Component
{
	public $role = "Student";
	public $supervisors;
	public $students;


    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount()
    {
    	# code...
    	$this->students = User::where('role', 3)->count();
    	$this->supervisors = User::where('role', 2)->count();
    }




}
