<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() {
        return "Liste des produits";
    }

    public function ProductSheet($id){
        return "Fiche du produit " . $id; 

    }

    public function show(): View 
    {
        return View('product-list');
    } 

    public function showId($id) : View
    {
        return View('product-details', ['id' => $id]);
    }
    

}
