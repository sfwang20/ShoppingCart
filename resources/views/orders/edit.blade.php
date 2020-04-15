@extends('layouts.app')

@section('page-title')
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-uppercase">Order Panel</h4>
        <ol class="breadcrumb">
          <li><a href="/">Home/</a>
          </li>
          <li class="active"><a href="/orders/admin">Order Admin Panel/</a>
          </li>
          <li class="active">Edit</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="page-content">
  <div class="container">

    <form method="post" action="/orders/{{ $order->id }}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="_method" value="put">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Order No.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{ $order->id }}" disabled>
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Order Status</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Unpaid" checked>
              <label class="form-check-label" for"Unpaid">
                Unpaid
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Paid, not shipped">
              <label class="form-check-label" for="Paid, not shipped">
                Paid, not shipped
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Shipped">
              <label class="form-check-label">
                Shipped
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Closed">
              <label class="form-check-label">
                Closed
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" value="Cancel">
              <label class="form-check-label">
                Cancel
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $order->user->name}}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="product" class="col-sm-2 col-form-label" >Products</label>
        <div class="col-sm-10">
          @foreach ($order->cart->products as $key => $product)
          <input type="text" class="form-control" name="coupon" value="{{ $product->name }} (${{ $product->price }})* {{ $product->pivot->quantity}}" disabled>
          @endforeach
        </div>
      </div>
      <div class="form-group row">
        <label for="amount" class="col-sm-2 col-form-label">Amount</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="amount" value="${{ $order->amount }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="country" class="col-sm-2 col-form-label">Country / Region</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="country" value="{{ $order->country }} / {{ $order->region }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" value="{{ $order->address }}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="coupon" class="col-sm-2 col-form-label">Coupon</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="coupon" value="{{ $order->coupon }}" disabled>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection
