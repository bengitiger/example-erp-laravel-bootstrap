<?php

Auth::routes(['verify' => true]);

Route::namespace('Views')->middleware('verified')->group(function () {
    Route::get('/',        'HomeController@index'  )->name('index'  );
    Route::get('/profile', 'HomeController@profile')->name('profile');
});
