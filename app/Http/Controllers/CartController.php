<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index() {
        return "Panier";
    }
    public function show(): View 
    {
        return View('cart');
    } 
}
