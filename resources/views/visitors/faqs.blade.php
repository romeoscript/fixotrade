@extends("layouts.spacedcustomlayout")

@section('body')

<main class="faq-main-section">
  <section>
    <p><a href="{{route('faq')}}" class="faq-breadcrumb">FAQ</a></p>
</section>
 
 <section class="accordion accordion-section">
   <div class="accordion-box">
      <dl class="accordion-container">
        <dt class="accordion-header">
          How do i create my account &quest;
        </dt>
        <dd class="accordion-body">
          Registration process is very easy and will take a few moments to complete.
           simply click 
           <a class="accordion-getstarted-cta accordion-cta" href="{{route('register')}}">
             get started</a>
             button and fill in all the required fields.
        </dd>
      </dl>
   </div>
   <div class="accordion-box">
    <dl class="accordion-container">
      <dt class="accordion-header">How do i make a deposit &quest;</dt>
      <dd class="accordion-body">
        Quickly log in to your account, on your dashboard,
        clik deposit, and choose your investment plan and follow the directions.
      </dd>
    </dl>
 </div>
 <div class="accordion-box">
  <dl class="accordion-container">
    <dt class="accordion-header">
      How long does my deposit take before it can reflect
      on my Future optimax Investments account dashboard &quest;
    </dt>
    <dd class="accordion-body">
      Your deposit will be reflected immediately once it is confirmed on the blockchain
      network and the company's wallet.
    </dd>
  </dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
  <dt class="accordion-header">
    How do i make a withdrawal &quest;
  </dt>
  <dd class="accordion-body">
    To make a withdrawal request, click on the 
    <a class="accordion-cta" href="{{route('register')}}">withdraw</a>
    button at your dashboard and input the require details to withdraw.
  </dd>
</dl>
</div> 
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
  How long does it take to process my withdrawal &quest;
</dt>
<dd class="accordion-body">
  Once we receive your withdrawal request we process immediatelyand send to your receiving wallet.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
Can i have more than one account &quest;
</dt>
<dd class="accordion-body">
You cannot can have more than one account. only investors on the special pricing plans are allowed to do so.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
Is this company properly registered &quest;
</dt>
<dd class="accordion-body">
Yes we are officially and properly registered with the United States, our company registration number is
602425294 and registred with the name Future optimax Financials.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
How many times can i make deposit &quest;
</dt>
<dd class="accordion-body">
You can make as many deposit as you want on any of our princing plans and any deposit request must be redeemed,
you are also not allowed on the starters plan where you can only invest 3 times after which you would increase your investment.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
Is it possible to visit the company office located at Washington &quest;
</dt>
<dd class="accordion-body">
Of course YES, we welcome our investors and potential Investors to come physically to enquire and
start investing, our worldwide investors who can't make it, simply use the website and ivestments on here
are secured and guaranteed.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
Can i withdraw any day of my choice &quest;
</dt>
<dd class="accordion-body">
Withdrawal are processed every day from Monday to Friday. if you have not received the withdrawn funds, pleasen contact us and will
immediately resolve your problem.
</dd>
</dl>
</div>
<div class="accordion-box">
<dl class="accordion-container">
<dt class="accordion-header">
Is this company trusted &quest;
</dt>
<dd class="accordion-body">
Of course YES! it's Properly Registered, it's been running for years, we've acquired thousands of investors worldwide with 
pleasant testimonies on TRUSTPILOT and the last but not least we also engaged in properly trading and investing 
activities that involves all the market sectors to provide enough profits for our investors.
</dd>
</dl>
</div>
</section>
</main>
@endsection()
