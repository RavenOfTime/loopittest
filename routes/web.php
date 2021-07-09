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

Route::post('/api/login', 'LoginController@Login');
Route::get('/api/getvehicles', 'VehiclesController@get')->middleware(['auth']);
Route::pattern('url', '.*');
Route::get('/', 'HomeController@SPA')->name('login');
Route::get('/logout', 'LoginController@logout')->middleware(['auth']);
Route::get('{url}', 'HomeController@SPA')->middleware(['auth']);
