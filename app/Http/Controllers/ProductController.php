<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function index()
    {
        return view ('product.index');
    }
    public function babykids()
    {
        return view ('product.baby-kids');
    }
    public function beautyhealth()
    {
        return view ('product.beauty-health');
    }
    public function foodbeverage()
    {
        return view ('product.food-beverage');
    }
    public function homecare()
    {
        return view ('product.home-care');
    }

}
