@extends("layouts.spacedcustomlayout")

@section("body")

        
<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Legal Information</h1>                
		</div>
	</div>
</section>
<section class="about-style-two about-page-1 bg-color-1">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 content-column">
				<div id="content_block_three">
					<div class="content-box">
						<div class="sec-title right">
							<h2>Legal Information</h2>
						</div>
						<div class="text">
							<p>{{ $compd ? $compd->companyname : 'company name' }} is one of the most reliable diversified financial investment service 
							provider in the world. Our fundamental mission is to help customers and clients achieve 
							their financial objectives. With offices locate in the United States, Australia,Canada and 
							headquartered in Uk, {{ $compd ? $compd->companyname : 'company name' }} have staffs with over 30 years’ experience in 
							combining financial development and trades. We are committed to pushing the boundaries of 
							what constitutes the highest standards in trades and asset management.</p>
					
					<p >With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the 
profit daily. As a leading global market maker, {{ $compd ? $compd->companyname : 'company name' }} has one of the World’s Largest Independent 
traders and fund managers with clients from different parts of the World. Today, as a 
successful trade investment and asset management company, we are trusted by thousands of clients. 
Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business 
development are some driving forces behind our success.
					</p>
						</div>
						<a class="theme-btn style-one" href="https://find-and-update.company-information.service.gov.uk/company/{{ $compd ? $compd->companyphone : 'company phone' }}">Company Number: {{ $compd ? $compd->companyphone : 'company phone' }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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
