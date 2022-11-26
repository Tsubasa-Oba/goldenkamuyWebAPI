<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Character\ListController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goldenkamuy/characters',App\Http\Controllers\Character\ListController::class);
Route::get('/goldenkamuy/character/{id}',App\Http\Controllers\Character\ProfController::class)->where('id', '[0-9]+');
Route::post('/goldenkamuy/character',App\Http\Controllers\Character\CreateController::class);
Route::put('/goldenkamuy/character/{id}',App\Http\Controllers\Character\PutController::class)->where('id', '[0-9]+');
Route::delete('/goldenkamuy/character/{id}',App\Http\Controllers\Character\DeleteController::class)->where('id', '[0-9]+');

Route::post('/goldenkamuy/team',App\Http\Controllers\Team\CreateController::class);
Route::put('/goldenkamuy/team/{team_id}',App\Http\Controllers\Team\PutController::class)->where('team_id', '[0-9]+');
Route::delete('/goldenkamuy/team/{team_id}',App\Http\Controllers\Team\DeleteController::class)->where('team_id', '[0-9]+');
