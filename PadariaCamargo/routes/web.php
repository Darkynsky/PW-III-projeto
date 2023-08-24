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
Route::get('vender', function () {
    return view('vender');
});
Route::get('regProduto', function () {
    return view('regProduto');
});
Route::get('historico', function () {
    return view('historico');
});


Route::get('/Vendas','VendasController@index');