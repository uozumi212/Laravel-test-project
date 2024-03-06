<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::getAllProducts();

        return view('products.index', ['products' => $products]);
    }
}
