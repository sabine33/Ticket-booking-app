@extends ('layouts.front_layout')
@section ('content')
<style>

</style>
<div style="background-image:url('/img/blur.jpg');background-size:cover;">
    <section class="contact-section py-2 my-2" style="padding-top:0px;">

        <div class="container pt-4">
            <div class="row" style="color:#fff;">
                <div class="col-lg-12">
                    <div class="contact-title">
                        <div class="section-title text-white">
                            <span>A Memorable Flight</span>
                            <h2>Which leads you to<br />your destination.</h2>
                        </div>
                        <a href="https://g.page/TheBritishCollegeKtm?share" class="primary-btn" target="_blank">Get Directions</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <form id="form" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name" name="name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your email" name="email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Message" rows="10" cols="10" style="min-height:100px;"></textarea>
                                <button type="button" onclick="onSubmit()">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="info-box">
                        <img src="img/logo.jpg" alt="">
                        <ul>
                            <li><i class='fa fa-map-marker' style='font-size:15px;color:white'></i>&nbsp;&nbsp;&nbsp;Thapathali, <br />Kathmandu,Nepal</li>
                            <li><i class='fa fa-phone' style='font-size:15px;color:white'></i>&nbsp;&nbsp;&nbsp;+977 9810001111</li>
                            <li><i class='fa fa-envelope' style='font-size:15px;color:white'></i>&nbsp;&nbsp;&nbsp;Hawaijahaj123@gmail.com.com</li>
                            <li><i class='fa fa-clock-o' style='font-size:15px;color:white'></i>&nbsp;&nbsp;&nbsp;24 hour Service</li>
                        </ul>
                        <div class="social-links">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.663065833241!2d85.31595546491803!3d27.691601285706888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b19295555f%3A0xabfe5f4b310f97de!2sThe%20British%20College%2C%20Kathmandu!5e0!3m2!1sen!2snp!4v1592652468358!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map Section End -->

</div>

@push('scripts')
<script src="/js/axios.min.js"></script>
<script src="/js/swal.min.js"></script>

<script>
    function onSubmit() {

        if (!document.getElementById("form").checkValidity()) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please fill form carefully!",
            });
            return false;
        }
        let data = {
            name: $("#name").val(),
            email: $("#email").val(),
            message: $("#message").val()
        }
        axios.post('/contact', data).then((response) => {
            Swal.fire({
                title: response.data.response
            }).then(() => {
                $("#name").val('')
                $("#email").val('')
                $("#message").val('')
            })
        }).catch(err => {
            Swal.fire({
                title: "Error sending"
            })
        })
    }
</script>

@endpush

@endsection