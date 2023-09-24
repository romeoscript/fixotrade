@extends("layouts.spacedcustomlayout")

@section("body")


<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
  <div class="auto-container">
      <div class="content-box clearfix">
          <ul class="bread-crumb clearfix">
              <li><a href="/">Send Us A Message</a></li>
          </ul>
          <h1>Get Support</h1>                
      </div>
  </div>
</section><section class="contact-information centred">
  <div class="auto-container">
      <div class="sec-title right">
          <h5>Contact Us</h5>
          <h2>We’re Ever Ready <br>To Help You</h2>
      </div>
      <div class="row clearfix">
          <div class="col-lg-6 col-md-6 col-sm-12 single-column">
              <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                  <div class="inner-box">
                      <div class="icon-box"><i class="far fa-map"></i></div>
                      <h3>Visit Us</h3>
                      <p>Flat 41 Brookfield Farm, Curzon St, Lbstock, United Kingddom, LE67 6LA</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 single-column">
              <div class="single-item wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                  <div class="inner-box">
                      <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                      <h3>Email Us</h3>
                      <p><a href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}">{{ $compd ? $compd->companyemail : 'company email' }}</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="contact-style-two" style="background-image: url(assets/images/background/contact-3.jpg);">
  <div class="auto-container">
      <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
          <div class="sec-title left light">
              <h5>need assistance?</h5>
              <h2>Drop Us a Line</h2>
              <p>Our customer care agents are ever ready to guide you. Drop us a message</p>
          </div>
          <form method="post" action="{{route("postcontact")}}" class="default-form" novalidate="novalidate"> 
          @csrf
              <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <input type="text" name="username" placeholder="Your Name" required="" aria-required="true">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <input type="email" name="email" placeholder="Email address" required="" aria-required="true">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <input type="text" name="phone" placeholder="Phone" required="" aria-required="true">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <input type="text" name="subject" placeholder="Subject" required="" aria-required="true">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                      <textarea name="msg" placeholder="Message"></textarea>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                      <button class="theme-btn style-one" type="submit" name="send">Send Message</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</section>        
</div>
<!--section class="clients-section">
  <div class="auto-container">
      <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
          <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
          <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
          <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
          <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
          <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
      </div>
  </div>
</section-->

<section class="cta-section">
  <div class="auto-container">
      <div class="inner-container clearfix">
          <div class="title pull-left">
              <h2>Open account for free and start investing!</h2>
          </div>
          <div class="btn-box pull-right">
              <a href="{{route('register')}}">Get Started</a>
          </div>
      </div>
  </div>
</section>
<!-- cta-section end -->


<!-- fun-fact -->
<section class="fun-fact centred">
  <div class="auto-container">
      <div class="row clearfix">
          <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
              <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box" style="font-size: 35px;">
                      <span class="count-text" data-speed="1500" data-stop="100253">0</span>
                  </div>
                  <p>Active Users</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
              <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box" style="font-size: 35px;">
                      <span class="count-text" data-speed="1500" data-stop="1338">0</span>
                  </div>
                  <p>Running Days</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
              <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box" style="font-size: 35px;">
                      <img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT <span class="count-text" data-speed="1500" data-stop="300021142.336">0</span>
                  </div>
                  <p>DEPOSIT</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
              <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="count-outer count-box" style="font-size: 35px;">
                      <img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT <span class="count-text" data-speed="1500" data-stop="303452266721.39">0</span>
                  </div>
                  <p>WITHDRAWALS</p>
              </div>
          </div>
      </div>
  </div>
</section>



@endsection()
