<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    
    public function user_edit(Request $request, $id)
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.userAcc-edit')->with('user', $user);
    }

    public function user_update(Request $request, $id)
    {
        $this->validate($request,[ 
            'name' => 'required|unique:users|min:3|max:20|regex:/(^[A-Za-z0-9_]+$)+/', 
            'phone' => 'required|regex:/(^[0-9-+]+$)+/',
            'email' => 'required|unique:users|email',
            ]);  
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->update();

        return redirect('/blog')->with('status', 'Your User data has been updated!');
    }
}

