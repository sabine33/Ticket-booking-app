@extends ('layouts.front_layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 intro-text">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <p align="centers">Hawaijahaj is the web application for flight reservation and flight scheduler.The main purpose of this website is to book and buy flight ticket from any corner of the world without using third party.This web application helps customer to book ticket without facing any problems.Todays generation internet has taken huge space in our life.Online flight reservation and sceduler helps to bring tour and activity business owners into the 21st century.The airline reservation system makes it possible to get a ticket not only for themselves but also for their loved ones.</p>

            <p align="centers">Customers can visually check the correctness of the data entered.Earlier customer have to visit airline company’s centers to book tickets and had to wait for hours in the queue Or they have to book tickets on phone, there also waiting for minutes to complete the booking process.But now with just a few clicks, your ticket is booked.Travelers just have to enter time and location of the destination. It’s so easy now to book flights.Easy cancellation policies are there for travelers.With just a single click on cancellation button in website, tickets are canceled.</p>

            <p align="centers">All these features have facilitated travelers to book their tickets online.Customers can book flights for domestic and overseas location easily from anywhere at any time.This website major contribution is to the grow airline and travel industry.It updates inventories of different airline companies real-time.
            </p>
        </div>

    </div>


    <br>
    <br>
    <div class="container-photo">
        <div class="row">
            <div class="col-lg-4">
                <div class="column nature">
                    <div class="content">
                        <img src="img/taj.jpg" style="width:100%">
                        <button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo">
                            <h4>Trip to India</h4>
                        </button>
                        <div id="demo" class="collapse">

                            <p> India has always been one of the most technologically advanced countries in the world.The people in India are warm and welcoming. It has many historical sites.India is a great country where people speak different languages but the national language is Hindi. India is full of different castes, creeds, religion, and cultures but they live together. That’s the reasons India is famous for the common saying of “unity in diversity“.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="column nature">
                    <div class="content">
                        <img src="img/chi.jpg" style="width:100%">
                        <button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo">
                            <h4>Trip to China</h4>
                        </button>
                        <div id="demo" class="collapse">
                            <p> China is a huge component in the world’s economy, culture, and population. China currently has the fastest growing economy in the world, and is home to 1.3 billion people. China’s vast expanse of land gives the country a large amount of diversity and character. The culture, weather, language, and food in China varies tremendously by region.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="column nature">
                    <div class="content">
                        <img src="img/fra.jpg" style="width:100%">
                        <button type="button" class="btn-btn-info" data-toggle="collapse" data-target="#demo">
                            <h4>Trip to France</h4>
                        </button>
                        <div id="demo" class="collapse">
                            <p>France is one of Europe’s largest countries.France is the most popular tourist destination in the world. There are many reasons why so many people enjoy visiting the diverse country, including the natural beauty, the amazing climate, outdoor recreational activities such as golf courses, art museums and galleries and so much more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section Begin -->
    <section class="about-us spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-left">
                        <div class="section-title">
                            <span>A Memorable Flight</span>
                            <h2>Which leads you to<br />your destination.</h2>
                        </div>
                        <p>Being able to book an airfare online means you can do it any time of the day, wherever you are. You can book a flight at home, while you're in the office and even when you're on your way somewhere, via a laptop. By purchasing a flight online, you also don't have to worry finding a parking spot at the travel agent, waiting for service or feeling pressured to book a flight on the spot without thinking it through first.When you book a flight online, you have the freedom to shop around for the best price. Purchasing the ticket online means customers can check out many airlines before making their choice.</p>
                        <p>Customer can save lots of time using this website.They can book flight tickets any time anywhere, even if they need to travel the next day.There's a wide range of choices and also they get information on special offers.This website is safe and secured.Thus, customers trust our website and they choose our website to book flight tickets.</p>
                        <a href="/flights/create" class="primary-btn">To Book</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img first-img">
                                <img src="img/ch.jpg" alt="">
                                <div class="overlay">Chitwan, Nepal</div>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img second-img">
                                <img src="img/bali.jpg" alt="">
                                <div class="overlay">Bali,Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="about-img third-img">
                                <img src="img/mald.jpg" alt="">
                                <div class="overlay">Rangali Island, Maldives</div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="about-img">
                                <img src="img/gree.jpg" alt="">
                                <div class="overlay">Greece</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->
    <br>
    <!-- Milestone Counter Section Begin -->

    <section class="milestone-counter1">
        <div class="milestone-counter spad set-bg" data-setbg="img/la.png" style="width: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mc-item">
                            <div class="mc-num">
                                <span class="counter">25</span>
                            </div>
                            <div class="mc-text">
                                <h3>Flights</h3>
                                <p>From $399</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mc-item">
                            <div class="mc-num">
                                <span class="counter">35</span>
                                <strong>K</strong>
                            </div>
                            <div class="mc-text">
                                <h3>Happy Customers</h3>
                                <p>all year long</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mc-item">
                            <div class="mc-num">
                                <span class="counter">365</span>
                            </div>
                            <div class="mc-text">
                                <h3>Days/ Year</h3>
                                <p>From $399</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Milestone Counter Section End -->

    <!-- Award Section Begin -->
    <section class="award-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Awards</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2020</h5>
                        <h4>Best Web Application In Nepal</h4>
                        <span>Best Web Application award</span>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2019</h5>
                        <h4>Best Service Provider</h4>
                        <span>Web Application Award</span>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="award-item">
                        <img src="img/about/award-img.png" alt="">
                        <h5>2016</h5>
                        <h4>Easy Business Way</h4>
                        <span>Business of the year award</span>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Award Section End -->

    <!-- Call To Action Begin -->
    <section class="callto-section my-2">
        <div class="container">
            <div class="callto-text">
                <h2>Book your flight with us now!</h2>
            </div>
            <a href="/flights/create" class="primary-btn">To Book</a>
        </div>
    </section>
</div>
@endsection