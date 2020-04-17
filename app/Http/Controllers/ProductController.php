<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //Front-end
    //Display shop
    public function index()
    {
      $products = Product::all();

      if (Auth::check()) {
        $cart = $this->getCart();
        $total = $this->getTotal($cart);

        return view('products.shop', ['products' => $products, 'cart' => $cart, 'total' => $total]);
      }
      else
        return view('products.shop', ['products' => $products]);
    }

    //Display shop-single
    public function show(Product $product)
    {
      $products = Product::all();
      if (Auth::check()) {
        $cart = $this->getCart();
        $total = $this->getTotal($cart);
        return view('products.shop-single', ['product' => $product, 'products' => $products, 'cart' => $cart, 'total' => $total]);
      }
      else {
        return view('products.shop-single', ['product' => $product, 'products' => $products]);
      }
    }

    //massive home page
    public function home()
    {
      if(Auth::check()) {
        $products = Product::all();
        $cart = $this->getCart();
        $total = $this->getTotal($cart);
        return view('index', ['products' => $products, 'cart' => $cart, 'total' => $total]);
      }
      else
        return view('index');
    }

    public function getCart()
    {
      if (!(Auth::user()->carts->isEmpty())) {
        $cartId = Auth::user()->carts->max('id');
        $cart = Auth::user()->carts->find($cartId);
      }
      else {
        $cart = new Cart;
        $cart->user_id = Auth::id();
        $cart->save();
      }
      return $cart;
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

      if (!is_null($request->file('image'))) {
        $path = $request->file('image')->store('public');
        $path = str_replace('public/','/storage/', $path);
        $product->image = $path;
      }
      if (!is_null($request->file('image_alt'))) {
        $path_alt = $request->file('image_alt')->store('public');
        $path_alt = str_replace('public/','/storage/', $path_alt);
        $product->image_alt = $path_alt;
      }

      $product->save();

      return redirect('/products/admin');
    }

    //Delete
    //Remove the specified resource from storage.
    public function destroy(Product $product)
    {
      $product->delete();
    }

    public function getTotal($cart)
    {
      if ($cart->products()) {
        $total = 0;
        foreach($cart->products as $key => $product) {
          $total_each = $product->price * $product->pivot->quantity;
          $total += $total_each;
        }
      }
      else {
        $total =0;
      }
      return $total;
    }
}
