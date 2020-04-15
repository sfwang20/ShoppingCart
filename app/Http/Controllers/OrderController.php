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
    public function admin()
    {
      $orders = Order::all();
      return view('orders.admin', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
      $order = new Order;
      $order->fill($request->all());
      $order->user_id = Auth::id();
      $order->cart_id = Auth::user()->carts->max('id');
      $order->save();

      $cart = new Cart;
      $cart->user_id = Auth::id();
      $cart->save();

      $total = 0;

      return view('orders.index', ['order' => $order, 'cart'=>$cart, 'total'=>$total]);
    }

    public function edit(Order $order)
    {
      return view('orders.edit', ['order' => $order]);
    }

    public function update(Request $request, Order $order)
    {
      $order->fill($request->all());
      $order->save();
      $orders = Order::all();
      return view('orders.admin', ['orders' => $orders]);
    }

    public function destroy(Order $order)
    {
      $order->delete();
    }
}
