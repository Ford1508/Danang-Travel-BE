<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
});
Route::get('/database-fresh', function () {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
});
