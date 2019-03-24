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
Route::get('/p', function () {
   // return view('layouts.personalizar');
   return view('layouts.pdf');
});

Route::get('/home', function () {
    if( Auth::user() )
        if( Auth::user()->hasRole('administrador') || Auth::user()->hasRole('root') ) //se valida el tipo de usuario
        return redirect('/admin-home');
        elseif(Auth::user()->hasRole('usuario'))
        return redirect('/asistente-talleres');
    else
    return redirect('/login');


});

Route::prefix('conferencias/')->group(function () {
    Route::get('sistemas', 'IndexController@sistemasc');
    Route::get('publicidad', 'IndexController@publicidadc');
    Route::get('contabilidad', 'IndexController@contabilidad');
    Route::get('biotecnologia', 'IndexController@biotecnologia');

});

Route::prefix('talleres/')->group(function () {
    Route::get('sistemas', 'IndexController@sistemast');
    Route::get('publicidad', 'IndexController@publicidadt');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/* Route::get('/admin-dashboard',function () {
    return view('layouts/index');
})->middleware('auth'); */

Route::group(['middleware' => ['auth']], function ()
{
    Route::group(['middleware' => 'role:administrador|root'], function ()
    {
        Route::get('admin-home', 'Administrador\AdministraciónController@home');
        Route::get('admin-calendario', 'Administrador\AdministraciónController@calendario');
        Route::resource('admin-instructores', 'Administrador\InstructorController');
        Route::get('admin-instructores-l', 'Administrador\InstructorController@indexLista');
        Route::get('admin-instructores-pdf/{id}', 'Administrador\InstructorController@pdf_cv');
        Route::get('admin-instructores-destroy/{id}', 'Administrador\InstructorController@destroy');
        Route::resource('admin-usuarios', 'Administrador\UsuarioController');
        Route::resource('admin-talleres', 'Administrador\TallerController');
        Route::resource('admin-conferencias', 'Administrador\ConferenciaController');
        Route::resource('admin-espacios', 'Administrador\EspacioController');
        Route::resource('admin-horarios', 'Administrador\Configuración\HorarioController');



    });
    Route::group(['middleware' => 'role:usuario'], function ()
    {
       Route::view('assistant-home', 'Asistente.home');
       Route::resource('asistente-conferencia','Asistente\AsistenteConferenciaController');
       Route::resource('asistente-talleres','Asistente\TallerController');
       Route::get('asistente-mistalleres', 'Asistente\TallerController@mistalleres');
       Route::get('cancelar-taller/{id}', 'Asistente\TallerController@cancelar');

    });
});

