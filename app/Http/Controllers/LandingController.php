<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LandingController extends Controller
{
    public function homepage() {
        $products = Product::orderBy('id', 'desc'); // Get all products
        return view('home', [
            'products' => $products->paginate(10) // Paginate the products
        ]);
    }
}
