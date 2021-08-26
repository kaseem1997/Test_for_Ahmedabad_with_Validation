<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/basic', function () {
    return view('basic');
})->name('basic');

Route::middleware(['auth:sanctum', 'verified'])->get('/premium', function () {
    return view('premium');
})->name('premium');


Route::middleware(['auth:sanctum', 'verified'])->get('/pro', function () {
    return view('pro');
})->name('pro');

