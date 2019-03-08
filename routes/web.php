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

Route::get('/sistemas', function () {
    return view('sistemas');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',function () {
    return view('layouts/index');
})->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('instructores', 'InstructorController');
    Route::resource('estudiantes', 'EstudianteController');
});

