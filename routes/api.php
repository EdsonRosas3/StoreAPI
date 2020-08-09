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
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');
    Route::get('users','UserController@index');
    Route::post('users','UserController@store');
    Route::get('users/{id}','UserController@show');
    Route::put('users/{id}','UserController@update');
    Route::delete('users/{id}','UserController@destroy');

    Route::post('bills','BillController@store');
    Route::put('bills/{id}','BillController@update');
    Route::delete('bills/{id}','BillController@destroy');

    Route::post('categories','CategoryController@store');
    Route::put('categories/{id}','CategoryController@update');
    Route::delete('categories/{id}','CategoryController@destroy');

    Route::post('details','DetailController@store');
    Route::put('details/{id}','DetailController@update');
    Route::delete('details/{id}','DetailController@destroy');

    Route::post('products','ProductController@store');
    Route::put('products/{id}','ProductController@update');
    Route::delete('products/{id}','ProductController@destroy');
});




Route::get('bills','BillController@index');
Route::get('bills/{id}','BillController@show');


Route::get('categories','CategoryController@index');
Route::get('categories/{id}','CategoryController@show');


Route::get('details','DetailController@index');
Route::get('details/{id}','DetailController@show');


Route::get('products','ProductController@index');
Route::get('products/{id}','ProductController@show');





