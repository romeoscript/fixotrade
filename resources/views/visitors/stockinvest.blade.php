@extends("layouts.spacedcustomlayout")


@section('body')



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
<section class="project-style-four">
    <div class="auto-container">
        <div class="title-inner clearfix">
            <div class="sec-title style-four right pull-left">
                <h5>REAL ESTATE</h5>
                <h2>Hot Deals From Real Estate</h2>
            </div>
        </div>
        <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
            <div class="project-block-three">
                <div class="inner-box">
                    <figure class="image-box"><img src="images/hs/2.jpg" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h3>$620,000</h3>
                            <p>Zak Hale 9 | Offered for $620,000 | 4 BR/ 4.5 BA | 2,460 sq. ft. Interior.</p>
                            <a class="btn btn-warning" style="margin-bottom: 5px;" href="{{ route('history') }}"> View Details</a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-three">
                <div class="inner-box">
                    <figure class="image-box"><img src="images/hs/3.jpg" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h3>$1,450,000</h3>
                            <p>This stunning modern-styled townhome located within the private 
                                    golf and ocean club community of Kohanaiki is a 4 BR/ 4.5 BA dream with a lounge pool, 
                                    spa, and detached guest ohana</p>
                            <a class="btn btn-warning" style="margin-bottom: 5px;" href="estateb558.html?d=3"> View Details</a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-three">
                <div class="inner-box">
                    <figure class="image-box"><img src="images/hs/1.jpg" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h3>$350,000</h3>
                            <p>4/5.5/2 |5,472 sqft |8,060 sqft lot
                                    Location:Afton oaks</p>
                            <a class="btn btn-warning" style="margin-bottom: 5px;" href="{{ route('realestatetrade') }}"> View Details</a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-block-three">
                <div class="inner-box">
                    <figure class="image-box"><img src="images/hs/4.jpg" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h3>$26,430</h3>
                            <p> Bds | 1 Ba | 360 SQFT Location: 225 East 4th Street, Apt 18, New York. </p>
                            <a class="btn btn-warning" style="margin-bottom: 5px;" href="{{ route('landbanking') }}"> View Details</a>
                                <br>
                                <a class="btn btn-primary" href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                        </div>
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

 @endsection