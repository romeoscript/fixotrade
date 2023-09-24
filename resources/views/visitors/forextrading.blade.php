@extends("layouts.spacedcustomlayout")

@section("body")


<main class="forextrading-contents ourservices-page">
	<!-- contents of the page -->
	<section>
		<div class="paragraph forex-header header">
    		<h1>
    			<span class="line"></span> Future optimax fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>forex trading</h2>
    		<div class="flex">
    		<p>
    		 Forex is a portmanteau of foreign currency and exchange. Foreign exchange is the process of changing one currency into another currency for a variety of reasons, usually for commerce, trading, or tourism. According to a recent triennial report from the Bank for International Settlements (a global bank for national central banks), the average was more than $5.1 trillion in daily forex trading volume. Because of the worldwide reach of trade, commerce, and finance, forex markets tend to be the largest and most liquid asset markets in the world. Market participants use forex to hedge against international currency and interest rate risk, to speculate on geopolitical events, and to diversify portfolios, among several other reasons.
    		</p>
    		<div class="img-container">
    			<img src="{{asset("images/ourservice-img1.jpg")}}" alt="forex image">
    		</div>
    	  </div>
    	  </div>
	</section>

	<!--want to see more services section -->
	<section>
		 <div class="want-tosee-more flex">
    	  	<p>want to see more services &quest;</p>
    	  	<a href="{{route('services')}}" target="_blank">see all services</a>
    	  </div>
	</section>

	<section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}">get started</a>
    	</div>
    </section>

</main>



@endsection
