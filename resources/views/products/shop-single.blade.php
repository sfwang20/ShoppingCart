@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-uppercase">Shop Single</h4>
        <ol class="breadcrumb">
          <li><a href="/">Home</a>
          </li>
          <li><a href="/products">Shop</a>
          </li>
          <li class="active">Product</li>
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
      <div class="col-md-5">
        <div class="post-list-aside">
          <div class="post-single">
            <div class="post-slider-thumb post-img text-center">
              <ul class="slides">
                <li data-thumb="{{ $product->image }}">
                  <a href="javascript:;" title="Freshness Photo">
                    <img src="{{ $product->image }}" alt="" />
                  </a>
                </li>
                <li data-thumb="{{ $product->image_alt }}">
                  <a href="javascript:;" title="Awesome Lightbox">
                    <img src="{{ $product->image_alt }}" alt="" />
                  </a>
                </li>
                <!-- <li data-thumb="/assets/img/product/6.jpg">
                  <a href="javascript:;" title="Massive UI Components">
                    <img src="/assets/img/product/6.jpg" alt="" />
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="product-title">
          <h2 class="text-uppercase">{{ $product->name }}</h2>
        </div>

        <div class="product-price txt-xl">
          @if( $product->price_origin > $product->price )
          <span class="border-tb p-tb-10"> ${{ $product->price }} <del>${{ $product->price_origin}}</del></span>
          @else
          <span class="border-tb p-tb-10"> ${{ $product->price }}</span>
          @endif
        </div>

        <ul class="portfolio-meta m-bot-10 m-top-10">
          <li><span> Item No </span> {{ $product->id }}</li>
          <li><span> Condition </span> New</li>
        </ul>
        <p>
          {{ $product->description }}
        </p>

        <ul class="portfolio-meta m-bot-10 stock">
          <li><span><strong class="number-item"> {{ $products->where('name', $product->name)->sum('stock') }}</strong> Item </span>  <span class="status">In Stock</span>
          </li>
        </ul>
        <div class="p-values">
          <ul class="portfolio-meta m-bot-10 ">
            <li>
              <span> Size </span>
              <span>
                <select class="form-control">
                  <option>{{$product->size}}</option>
                </select>
              </span>
            </li>
          </ul>
          <ul class="p-quantity m-bot-10 ">
            <li>
              <label>Quantity</label>
            </li>
            <li id="quantity">
              <input type="number" value="1" name="quantity" min="1"/>
            </li>

          </li>
        </ul>
      </div>

      <div class="clearfix">
        <a onclick="createCartItem( {{$product->id}}, event )" class="btn btn-medium btn-dark-solid  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
      </div>
    </div>
  </div>
  <div class="row page-content">
    <div class="col-md-12">
      <!--tabs border start-->
      <section class="normal-tabs">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#tab-one">More Info</a>
          </li>
          <li class="">
            <a data-toggle="tab" href="#tab-two">Specification</a>
          </li>
          <li class="">
            <a data-toggle="tab" href="#tab-three">Review (2)</a>
          </li>

        </ul>
        <div class="panel-body">
          <div class="tab-content">
            <div id="tab-one" class="tab-pane active">
              <h4 class="text-uppercase">Product Description</h4>
              {{ $product->description }}
            </div>
            <div id="tab-two" class="tab-pane">
              <table class="table table-striped table-bordered">
                <tbody>
                  <tr>
                    <td>Size</td>
                    <td>Small, Medium, Large &amp; Extra Large</td>
                  </tr>
                  <tr>
                    <td>Color</td>
                    <td>Read, Blue, Green &amp; Black</td>
                  </tr>
                  <tr>
                    <td>Chest</td>
                    <td>38 inches</td>
                  </tr>
                  <tr>
                    <td>Waist</td>
                    <td>20 cm</td>
                  </tr>
                  <tr>
                    <td>Length</td>
                    <td>35 cm</td>
                  </tr>
                  <tr>
                    <td>Fabric</td>
                    <td>Cotton, Silk &amp; Synthetic</td>
                  </tr>
                  <tr>
                    <td>Warranty</td>
                    <td>6 Months</td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div id="tab-three" class="tab-pane">
              <ul class="media-list comments-list clearlist">

                <!-- comment item start-->
                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object review-avatar" src="/assets/img/post/a1.png" alt="">
                  </a>
                  <div class="media-body">
                    <div class="comment-info">
                      <div class="reviewer text-uppercase">
                        <a href="#">John Doe</a>
                      </div>
                      July 5, 2015, at 1:20
                      <span class="review-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </span>
                    </div>

                    <p>
                      Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
                    </p>
                  </div>
                </li>
                <!-- comment item end -->

                <!-- comment item -->
                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object review-avatar" src="/assets/img/post/a1.png" alt="">
                  </a>
                  <div class="media-body">
                    <div class="comment-info">
                      <div class="reviewer text-uppercase">
                        <a href="#">Margarita Smith</a>
                      </div>
                      July 5, 2015, at 1:30
                      <span class="review-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </span>
                    </div>

                    <p>
                      Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..
                    </p>
                  </div>
                </li>
                <!-- comment item end -->

              </ul>

              <!--add review start-->
              <div class="heading-title-alt text-left heading-border-bottom">
                <h4 class="text-uppercase">ADD REVIEW</h4>
              </div>

              <form method="post" action="#" id="form" role="form" class="blog-comments">

                <div class="row">

                  <div class="col-md-6 form-group">
                    <!-- Name -->
                    <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                  </div>

                  <div class="col-md-6 form-group">
                    <!-- Email -->
                    <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                  </div>


                  <div class="form-group col-md-12">
                    <select class="form-control">
                      <option value="">Rating -- Select One --</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>

                  <!-- Comment -->
                  <div class="form-group col-md-12">
                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                  </div>

                  <!-- Send Button -->
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-small btn-dark-solid ">
                      Submit Review
                    </button>
                  </div>


                </div>

              </form>
              <!--add review end-->

            </div>
          </div>
        </div>
      </section>
      <!--tabs border end-->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="heading-title-alt text-left ">
        <h3 class="text-uppercase">similar items </h3>
        <span class="text-uppercase">We have 14 similar product currently in stock</span>
      </div>

      <!--portfolio carousel-->

      <div id="portfolio-carousel" class=" portfolio-with-title col-3 ">
        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/1.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/1.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="/assets/img/product/1.jpg" class="popup-link" title="lightbox view">CROPPED SKINNY ISA JEANS</a></h4>
            <p class="txt-xl">$59.00</p>
          </div>
        </div>

        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/2.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/2.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="/assets/img/product/2.jpg" class="popup-link" title="lightbox view">denouncing pleasure</a></h4>
            <p class="txt-xl">$49.00</p>
          </div>
        </div>

        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/3.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/3.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="//assets/img/product/3.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
            <p class="txt-xl">$69.00</p>
          </div>
        </div>

        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/4.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/4.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="/assets/img/product/4.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
            <p class="txt-xl">$79.00</p>
          </div>
        </div>

        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/5.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/5.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="/assets/img/product/5.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
            <p class="txt-xl">$69.00</p>
          </div>
        </div>

        <div class="portfolio-item">
          <div class="thumb">
            <img src="/assets/img/product/6.jpg" alt="">
            <div class="portfolio-hover">
              <div class="action-btn">
                <a href="/assets/img/product/6.jpg" class="popup-link" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="portfolio-title">
            <h4><a href="/assets/img/product/6.jpg" class="popup-link" title="lightbox view">annoyances accepted</a></h4>
            <p class="txt-xl">$59.00</p>
          </div>
        </div>

      </div>

      <!--portfolio carousel-->

    </div>
  </div>
</div>
</div>
@endsection
