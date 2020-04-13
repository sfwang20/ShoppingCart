@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Order Admin</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/products/admin">Shop Admin Panel</a>
                    </li>
                    <li class="breadcrumb-item active">Order Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">

  <ul class="list-group">
    @foreach ($orders as $key => $order)
      <li class="list-group-item clearfix">
        <div class="float-left">
          <div class="">Order No:{{ $order->id }}</div>
          <div class="">Name:{{ $order->user->name }}</div>
          <div class="">Amount:{{ $order->amount }}</div>
        </div>
        <span class="float-right">
          <a href="/orders/{{ $order->id }}/edit" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onclick="deleteOrder({{ $order->id }})">Delete</button>
        </span>
      </li>
    @endforeach
  </ul>
  </div>
</div>

@endsection
