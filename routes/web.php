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

Route::group(['prefix'=>'categorias'],function(){
	Route::get('',['as'=>'categoria.categorias','uses'=>'App\Http\Controllers\CategoriaController@index']);
	Route::get('create',['as'=>'categoria.create','uses'=>'App\Http\Controllers\CategoriaController@create']);
	Route::post('store',['as'=>'categoria.store','uses'=>'App\Http\Controllers\CategoriaController@store']);
	Route::get('{id}/edit',['as'=>'categoria.edit','uses'=>'App\Http\Controllers\CategoriaController@edit']);
	Route::put('{id}/update',['as'=>'categoria.update','uses'=>'App\Http\Controllers\CategoriaController@update']);
	Route::get('{id}/destroy',['as'=>'categoria.destroy','uses'=>'App\Http\Controllers\CategoriaController@destroy']);
});

Route::group(['prefix'=>'fornecedores'],function(){
	Route::get('',['as'=>'fornecedor.fornecedores','uses'=>'App\Http\Controllers\FornecedorController@index']);
	Route::get('create',['as'=>'fornecedor.create','uses'=>'App\Http\Controllers\FornecedorController@create']);
	Route::post('store',['as'=>'fornecedor.store','uses'=>'App\Http\Controllers\FornecedorController@store']);
	Route::get('{id}/show',['as'=>'fornecedor.show','uses'=>'App\Http\Controllers\FornecedorController@show']);
	Route::get('{id}/edit',['as'=>'fornecedor.edit','uses'=>'App\Http\Controllers\FornecedorController@edit']);
});

