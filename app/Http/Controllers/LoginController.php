<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect(route('main'));
        }
        $user = $request->only(['email', 'password']);
        if(Auth::attempt(['email' => $user['email'], 'password' => $user['password']])){
            return redirect(route('main'));
        }
        return redirect(route('user.login'))->withErrors(['error']);
    }
}
