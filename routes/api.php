<?php

use App\Http\Controllers\AplicativoController;
use App\Http\Controllers\PessoaAplicativoController;
use App\Http\Controllers\PessoaController;
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

Route::apiResource('pessoas', PessoaController::class);
Route::apiResource('aplicativos', AplicativoController::class);
Route::post('pessoa_aplicativos', 'PessoaAplicativoController@store');