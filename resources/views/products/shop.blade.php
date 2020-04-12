@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Shin-Fu's Shop</h4>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Shop</li>
            <li><a href="/carts">Shopping Cart</a></li>
        </ol>
    </div>
</section>
@endsection


@section('content')
<div class="page-content product-grid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--product option-->
        <div class="clearfix m-bot-30 inline-block">
          <div class="pull-left">
            <form method="post" action="#">
              <select class="form-control">
                <option>Default sorting</option>
                <option>Sort by popularity</option>
                <option>Sort by average ratings</option>
                <option>Sort by newness</option>
                <option>Sort by price: low to high</option>
                <option>Sort by price: high to low</option>
              </select>
            </form>
          </div>

          <div class="pull-left m-top-5 m-left-10">
            Showing 1–8 of {{ $products->count() }} results
          </div>

          <div class="pull-right shop-view-mode">
            <a href="#"> <i class="fa fa-th-large"></i>
            </a>
            <a href="#"> <i class="fa fa-th-list"></i>
            </a>
          </div>
        </div>
        <!--product option-->
        <div class="row">
          @foreach ($products as $key => $product)
          <div class="col-md-3">
            <!--product list-->
            <div class="product-list">
              <div class="product-img">
                <a href="/products/{{$product->id}}">
                  <img src="{{ $product->image }}" alt="" />
                </a>
                <a href="/products/{{$product->id}}">
                  <img src="{{ $product->image_alt }}" alt="" />
                </a>
                @if( $product->price < $product->price_origin)
                <div class="sale-label">
                  Sale
                </div>
                @endif
              </div>
              <div class="product-title">
                <h5><a href="/products/{{$product->id}}">{{ $product->name }}</a></h5>
              </div>
              <div class="product-price">
                @if($product->price < $product->price_origin)
                <del>${{ $product->price_origin }}</del> ${{ $product->price }}
                @else
                ${{ $product->price_origin }}
                @endif
              </div>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <div class="product-btn">
                <a onclick="createCartItem( {{$product->id}} )" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
              </div>
            </div>
            <!--product list-->
          </div>
          @endforeach

          <div class="text-center col-md-12">
            <ul class="pagination custom-pagination">
              <li><a href="#">Prev</a>
              </li>
              <li class="active"><a href="#">1</a>
              </li>
              <li><a href="#">2</a>
              </li>
              <li><a href="#">3</a>
              </li>
              <li><a href="#">4</a>
              </li>
              <li><a href="#">5</a>
              </li>
              <li><a href="#">Next</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
