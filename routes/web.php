<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('login', 'App\Http\Controllers\AuthController@checkLogin');

Route::get('register', 'App\Http\Controllers\UserController@create')->name('register');
Route::post('register', 'App\Http\Controllers\UserController@store');

Route::get('mypage', 'App\Http\Controllers\UserController@index')->name('myPage');

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
