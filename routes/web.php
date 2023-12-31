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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/histories', [App\Http\Controllers\HomeController::class, 'histories'])->name('home.histories');
Route::get('/vision-missions', [App\Http\Controllers\HomeController::class, 'visions'])->name('home.visions');
Route::get('/organizations', [App\Http\Controllers\HomeController::class, 'organizations'])->name('home.organizations');
Route::get('/teachers', [App\Http\Controllers\HomeController::class, 'teachers'])->name('home.teachers');
Route::get('/majors', [App\Http\Controllers\HomeController::class, 'major'])->name('home.major');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('home.events');
