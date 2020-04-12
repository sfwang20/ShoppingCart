<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  @include('layouts.preloader')

  <div class="wrapper">

    <header class="l-header">
      <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
        <div class="container-fluid">
          <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

            <!--logo start-->
            <a href="index.html" class="logo-brand">
              <img class="retina" src="/assets/img/logo.png" alt="Massive">
            </a>
            <!--logo end-->

            <!--mega menu start-->
            <ul class="menuzord-menu menuzord-right c-nav_s-standard">
              <li><a href="/">Home</a></li>

              <li class="active"><a href="/products">Shop</a></li>

              <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

              <li class="cart-info">
                <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i></a>
                <div class="megamenu megamenu-quarter-width ">
                  <div class="megamenu-row">
                    <div class="col12">

                      <!--cart-->
                      <table class="table cart-table-list table-responsive">

                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <a onclick="" class="close">
                              <img src="/assets/img/product/close.png" alt="" />
                            </a>
                          </td>
                        </tr>

                      </table>

                      <div class="total-cart pull-right">
                        <ul>
                          <li><span>Total </span>  <span></span>
                          </li>
                        </ul>
                      </div>
                      <div class="s-cart-btn pull-right">
                        <a href="/carts" class="btn btn-small btn-theme-color"> View cart</a>
                        <a href="#" class="btn btn-small btn-dark-solid"> Checkout</a>
                      </div>
                      <!--cart-->

                    </div>
                  </div>
                </div>
              </li>

              <li>
                <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                <div class="megamenu megamenu-quarter-width navbar-search">
                  <form role="searchform">
                    <input type="text" class="form-control" placeholder="Search Here">
                  </form>
                </div>
              </li>
            </ul>
            <!--mega menu end-->

          </nav>
        </div>
      </div>

    </header>

      <section class="page-title dark">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h3 class="text-uppercase">Your order is completed!</h3>
                      <span class="text-uppercase"> Thanks for your shopping on our website. </span>
                  </div>
              </div>
          </div>
      </section>

      <section class="body-content ">

        <div class="page-content">

          <div class="container">
            <div class="row">
              <div class="col-md-8">

                <h4 class="text-uppercase"></h4>
                <h4 class="text-uppercase">information</h4>
                <p>Upper Level, Overseas Passenger Terminal, The Rocks, Sydney 2000</p>
                <address>
                  <p>Telp: +62 500 800 123 </p>
                  <p>Fax: +62 500 800 112 </p>
                  <p>Email: testmail@yourdomain.com</p>
                </address>

              </div>
              <div class="col-md-4">
                <div class=" m-bot-30 inline-block">

                  <div class=""><img width="470px" height="300px" src="/assets/img/product/ads-5.jpg"></div>

                </div>



              </div>
            </div>
        </div>

      </section>

      @include('layouts.footer')

  </div>

  @include('layouts.js')

</body>

</html>
