@extends("layouts.spacedcustomlayout")

@section("body")

<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Loan</h1>                
		</div>
	</div>
</section>
<section class="about-style-two about-page-1 bg-color-1">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-7 col-md-12 col-sm-12 content-column">
				<div id="content_block_three">
					<div class="content-box">
						<div class="sec-title right">
							<h2>Get A Loan</h2>
						</div>
						<div class="text">
							<p>Getting a loan doesn’t have to be intimidating, with the right lender it can be
						   a simple process. You only need a lender committed to taking the mystery out of the mortgage loan 
						   process! At {{ $compd ? $compd->companyname : 'company name' }}, we understand! Our investors want simple facts, honest answers
						   and competitive products.

DGS automatically offers loan services to investors with over $50,000 investment either in our normal {{ $compd ? $compd->companyname : 'company name' }} financial

Services packages or the NFP plans. Investors over $50,000 are entitled to loans of $200,000-1millon dollars yearly with 5% 
paid monthly, or the investor could wish to compound the interest till the time limit, provided all required information and 
identity of the investor are duly confirmed by {{ $compd ? $compd->companyname : 'company name' }} loan board.

Every investor above $50,000 is provided with a personal account manager and the investor has a direct communication with 
the manager in order to see that our loan offers are secured.

GREAT INVESTING WITH {{ $compd ? $compd->companyname : 'company name' }} FAMILY</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 image-column">
				<div id="image_block_two">
					<div class="image-box">
						<div class="pattern-layer" style="background-image: url(assets/images/shape/shape-25.png);"></div>
						<figure class="image"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
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
