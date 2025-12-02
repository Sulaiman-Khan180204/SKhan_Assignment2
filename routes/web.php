<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return redirect('/players');
});
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/create', [PlayerController::class, 'create']);  
Route::get('/players/about', [PlayerController::class, 'about']);

Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/{id}', [PlayerController::class, 'show']);
Route::get('/players/{id}/edit', [PlayerController::class, 'edit']);
Route::patch('/players/{id}', [PlayerController::class, 'update']);
Route::delete('/players/{id}', [PlayerController::class, 'destroy']);
