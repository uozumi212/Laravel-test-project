<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('name', 'asc')->get();

        return view('product.index', ['products' => $products]);
    }
}
