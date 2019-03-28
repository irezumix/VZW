@extends('layouts.frontend')
@section('includes.main-nav')
@endsection
@section('main-content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay_contact bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
            data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact us</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<section class="contact_area p_120">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>B-3970 Leopoldsburg</h6>
                        <p>Guillaumelaan 11</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+32 11 34 71 10</a></h6>
                        <p></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">info@yap-vzw.be</a></h6>
                        <p>Aarsel niet om ons te contacteren!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================End event Area =================-->
@endsection
