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
// guest
Route::get('/', function () {
    return view('welcome');
})->name('home');

// sign in
Route::post('/register', 'AuthController@store');
Route::get('/logout', 'AuthController@destroy');
Route::post('/login', 'AuthController@login');
// user page
Route::get('/mypage', 'OrderController@index');

// admin page
Route::get('/admin/login', 'ClientController@login');
Route::post('/admin/login', 'ClientController@authenticate');