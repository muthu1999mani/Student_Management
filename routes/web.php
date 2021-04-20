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

Route::get('/', [App\Http\Controllers\HomeController::class, 'Home']);

Route::post('/student/addRecord', [App\Http\Controllers\HomeController::class, 'addRecords'])->name('addRecord');

Route::get('/student/listRecords', [App\Http\Controllers\HomeController::class, 'listRecords']);

Route::get('/student/editRecord/{id}', [App\Http\Controllers\HomeController::class, 'editRecords']);

Route::post('/student/editForm/{id}', [App\Http\Controllers\HomeController::class, 'editForm']);

Route::get('/student/dropRecord/{id}', [App\Http\Controllers\HomeController::class, 'dropRecords']);
