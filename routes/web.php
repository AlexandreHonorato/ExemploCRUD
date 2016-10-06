<?php


Route::get('/', "HomeController@getIndex");


/**
 *
 * Artigo
 *
 */
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::group(['prefix' => '/Painel'], function(){
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/Artigo/Listar', "ArtigoController@getListar")->name("artigo.listar");

        Route::get('/Artigo/Editar/{id}', "ArtigoController@getEditar")->name("artigo.editar");
        Route::get('/Artigo/Excluir/{id}', "ArtigoController@getExcluir")->name("artigo.excluir");

        Route::get('/Artigo/Novo', "ArtigoController@getNovo")->name("artigo.novo");
        Route::post('/Artigo/Novo', "ArtigoController@postNovo")->name("artigo.novo");
    });
});
