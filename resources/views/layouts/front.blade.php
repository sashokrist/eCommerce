<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SJ - Shop</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/crumina-fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <!--Plugins styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('css/rimary-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">
            <ul class="nav">
                <li class="cart">
                    <a href="/" class="js-cart-animate">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li class="cart">
                    <a href="{{ route('products.index') }}" class="js-cart-animate">
                        |  <i class="fas fa-tools"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        |  <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                    </a>
                    <a href="{{ route('cart') }}" class="btn btn-primary btn-small">View Cart</a>
                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">View cart</span>

                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">
    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title"><a href="/">SJ E-commerce</a></h4>
                    <p class="heading-text">Buy product, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

   @yield('page')
<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <h3 style="font-weight: bold; font-size: 40px; color: white">SJ</h3>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/crum-mega-menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--<script src="{{ asset('js/swiper.jquery.min.js' }}"></script>--}}
{{--<script src="{{ asset('js/theme-plugins.js' }}"></script>--}}
{{--<script src="{{ asset('js/main.js' }}"></script>--}}
{{--<script src="{{ asset('js/form-actions.js' }}"></script>--}}

{{--<script src="{{ asset('js/velocity.min.js' }}"></script>--}}
{{--<script src="{{ asset('js/ScrollMagic.min.js' }}"></script>--}}
{{--<script src="{{ asset('js/animation.velocity.min.js' }}"></script>--}}

<!-- ...end JS Script -->
    <script>
        @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
        @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
        @endif
    </script>

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
