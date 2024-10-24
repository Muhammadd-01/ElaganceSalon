{{-- header start --}}
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elegance Men Hair Salon">
    <meta name="author" content="">
    <title>Elegance Men Hair Salon</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/elegant-font-icons.css">

    <link rel="stylesheet" href="css/elegant-line-icons.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/barber-icons.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/venobox/venobox.css">

    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/slicknav.min.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="navbar-brand"><img src="img/logo.png" alt="Barbershop"></a>
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="/">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="aboutus">About</a>
                                <ul>
                                    <li><a href="aboutus">About Us</a></li>
                                    <li><a href="aboutcompany">About Company</a></li>
                                </ul>
                            </li>
                            <li><a href="service">Services</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="appointment">Appointment</a></li>
                                    <li><a href="gallery">Gallery</a></li>
                                    <li><a href="team">Our Team</a></li>
                                    <li><a href="feedback">Feedback</a></li>
                                    <li><a href="testimonals">Testimonials</a></li>
                                </ul>
                            </li>
                            <li><a href="blogclassic">Blog</a></li>
                            <li><a href="contact">Contact</a></li>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="/#appointment-form" class="menu-btn">Make Appointment</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

{{-- Header end --}}






    @yield('content')





    {{-- Footer start --}}


    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="copyright">&copy;
                        <script type="text/javascript"> document.write(new Date().getFullYear())</script> All Rights Reserved By Elegance

                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <ul class="footer_social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>

    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

    <script src="js/vendor/smooth-scroll.min.js"></script>

    <script src="js/vendor/venobox.min.js"></script>

    <script src="js/vendor/jquery.ajaxchimp.min.js"></script>

    <script src="js/vendor/jquery.slicknav.min.js"></script>

    <script src="js/vendor/jquery.nice-select.min.js"></script>

    <script src="js/vendor/jquery.mb.YTPlayer.min.js"></script>

    <script src="js/vendor/wow.min.js"></script>

    <script src="js/contact.js"></script>

    <script src="js/appointment.js"></script>

    <script src="js/main.js"></script>
</body>


</html>
{{-- Footer end --}}
