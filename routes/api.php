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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
	

Route::resource('categoria', 'CategoriaController',
                ['only' => ['index', 'show']]);
Route::resource('noticia', 'NoticiaController',
                ['only' => ['index', 'show']]);
Route::post('/login', 'AuthController@userAuth');

Route::group(['middleware' => 'jwt.auth'], function () {
	Route::apiResource('usuarios', 'UserController');
	Route::apiResource('noticias', 'NoticiaController');
});