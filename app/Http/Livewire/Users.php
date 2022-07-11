<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Users extends Component
{

	public $title;
	public $users_list;
	public $users_overview;

	//Search
	public $search_query;

    protected function rules()

    {

        return [
            'search_query' => 'nullable|alpha_num',
        ];

    }

    public function render()
    {
        return view('livewire.users');
    }

    public function mount()
    {
    	# code...
    	$this->title = "Overview";
        $user = Auth::user();
        if ($user->role == 1) {
            # code...Admin
            $this->users_list = User::where('role', 2)
               ->orderByDesc('id')
               ->take(10)
               ->get();
        }elseif ($user->role == 2) {
            # code...Supervisor
            if ($user->supervisor == 1) {
                #School-based
                $this->users_list = User::where('role', 3)
               ->orderByDesc('id')
               ->take(10)
               ->get();
            }else{
                $this->users_list = false;
            }

        }else{
            $this->users_list = false;
        }
    }


    public function close_search()
    {
        # code...
        $this->title = "Overview";
        $user = Auth::user();
        if ($user->role == 1) {
            # code...Admin
            $this->users_list = User::where('role', 2)
               ->orderByDesc('id')
               ->take(10)
               ->get();
        }elseif ($user->role == 2) {
            # code...Supervisor
            if ($user->supervisor == 1) {
                #School-based
                $this->users_list = User::where('role', 3)
               ->orderByDesc('id')
               ->take(10)
               ->get();
            }else{
                $this->users_list = false;
            }

        }else{
            $this->users_list = false;
        }
        $this->search_query = "";
    }

    public function search_user()
    {
    	# code...
        $user = Auth::user();
    	$this->title = "Search Results";
        $this->validate();
         if ($user->role == 1) {
            # code...Admin
            $this->users_list = User::where('role', 2)
            ->where('email', 'LIKE', '%'.$this->search_query.'%')
               ->orderByDesc('id')
               ->take(10)
               ->get();
        }elseif ($user->role == 2) {
            # code...Supervisor
            if ($user->supervisor == 1) {
                #School-based
                $this->users_list = User::where('role', 3)
                ->where('email', 'LIKE', '%'.$this->search_query.'%')
               ->orderByDesc('id')
               ->take(10)
               ->get();
            }else{
                $this->users_list = false;
            }

        }else{
            $this->users_list = false;
        }

    }
}
