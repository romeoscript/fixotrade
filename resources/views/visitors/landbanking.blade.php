@extends("layouts.spacedcustomlayout")

@section("body")






<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
            </ul>
            <h1>Real Estate</h1>                
        </div>
    </div>
</section>
<section class="team-section about-page-1">
    <div class="auto-container">
        <div class="title-box">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                    <div class="sec-title right">
                        <h5>Asking Price</h5>
                        <h2>$350,000</h2>
                        <a class="btn btn-primary" href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <p>4/5.5/2 |5,472 sqft |8,060 sqft lot Location:Afton oaks </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/4.jpg" alt=""></figure>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/4b.jpg" alt=""></figure>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/4c.jpg" alt=""></figure>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/4d.jpg" alt=""></figure>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
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
