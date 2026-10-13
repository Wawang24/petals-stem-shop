<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function store()
    {
        Product::create([
            'name' => 'Ethereal Rose & Peony Bouquet',
            'price' => 1450.00
        ]);
        return redirect('/products');
    }
}