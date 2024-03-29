@extends('front.layout')
<!-- Header Section Begin -->

@section('content')
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="/"><img src="/img/logo.jpg" alt=""></a>
            </div>

            <nav class="main-menu mobile-menu">
                <ul>
                    <li class="current_page_item"><a href="/" accesskey="1" title="">Home</a></li>
                    <li class=""><a href="/about" accesskey="2" title="">About</a></li>
                    <li><a accesskey="3" title="">Flights</a>
                        <ul class="drop-menu">
                            <li class=""><a href="/booking">Booking Form</a></li>
                            <li class=""><a href="/flights">Flight Details</a></li>

                        </ul>
                    </li>
                    <li class=""><a href="/news" accesskey="4" title="">News</a></li>
                    <li class=""><a href="/contact" accesskey="5" title="">Contact Us</a></li>


                </ul>
            </nav>

            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>

<!-- Header End -->
<br>
<br>
<br>
<br>





<div class="hero-area">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/img/a.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
                <img src="/img/r.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
                <img src="/img/t.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
                <img src="/img/w.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
                <img src="/img/s.jpg" alt="" style="width:100%;">
            </div>

            <div class="item">
                <img src="/img/ww.jpg" alt="" style="width:100%;">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>




<!-- Intro Text Section Begin -->
<section class="intro-section spad">
    <div class="container">
        <div class="row intro-text">
            <div class="col-lg-6">
                <div class="intro-left">
                    <div class="section-title">
                        <span>A Memorable Flight</span>
                        <h2>Which leads you to<br />your destination.</h2>
                    </div>
                    <p>Being able to book an airfare online means you can do it any time of the day, wherever you are. You can book a flight at home, while you're in the office and even when you're on your way somewhere, via a laptop. By purchasing a flight online, you also don't have to worry finding a parking spot at the travel agent, waiting for service or feeling pressured to book a flight on the spot without thinking it through first.When you book a flight online, you have the freedom to shop around for the best price. Purchasing the ticket online means customers can check out many airlines before making their choice.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="intro-right">
                    <p>Book a flight online, and you'll be able to save a lot of time by checking in online. If you're flying domestic, you can check in as far in advance as 24 hours and as late as one hour before the flight.Changing or canceling a ticket is simple when you've booked an airfare online.This web application will help you to book your ticket easily. Hurry and login to our account.</p>
                    <a href="/flights/create" class="primary-btn">To Book</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Intro Text Section End -->

<!-- Facilities Section Begin -->
<section class="facilities-section">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-6">

                <div class="facilities-item set-bg" data-setbg="/img/pk.jpg">
                    <div class="fi-title">
                        <h2>Trip to Pokhara</h2>
                        <p>$30</p>
                        <br><br><br><br><br><br><br><br>
                        <a href="/flights/create" class="primary-btn">To Book</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-6">
                <div class="facilities-item set-bg fi-right" data-setbg="/img/luu.jpg">
                    <div class="fi-title">
                        <h2>Trip to Lukla</h2>
                        <p>$40</p>
                        <br><br><br><br><br><br><br><br>
                        <a href="/flights/create" class="primary-btn">To Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Facilities Section End -->
<!-- <div class="container">
  <div class="row">

  <div class="column">
    <img src="/img/pk.jpg" style="width:100%" >
  </div>

  <div class="column">
    <img src="/img/ch.jpg"  style="width:100%">
  </div>

  <div class="column">
    <img src="/img/luu.jpg" style="width:100%">
  </div>
  
</div>
</div> -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Guestbook</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-time">
                        02 / 02 / 2020
                    </div>
                    <h4>Easy to book and resonable price</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>It was so easy to search flight of particular date and the ticket price was also reasonable of that time. I will use this application more in future.</p>
                    <div class="ti-author">
                        <div class="author-pic">
                            <img src="/img/author-1.png" alt="">
                        </div>
                        <div class="author-text">
                            <h6>Rohit Thapa<span>Kathmandu</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-time">
                        08 / 12 / 2018
                    </div>
                    <h4>Time Saver</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>It has saved my time.I can book my ticket from anywhere with the help of internet without waiting a long queue in airport or visiting any travel agency. </p>
                    <div class="ti-author">
                        <div class="author-pic">
                            <img src="/img/author-2.png" alt="">
                        </div>
                        <div class="author-text">
                            <h6>Preeti Jha<span>Nepalgunj</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Video Section Begin -->
<div class="video-section">
    <div class="video-bg set-bg" data-setbg="/img/pppp.jpg" width="100%"></div>
    <!--  <div class="container"> -->
    <!-- <div class="video-text set-bg" data-setbg="/img/video-inside-bg.jpg">
                <a href="https://www.youtube.com/watch?v=j56YlCXuPFU" class="pop-up"><i class="fa fa-play"></i></a>
            </div> -->
</div>
</div>
<!-- Video Section End -->

<!-- Home Page About Section Begin -->
<section class="homepage-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>“Customers love our <br />website”</h2>
                    </div>
                    <p>Customer can save lots of time using this website.They can book flight tickets any time anywhere, even if they need to travel the next day.There's a wide range of choices and also they get information on special offers.This website is safe and secured.Thus, customers trust our website and they choose our website to book flight tickets. </p>
                    <a href="/flights/create" class="primary-btn">To Book</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="/img/lu.jpg" alt="" height="191px">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="/img/ti.jpg" alt="" height="191px">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="/img/el.jpg" alt="" height="195px">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="/img/ga.webp" alt="" height="195px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page About Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="#"><img src="/img/logo.jpg" alt=""></a>
                    </div>
                    <p>We will help you to book your tickets from any corner of the world without the help of third party.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-item">

                    <div class="newslatter-form">
                        <input type="text" placeholder="Your Email Here">
                        <button type="submit" data-toggle="modal" data-target="#exampleModal">Subscribe</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="/img/logo.jpg" width="200px" align="left">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Thankyou for subscription. You will be notified soon.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-item">
                    <h5>Contact Info</h5>
                    <ul>
                        <li><img src="/img/placeholder.png" alt="">Thapathali,Kathmandu<br />Nepal</li>
                        <li><img src="/img/phone.png" alt="">+977 9810001111</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="">Flights</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 ">
                    <div class="small text-white text-center">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Sunamika Karki, C7190084<i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer Section End -->
@endsection
<!-- Js Plugins -->