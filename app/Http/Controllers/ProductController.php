<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index')->with('products', Product::all());
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $product = new Product;

        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $product->quantity      = $request->quantity;

        $product->save();

        return redirect()->route('index')->with('success', 'New product added successfully!');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('edit')->with('product', $product);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $product->quantity      = $request->quantity;

        $product->save();

        return redirect()->route('index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('index')->with('success', 'Product deleted successfully!');
    }
}
