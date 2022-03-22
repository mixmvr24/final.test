<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
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

Route::get('/', [HomeController::class, 'index'])->name('main_page');

Route::name('user.')->group(function () {
    Route::view('/private', 'auth.private')->middleware('auth')->name('private');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('auth.login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/recovery', [\App\Http\Controllers\LoginController::class, 'recovery'])->name('recovery');

    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('auth.registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save'])->name('registration');
});

Route::prefix('/profile')->name('profile.')->group(function (){

    Route::get('/create', function () {
        if (Auth::check()) {
            return view('user.create');
        }
        return view('auth.registration');
    })->name('create');

    Route::post('/create', [\App\Http\Controllers\CatalogController::class, 'create'])->name('create');

    Route::get('/user/info', [\App\Http\Controllers\AccountController::class, 'info'])->name('info');

    Route::get('/user/pm', [\App\Http\Controllers\AccountController::class, 'pm'])->name('pm');

    Route::get('/user/published', [\App\Http\Controllers\AccountController::class, 'published'])->name('published');
});

Route::get('/catalog/{category}/{product}',[CatalogController::class, 'product'])->name('product');
Route::get('/catalog/decor', [CatalogController::class, 'decor'])->name('category_decor');
Route::get('/catalog/electronics', [CatalogController::class, 'electronics'])->name('category_electronics');
Route::get('/catalog/services', [CatalogController::class, 'services'])->name('category_services');
Route::get('/catalog/appliances', [CatalogController::class, 'appliances'])->name('category_appliances');
Route::get('/allmess',[CatalogController::class, 'showAllMess'])->name('allmess');


//Route::prefix('/adm')->name('admin.')->group(function (){
//    Route::view('/', 'admin.dashboard');
//    Route::resources([
//        '/categories'=> CategoryController::class,
//        '/products'=> ProductController::class
//    ]);
//});

