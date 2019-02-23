<?php

Route::redirect('/home', '/');
Auth::routes(['verify' => true]);
Route::get('/profile', 'Auth\ProfileController@index')->name('profile.index');

Route::middleware('verified')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');
});
