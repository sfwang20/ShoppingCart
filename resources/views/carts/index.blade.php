@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Shopping Cart</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/products">Shop</a>
                    </li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table cart-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Item No</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            @if($cart->products())
              @foreach($cart->products as $key => $product)
              <tr>
                <td>
                  <div class="cart-img">
                    <a href="/products/{{ $product->id }}">
                      <img src="{{ $product->image}}" alt="">
                    </a>
                  </div>
                </td>
                <td><a href="/products/{{ $product->id }}">{{ $product->name }}</a>
                </td>
                <td>{{ $product->id }}</td>
                <td>
                  <div class="cart-action">
                    <input type="number" class="form-control cart-quantity" value="{{ $product->pivot->quantity }}" />
                    <button class="btn btn-default" type="submit" onclick="updateCartItem( {{$product->id}} ,event)"><i class="fa fa-refresh"></i>
                    </button>
                    <button class="btn btn-default" type="submit" onclick="deleteCartItem( {{$product->id}} )"><i class="fa fa-trash-o"></i>
                    </button>
                  </div>
                </td>
                <td>$ {{ $product->price }}</td>
                <td>$ {{ $product->price * $product->pivot->quantity }}</td>
              </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
        <!-- accordion 2 start-->
        <dl class="accordion">

            <dt>
              <a href="">Order Information</a>
            </dt>
            <dd>
            <form class="coupon-form" action="/orders" method="post">
              @csrf
                <div class="form-group">
                  <label>Enter Your Coupon Code</label>
                  <input type="text" name="coupon" class="form-control width-300">
                </div>
                <p>Enter your destination</p>
                <div class="form-group">
                  <label>Country *</label>
                  <select name="country" class="form-control">
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="BB">Barbados</option>
                    <option value="BE">Belgium</option>
                    <option value="BR">Brazil</option>
                    <option value="KH">Cambodia</option>
                    <option value="CA">Canada</option>
                    <option value="CN">China</option>
                    <option value="CO">Colombia</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    <option value="HK">Hong Kong</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IT">Italy</option>
                    <option value="JP">Japan</option>
                    <option value="MO">Macao S.A.R., China</option>
                    <option value="MY">Malaysia</option>
                    <option value="MM">Myanmar</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NO">Norway</option>
                    <option value="PH">Philippines</option>
                    <option value="PL">Poland</option>
                    <option value="QA">Qatar</option>
                    <option value="IE">Republic of Ireland</option>
                    <option value="RU">Russia</option>
                    <option value="KR">South Korea</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="SD">Sudan</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan</option>
                    <option value="TH">Thailand</option>
                    <option value="TR">Turkey</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB" selected="selected">United Kingdom (UK)</option>
                    <option value="US">United States (US)</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VN">Vietnam</option>
                    <option value="YE">Yemen</option>

                  </select>
                </div>
                <div class="form-group">
                  <label>Region / State *</label>
                  <input type="text" name="region" class="form-control">
                </div>
                <div class="form-group">
                  <label>Address *</label>
                  <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                  <label>Cread Card Number *</label>
                  <input type="text" name="creditCardNum" class="form-control">
                </div>
                <input type="hidden" name="amount" value="{{$total * 1.18}}">

            </dd>
          </dl>
          <!-- accordion 2 end-->

          <ul class="portfolio-meta m-bot-30 pull-right">
            <li><span> Sub Total </span> $ {{$total}}</li>
            <li><span> Eco Tax (-2%)	 </span> $ {{$total*0.02}}</li>
            <li><span> VAT (20%) </span> $ {{$total*0.2}}</li>
            <li><span><strong class="cart-total"> Total </strong></span>  <strong class="cart-total">$ {{$total*1.18}} </strong>
            </li>
          </ul>

          <div class="cart-btn-row inline-block">
            <button type="submit" class="btn btn-medium btn-dark-solid pull-right "><i class="fa fa-shopping-cart"></i>  Checkout</button>
            <a href="/products" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">  Continue Shopping </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
