<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('webpage.index');
})->name('index');
Route::get('/layout', function () {
    return view('layout');
})->name('layout');
Route::get('/teams', function () {
    return view('webpage.teams-mhs');
})->name('teams');
Route::get('/teams-dosen', function () {
    return view('webpage.teams-dosen');
})->name('teams-dosen');
Route::get('/tes', function () {
    return view('tes');
})->name('tes');
