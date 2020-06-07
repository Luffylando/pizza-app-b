<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group([
    'middleware' => 'api', 'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::get('me', 'AuthController@me');
    Route::post('logout', 'AuthController@logout');
    Route::post('register', 'AuthController@register');
});

// Users
Route::get('/users', 'UserController@index');

// Pizzas

Route::get('/pizzas', 'PizzaController@index');

// Orders
Route::get('/orders/{id}', 'OrderController@show');
Route::post('/orders', 'OrderController@store');
