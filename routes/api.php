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

Route::get('users','UserController@index');
Route::post('users','UserController@store');
Route::get('users/{id}','UserController@show');
Route::put('users/{id}','UserController@update');
Route::delete('users/{id}','UserController@destroy');

Route::get('bills','BillController@index');
Route::post('bills','BillController@store');
Route::get('bills/{id}','BillController@show');
Route::put('bills/{id}','BillController@update');
Route::delete('bills/{id}','BillController@destroy');

Route::get('categories','CategoryController@index');
Route::post('categories','CategoryController@store');
Route::get('categories/{id}','CategoryController@show');
Route::put('categories/{id}','CategoryController@update');
Route::delete('categories/{id}','CategoryController@destroy');

Route::get('details','DetailController@index');
Route::post('details','DetailController@store');
Route::get('details/{id}','DetailController@show');
Route::put('details/{id}','DetailController@update');
Route::delete('details/{id}','DetailController@destroy');

Route::get('products','ProductController@index');
Route::post('products','ProductController@store');
Route::get('products/{id}','ProductController@show');
Route::put('products/{id}','ProductController@update');
Route::delete('products/{id}','ProductController@destroy');




