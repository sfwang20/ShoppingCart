<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Front-end
    //Display shop
    public function index()
    {
      $products = Product::all();
      return view('products.shop', ['products' => $products]);
    }

    //Display shop-single
    public function show(Product $product)
    {
      return view('products.shop-single', ['products' => $products]);
    }

    //Back-end management
    //admin panel
    public function admin()
    {
      $products = Product::all();
      return view('products.admin', ['products'=> $products]);
    }

    public function showByAdmin(Product $product)
    {
      return view('products.showByAdmin', ['product' => $product]);
    }

    //Create
    // Show the form for creating a new resource.
    public function create()
    {
        return view('products.create');
    }

    //Store a newly created resource in storage.
    //todo: file處理
    public function store(Request $request)
    {
      $path = $request->file('image')->store('public');
      $path = str_replace('public/','/storage/', $path);
      $path_alt = $request->file('image_alt')->store('public');
      $path_alt = str_replace('public/','/storage/', $path_alt);

      $product = new Product;
      $product->fill($request->all());
      $product->image = $path;
      $product->image_alt = $path_alt;
      $product->save();

      return redirect('/products/admin');
    }

    //Update
    //Show the form for editing the specified resource.
    public function edit(Product $product)
    {
      return view('products.edit', ['product' => $product]);
    }

    //Update the specified resource in storage.
    public function update(Request $request, Product $product)
    {
      $product->fill($request->all());

      $path = $request->file('image')->store('public');
      $path = str_replace('public/','/storage/', $path);
      $path_alt = $request->file('image_alt')->store('public');
      $path_alt = str_replace('public/','/storage/', $path_alt);

      $product->image = $path;
      $product->image_alt = $path_alt;
      
      $product->save();

      return redirect('/products/admin');
    }

    //Delete
    //Remove the specified resource from storage.
    public function destroy(Product $product)
    {
      $product->delete();
    }
}
