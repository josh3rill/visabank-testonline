<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/new-login', function(){
    return view('newLogin');
});

Route::get('/new-register', function(){
    return view('newRegister');
});

Route::get('/new-forget', function(){
    return view('newForget');
});
Route::post('/logout', function(){
    return view('logout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', 'HomeController@uploadAvatar')->name('upload');
    //'HomeController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
