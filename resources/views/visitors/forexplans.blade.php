@extends("layouts.spacedcustomlayout")

@section('body')





<section>
    <p><a href="{{route(pricing)}}" class="pricing-breadcrumb">forex investment</a></p>
</section>

 
<main class="pricing-cryptoinvestment-section price-package">
   <div class="crypto-invest-card">
    <ul>
        <li> min deposit <strong>&dollar;200</strong> </li>
        <li> max deposit <strong> &dollar;1000 </strong> </li>
        <li> monthly profit <strong> &dollar;17.5% </strong></li>
        <li> daily profit <strong>&dollar;2.5% </strong></li>
        <li> duration <strong>7 days</strong></li>
    </ul>
    <div class="crypto-flex">
        <p><strong>&dollar;1200 &plus;</strong></p>
        <a class="getstarted-cta" href="{{route('login')}}">
            get started
        </a>
    </div>
   </div>
   <div class="crypto-invest-card">
    <ul>
        <li> min deposit <strong>&dollar;1000</strong> </li>
        <li> max deposit <strong> &dollar;5000 </strong> </li>
        <li> monthly profit <strong> &dollar;24.5% </strong></li>
        <li> daily profit <strong>&dollar;3.5% </strong></li>
        <li> duration <strong>7 days</strong></li>
    </ul>
    <div class="crypto-flex">
        <p><strong>&dollar;3000 &plus;</strong></p>
        <a class="getstarted-cta" href="{{route('login')}}">
            get started
        </a>
    </div>
   </div>
   <div class="crypto-invest-card">
    <ul>
        <li> min deposit <strong>&dollar;5000</strong> </li>
        <li> max deposit <strong> &dollar;10000000 </strong> </li>
        <li> monthly profit <strong> &dollar;35% </strong></li>
        <li> daily profit <strong>&dollar;5% </strong></li>
        <li> duration <strong>7 days</strong></li>
    </ul>
    <div class="crypto-flex">
        <p><strong>&dollar;8000 &plus;</strong></p>
        <a class="getstarted-cta" href="{{route('login')}}">
            get started
        </a>
    </div>
   </div>
 </main>




@endsection
