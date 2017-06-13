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

/*Route::get('/', function () {
    return view('welcome');
});*/

//pagina web
Route::get('/', 'WebpageController@index');

Route::get('/login', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/room','RoomController@index');



Route::resource('user', 'UserController');
Route::get('/user', 'UserController@index')->middleware('auth');
Route::post('/editUser', 'UserController@edit')->middleware('auth');
Route::post('/addUser', 'UserController@store')->middleware('auth');
Route::post('/deleteUser', 'UserController@deleteUser')->middleware('auth');

Route::resource('/reservation','ReservationController');
Route::get('/reservation/create', 'ReservationController@create');
Route::post('/reservation/store','ReservationController@store');
Route::post('/reservation/register', 'ReservationController@reservationRegister');
Route::get('/buscarCliente', 'ReservationController@autocompleteCliente');
Route::post('/roomsearch', 'ReservationController@searchRooms');

Route::get('/list','ListController@index');
// ruta de autocomplete
Route::get('/autocomplete','ReservationController@autocomplete');
// ruta para adicionar el tipo de habitacion
Route::post('/addreservation', 'ReservationController@addReservation');
Route::get('/pack','PackController@index');

Route::resource('pack','PackController');
Route::post('/deletePack','PackController@destroy');
Route::post('/editPack','PackController@update');

