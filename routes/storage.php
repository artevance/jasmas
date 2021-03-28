<?php

use Illuminate\Support\Facades\Route;

Route::prefix('file')->group(function () {
    Route::get('{id}', 'FileController@show');
});

Route::prefix('image')->group(function () {
    Route::get('{id}', 'ImageController@show');
});