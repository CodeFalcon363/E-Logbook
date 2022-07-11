<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
	public $name;
	public $email;
	public $password;
	public $supervisor;
	public $password_confirmation;
	public $status_msg;


    public function render()
    {
        return view('livewire.users.create');
    }

    protected function rules()

    {

        if (Auth::user()->role == 1) {
        	# code...
        	return [
	            'name' => 'required|min:6',
	            'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
	            'password' => 'required|min:6',
	        	'supervisor' => 'required|numeric',
	        	'password_confirmation' => 'required',
	        ];
        }

        return [
            'name' => 'required|min:6',
            'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
            'password' => 'required|min:6',
        	'password_confirmation' => 'required',
        ];

    }

    public function save()
    {
    	# code...
    	$this->validate();

    	//Save data!
    	if (Auth::user()->role == 1) {
    		# code...Admin
    		User::create([
	            'name' => $this->name,
	            'email' => $this->email,
	            'password' => Hash::make($this->password),
	            'supervisor' => $this->supervisor,
	            'role' => 2,

	        ]);
	        $this->reset();
        	$this->status_msg = "User saved with success!";
    	}else if(Auth::user()->role == 2){
    		User::create([
	            'name' => $this->name,
	            'email' => $this->email,
	            'password' => Hash::make($this->password),
	            'role' => 3,

	        ]);
	        $this->reset();
        	$this->status_msg = "User saved with success!";
    	}else{
    		$this->reset();
        	$this->status_msg = "Admin/Supervisor account required!";
    	}
    	
		return redirect()->route('users');
    }
}
