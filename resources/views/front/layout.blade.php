<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Hawaijahaj Online Flight Reservation and Sceduling System')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <!--  <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="/"><img src="img/logo.jpg" alt=""></a>
                </div>

                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Home</a></li>
                        <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="/about" accesskey="2" title="">About</a></li>
                        <li><a accesskey="3" title="">Flights</a>
                            <ul class="drop-menu">
                                <li class="{{ Request::path() === 'flights' ? 'current_page_item' : '' }}"><a href="/booking">Booking Form</a></li>
                                <li class="{{ Request::path() === 'details' ? 'current_page_item' : '' }}"><a href="/flights">Flight Details</a></li>

                            </ul>
                        </li>
                        <li class="{{ Request::path() === 'news' ? 'current_page_item' : '' }}"><a href="/news" accesskey="4" title="">News</a></li>
                        <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>

                        <div class="nav-right">
                            <div class="flex-center d-flex align-items-center position-ref full-height">
                                @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                    <a href="{{ url('/home') }}" class="primary-btn">Back To LogIn Page</a>
                                    @else
                                    <a href="{{ route('login') }}" class="primary-btn">Login</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="primary-btn">Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif

                            </div>
                        </div>
                    </ul>
                    </>

                    <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <!-- Header End -->
    <br>
    <br>
    <br>
    <br>




    @yield('content')
</body>

</html>