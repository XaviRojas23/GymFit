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

Route::get('/home' , [App\Http\Controllers\GymController::class, 'index'])->name('gym');
Route::get('/GymFit/signActivities' , [App\Http\Controllers\SignController::class, 'index'])->name('sign');
Route::get('/GymFit/create' , [App\Http\Controllers\SignController::class, 'create'])->name('create');

