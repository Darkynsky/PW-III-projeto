<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('admProdutos', function () {
    return view('admProdutos');
});
Route::get('clienteProdutos', function () {
    return view('clienteProdutos');
});

Route::get('consultacep', function () {
    return view('consultacep');
});


Route::post('/Produto','ProdutoController@store');
Route::get('/admProdutos/excluir/{id}','ProdutoController@destroy');
Route::get('/admProdutos/escolhido/{id}','ProdutoController@show');


Route::get('/admProdutos','ProdutoController@index');
Route::get('/clienteProdutos','ProdutoController@index2');

