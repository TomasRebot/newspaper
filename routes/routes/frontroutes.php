<?php

Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'MainController@frontend');
    Route::get('/panel', 'MainController@backend')->middleware('auth');
});
