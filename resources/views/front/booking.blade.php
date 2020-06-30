@extends ('layout')

@section ('content')

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/r.jpg" style="width: 100%">
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
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
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
                                <p>Infants</p>
                                <div class="pro-qty"><input type="text" value="0"></div>
                            </div>
                        </div>
                        <div class="room-selector">
                            <p>Class</p>
                            <select class="suit-select">
                                <option>Eg. Business Class</option>
                                <option value="">Economy Class</option>
                                <option value="">Business Class</option>
                            </select>
                        </div>
                        <button type="submit"><a href="/flights">Go</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->
<br><br><br>
   
<!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.jpg" alt=""></a>
                        </div>
                        <p>We will help you to book your tickets from any corner of the world without the help of third party.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
    
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit"data-toggle="modal" data-target="#exampleModal">Subscribe</button>
                            <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                 <img src="img/logo.jpg" width="200px" align="left">
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
                            <li><img src="img/placeholder.png" alt="">Thapathali,Kathmandu<br />Nepal</li>
                            <li><img src="img/phone.png" alt="">+977 9810001111</li>
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
                            <li><a href="flights.blade.php">Flights</a></li>
                            <li><a href="#">News</a></li>
                            <li class="active"><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Sunamika Karki, C7190084<i class="fa fa-heart-o" aria-hidden="true"></i>
</div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    

    
@endsection