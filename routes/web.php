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

/**
 *  Routas WEB usadas para o sistema ainda acoplado
 */

Route::get('/',['uses'=>'TaskController@index'])->name('tasks');
Route::get('/task/form/{id?}',['uses'=>'TaskController@form'])->name('task.form');
Route::post('/task/form/{id?}',['uses'=>'TaskController@save'])->name('task.save');
Route::get('/task/delete/{id}',['uses'=>'TaskController@delete'])->name('task.delete');
Route::get('/task/finaliza/{id}',['uses'=>'TaskController@finaliza'])->name('task.finaliza');


