@extends("layouts.spacedcustomlayout")

@section("body")


<main class="whatweinvestin-contents">
  <section>
  <article>
  <p class="text-contents">
  <span class="Future optimax-caption" >{{$compd? $compd->Companyname: 'Future optimax'}} </span> Financial Management makes it possible for you to achieve your financial purpose in life and live the lifestyle you’ve always craved for. By investing in Real Estate, Forex, Crypto Currency, Stocks, and Cannabis, we guarantee our clients substantial monthly profit for two years. We are a purpose-driven company, bound together by our commitment to what we do and how we work together. We come to this business from many different perspectives, but we all hold common values that we bring to our work. We are constantly engaged in research and development. This is a necessity in the world of relentlessly changing global financial markets. By utilizing our group of experts in all aspect of investment, we can carefully identify investment opportunities that can generate maximum profit for our client over a long period. Our team of licensed fiduciary advisors understands that every investor is unique. With the dynamic tools used by both you and your financial advisor we are able to identify and alert you to opportunities so you can act on them.
  After a client has successfully registered, verified and made a deposit into his or her account, we carefully allocate the funds and analyze the markets, define the most attractive asset categories and then select which assets to add to your portfolio, such as cryptocurrencies, stocks, REITs, cannabis or others. Over time, the client portfolio changes according to our vision of the market. In this way we can protect ourselves from market fluctuations and volatility.
  
  The goal of portfolio management is to maximize profits, but also minimize risks. It's a balancing act to get the return investor's need without taking undue risk. This is accomplished through careful analysis of asset allocation, diversification, and regularly scheduled rebalancing in some portfolio management styles.
  </p>
  </article> 
  </section>
  
  <section class="whatweinvestin-cards">
  <div class="box">
  <div class="investcard-imgcontainer">
   <a href="{{route('invest')}}" target="_blank"> 
      <img src="{{asset('images/CRYPT.jpg')}}">
  </a>
  </div>
  <a href="{{route('buybtc')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   <div class="box">
  <div class="investcard-imgcontainer">
   <a href="#"> <img src="{{asset('images/CANNABIS.jpg')}}"></a>
  </div>
  <a href="{{route('cannabistrade')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   <div class="box">
  <div class="investcard-imgcontainer">
   <a href="{{route('invest')}}" target="_blank"> 
      <img src="{{asset('images/REALESTATE.jpg')}}">
  </a>
  </div>
  <a href="{{route('realestatetrade')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   <div class="box">
  <div class="investcard-imgcontainer">
   <a href="#"> <img src="{{asset('images/SPECIAL-TRADES.jpg')}}"></a>
  </div>
  <a href="{{route('specialtrades')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   <div class="box">
  <div class="investcard-imgcontainer">
   <a href="#"> <img src="{{asset('images/STOCKS.jpg')}}"></a>
  </div>
  <a href="{{route('stocks')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   <div class="box">
  <div class="investcard-imgcontainer">
   <a href="#"> <img src="{{asset('images/FOREX.jpg')}}"></a>
  </div>
  <a href="{{route('forextrade')}}" class="whatweinvestin-cta">Read More</a>
   </div>
   </section>
          
  </main>    




@endsection()
