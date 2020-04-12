<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Cart;
use App\User;

class CartController extends Controller
{
  public function index()
  {
    $cart = $this->getCart();
    $total = $this->getTotal($cart);
    return view('carts.index' ,['cart' => $cart, 'total' => $total]);
  }

  public function store(Request $request)
  {
    //create or load cart table
    $cart = $this->getCart();

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

  public function update(Request $request)
  {
    $cart = $this->getCart();
    $product = $cart->products->find($request->id);
    $product->pivot->quantity = $request->quantity;
    $cart->products()->detach($request->id);
    $cart->products()->save($product, ['quantity' => $request->quantity]);
  }
  public function destroy(Request $request)
  {
    $cart = $this->getCart();
    $cart->products()->detach($request->id);
  }

  public function getCart()
  {
    //if user has a cart
    if (Auth::user()->cart) {
      $cart = Auth::user()->cart;
    }
    else {
      $cart = new Cart;
      $cart->user_id = Auth::id();
      $cart->save();
    }
    return $cart;
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
    return $total;
  }
}