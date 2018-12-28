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

Route::get('/', ['as' => 'home', 'uses' => 'ClientController@index']);

Route::group(['prefix' => 'clients'], function () {
    Route::get('create', ['as' => 'clients.create', 'uses' => 'ClientController@create']);
    Route::get('{client}', ['as' => 'clients.show', 'uses' => 'ClientController@show']);
    Route::get('{client}/edit', ['as' => 'clients.edit', 'uses' => 'ClientController@edit']);
    Route::get('{client}/destroy', ['as' => 'clients.destroy', 'uses' => 'ClientController@destroy']);
    Route::put('{client}/update', ['as' => 'clients.update', 'uses' => 'ClientController@update']);
    Route::post('/', ['as' => 'clients.store', 'uses' => 'ClientController@store']);
});

Route::get('listShow', ['as' => 'clients.listShow', 'uses' => 'ClientController@listShow']);
Route::get('listEdit', ['as' => 'clients.listEdit', 'uses' => 'ClientController@listEdit']);
Route::get('listDelete', ['as' => 'clients.listDelete', 'uses' => 'ClientController@listDelete']);
