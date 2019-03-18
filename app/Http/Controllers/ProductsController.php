<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('admin.products.index')->with('products', $products);
    }

    public function show($id) {

        $product = Product::find($id);

        return view('admin.products.show')->with('product', $product);
    }

    public function create() {

        return view('admin.products.create');
    }

    public function store(Request $request) {

        $product = new Product;

        $product->name = $request['name'];
        $product->img = $request['img'];
        $product->price = $request['price'];
        $product->description = $request['description'];

        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id) {

        $product = Product::find($id);

        return view('admin.products.edit')->with('product', $product);
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);

        $product->name = $request['name'];
        $product->img = $request['img'];
        $product->price = $request['price'];
        $product->description = $request['description'];

        $product->save();

        return redirect()->route('products.index');
    }

    
}
