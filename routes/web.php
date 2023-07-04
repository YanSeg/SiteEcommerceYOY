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

Route::get('/', function () {
    // return view('welcome');
    return "hey coucou  <strong>super comme exercice!</strong>";
});

Route::get('/product', function () {
    return "Liste des produits";
});
Route::get('/product/{id}', function () {
    return "Fiche du produit {id}";
});

Route::get('/cart', function () {

    return "Panier";
});
