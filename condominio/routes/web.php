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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'reserva'], function(){

    Route::get('listar', 'ReservaController@listar');
    Route::get('criar', 'ReservaController@criar');
    Route::get('{id}/editar', 'ReservaController@editar');
    Route::get('{id}/remover', 'ReservaController@remover');
    Route::get('salvar', 'ReservaController@salvar');

});

Route::group(['prefix' => 'condominio'], function(){

    Route::get('listar', 'CondominioController@listar');
    Route::get('criar', 'CondominioController@criar');
    Route::get('{id}/editar', 'CondominioController@editar');
    Route::get('{id}/remover', 'CondominioController@remover');
    Route::get('salvar', 'CondominioController@salvar');

});

Route::group(['prefix' => 'unidade'], function(){

    Route::get('listar', 'UnidadeController@listar');
    Route::get('criar', 'UnidadeController@criar');
    Route::get('{id}/editar', 'UnidadeController@editar');
    Route::get('{id}/remover', 'UnidadeController@remover');
    Route::get('salvar', 'UnidadeController@salvar');

});
