<?php

use Illuminate\Support\Facades\Route;

Route::prefix('file')->group(function () {
    Route::get('', 'FileController@index');
    Route::get('{id}', 'FileController@show');
    Route::get('fetch/{id}', 'FileController@fetch');
    Route::post('', 'FileController@store');
    Route::delete('', 'FileController@destroy');
});

Route::prefix('image')->group(function () {
    Route::get('', 'ImageController@index');
    Route::get('{id}', 'ImageController@show');
    Route::get('fetch/{id}', 'ImageController@fetch');
    Route::post('', 'ImageController@store');
    Route::delete('', 'ImageController@destroy');
});
