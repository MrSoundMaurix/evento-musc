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

Route::view('sistemas-conferencias', 'sistemasc');
Route::view('sistemas-talleres', 'sistemast');
Route::view('publicidad-conferencias', 'publicidad');
Route::view('contabilidad-conferencias', 'contabilidad');
Route::view('biotecnologia-conferencias', 'biotecnologia');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/* Route::get('/admin-dashboard',function () {
    return view('layouts/index');
})->middleware('auth'); */

Route::group(['middleware' => ['auth']], function () 
{
    Route::group(['middleware' => 'role:administrador|root'], function () 
    {
        Route::view('admin-home', 'Administrador.home');
        Route::get('calendario', 'AdministradorController@calendario');
        Route::resource('instructores', 'InstructorController');
        Route::get('agregar-instructor', 'InstructorController@create');
        Route::resource('usuarios', 'EstudianteController');
        Route::get('agregar-usuario', 'EstudianteController@create');
        Route::resource('talleres', 'TallerController');
        Route::get('agregar-taller', 'TallerController@create');
        Route::resource('conferencias', 'ConferenciaController');
        Route::get('agregar-conferencia', 'ConferenciaController@create');
    });
    Route::group(['middleware' => 'role:usuario'], function () 
    {   
       // Route::view('usuario-home', 'Usuario.home'); 
    });
});

