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
Route::post('/register', 'UserController@registerApi')->name('users@login');
/*Route::post('/users/store', 'UserController@store')->name('users@addtUser');
Route::get('/users/{id}', 'UserController@show')->name('users@.showUser');
Route::put('/users/{id}/edit', 'UserController@update')->name('users.updateUser');
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
