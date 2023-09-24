@extends("layouts.spacedcustomlayout")

@section("body")


<section class="banner-section">
    <div class="img-container">
      <!--  <img src="{{asset("images/wearedifferent-banner-img.jfif")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">We are different</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="wearedifferrent-contents aboutus-page">
<!-- contents of the page -->
<section class="section-one">
    <h2>How We're Different</h2>
    <div class="flex">
        <div class="text-section">
         <p>
             For over 20 years, {{$compd? $compd->Companyname: 'Coming soon'}} Financial Management has worked in our client's best interests by thinking and acting independently rather than following outdated industry practices. Our personalized approach, our total commitment to serving our clients and our investing experience make us unique in our industry. That’s why Future optimax Financial Management currently manages $165 billion for investors worldwide and helps over 35,000 clients meet their financial goals.
         </p>
         <p>
             Over the years, we have succeeded in creating a reputable and successful brand, and as they say, success has many friends. This has allowed us to work with seasoned and well-respected individuals, organizations, corporate bodies, and many more. Like a fledgling adolescent, we have kept on growing, while retaining and upholding our different standards.
         </p>
        </div>
        <div class="image-section">
         <div class="img-container">
             <img src="{{asset("images/advice.jpg")}}" alt="advice image">
         </div>
        </div>
    </div>
</section>
<section>
    <h3>Clearly Different Money Management</h3>
    <p>
        Our exceptional and unique culture ensures that we entice and retain so many quality clients. We have achieved a certain level of notoriety over the years, and we continue to feel esteemed to have received such fame, appreciation, and approval from a variety of genuinely respected clients. Not sitting on our oars, Future optimax Financial Management is still looking for ways to improve and offer better financial services. Financial services is not just a business for us; it’s our life.
    </p>
    <div class="flex">
        <div class="img-container small-container">
            <img src="{{asset("images/advice-best-interest.png")}}" alt="advice icon">
        </div>
        <div class="text-content">
            <h4>Advice that is always in your best interest</h4>
            <p>
                Our exceptional and unique culture ensures that we entice and retain so many quality clients. We have achieved a certain level of notoriety over the years, and we continue to feel esteemed to have received such fame, appreciation, and approval from a variety of genuinely respected clients. Not sitting on our oars, Future optimax Financial Management is still looking for ways to improve and offer better financial services. Financial services is not just a business for us; it’s our life.
            </p>
        </div>
    </div>
    <div class="flex">
        <div class="img-container small-container">
            <img src="{{asset("images/portfolio.png")}}" alt="portfolio icon">
        </div>
        <div class="text-content">
            <h4>a portfolio tailored to your needs</h4>
            <p>
                We respect how hard you worked to build your nest egg, and before we recommend anything, we get to know you. We ask questions about your goals and needs, your expenses, your health, your family commitments and more to better understand what you need your money to accomplish. This enables us to recommend a personalized portfolio designed to meet your needs and to help you enjoy the retirement you’ve earned.
            </p>
        </div>
    </div>
    <div class="flex">
        <div class="img-container  small-container">
            <img src="{{asset("images/communication.png")}}" alt="communication icon">
        </div>
        <div class="text-content">
            <h4>communication and council to help you stay on track</h4>
            <p>
                You will receive a personal point of contact, your Investment Counselor, committed to understanding you on a personal level and keeping your financial plan on track. Your Investment Counselor will be there for you, whether you want to know how your portfolio is doing and why, or whether you want guidance when the ups and downs of the stock market rattle your nerves. Your Investment Counselor will keep in touch in all market conditions and won’t be afraid to give you an occasional dose of tough love to help you stay disciplined to your long-term plan.
            </p>
        </div>
    </div>
    <div class="flex">
        <div class="img-container small-container">
            <img src="{{asset("images/portfolio-mgt.png")}}" alt="portfolio management icon">
        </div>
        <div class="text-content">
            <h4>discplined and active portfolio management</h4>
            <p>
                We’re more than just stock pickers. We believe active portfolio management centered on your long-term goals is the best way to discover opportunities and achieve long-term results. Our five-person Investment Policy Committee, supported by a large in-house research staff, analyzes global investing opportunities narrowing down from country and sector to find securities they think will do well moving forward. This disciplined approach allows us to interpret information differently and find global investing opportunities other money managers may overlook.
            </p>
        </div>
    </div>
    <div class="flex">
        <div class="img-container small-container">
            <img src="{{asset("images/secured.png")}}" alt="security icon">
        </div>
        <div class="text-content">
            <h4>transparency</h4>
            <p>
                You deserve to know what we’re doing with your money. That’s why we’re transparent about the investing decisions we make for your portfolio. We proactively discuss current events and openly share our forecast with you through your Investment Counselor, live events, quarterly reviews, regular publications like MarketMinder and more. Whether you’re someone who wants to dig in to the details of your portfolio or you want to be more hands-off, we provide a variety of resources to get you the information you need, when you need it all to make sure you’re comfortable with our investing approach
            </p>
        </div>
    </div>
</section>

</main>


@endsection