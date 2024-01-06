<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;




Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/', [TodoController::class, 'store']);
Route::get('/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/{todo}', [TodoController::class, 'update']);
Route::get('/{todo}/delete', [TodoController::class, 'delete']);


Route::get('list',[ListController::class, 'index']);
Route::post('list', [ListController::class, 'create']);
Route::post('update', [ListController::class, 'update']);
Route::post('delete', [ListController::class, 'delete']);

Route::get('search',[ListController::class, 'search']);
