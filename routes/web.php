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

// Route::get('/login', 'UsersController@login')->middleware('cors');
Route::post('/client/register', 'UsersController@register')->middleware('cors');

Route::post('/client/login', 'UsersController@login')->middleware('cors');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

