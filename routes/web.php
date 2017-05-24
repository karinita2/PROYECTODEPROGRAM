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
Route::post('/addPack', 'PackController@store');
Route::post('/deleteUser', 'UserController@deleteUser');

Route::resource('/reservation','ReservationController');
Route::post('/reservation/store','ReservationController@store');


Route::get('/list','ListController@index');

// ruta de autocomplete
Route::get('/autocomplete','ReservationController@autocomplete');
// ruta para adicionar el tipo de habitacion
Route::post('/addreservation', 'ReservationController@addReservation');
Route::get('/pack','PackController@index');

Route::resource('pack','PackController');
Route::post('/deletePack','PackController@destroy');
Route::post('/editPack','PackController@update');