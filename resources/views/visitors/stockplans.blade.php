@extends("layouts.spacedcustomlayout")

@section('body')




<main class="stocksandshare-contents ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph stocksandshare-header header">
    		<h1>
    			<span class="line"></span> Future optimax fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>stock or share</h2>
    		<div class="flex stocksandshare-row">
    			<p>
    			A stock or share (also known as a company's "equity") is a financial instrument that represents ownership in a company or corporation and represents a proportionate claim on its assets (what it owns) and earnings (what it generates in profits). Stock ownership implies that the shareholder owns a slice of the company equal to the number of shares held as a proportion of the company's total outstanding shares. For instance, an individual or entity that owns 100,000 shares of a company with one million outstanding shares would have a 10% ownership stake in it. Most companies have outstanding shares that run into the millions or billions.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/stock-img.png")}}" alt="stocks or share">
    			</div>
    		</div>
    	</div>
 </section>

 <section class="investin-stocks">
     <h3>how do i invest in stocks with 0% commission</h3>
     <ul>
         <li> create an account</li>
         <li> a deposit plan</li>
         <li> make deposit</li>
         <li> get your ROI on plan completion</li>
     </ul>
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
