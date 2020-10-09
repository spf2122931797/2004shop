<?php

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

Route::get('/index',function(){
   echo 123;
});

Route::get('/register','Admin\RegisterController@register');
Route::post('/registerdo','Admin\RegisterController@registerdo');
Route::get('/login/login','Admin\LoginController@login');
Route::post('/logindo','Admin\LoginController@logindo');

