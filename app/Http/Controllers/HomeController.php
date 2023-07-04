<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() {
        return "Homepage";
    }

    public function show(): View 
    {
        return View('homepage');
    } 
}
