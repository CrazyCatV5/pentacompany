<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        $validateFields = $request->validate([
            'login' => 'required|min:3',
            'name' => 'required|min:3',
            'lname' => 'required|min:3',
            'mname' => 'required|min:3',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5'
        ]);

        $user = new User();
        $user->login = $validateFields['login'];
        $user->first_name = $validateFields['name'];
        $user->last_name = $validateFields['lname'];
        $user->middle_name = $validateFields['mname'];
        $user->number = $validateFields['number'];
        $user->gender = $validateFields['gender'];
        $user->email = $validateFields['email'];
        $user->password = $validateFields['password'];
        $user->save();
        if($user){
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'error'
        ]);
    }
}
