<?php

use Illuminate\Support\Facades\Route;

Route::prefix('authentication_log', function () {
    Route::post('logout', 'AuthenticationLogController@storeLogout');
});
