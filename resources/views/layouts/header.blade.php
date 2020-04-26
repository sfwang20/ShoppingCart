<!--header start-->
<header class="l-header">
  <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
    <div class="container-fluid">
      <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

        <!--logo start-->
        <a href="/" class="logo-brand">
          <img class="retina" src="/assets/img/logo.png" alt="Massive">
        </a>
        <!--logo end-->

        <!--mega menu start-->
        <ul class="menuzord-menu menuzord-right c-nav_s-standard">

          <li class="@if(request()->is('/')) active @endif"><a href="/">Home</a></li>
          <li class="@if(request()->is('products')) active @endif"><a href="/products">Shop</a></li>
          <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

          <li class="cart-info">
            <a href="javascript:void(0)" class="cart-product-quantity"><i class="fa fa-shopping-cart"></i>cart({{ $cart->products()->sum('quantity') }})</a>
          @if(!$cart->products->isEmpty())
            <div class="megamenu megamenu-quarter-width ">
              <div class="megamenu-row">
                <div class="col12">

                  <!--cart-->

                  <table id="cart-table" class="table cart-table-list table-responsive">

                    @foreach($cart->products as $key => $product)
                    <tr data-id="{{$product->id}}">
                      <td>
                        <a href="/products/{{ $product->id }}">
                          <img src="{{ $product->image}}" alt="" />
                        </a>
                      </td>
                      <td><a href="/products/{{ $product->id }}"> {{$product->name}} </a>
                      </td>
                      <td class="quantity">X{{ $product->pivot->quantity }}</td>
                      <td>${{ $product->price * $product->pivot->quantity }}</td>
                      <td>
                        <a onclick="deleteCartItem( {{$product->id}} )" class="close">
                          <img src="/assets/img/product/close.png" alt="" />
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </table>

                  <div class="s-cart-btn pull-right">
                    <a href="/carts" class="btn btn-small btn-dark-solid"> Checkout</a>
                  </div>
                  <!--cart-->

                </div>
              </div>
            </div>
          @else
            <div class="megamenu megamenu-quarter-width ">
              <div class="megamenu-row">
                <div class="col12">
                  <table id="cart-table" class="table cart-table-list table-responsive">

                  </table>
                </div>
              </div>
            </div>
          @endif
          </li>

          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
        <!--mega menu end-->

      </nav>
    </div>
  </div>

</header>
<!--header end-->
