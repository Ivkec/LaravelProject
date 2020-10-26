<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function registered()
    {  
        $users = User::orderBy('id','desc')->paginate(10); 
        return view('admin.register')->with('users', $users);
    }

    public function register_edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }

    public function register_update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->update();

        return redirect('/role-register')->with('status', 'Podaci ovog korisnika su uspešno izmenjeni!');
    }
    
    public function register_destroy(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-destroy')->with('users', $users);
    }

    public function register_delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'Korisnik je uspešno izbrisan!');
    }   
}
