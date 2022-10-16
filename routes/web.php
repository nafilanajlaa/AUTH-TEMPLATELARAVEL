<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/welcome', [App\Http\Controllers\Template\DashboardController::class, 'index'])->name('welcome.index');

//belajar component laravel
// Route::get('/home', [App\Http\Controllers\BladeController::class, 'home'])->name('blade.home');
// Route::get('/detail', [App\Http\Controllers\BladeController::class, 'detail'])->name('blade.detail');
// Route::get('/setting', [App\Http\Controllers\BladeController::class, 'setting'])->name('blade.setting');


