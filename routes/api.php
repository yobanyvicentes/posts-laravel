<?php

use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'category'], function(){
    Route::get('/all', [CategoryApiController::class, 'all']);
    Route::post('/store', [CategoryApiController::class, 'store']);
    Route::get('{id}/edit', [CategoryApiController::class, 'edit']);
    Route::put('{id}/update', [CategoryApiController::class, 'update']);
    Route::delete('{id}/destroy', [CategoryApiController::class, 'destroy']);
});
 
Route::group(['prefix' => 'post'], function(){
    Route::get('/all', [PostApiController::class, 'all']);
    Route::post('/store', [PostApiController::class, 'store']);
    Route::get('{id}/edit', [PostApiController::class, 'edit']);
    Route::put('{id}/update', [PostApiController::class, 'update']);
    Route::delete('{id}/destroy', [PostApiController::class, 'destroy']);
});
