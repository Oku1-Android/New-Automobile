<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Automobile;
use Illuminate\Http\Request;
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

Route::resource('/cars', Automobile::class);
Route::get('/car/{id}/show', [Automobile::class, 'show']);
Route::get('/updated/{id}/edit', [Automobile::class, 'update']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auto/index', [\App\Http\Controllers\Automobile::class, 'index']);