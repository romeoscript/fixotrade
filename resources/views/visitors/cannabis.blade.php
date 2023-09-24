@extends("layouts.spacedcustomlayout")

@section("body")


<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
                </ul>
                <h1>Cannabis Investments</h1>                
            </div>
        </div>
    </section>
<section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                                
                
                
                                
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-style-one">
                            <figure class="image-box"><img src="serv/2.png" alt=""></figure>
                            <div class="sec-title left">
                                <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                                <h2>Medical Cannabis</h2>
                            </div>
                            <div class="text">
                                <p>
                                For many years we have been working conscientiously 
                                and with the most diverse technologies and means. We have constantly 
                                successfully completed our projects.
                                </p>
                                <p>
                                    We believe that the full benefits and potential of cannabis as a medical therapy are within our reach only 
                                    through supply chain transparency, an engaged and active network of cannabis users, and data that is consistently 
                                    available and verifiable for medical surveys and for developing and establishing therapies and life-prolonging 
                                    solutions and treatments on blockchain technology. 
                                    Our vision is one in which cannabis medical research gets the support it needs and deserves.
                                </p>
                            </div>
                            <h3>Cannabis Goals</h3>
                            <ul class="list-item clearfix">
                                <li>Understand the regulatory, legal, and technological needs and challenges of the medical cannabis industry</li>
                                <li>Continually advance the medical cannabis blockchain data ecosystem to medical studies</li>
                                <li>Establish strong vendor and partner relationships with technology firms, doctors, scientists, universities, and governments to ensure data integrity and value</li>
                                <li>Attract, hire, and retain highly qualified professionals to sell, manage, monitor, and service the various technological component parts and software systems required to support the ecosystem</li>
                                <li>Foster a social community online in which each member can participate freely and offer the breadth of their knowledge and experience</li>
                                <li>Provide a simple, secure, user-friendly global exchange platform for the stakeholders</li>
                                <li>Create billions of data points and hundreds of millions of dollars in transaction value</li>
                                <li>Establish supply-chain integrity</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                                
                
                
                                
                
                
                                
                
                
                
                
                
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar-categories">
                            <ul class="categories-list clearfix">
                                <li><a href="{{route('services')}}" class="">Retirement Planning</a></li>
                                        <li><a href="{{route('realestate')}}">Real Estate & Investment Management</a></li>
                                        <li><a href="{{route('cannabis')}}" class="active">Cannabis Investments</a></li>
                                        <li><a href="{{route('cryptoplans')}}" class="">Cryptocurrency Trading</a></li>
                                        <li><a href="{{route('finacialplaning')}}" class="">Financial Planning</a></li>
                                            <li><a href="{{route('oilandgas')}}">Oil And Gas</a></li>
                                            <li><a href="{{route('loansandgrant')}}">Loan</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-testimonial">
                            <div class="quote-box"><i class="fas fa-quote-right"></i></div>
                            <div class="sidebar-carousel owl-carousel owl-theme owl-nav-none">
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>I feel like I got a new home.
Thanks to {{ $compd ? $compd->companyname : 'company name' }} and also to the administration.</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/BeJZ4LzIiQnXPhp1633981448208.jpg" alt=""></figure>
                                        <h6>Jennifer</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>I won't stop recommending this company to every investor out there,paying securely...</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/M1EFGuaHDtwpd2N1614696167493.jpg" alt=""></figure>
                                        <h6>Bruce</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>Really...
I'm excited already ???a very big thanks to {{ $compd ? $compd->companyname : 'company name' }}</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/xVl3J7SnoCTUMti1614696078778.jpg" alt=""></figure>
                                        <h6>Monica</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>This is remarkably one of the best Investment company I have meet this year</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/VX9pAgkDrt1q8hu1614695934840.jpg" alt=""></figure>
                                        <h6>Alexandra lukas</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>I keep recommending to my friends and family because of their overwhelmingly impressive financial services</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/ReYcirPHu3vhNI01614685871546.jpg" alt=""></figure>
                                        <h6>Nora Woodward</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                <div class="content-box">
                                    <div class="text">
                                        <p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to my wallet under just few minutes after I requested for a withdrawal, I think you all should invest with {{ $compd ? $compd->companyname : 'company name' }}</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="images/1gB4kVWZLbHyQxF1614696122840.jpg" alt=""></figure>
                                        <h6>Temara</h6>
                                        <span class="designation">Investor</span>
                                    </div>
                                </div>
                                
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!--section class="project-section">
        <div class="fluid-container">
            <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Global Management Apps</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Financial Initiatives</p>
                            <h2><a href="index.html">Planning & Task Completion</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="assets/images/gallery/project-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Private Workshop Assistant</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
</div>
<!-- END SECTION BLOG -->
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
