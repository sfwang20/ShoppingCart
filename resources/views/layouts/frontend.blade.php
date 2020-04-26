<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  @include('layouts.preloader')

  <div class="wrapper">
  @if(isset($cart))
    @if(isset($products))
      @include('layouts.header', ['products' => $products])
    @else
      @include('layouts.header')
    @endif
  @else
    @include('layouts.header_out')
  @endif

  @yield('hero')

      @yield('page-title')

      <section class="body-content ">

        @yield('content')

      </section>

      @include('layouts.footer')

  </div>

  @include('layouts.js')
  @include('layouts.template')
  @yield('script')
</body>

</html>
