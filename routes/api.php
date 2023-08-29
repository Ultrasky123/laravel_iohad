<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADXLController;
use App\Http\Controllers\BMEController;
use App\Http\Controllers\DHTController;
use App\Http\Controllers\INMPController;
use App\Http\Controllers\KYController;
use App\Http\Controllers\LIDARController;
use App\Http\Controllers\LOADCELLController;
use App\Http\Controllers\MPUController;
use App\Http\Controllers\MQController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/adxl', ADXLController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/bme', BMEController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/dht', DHTController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/inmp', INMPController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/ky', KYController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/lidar', LIDARController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/loadcell', LOADCELLController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/mpu', MPUController::class, [
    'only' => ['index', 'show', 'store']
]);
Route::resource('/mq', MQController::class, [
    'only' => ['index', 'show', 'store']
]);
