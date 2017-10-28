<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('produtos','ProdutoController@index');
//Route::post('produtos','ProdutoController@store');
//Route::get('produtos/{id}','ProdutoController@show' );
//Route::put('produtos/{id}','ProdutoController@update');
//Route::delete('produtos/{id}','ProdutoController@destroy');
//
//Route::get('clientes','ClienteController@index');
//Route::post('clientes','ClienteController@store');
//Route::get('clientes/{id}','ClienteController@show' );
//Route::put('clientes/{id}','ClienteController@update');
//Route::delete('clientes/{id}','ClienteController@destroy');

Route::resource('clientes','ClienteController');// cria todas as rotas de uma vez
Route::resource('produtos','ProdutoController');