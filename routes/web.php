<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdvertisementController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/create', [\App\Http\Controllers\AdvertisementController::class, 'create'])->name('create_advertisement');

Route::name('user.')->group(function (){
    Route::view('/private', 'auth.private')->middleware('auth')->name('private');

    Route::get('/login', function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('auth.login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

    Route::get('/logout',function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function () {
        if (Auth::check()){
            return redirect(route('user.private'));
        }
        return view('auth.registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save'])->name('registration');

});

//Route::get('user/recovery', [\App\Http\Controllers\LoginController::class, 'recovery'])->name('recovery');
Route::get('/', [HomeController::class , 'index'])->name('main_page');

