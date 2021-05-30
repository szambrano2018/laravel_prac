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

Route::get('/views_prac/mostrar', 'practicaController@index');
Route::get('/views_prac/insertar', 'practicaController@create');
Route::post('/views_prac/guardar', 'practicaController@guardar');
Route::get('/views_prac/jquery_guarda', 'practicaController@guardarjquery');
Route::get('/views_prac/formactualiza/{id}', 'practicaController@formactualiza');
Route::get('/views_prac/actualizando', 'practicaController@actualizaractualjquery');

