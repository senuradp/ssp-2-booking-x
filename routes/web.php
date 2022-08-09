<?php

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dev', function () {
    dd(resolve('SSP2BookingX'));
    // debug((request()->all()));
    // dd(app(), resolve('view'));
    // $user = (new \App\Models\Auth\User)->first();
    // dd($user);
    // debug($user);
    // dd('dev');
});


Route::get('/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');
