<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('phpinfo',[\App\Http\Controllers\PhpInfoController::class,'getPhpInfo']);


