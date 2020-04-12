<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // public function index()
    // {
    //   return view('/orders.index');
    // }

    public function store(Request $request)
    {
      $order = new Order;
      $order->fill($request->all());
      $order->user_id = Auth::id();
      $order->cart_id = Auth::user()->cart->id;
      $order->save();

      return view('/orders.index', ['order' => $order]);
    }
}
