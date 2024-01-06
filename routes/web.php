<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;




Route::get('/', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/', [TodoController::class, 'store']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);