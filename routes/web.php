<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


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

// Deux manières pour donner la route du controller
// Route::get('/', 'App\Http\Controllers\HomeController\HomeController@index');
// Route::get('/', 'HomeController@index');
 // return view('welcome');

Route::get('/', [HomeController::class, 'index']);

Route::get('/cart', [CarController::class, 'index']);


Route::get('/product', [ProductController::class, 'index']); 

Route::get('/product/{id}', [ProductController::class, 'ficheProduit']); 


