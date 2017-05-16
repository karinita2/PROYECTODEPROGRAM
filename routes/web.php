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

Route::get('/login', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/room','RoomController@index');

/** Eliminar */
// Route::get('/user', 'UserController@index');

Route::resource('user', 'UserController');

Route::post('/editUser', 'UserController@edit');
Route::post('/addUser', 'UserController@store');
Route::post('/deleteUser', 'UserController@deleteUser');

Route::get('/reservation','ReservationController@index');

Route::get('/list','ListController@index');