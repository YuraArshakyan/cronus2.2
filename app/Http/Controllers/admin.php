<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Hash;

class admin extends Controller
{
    public function login(Request $request){
        $login = $request->all();
        if(Auth::attempt($login)){
            return redirect('/');
        }
        return redirect()->back()->with('status', 'You are not allowed to login');
    }
    public function logout(){
        session(flush());
        Auth::logout();
        return redirect('/');
    }
}
