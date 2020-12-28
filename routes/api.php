<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 操作数据库
Route::prefix('database')->group(function () {
    Route::post('add', [\App\Http\Controllers\DatabaseOperationController::class,'doAdd']);
    Route::delete('delete', [\App\Http\Controllers\DatabaseOperationController::class,'doDelete']);
    Route::put('update', [\App\Http\Controllers\DatabaseOperationController::class,'doUpdate']);
    Route::get('select', [\App\Http\Controllers\DatabaseOperationController::class,'doSelect']);
});

// 接受用户请求参数
Route::prefix('accept')->group(function () {
    Route::get('/all',[\App\Http\Controllers\AcceptUserInputController::class,'getAll']);
    Route::get('/getUsername/{id}',[\App\Http\Controllers\AcceptUserInputController::class,'getUserName']);
    Route::post('/add',[\App\Http\Controllers\AcceptUserInputController::class,'addNewUser']);
    Route::post('/update',[\App\Http\Controllers\AcceptUserInputController::class, 'updateUser']);
    Route::delete('/delete/{id}',[\App\Http\Controllers\AcceptUserInputController::class,'deleteUser']);
});

