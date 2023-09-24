@extends("layouts.spacedcustomlayout")

@section("body")

<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Retirement Planning</h1>                
		</div>
	</div>
</section>
<section class="service-details">
	<div class="auto-container">
		<div class="row clearfix">
							
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="service-details-content">
					<div class="content-style-one">
						<figure class="image-box"><img src="serv/1.jpg" alt=""></figure>
						<div class="sec-title left">
							<h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
							<h2>Workforce Optimization</h2>
						</div>
						<div class="text">
							<p>
							Saving for retirement can be a daunting task, but with a sound strategy, it’s well within reach. {{ $compd ? $compd->companyname : 'company name' }} is here to
							bring clarity to retirement 
							planning and set you on your path to success. Here you’ll better understand your options and find the right investment.
							</p>
							<p>
								If you had the chance to double—or even quadruple—your retirement savings, you’d probably jump at that opportunity,
								right? Well, there’s one simple change you can make today that’s sure to boost your retirement savings.
							</p>
						</div>
						
						<div class="sec-title left">
							<h3>Quadruple Your Retirement Savings? Really?</h3>
						</div>
						<div class="text">
							<p>
							{{ $compd ? $compd->companyname : 'company name' }} study of worldwide retirement saving habits 
							discovered that people with some kind of retirement plan have more than three times 
							as much in their nest egg than those with no plan at all.

And savers who take it one step further by working with an investing advisor to put their plan 
to paper? Their average nest egg is a whopping 445% bigger than non-planners. That’s a big deal!

Now, did you catch that? By working with an advisor and by having a plan in place, you can supercharge
your retirement savings.
							</p>
						</div>
					</div>
				</div>
			</div>
			
							
			
			
							
			
			
							
			
			
							
			
			
			
			
			
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="service-sidebar">
					<div class="sidebar-categories">
						<ul class="categories-list clearfix">
							<li><a href="{{route('services')}}" class="active">Retirement Planning</a></li>
									<li><a href="{{route('realestate')}}">Real Estate & Investment Management</a></li>
									<li><a href="{{route('cannabis')}}" class="">Cannabis Investments</a></li>
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
									<p>Thank you so much {{ $compd ? $compd->companyname : 'company name' }}, I don't know how to express my gratitude to you, now I can pay my debt thank you joy Patrick for introducing me to this platform....</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/oUc2zKlgi9PuVb71614686152703.jpg" alt=""></figure>
									<h6>James Anderson</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>GBA provides an excellent service be it on a business or on a personal level I have found the company's advice regarding investment opportunities particularly helpful - everything is explained fully no matter how complex the subject. I am pleased to see the results in comparison to the experiences one reads or hears about  I get the feeling that {{ $compd ? $compd->companyname : 'company name' }} are ahead of the game.</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/GaNLeqO85WMcJ4m1614691346138.jpg" alt=""></figure>
									<h6>Michael former property loch of Scotland</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>{{ $compd ? $compd->companyname : 'company name' }} is our third financial adviser, and a huge improvement on the others in terms of advice and commitment. They are pro-active where the others were not, and has made us focus on our plans for retirement - a huge achievement!</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/19sCyhlwSXpAacu1614765949638.jpg" alt=""></figure>
									<h6>Nicolas</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>A big thank you to {{ $compd ? $compd->companyname : 'company name' }}, I have been receiving my payout every week, thanks once more</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/T1PV3oYzB20MvNg1614685705649.jpg" alt=""></figure>
									<h6>Mark bill</h6>
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
