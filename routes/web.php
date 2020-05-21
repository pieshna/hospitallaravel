<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/empleados', 'PacienteController@index');
//Route::get('/empleados/create', 'PacienteController@create');
//Route::get('/empleados/editar', 'PacienteController@edit');
Route::resource('paciente', 'PacienteController');
Route::resource('planta', 'PlantaController');
Route::resource('bitacora', 'BitacoraController');
Route::resource('medico', 'MedicoController');
Route::resource('cama', 'CamaController');
Route::resource('visita', 'VisitaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
