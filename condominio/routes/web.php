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
    Route::post('salvar', 'ReservaController@salvar');
    Route::get('obterUnidades/{id}', 'ReservaController@obterUnidades');
    Route::get('obterAreas/{id}', 'ReservaController@obterAreas');

});

Route::group(['prefix' => 'condominio'], function(){

    Route::get('listar', 'CondominioController@listar');
    Route::get('criar', 'CondominioController@criar');
    Route::get('{id}/editar', 'CondominioController@editar');
    Route::get('{id}/remover', 'CondominioController@remover');
    Route::post('salvar', 'CondominioController@salvar');

});

Route::group(['prefix' => 'unidade'], function(){

    Route::get('listar', 'UnidadeController@listar');
    Route::get('criar', 'UnidadeController@criar');
    Route::get('{id}/editar', 'UnidadeController@editar');
    Route::get('{id}/remover', 'UnidadeController@remover');
    Route::post('salvar', 'UnidadeController@salvar');

});

Route::group(['prefix' => 'area'], function(){

    Route::get('listar', 'AreaController@listar');
    Route::get('criar', 'AreaController@criar');
    Route::get('{id}/editar', 'AreaController@editar');
    Route::get('{id}/remover', 'AreaController@remover');
    Route::post('salvar', 'AreaController@salvar');
    Route::get('obterUnidades/{id}', 'AreaController@obterUnidades');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/logout', 'Auth\AuthController@logout');
