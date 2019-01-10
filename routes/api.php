<?php

use Illuminate\Http\Request;

Route::get('files', 'FileController@index');
Route::get('files/{file}', 'FileController@show');
Route::post('files', 'FileController@store');
Route::put('files/{file}', 'FileController@update');
Route::delete('files/{file}', 'FileController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
