@extends("layouts.spacedcustomlayout")

@section("body")



<div class="main-content-wrapper">
        
	<!-- START SECTION BANNER -->
	<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
			<div class="auto-container">
				<div class="content-box clearfix">
					<ul class="bread-crumb clearfix">
						<li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
					</ul>
					<h1>Privacy Policy</h1>                
				</div>
			</div>
		</section>
	<div class="about_content">
	<div class="container">
	<div class="row">
						<div class="col-12 col-md-12 mb-4 mb-lg-6 mx-auto reveal">
							<h2 class="mb-2 h3-font font-w--700">Our Policy</h2>
							<p class="mb-4">Our company understands the importance of personal information of every participant. Cooperating with our company, 
									you can be sure in privacy of your personal information and in its protection by our employees. 
									Our employees protect the collected by them information from unauthorized access. 
									We use a variety of technologies to reduce the risk of theft of accounts and receiving personal information of 
									our investors.</p>
							<p>"Personal information" includes such items as:</p>
							
							<ul class="list-unstyled tech-feature-list mb-3">
									<li class="py-1"><li class="fa fa-check color-secondary"></li>Name and Last Name of the investor
									</li>
									<li class="py-1"><li class="fa fa-check color-secondary"></li>Email of investor
									</li>
									<li class="py-1"><li class="fa fa-check  mr-2 color-secondary"></li>Contact address of investor</li>
								</ul>
							
							<p class="mb-4">Our company collects your personal information only with your consent and confidence in the security of your personal information on our project. Users should note, that the collection of personal information is only from adult. The rules of our company explain, how your information is collected and used. These rules apply only in our website. Information which is collected when you visit this site. This types of information are also the part of the personal information. Customer information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without the consent of the customer, other than for the express purpose of delivering the purchased product or service requested by the customer.
	For your safety and protection, your credit card information is not stored on our servers. Our payment gateway provider, (insert providers name/s here), keeps this information encrypted and secure on your behalf.
	The email address you provide for order processing, may be used to send you information and updates pertaining to your account, in addition to periodic company news, updates, and/or related product or service information, etc. If you decide to opt-in to our mailing list, you will receive emails that may include company news, updates, related product or service information, promotions, etc. However, you may opt-out at any time by (please enter the opt-out or unsubscribe process here. This may be something like clicking the unsubscribe button at the bottom of your emails.</p>
								<h5>Information Storage</h5>
								<p>Saving of information is only in our company or its equipment. Personal information is stored in accordance with the rules of storage and disposal, which are set for archive of our company. To receive your personal information, contact direct with our employees.</p>
								<h5>Contact Information</h5>
								<p>{{ $compd ? $compd->companyname : 'company name' }} is glad to receive your comments concerning this "Privacy Policy". In case you think that {{ $compd ? $compd->companyname : 'company name' }} does not follow the rules and violate this Statement, contact us at <a href='mailto:{{ $compd ? $compd->companyemail : 'company email' }}'>{{ $compd ? $compd->companyemail : 'company email' }}</a> We guarantee that we will take commercially reasonable efforts to discover and solve the problem.</p>
							
						</div>
						
					</div>
	</div>
	</div>
	
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
