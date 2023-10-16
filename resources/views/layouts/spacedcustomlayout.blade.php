<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--504-->
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('ldxa-trade.com/vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- Vendor/Plugins CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('ldxa-trade.com/vendor/animate-css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('ldxa-trade.com/vendor/slick/slick.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('ldxa-trade.com/vendor/slick/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" media="all"
        href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600,700&display=swap">
    <link type="text/css" rel="stylesheet" media="all"
        href="{{asset('ldxa-trade.com/vendor/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link type="text/css" rel="stylesheet" media="all" href="fonts/flaticon/flaticon.css">
    <!--VisualHyip.com HYIP Template-->
    <!-- Bootbox Template CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="{{asset('ldxa-trade.com/css/main.css')}}">

   <title>{{$compd? $compd->Companyname: 'Coming soon'}}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="https://ldxa-trade.com/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://ldxa-trade.com/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://ldxa-trade.com/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://ldxa-trade.com/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://ldxa-trade.com/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://ldxa-trade.com/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://ldxa-trade.com/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://ldxa-trade.com/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://ldxa-trade.com/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://ldxa-trade.com/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ldxa-trade.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://ldxa-trade.com/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ldxa-trade.com/favicon-16x16.png">
    <link rel="manifest" href="https://ldxa-trade.com/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">



</head>

<body id="page-top">



    <!-- START Header -->
    <header class="header position-relative">
        <!-- START Navigation -->
        <div class="navigation-bar" id="affix">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light navbar-reset">
                    <a class="logo" href="index.html?a=home">
                        <img class="logo-default" src="{{asset('ldxa-trade.com/img/logo-light.png')}}" alt="Bootbox">
                    </a>

                    <button class="navbar-toggler border-0 p-0" type="button" data-toggle="collapse"
                        data-target="#theme-navbar" aria-controls="theme-navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-lines"></span>
                    </button>





                    <div class="collapse navbar-collapse" id="theme-navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Homepage</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('invest')}}">Investments</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                            </li>





                            <li class="nav-item">
                                <a class="nav-link" href="{{route('policy')}}">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>

                        </ul>
                        <div class="my-3 my-lg-0">
                            <a href="{{route('login')}}" class="btn btn-custom">Sign In</a>
                        </div>


                    </div>
                </nav>



            </div>





            <div id="google_translate_element"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
                }
            </script>

            <script type="text/javascript"
                src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>







        </div><!--VisualHyip.com HYIP Template-->
        <!-- END Navigation -->
    </header>
    <!-- END Header -->





    @yield('body')



    <script src="//code.tidio.co/kv4ebc72edyeuvexpydcplllzldkasg0.js" async></script>

    <!-- START Footer -->
    <footer class="bg-white footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-30">
                        <div class="mb-30">
                            <img class="logo-footer" src="{{asset('ldxa-trade.com/img/logo-light.png')}}" alt="Bootbox">
                        </div>
                        <p class="mb-30 c-white">{{$compd? $compd->Companyname: 'Coming soon'}} possesses top-notch proficiency in investment strategies
                            and is recognized as a prominent alternative investment management company on a global
                            scale.</p>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-30">
                        <h4 class="btm-sep pb-3 mb-30 c-white font-weight-semi-bolder">Quick Links</h4>
                        <div class="foot-links">
                            <a href="/">Homepage</a>
                            <a href="{{route('about')}}">About</a>
                            <a href="{{route('invest')}}">Investments</a>
                            <a href="{{route("faq")}}">FAQ</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-30">
                        <h4 class="btm-sep pb-3 mb-30 c-white font-weight-semi-bolder">User</h4>
                        <div class="foot-links">
                            <a href="{{route('policy')}}">Privacy Policy</a>
                            <a href="{{route('contact')}}">Contact Us</a>
                            <a href="{{route('login')}}">Sign In</a>
                            <a href="{{route('register')}}">Register</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-30">
                        <h4 class="btm-sep pb-3 mb-30 c-white font-weight-semi-bolder">Contact us</h4>
                        <ul class="contact-info mt-4">
                            <li>
                                <i class="zmdi zmdi-pin"></i>
                                1st Floor Hanover House, 14 Hanover Square, London, England, W1S 1HN
                            </li>
                            <li>
                                <i class="zmdi zmdi-email"></i>
                                <a href="mailto:{{$compd? $compd->Companyemail: 'Coming soon'}}">{{$compd? $compd->Companyemail: 'Coming soon'}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright text-center c-white">
                ©2023 - fixo-trade.com. <span class="d-none d-md-inline-block">All rights reserved.</span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
    <!--VisualHyip.com HYIP Template-->
    <!-- START Scroll-To-Top -->
    <a id="back-top" class="back-top" href="javascript:void(0)">
        <span class="zmdi zmdi-triangle-up mb-1"></span>
    </a>
    <!-- END Scroll-To-Top -->

    <!-- Global Required JS -->
    <script src="{{asset('ldxa-trade.com/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ldxa-trade.com/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Vendor/Plugins JS -->
    <script src="{{asset('ldxa-trade.com/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('ldxa-trade.com/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('ldxa-trade.com/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ldxa-trade.com/vendor/wowjs/wow.min.js')}}"></script>

    <script src="{{asset('ldxa-trade.com/js/main.js')}}"></script>
</body>

</html>