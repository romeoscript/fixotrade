@extends("layouts.spacedcustomlayout")

@section("body")

<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
            </ul>
            <h1>Terms of Use</h1>                
        </div>
    </div>
</section>
<div class="about_content">
<div class="container">
<div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="service-details-wrap">
                    <div class="services-detail-content mt-4">
                        <h2 class="mb-2 h3-font font-w--700">Terms of Use</h2>
                        <p>These rules are official and the public offer of {{ $compd ? $compd->companyname : 'company name' }}, acting in accordance with the Company, on the one hand,
                            and the individual investor. This is equivalent to the conclusion of the Agreement in accordance with international
                            law. These rules shall enter into force on the date of registration of the Investor on the website of the program
                            {{ $compd ? $compd->companyname : 'company name' }} and his acceptance of the terms and conditions. If you disagree with these terms and conditions or any 
                            part of these terms and conditions, you must not use this website. Any individual or company from any country may 
                            open an account on the website. You must be at least 18 years of age to use this website. You agree that all 
                            information, communications, materials coming from {{ $compd ? $compd->companyname : 'company name' }} are unsolicited and must be kept private, 
                            confidential and protected from any disclosure. Moreover, the information, communications and materials 
                            contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which 
                            deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer 
                            or solicitation. You agree that all information, interactions, materials coming from {{ $compd ? $compd->companyname : 'company name' }} are unsolicited and
                            must be kept private, confidential and protected from any disclosure. Besides, the information, interactions and 
                            materials present herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction 
                            which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such 
                            offer or solicitation. You must register as a Member to access certain functions of the Website. You are obliged to 
                            provide only complete and accurate information about yourself when registering as a Member or updating your 
                            Registration Data. You agree to maintain and keep your Registration Data current and to update the Registration 
                            Data as soon as it changes. You are responsible for maintaining the security of your password. Our Company and its 
                            service providers are not liable for any loss that you may suffer through the use of your password by others. 
                            Each Investor can register only one personal account, re-registration is not allowed. In case of multiple 
                            registrations, the Company reserves the right to disable all accounts to ascertain the circumstances. Each 
                            deposit is considered to be a private transaction between {{ $compd ? $compd->companyname : 'company name' }} and its Member. Members perform all 
                            financial transactions solely at their own discretion and their own risk. The Investor personally decides 
                            whether or not to invest and how much to invest. All accruals in the Personal Account are made according to 
                            the chosen investment package. The Investor has the right to freely dispose of the funds that are on his personal 
                            account. The Investor can make a deposit with only help of electronic payment systems used by the Company. 
                            The interest rate depends on the selected investment package while each investment package allows for investing 
                            different amounts. You may choose any of the following e-currencies to make deposit: Bitcoin, Ethereum, Bitcoin 
                            Cash, Dash, Payeer, Perfect Money, Ripple and Litecoin. A deposit may only be made in US dollars. All accruals 
                            of profit are done automatically and in accordance with chosen investment plan. Depending on the amount of your
                            deposit and the term of chosen investment period, you will receive guaranteed income after a certain period of 
                            time. Your earnings is depending from your investment plan and can be in Daily basis or at the end of investment 
                            term. If you choose Daily plans you will get your initial capital back at the end of investment term. 
                            The withdrawal time can take up to 48 hours. You may use, reproduce and share any links to any page of this 
                            Website. You should use Your individual referral link to take part in the affiliate program. The affiliate 
                            program is a way to get extra earnings for referring other people to the products and services offered through 
                            this Website. You do not have to make a deposit or have an active investment to get affiliate bonuses. Clients 
                            are not allowed to send SPAM or any kind of unsolicited commercial e-mail to promote the Company, its products 
                            and services. Our affiliate rewards program offers earning at four levels and pays 10% of the deposits made by
                            your first-line referrals, 3% of the deposits made by you second-line referrals (the people invited by your 
                            first-line referrals), 2% of the deposits of your third-line referrals (the people invited by your second-line 
                            referrals) and 1% of the deposits of your fourth-line referrals (the people invited by your third-line referrals)
                            If you do not agree with the above disclaimer, please do not go any further.</p>

                        
                    </div>
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


@endsection()
