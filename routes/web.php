<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/{route}', function() {
	return view('welcome');
})->where('route', '.*');
