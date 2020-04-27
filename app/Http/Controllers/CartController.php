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
    //if cart has request's product -> find it and +q

    if ($product != null && $product->id == $request->id) {
      $product->pivot->quantity += (int)$request->quantity;
      $quantity = $product->pivot->quantity;
      $cart->products()->detach($request->id);
      $cart->products()->save($product, ['quantity' => $quantity]);
      $firstTime = false;
    }
    //else  use attach() to create a new row in cart_product table
    else {
      $cart->products()->attach($request->id, ['quantity' => $request->quantity]);
      $firstTime = true;
    }

    $cart->load('products');
    $product = $cart->products->find($request->id);

    $product['add_quantity'] = (int)$request->quantity;
    $product['firstTime'] = $firstTime;

    return response()->json($product);
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
    // $request->id = (int)$request->id;

    return response()->json($request);
  }

  public function getCart()
  {
    //if user has a cart
    if (Auth::user()->carts) {
      $cartId = Auth::user()->carts->max('id');
      $cart = Auth::user()->carts->find($cartId);
    } else {
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
