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

Route::post('login', 'API\DeviceController@login')->name('login');
Route::post('activeBoard', 'API\BoardController@activeBoard')->name('activeBoard');
Route::post('availableKurs', 'API\KursController@availableKurs')->name('availableKurs');
Route::post('availableInterest', 'API\InterestRateController@availableInterest')->name('availableInterest');
Route::post('availableSukuGiro', 'API\SukuBungaGiroController@availableSukuGiro')->name('availableSukuGiro');