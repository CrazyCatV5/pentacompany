<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('private', compact('user'));
    }
    public function private_change(){
        if(!Auth::check()){
            return redirect(route('user.login'));
        }
        $user = Auth::user();
        return view('private_change', compact('user'));
    }
    public function update(Request $request){

        $validateFields = $request->validate([
            'login' => 'required|min:3',
            'name' => 'required|min:3',
            'lname' => 'required|min:3',
            'mname' => 'required|min:3',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender' => 'required',
            'password' => 'required|confirmed|min:5'
        ]);

        $user = User::find(Auth::user()->id);
        $user->login = $validateFields['login'];
        $user->first_name = $validateFields['name'];
        $user->last_name = $validateFields['lname'];
        $user->middle_name = $validateFields['mname'];
        $user->number = $validateFields['number'];
        $user->gender = $validateFields['gender'];
        $user->password = $validateFields['password'];
        $user->save();
        if($user){
            return redirect()->to(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'error'
        ]);
    }
}
