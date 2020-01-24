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

Route::get('listUser','FriendFlixController@listUser');
Route::get('mostrarUser/(id)','FriendFlixController@showUser');
Route::post('criarUser','FriendFlixController@createUser');
Route::put('atualizaUser/{id}','FriendFlixController@updateUser');
Route::delete('deletaUser/{id}', 'FriendFlixController@deleteUser');
