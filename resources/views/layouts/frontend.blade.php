<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  @include('layouts.preloader')

  <div class="wrapper">

  @include('layouts.header', ['products' => (isset($products))? $products : null])

  @yield('hero')

      @yield('page-title')

      <section class="body-content ">

        @yield('content')

      </section>

      @include('layouts.footer')

  </div>

  @include('layouts.js')
  @yield('script')
</body>

</html>
