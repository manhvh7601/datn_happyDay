<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title', 'Happy Day')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('client.css')
</head>

<body>

  @include('client.nav')
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url({{asset('clientcss/images/bg_1.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          <div class="text">
            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                class="mr-2"><a href="{{route('home')}}">Trang Chủ</a></span> <span class="mr-2"><a
                  href="rooms.html">Phòng</a></span> <span>Phòng đơn </span></p>
            <h1 class="mb-4 bread">Phòng đơn </h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  @yield('content')

  @include('client.instagram')

  @include('client.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  @include('client.script')

</body>

</html>