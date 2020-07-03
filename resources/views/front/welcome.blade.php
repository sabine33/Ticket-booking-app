@extends ('layouts.front_layout')

@section('content')
<style>
    .carousel-item {
        transition: transform 2s ease, opacity .5s ease-out
    }

    #flight_slide {
        z-index: -1000;
        height: 90vh;
        display: flex;
    }

    @media screen and (max-width:600px) {
        #flight_slide {
            height: auto;
        }
    }
</style>
<div id="flight_slide" class="carousel slide carousel-fade" data-ride="carousel" style="">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#flight_slide" data-slide-to="0" class="active"></li>
        <li data-target="#flight_slide" data-slide-to="1"></li>
        <li data-target="#flight_slide" data-slide-to="2"></li>
        <li data-target="#flight_slide" data-slide-to="3"></li>
        <li data-target="#flight_slide" data-slide-to="4"></li>
        <li data-target="#flight_slide" data-slide-to="5"></li>

    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/a.jpg" alt="Los Angeles" style="width:100%;object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="/img/r.jpg" alt="Chicago" style="width:100%;object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="/img/t.jpg" alt="New York" style="width:100%;object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="/img/w.jpg" alt="New York" style="width:100%;object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="/img/s.jpg" alt="New York" style="width:100%;object-fit:cover;">
        </div>
        <div class="carousel-item">
            <img src="/img/ww.jpg" alt="New York" style="width:100%;object-fit:cover;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#flight_slide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#flight_slide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>

<div class="hero-area" style="">
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
                        <a href="/booking-front/1" class="primary-btn">To Book</a>
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
                            <a href="/booking-front/1" class="primary-btn">To Book</a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="facilities-item set-bg fi-right" data-setbg="/img/luu.jpg">
                        <div class="fi-title">
                            <h2>Trip to Lukla</h2>
                            <p>$40</p>
                            <br><br><br><br><br><br><br><br>
                            <a href="/booking-front/1" class="primary-btn">To Book</a>
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



@endsection