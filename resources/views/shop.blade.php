@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">Shin-Fu's Shop</h4>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Product</li>
            <li><a href="/cart">Cart</a></li>
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
                        Showing 1–8 of 55 results
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
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="/shop-single">
                                    <img src="assets/img/product/1.jpg" alt="" />
                                </a>
                                <a href="/shop-single">
                                    <img src="assets/img/product/1-alt.jpg" alt="" />
                                </a>
                                <div class="sale-label">
                                    Sale
                                </div>
                            </div>
                            <div class="product-title">
                                <h5><a href="/shop-single">CROPPED SKINNY ISA JEANS</a></h5>
                            </div>
                            <div class="product-price">
                                <del>$79.00</del> $59.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/2.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/2-alt.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">full sleeve cotton shirt</a></h5>
                            </div>
                            <div class="product-price">
                                $49.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/3.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/3-alt.jpg" alt="" />
                                </a>
                                <div class="sale-label">
                                    Sale
                                </div>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">OPENWORK TRIMS DRESS</a></h5>
                            </div>
                            <div class="product-price">
                                <del>$279.00</del> $179.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/4.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/4-alt.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">full sleeve cotton t-shirt</a> </h5>
                            </div>
                            <div class="product-price">
                                $39.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/5.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/5-alt.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">SHOULDER DETAIL DRESS</a></h5>
                            </div>
                            <div class="product-price">
                                $59.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/6.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/6-alt.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">SLEEVE COTTON SWEAT SHIRT</a></h5>
                            </div>
                            <div class="product-price">
                                $69.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/7.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/7-alt.jpg" alt="" />
                                </a>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">CROPPED SKINNY ISA JEANS</a></h5>
                            </div>
                            <div class="product-price">
                                $59.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>
                    <div class="col-md-3">
                        <!--product list-->
                        <div class="product-list">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/img/product/8.jpg" alt="" />
                                </a>
                                <a href="#">
                                    <img src="assets/img/product/8-alt.jpg" alt="" />
                                </a>
                                <div class="sale-label">
                                    Sale
                                </div>
                            </div>
                            <div class="product-title">
                                <h5><a href="#">OPENWORK TRIMS DRESS</a></h5>
                            </div>
                            <div class="product-price">
                                <del>$279.00</del> $179.99
                            </div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-btn">
                                <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <!--product list-->
                    </div>

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
