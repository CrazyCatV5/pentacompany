<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('welcome');
})->name('start');

Route::name('user.')->group(function (){
    Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login',function (){
       if(Auth::check()){
           return redirect(route('main'));
       }
       return view('login');
    })->name('login');
    Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);
    Route::get('/logout',function (){
        Auth::logout();
        return redirect(route('main'));
    })->name('logout');
    Route::get('registration',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');
    Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
    Route::get('/private', [\App\Http\Controllers\PrivateController::class, 'private'])->name('private');
    Route::get('/private_change', [\App\Http\Controllers\PrivateController::class, 'private_change'])->name('private_change');
    Route::post('/private_change', [\App\Http\Controllers\PrivateController::class, 'update'])->name('update');

});
Route::get('/main',[MainController::class, 'main'])->name('main');
Route::post('/main',[MainController::class, 'buy'])->name('buy');
Route::post('/private',[\App\Http\Controllers\PrivateController::class, 'delete'])->name('delete');
Route::get('/admin',[\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::post('/admin',[\App\Http\Controllers\AdminController::class, 'tour_delete'])->name('tour_delete');
Route::get('/admin_change',[\App\Http\Controllers\AdminController::class, 'admin_change'])->name('admin_change');
Route::get('/main/{id}', [\App\Http\Controllers\HotelController::class, 'getDetails'])->name('hotel_item');
