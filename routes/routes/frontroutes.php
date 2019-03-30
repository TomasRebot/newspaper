<?php

Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'MainController@frontend')->middleware('auth');
    Route::get('/panel', 'MainController@backend')->middleware('auth');
});
