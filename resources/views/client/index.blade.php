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

        <section class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url({{ asset('clientcss/images/bg_1.jpg')}})">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate text-center">
                            <div class="text mb-5 pb-3">
                                <h1 class="mb-3">Chào Mừng Đến Với HappyDay</h1>
                                <h2>Resorts</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url({{ asset('clientcss/images/bg_2.jpg')}})">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate text-center">
                            <div class="text mb-5 pb-3">
                                <h1 class="mb-3">Enjoy A Luxury Experience</h1>
                                <h2>Join With Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
