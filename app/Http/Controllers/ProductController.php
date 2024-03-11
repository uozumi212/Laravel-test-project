<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'price' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('product.index')->with('message', '商品が作成されました');
    }

    public function index()
    {
        $products = Product::orderBy('name', 'asc')->get();

    }
}
