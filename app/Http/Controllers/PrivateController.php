<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function private()
    {
        if(!Auth::check()){
            return redirect(route('user.login'));
        }
        $user = Auth::user();
        return view('private', compact('user'));    }
}
