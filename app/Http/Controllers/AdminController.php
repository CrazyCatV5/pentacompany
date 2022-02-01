<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        if(!Auth::check()){
            return redirect(route('main'));
        }
        if(!Auth::user()->tour_manager){
            return redirect(route('main'));
        }
        return view('admin');

    }
    public function tour_delete(Request $request){
        if(!Auth::check()){
            return redirect(route('main'));
        }
        $Tour = Tour::all()->find($request->get('id'));
        $Tour->delete();
        return redirect()->to(route('admin'));

    }
    public function admin_change(){
        if(!Auth::check()){
            return redirect(route('main'));
        }
        return view('admin_change');

    }
}
