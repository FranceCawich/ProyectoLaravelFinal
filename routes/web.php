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
   return view('auth.register');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('events', 'App\Http\Controllers\eventsController');
Route::resource('participants', 'App\Http\Controllers\participantsController');
Route::resource('institutionTypes', 'App\Http\Controllers\institutionTypesController');
Route::resource('institutions', 'App\Http\Controllers\institutionController');