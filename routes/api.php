<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return true;
    });
    Route::post('/', function () {
        return true;
    });
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
