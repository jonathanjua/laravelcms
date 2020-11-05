<!DOCTYPE html>
<html lang="en" style="height:100%;">
    <head>
        <meta charset="utf-8">
        <title>Pinegrow Bootstrap Blocks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="pinegrow, blocks, bootstrap"/>
        <meta name="description" content="My new website"/>
        <link rel="shortcut icon" href="ico/favicon.png">
        <!-- Core CSS -->
        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <!-- Style Library -->
        <link href="{{ asset('assets/css/style-library-1.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/blocks.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    </head>
    <body data-spy="scroll" data-target="nav">
        <header id="header-1" class="header-1 soft-scroll">
            <!-- Navbar -->
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned">
                <div class="container">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{ route('home')}}"> <img src="{{ asset('assets/images/brand/pgblocks-logo-white-nostrap.png')}} " class="brand-img img-responsive"> </a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a href="{{ route('home')}}"> Home</a>
                            </li>
                            @foreach ( $front_menu as $slug => $title)

                            <li class="nav-item">
                                <a href="{{ route('page.single', ['slug'=>$slug]) }}"> {{ $title }} </a>
                            </li>



                            @endforeach

                        </ul>
                        <!--//nav-->
                    </div>
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->

        </header>

        @yield('content')

        <section class="bg-deepocean content-block-nopad footer-wrap-1-3">
            <div class="container footer-1-3">
                <div class="col-md-4 pull-left">
                    <img src="{{ asset('assets/images/brand/pgblocks-logo-white.png')}}" class="brand-img img-responsive">
                    <ul class="social social-light">
                        <li>
                            <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-2x fa-dribbble"></i></a>
                        </li>
                    </ul>
                    <!-- /.social -->
                </div>
                <div class="col-md-3 pull-right">
                    <p class="address-bold-line">We <i class="fa fa-heart pomegranate"></i> our amazing customers</p>
                    <p class="address small">
					123 Anywhere Street,<br>
					London,<br>
					LO4 6ON</p>
                </div>
                <div class="col-xs-12 footer-text">
                    <p>Please take a few minutes to read our <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <script type="text/javascript" src=" {{ asset('js/jquery-1.11.1.min.js')}} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins.js')}}"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bskit-scripts.js
        ')}}"></script>
    </body>
</html>
