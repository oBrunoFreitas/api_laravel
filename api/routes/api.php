<?php

use Illuminate\Http\Request;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('funcionario/list', 'api\FuncionariosController@index');
Route::get('funcionario/show/id/{id}', 'api\FuncionariosController@show');
Route::post('funcionario/create', 'api\FuncionariosController@store');
Route::delete('funcionario/destroy/{id}', 'api\FuncionariosController@delete');
Route::put('funcionario/update/{id}', 'api\FuncionariosController@update');