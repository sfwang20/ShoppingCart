<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;
use App\User;

class CartController extends Controller
{
  public function store(Request $request)
  {
    //create or load cart table
    //if user has a cart
    if (Auth::user()->cart) {
        $cart = Auth::user()->cart;
    }
    else {
      $cart = new Cart;
      $cart->user_id = Auth::id();
      $cart->save();
    }
    //compare products in user's cart
    $product = $cart->products->find($request->id);
    //if cart has request's product -> find it and +1
    if ($product != null && $product->id == $request->id) {
      $product->pivot->quantity += 1;
      $quantity = $product->pivot->quantity;
      $cart->products()->detach($request->id);
      $cart->products()->save($product, ['quantity' => $quantity]);
    }
    //else  use attach() to create a new row in cart_product table
    else {
      $cart->products()->attach($request->id);
    }
  }

  public function show()
  {

  }
  public function update()
  {
    // code...
  }
  public function destroy(Product $product)
  {
    $cart->products()->detach($product->id);
  }
}
