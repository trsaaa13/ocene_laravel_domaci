<?php

use App\Http\Controllers\API\AutfKontroler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NastavnikKontroler;
use App\Http\Controllers\API\PredmetKontroler;

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

Route::post('register', [AutfKontroler::class, 'register']);
Route::post('login', [AutfKontroler::class, 'login']);
Route::get('nastavnik', [NastavnikKontroler::class, 'index']);
Route::get('nastavnik/{id}', [NastavnikKontroler::class, 'show']);
Route::get('predmet', [PredmetKontroler::class, 'index']);
Route::get('predmet/{id}', [PredmetKontroler::class, 'show']);



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::delete('nastavnik/{id}', [NastavnikKontroler::class, 'destroy']);
    Route::put('predmet/{id}', [PredmetKontroler::class, 'update']);
    Route::post('logout', [AutfKontroler::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
