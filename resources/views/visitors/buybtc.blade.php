@extends("layouts.spacedcustomlayout")

@section("body")


<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Where to Buy Bitcoin</h1>                
		</div>
	</div>
</section>
<section class="team-section about-page-1">
	<div class="auto-container">
		<div class="title-box">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 title-column">
					<div class="sec-title right">
						<h5>Our Trusted Partners</h5>
						<h2>Buy Digital Currency</h2>
					</div>
				</div>@extends("layouts.spacedcustomlayout")

				@section("body")
				
				
				<!-- START SECTION BANNER -->
				<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
					<div class="auto-container">
						<div class="content-box clearfix">
							<ul class="bread-crumb clearfix">
								<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
							</ul>
							<h1>Where to Buy Bitcoin</h1>                
						</div>
					</div>
				</section>
				<section class="team-section about-page-1">
					<div class="auto-container">
						<div class="title-box">
							<div class="row clearfix">
								<div class="col-lg-12 col-md-12 col-sm-12 title-column">
									<div class="sec-title right">
										<h5>Our Trusted Partners</h5>
										<h2>Buy Digital Currency</h2>
									</div>
								</div>
							</div>
						</div>
						<div class="row clearfix">
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
								<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<div class="inner-box">
										<a href="https://paxful.com/roots/buy-bitcoin" target="_blank">
										<figure class="image-box"><img src="images/exchenger-1.png" alt=""></figure>
										</a>
										
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
								<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<div class="inner-box">
										<a href="https://www.coinmama.com/" target="_blank">
										<figure class="image-box"><img src="images/exchenger-2.png" alt=""></figure>
										</a>
										
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
								<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<div class="inner-box">
										<a href="https://digatrade.com/" target="_blank">
										<figure class="image-box"><img src="images/exchenger-3.png" alt=""></figure>
										</a>
										
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
								<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<div class="inner-box">
										<a href="https://24xbtc.com/" target="_blank">
										<figure class="image-box"><img src="images/exchenger-4.png" alt=""></figure>
										</a>
										
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
				
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
				<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
					<div class="inner-box">
						<a href="https://paxful.com/roots/buy-bitcoin" target="_blank">
						<figure class="image-box"><img src="images/exchenger-1.png" alt=""></figure>
						</a>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
				<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
					<div class="inner-box">
						<a href="https://www.coinmama.com/" target="_blank">
						<figure class="image-box"><img src="images/exchenger-2.png" alt=""></figure>
						</a>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
				<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
					<div class="inner-box">
						<a href="https://digatrade.com/" target="_blank">
						<figure class="image-box"><img src="images/exchenger-3.png" alt=""></figure>
						</a>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-6 news-block">
				<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
					<div class="inner-box">
						<a href="https://24xbtc.com/" target="_blank">
						<figure class="image-box"><img src="images/exchenger-4.png" alt=""></figure>
						</a>
						
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
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
			<figure class="client-logo"><a href="/"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
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
