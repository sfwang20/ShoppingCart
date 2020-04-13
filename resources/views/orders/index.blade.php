@extends('layouts.frontend')


@section('page-title')
<section class="page-title dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase">Your order(No.{{$order->id}}) is completed!</h3>
                <span class="text-uppercase"> Thanks for your shopping on our website. </span>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
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
@endsection
