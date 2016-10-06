<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**
 *
 * Artigo
 *
 */

Route::get('/Artigo/Listar', "ArtigoController@getListar")->name("artigo.listar");

Route::get('/Artigo/Editar/{id}', "ArtigoController@getEditar")->name("artigo.editar");
Route::get('/Artigo/Excluir/{id}', "ArtigoController@getExcluir")->name("artigo.excluir");

Route::get('/Artigo/Novo', "ArtigoController@getNovo")->name("artigo.novo");
Route::post('/Artigo/Novo', "ArtigoController@postNovo")->name("artigo.novo");