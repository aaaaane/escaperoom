<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/inici',["as" => "inici", "uses" => 'IniciController@index']);

Route::get('/login', 'LoginController@index');
Route::get('/sales', 'SalesController@index');
Route::get('/condicionsLegals', 'CondicionsLegalsController@index');
Route::get('/gestioReserves', 'GestioReservesController@index');
Route::get('/gestioReserves/{id}', 'GestioReservesController@destroy');

Route::get('/pagUsuari', 'PagUsuariController@index');

Route::get('/sala1', 'sala1Controller@index');
Route::post('/sala1', 'sala1Controller@store'); 

Route::get('/sala2', 'sala2Controller@index');
Route::post('/sala2', 'sala2Controller@store'); 

Route::get('/sala3', 'sala3Controller@index');
Route::post('/sala3', 'sala3Controller@store'); 

Route::get('/reserva', 'ReservaController@index');
Route::post('/reserva', 'ReservaController@store');

Route::get('/updateUser', 'UpdateUserController@index');
Route::post('/updateUser', 'UpdateUserController@store');

Route::get('/dadesUsuari', 'DadesUsuariController@index');

Route::get('/veureReserves', 'VeureReservesController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');
