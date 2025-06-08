<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return $request->index();
})->middleware('auth:sanctum');

Route::post('article', 'ArticleController@store');


Route::post('category', 'CategoryController@store');

Route::post('user', 'UserController@store');