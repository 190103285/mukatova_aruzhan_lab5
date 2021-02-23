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

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/studentName/{id}', [StudentController::class, 'get_name']);

Route::get('/studentDate/{id}', [StudentController::class, 'get_date']);

Route::get('/studentAge/{id}', [StudentController::class, 'get_age']);