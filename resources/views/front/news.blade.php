@extends ('front.layout')

@section('content')

<!-- Hero Area Section Begin -->
<div class="hero-area set-bg other-page" data-setbg="/img/about_bg.jpg">
</div>
<!-- Hero Area Section End -->

<!-- Search Filter Section Begin -->
<section class="search-filter other-page-filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#" class="check-form">
                    <h4>Check Availability</h4>
                    <div class="datepicker">
                        <p>From</p>
                        <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                        <img src="/img/calendar.png" alt="">
                    </div>
                    <div class="datepicker">
                        <p>To</p>
                        <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                        <img src="/img/calendar.png" alt="">
                    </div>
                    <div class="room-quantity">
                        <div class="single-quantity">
                            <p>Adults</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                        <div class="single-quantity">
                            <p>Children</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                        <div class="single-quantity last">
                            <p>Rooms</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                    </div>
                    <div class="room-selector">
                        <p>Room</p>
                        <select class="suit-select">
                            <option>Eg. Master suite</option>
                            <option value="">Double Room</option>
                            <option value="">Single Room</option>
                            <option value="">Special Room</option>
                        </select>
                    </div>
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Search Filter Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-item">
                    <div class="bi-pic">
                        <img src="/img/blog-1.jpg" alt="">
                    </div>
                    <div class="bi-text">
                        <div class="bi-title">
                            <div class="blog-time">May 21, 2020</div>
                            <h3>Nepal flight suspension extended until June 14</h3>
                            <span>Holliday, trip, Hotel, Fun</span>
                        </div>
                        <p>A meeting of the High-Level Coordination Committee for the Prevention and Control of COVID-19, on Wednesday, decided to extend the ongoing suspension of domestic and international flights until June 14. Earlier, the suspension was in effect until May 31.</p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bi-pic">
                        <img src="/img/blog-2.jpg" alt="">
                    </div>
                    <div class="bi-text">
                        <div class="bi-title">
                            <div class="blog-time">April 15, 2019</div>
                            <h3>10 Places you need to visit this summer</h3>
                            <span>Holliday, trip, Hotel, Fun</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore.</p>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bi-pic">
                        <img src="/img/blog-3.jpg" alt="">
                    </div>
                    <div class="bi-text">
                        <div class="bi-title">
                            <div class="blog-time">April 15, 2019</div>
                            <h3>The most amazing pools is the world</h3>
                            <span>Holliday, trip, Hotel, Fun</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore.</p>
                    </div>
                </div>
                <div class="blog-pagination">
                    <a href="#">01.</a>
                    <a href="#">02.</a>
                    <a href="#">03.</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-right">
                    <form action="#" class="blog-search">
                        <input type="text">
                        <button type="submit">Search</button>
                    </form>
                    <div class="blog-widget">
                        <div class="bw-item">
                            <h4>Categories</h4>
                            <ul>
                                <li>Holliday <span>(22)</span></li>
                                <li>Fun Facts <span>(28)</span></li>
                                <li>Planning a Trip <span>(18)</span></li>
                                <li>Uncategorized <span>(19)</span></li>
                            </ul>
                        </div>
                        <div class="bw-item">
                            <h4>Archive</h4>
                            <ul>
                                <li>April 2019</li>
                                <li>March 2019</li>
                                <li>February 2019</li>
                                <li>January 2019</li>
                                <li>December 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-add set-bg" data-setbg="/img/blog-add.jpg">
                        <h4>Book Your Next <br />Vacation</h4>
                        <a href="#" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

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
                        <button type="submit">Subscribe</button>

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
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/flights">Flights</a></li>
                        <li class="active"><a href="/news">News</a></li>
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

<!-- Js Plugins -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection