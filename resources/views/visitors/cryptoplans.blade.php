@extends("layouts.spacedcustomlayout")

@section('body')



        
<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="content-box clearfix">
			<ul class="bread-crumb clearfix">
				<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
			</ul>
			<h1>Cryptocurrency Trading</h1>                
		</div>
	</div>
</section>
<section class="service-details">
	<div class="auto-container">
		<div class="row clearfix">
							
			
			
							
			
			
							
			<div class="col-lg-8 col-md-12 col-sm-12 content-side">
				<div class="service-details-content">
					<div class="content-style-one">
						<figure class="image-box"><img src="serv/3.jpg" alt=""></figure>
						<div class="sec-title left">
							<h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
							<h2>Cryptocurrencies – The New Gold</h2>
						</div>
						<div class="text">
							<p>
							{{ $compd ? $compd->companyname : 'company name' }} now offers all traders the opportunity to trade a wide range of the top ranked digital 
							coins 24/7*. Today cryptocurrencies have become known to most people as a conventional and popular investment option. 
							The main purpose of this new technology is to allow people to buy, trade, and invest without the need for 
							banks or any other financial institution. Cryptocurrencies are 
							highly volatile and can be profitable to any trader’s portfolio.
Cryptocurrencies are not physical coins they are electronic, a digital asset that remains as data. 
The technology behind the cryptocurrency controls a large part of its value which holds new technology on 
the secure way to identify and transfer money.
The first digital coin introduced was the Bitcoin and today it remains as the standard that all other coins 
compare themselves to. Following in its steps came Litecoin, so to date they stand as the top 2 highly 
valued coins on the market. There are several other coins also reaching a high-level market share such as 
Bitcoin and Bitcoin Cash, Dash, Ripple, Ethereum and Ethereum Classic.
							</p>
						</div>
						
						<div class="sec-title left">
							<h3>Why trade Cryptocurrencies with {{ $compd ? $compd->companyname : 'company name' }}?</h3>
						</div>
						<div class="text">
							<p>
							Cryptocurrencies could potentially be the currency of the future with more people gaining interest and price 
							value going up. {{ $compd ? $compd->companyname : 'company name' }} offers competitive spreads, with no commissions charged on transactions making it
							more profitable. When trading with {{ $compd ? $compd->companyname : 'company name' }} you are trading on the price changes of the digital coin, and not
							physically purchasing it. 
							Trading with {{ $compd ? $compd->companyname : 'company name' }} ensures that you will trade with a 100% reputable broker.</p>
						</div>
					</div>
				</div>
			</div>
			
							
			
			
							
			
			
			
			
			
			<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
				<div class="service-sidebar">
					<div class="sidebar-categories">
						<ul class="categories-list clearfix">
							<li><a href="{{route('services')}}" class="">Retirement Planning</a></li>
									<li><a href="{{route('realestate')}}">Real Estate & Investment Management</a></li>
									<li><a href="{{route('cannabis')}}" class="">Cannabis Investments</a></li>
									<li><a href="{{route('cryptoplans')}}" class="active">Cryptocurrency Trading</a></li>
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
									<p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to my wallet under just few minutes after I requested for a withdrawal, I think you all should invest with {{ $compd ? $compd->companyname : 'company name' }}</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/1gB4kVWZLbHyQxF1614696122840.jpg" alt=""></figure>
									<h6>Temara</h6>
									<span class="designation">Investor</span>
								</div>
							</div>
							
															<div class="content-box">
								<div class="text">
									<p>At first, I doubted it but to my surprise {{ $compd ? $compd->companyname : 'company name' }} started paying me at the due date</p>
								</div>
								<div class="author-info">
									<figure class="image-box"><img src="images/lWy7b3na5i6X1Nv1614696001686.jpg" alt=""></figure>
									<h6>Cynthia carl</h6>
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
