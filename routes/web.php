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

Auth::routes(['verify' => true]);

//Rutas protegidas

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/vacantes', 'VacanteController@index')->name('vacantes.index');
    Route::get('/vacantes/create', 'VacanteController@create')->name('vacantes.create');
    Route::post('/vacantes', 'VacanteController@store')->name('vacantes.store');
    Route::delete('/vacantes/{vacante}', 'VacanteController@destroy')->name('vacantes.destroy');
    Route::get('/vacantes/{vacante}/edit', 'VacanteController@edit')->name('vacantes.edit');
    Route::put('/vacante/{vacante}', 'VacanteController@update')->name('vacantes.update');

    //Subir imagenes
    Route::post('/vacantes/imagen', 'VacanteController@imagen')->name('vacantes.imagen');
    Route::post('/vacantes/imagen-borrar', 'VacanteController@borrarImagen')->name('vacantes.borrar');

    //Cambiar estado de la Vacante
    Route::post('/vacantes/{vacante}', 'VacanteController@estado')->name('vacantes.estado');

    //Notificaciones
    Route::get('/notificaciones', 'NotificacionesController')->name('notificaciones');
});

//Página de inicio
Route::get('/', 'InicioController')->name('inicio');

//Categorias
Route::get('/categorias/{categoria}', 'CategoriaController@show')->name('categorias.show');

//Enviar datos para una vacante
Route::get('/candidatos/{id}', 'CandidatoController@index')->name('candidatos.index');
Route::post('/candidatos/store', 'CandidatoController@store')->name('candidatos.store');

//Rutas de vacantes
Route::post('/busqueda/buscar', 'VacanteController@buscar')->name('vacantes.buscar');
Route::get('/busqueda/buscar', 'VacanteController@resultados')->name('vacantes.resultados');
Route::get('/vacantes/{vacante}', 'VacanteController@show')->name('vacantes.show');


