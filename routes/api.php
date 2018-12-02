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

/**
 *  Routas da API que seria usado para o sistema desaclopado
 */

Route::group(['prefix'=>'task'], function(){

    Route::get('',['uses'=>'TaskController@allTasks']);
    Route::get('{id}',['uses'=>'TaskController@getTask']);
    Route::post('',['uses'=>'TaskController@saveTask']);
    Route::put('{id}',['uses'=>'TaskController@updateTask']);
    Route::delete('{id}',['uses'=>'TaskController@deleteTask']);

});
