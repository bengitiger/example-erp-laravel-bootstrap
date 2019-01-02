<?php

use Illuminate\Http\Request;

// This function causes problems with the "php artisan route:cache" command.
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
