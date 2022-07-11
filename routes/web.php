<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Records;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('users');
    })->name('users');

    Route::get('/records', function () {
        return view('records');
    })->name('records');
    Route::get('/records/new', function () {
        return view('records.create');
    })->name('records.create');

    Route::get('/users/create', function () {
        return view('users.create');
    })->name('users.create');

    Route::get('/users/{id}/profile', function ($id) {
	    //Edit profile
    	return view('users.options', ['user' => User::findorfail($id)]);
	})->where('id', '[0-9]+')->name('users.options');

    Route::get('/users/{id}/delete', function ($id) {
	    //Delete Profile
        $user = User::findorfail($id);
        $user->delete();
        
        return redirect()->route('users');

	})->name('users.delete');


    Route::post('/users/{id}/note',function (Request $req, $id) { 

        User::where('id','=',$id)->update(['note'=>request()->user_note]);
        
        return redirect()->route('users');

    })->name('users.saveNote');

    Route::post('/records/save',function (Request $req) { 

    //    dd(request()->all());
            Records::create(request()->except('_token'));

            return redirect()->route('records');
    })->name('records.Save');
});
