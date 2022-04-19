<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WisatasController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('exploKre', [ PageController::class, 'explore' ])->name('explore');
Route::get('index', [ PageController::class, 'index' ])->name('index');
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('explore', [WisatasController::class, 'wisataList']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/index', function() {
    return view('index');
})->name('index')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

// Route::get('destination', [WisatasController::class, 'index']);
Route::resource('wisatas', \App\Http\Controllers\WisatasController::class);
// Route::post('login-user', [LoginController::class, 'login_url'])->name('authLogin');