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

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\AuthenticationException;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', function () {
    return view('usuario');
});

// Route::get('login', function () {
//     return view('login');
// });

Route::get('login',array('as'=>'login',function(){
    return view('login');
}));

Route::post('/usuario','Auth\RegisterController@store');

Route::post('login','Auth\RegisterController@verifyUser');

Route::get('/logout','Auth\RegisterController@logoutUser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');