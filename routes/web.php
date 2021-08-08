<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MembreController::class, "index"]);
Route::get('/create-membre', function() { return view("pages.createMembre");});
Route::post('/membre/create', [MembreController::class, "store"]);
Route::delete('/membre/{id}/delete', [MembreController::class, "destroy"]);
Route::delete('/membre/delete-all', [MembreController::class, "destroyAll"]);
Route::get('/membre/{id}/show', [MembreController::class, "show"]);
Route::get('/membre/{id}/edit', [MembreController::class, "edit"]);
Route::put('/membre/{id}/update', [MembreController::class, "update"]);
