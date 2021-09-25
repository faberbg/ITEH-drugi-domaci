<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GradController;
use App\Http\Controllers\API\FirmeController;
use App\Http\Controllers\API\KandidatController;

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

Route::get('grad', 'App\Http\Controllers\GradController@getAll');
Route::get('grad/{id}', 'App\Http\Controllers\GradController@getById');
Route::get('firme', 'App\Http\Controllers\FirmeController@getAll');
Route::get('firme/{id}', 'App\Http\Controllers\FirmeController@getById');
Route::get('kandidat', 'App\Http\Controllers\KandidatController@getAll');
Route::get('kandidat/{id}', 'App\Http\Controllers\KandidatController@getById');
Route::post('firme', 'App\Http\Controllers\FirmeController@save');
Route::post('grad', 'App\Http\Controllers\GradController@save');
Route::post('kandidat', 'App\Http\Controllers\KandidatController@save');
Route::delete('grad/{id}', 'App\Http\Controllers\GradController@delete');
Route::delete('firme/{id}', 'App\Http\Controllers\FirmeController@delete');
Route::delete('kandidat/{id}', 'App\Http\Controllers\KandidatController@delete');
