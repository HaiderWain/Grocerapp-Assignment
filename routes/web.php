<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;

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

Route::resource('Restaurant', RestaurantController::class);
Route::resource('Menu', MenuController::class);

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);
Route::get('Restaurant/{id}/menu', [RestaurantController::class, 'getRestaurantID']);


