<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ env('GOOGLE_ANALYTICS') }}');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
</head>
<body>
<noscript>
    <p class="alert alert-danger">
        You need to turn on your javascript. Some functionality will not work if this is disabled.
        <a href="https://www.enable-javascript.com/" target="_blank">Read more</a>
    </p>
</noscript>
<section>
{{--    <div class="hidden-xs">--}}
{{--        <div class="container">--}}
{{--            <div class="clearfix"></div>--}}
{{--            <div class="pull-right">--}}
{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    @if(auth()->check())--}}
{{--                        <li><a href="{{ route('accounts', ['tab' => 'profile']) }}"><i class="fa fa-home"></i> Minha Conta</a></li>--}}
{{--                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Sair</a></li>--}}
{{--                    @else--}}
{{--                        <li><a href="{{ route('login') }}"> <i class="fa fa-lock"></i> Login</a></li>--}}
{{--                        <li><a href="{{ route('register') }}"> <i class="fa fa-sign-in"></i> Registrar</a></li>--}}
{{--                    @endif--}}
{{--                    <li id="cart" class="menubar-cart">--}}
{{--                        <a href="{{ route('cart.index') }}" title="View Cart" class="awemenu-icon menu-shopping-cart">--}}
{{--                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                            <span class="cart-number">{{ $cartCount }}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <header id="header-section">--}}
{{--        <nav class="navbar navbar-default">--}}
{{--            <div class="container">--}}
{{--                <!-- Brand and toggle get grouped for better mobile display -->--}}
{{--                <div class="navbar-header col-md-4">--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
{{--                        <span class="sr-only">Toggle navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}
{{--                    <a class="navbar-brand" href="{{ route('home') }}">--}}
{{--                    <small>{{ config('app.name') }}</small></a>--}}

{{--                </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    @include('layouts.front.header-cart')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </header>--}}
{{--</section>--}}

    <body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">

                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <a href="{{env('WHATSAPP_GROUP')}}" target="_blank"><span class="icon-whatsapp"></span></a>
                            </div>
                            <a href="{{env('WHATSAPP_GROUP')}}" target="_blank"><span class="text">Whatsapp</span></a>

                        </div>

                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">contato@benditofruto.com.br</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Compras de Sábado até 3a feira, Entrega aos sábados </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">{{env('APP_NAME')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    @if(auth()->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Conta</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{ route('accounts', ['tab' => 'profile']) }}">Perfil</a>
                                <a class="dropdown-item" href="wishlist.html">Compras efetuadas</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Sair</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Cadastre-se</a></li>
                    @endif


                    {{--<li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>--}}
                    <li class="nav-item cta cta-colored"><a href="{{route('cart.index')}}" class="nav-link"><span class="icon-shopping_cart"></span>[{{$cartCount}}]</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
@yield('content')
@include('layouts.front.footer')

<script src="{{ asset('js/front.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
@yield('js')
</body>
</html>