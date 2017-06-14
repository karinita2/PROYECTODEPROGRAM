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
Route::get('/reservation', 'ReservationController@index')->middleware('auth');
Route::get('/reservation/create', 'ReservationController@create');
Route::post('/reservation/store','ReservationController@store');
Route::get('/reservationcli','ReservationController@clientreservation');
Route::post('/reservation/register', 'ReservationController@reservationRegister');
Route::get('/buscarCliente', 'ReservationController@autocompleteCliente');
Route::post('/roomsearch', 'ReservationController@searchRooms');
Route::get('/reservations/{reservation}', 'ReservationController@editReservations');
Route::post('/addRoom', 'ReservationController@addRoom');
Route::post('/addServices', 'ReservationController@addServices');
Route::post('/deleteDetail', 'ReservationController@deleteDetail');
Route::get('/reservationList','ReservationController@lista');


Route::get('/list','ListController@index');
// ruta de autocomplete
Route::get('/autocomplete','ReservationController@autocomplete');
// ruta para adicionar el tipo de habitacion
Route::post('/addreservation', 'ReservationControllemiddleware(\'auth\')r@addReservation');
Route::get('/pack','PackController@index');
Route::post('/findUser','UserController@findUser');
Route::resource('pack','PackController');
Route::post('/addPack','PackController@store');
Route::post('/deletePack','PackController@destroy');
Route::post('/editPack','PackController@update');

// rutas para reservas grupales
Route::resource('/reservasgrupales','GroupController');
Route::get('/reservasgrupales', 'GroupController@index')->middleware('auth');
Route::post('/addUser2', 'GroupController@storeEncargado')->middleware('auth');
Route::get('/buscarEncargado', 'GroupController@autocompleteEncargado');
Route::post('/groupreservation/store','GroupController@store');
Route::post('/roomsearch2', 'GroupController@searchRooms');
Route::get('/groupreservations/{reservation}', 'GroupController@editReservations');
Route::post('/addreservation2', 'GroupController@addReservation');
Route::post('/addRoom2', 'GroupController@addRoom');
Route::post('/addAmbientes', 'GroupController@addAmbientes');


//ruta perfil usuario
Route::resource('/profile', 'ProfileController@index');
Route::get('/editProfile', 'ProfileController@edit');


