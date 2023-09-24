@extends("layouts.spacedcustomlayout")

@section("body")

<section class="banner-section">
    <div class="img-container">
     <!--   <img src=".{{asset("images/ourteam-banner-img.webp")}}" alt="banner image"> -->
    </div>
    <div class="banner-overlay">

    </div>
    <div class="bread-crumb">
        <nav>
            <ul>
                <li><a href="{{route('index')}}">Go to home</a></li>
                <li><a href="#">Our Team</a></li>
            </ul>
        </nav>
    </div>
</section>

<main class="ourteam-contents aboutus-page">
<!-- contents of the page -->
<section>
  <p>
      Our constant goal is to recruit, retain, and develop the best talent available. However, at times, even the most talented individuals need a little help finding their way. At {{$compd? $compd->Companyname: 'Future optimax'}} Financial Management, we open our doors to professionals of all orientations, races, abilities, genders, and life experiences. In addition, we offer an accommodating and flexible work environment so that our associates can maximize their effectiveness at home, at work, and within their communities. At the same time, we encourage and sponsor employee networks that build on our diversity and inclusion strategy. These networks, called Business Resource Groups (BRGs), promote individual professional development, while helping the company achieve its business objectives.Our diverse and talented employees are committed to helping people and companies attain financial wellness through our innovative products and financial solutions. Whether working with multinational corporations or individual families, we are dedicated to helping create financial strength today and security for tomorrow.
  </p>
</section>
<section class="team-members-gallery">
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-president.jpg")}}" alt="president image">
      </div>
      <h4>david williams davies</h4>
      <small>president</small>
      <figcaption>
          <button class="read-bio-cta" id="0">read bio</button>
          <p class="bio-text" id="0">
              A motivating leader who embodies our firm’s culture. With nearly 48 years of leadership roles at different firms.He is the Founder,and an Experienced Senior Portfolio Manager with a demonstrated history of trading in the finance industry and primarily focuses on investment opportunities in the US Fixed Income markets, Skilled in Portfolio Management, Management, Investments.Prior to this he worked at RBC Capital Markets LLC,Wachovia Securities LLC. Mr. William leverages his firm-specific and industry knowledge to lead the firm and its people, develop the firm’s strategy, embody the “tone-at-the-top” and help protect and enhance our firm’s culture, providing his insights to our Board and Committees and keeping directors apprised of significant developments in our business and industry
Education - Graduate of Leland Stanford Junior University.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-vice.jpg")}}" alt="vice president">
      </div>
      <h4>mark luthor siegel</h4>
      <small>vice president</small>
      <figcaption>
          <button class="read-bio-cta" id="1">read bio</button>
          <p class="bio-text" id="1">
              Mark Luthor Siegel, Vice President, Director and a member of {{$compd? $compd->Companyname: 'Future optimax'}} financial management’s Global Executive Committee and directs the firm’s day-to-day operations and oversees its four primary business units: US Private Client, Institutional, Private Client International and 401(k) Solutions. He is also responsible for day-to-day oversight of all {{$compd? $compd->Companyname: 'Future optimax'}} financial management’s key operating units including Investment Strategies, Client Businesses, Blockchain Technology Management, Technology & Operations, and Risk & Quantitative Analysis. He joined {{$compd? $compd->Companyname: 'Future optimax'}} financial managment in 2003 and has since held a variety of roles. From 2007 to 2012, he served as Co-President and from 2012 to 2016 as President of Client Acquisition and Service. Siegel has been an Executive Officer and member of the firm’s Board of Managers since 2005. He speaks at client seminars nationally, where he provides insights on current market conditions and portfolio positioning. He is a member of The Wall Street Journal CEO Council and the prominent G100 Network of chief executive officers. Siegel regularly publishes articles in various industry publications, including FT Adviser, Financial Advisor, Advisor Perspectives, Financial Advisor IQ, FE Trustnet and Investment News.Education - Mark Luthor Siegel earned a BS degree in economics from the Wharton School of the University of Pennsylvania in 1979, and an MBA degree from Harvard Business School in 1983.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-managing-director.jpg")}}" alt="managing director">
      </div>
      <h4>sally lindsay</h4>
      <small>managing director</small>
      <figcaption>
          <button class="read-bio-cta" id="2">read bio</button>
          <p class="bio-text" id="2">
Sally Lindsay,joined {{$compd? $compd->Companyname: 'Future optimax'}} Financial Management at its inception. Sally was previously a Logistician in the US Army. Sally is a strategic and experienced Managing Director and accountant specializing in profitable business growth and Magine improvement integrating marketing creativity with finance discipline achieving success across multiple industry verticals. Sally is known for identifying and implementing various strategies to promote financial security and accurate reporting with aim to capture market anomalies while maintaining a business mindset beyond portfolio management.
Sally has served on the Board of Directors of numerous companies, including Barfield and Powell. Sally is a graduate of the University of Virginia where she earned a bachelor's of commerce in Human Resource management and a master of business administration at the University of Florida.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src=".{{asset("images/ourteam-financial-officer.jpg")}}" alt="financial officer">
      </div>
      <h4>stella harris</h4>
      <small>chief financial officer</small>
      <figcaption>
          <button class="read-bio-cta" id="3">read bio</button>
          <p class="bio-text" id="3">
              Stella Harris has over 12 years of experience in Real Estate Consultancy with a demonstrated history of working in the real estate industry. Skilled in Accounting, Investment Properties, Financial Accounting, Marketing, and Working with top Investors in business and finance. Before joining {{$compd? $compd->Companyname: 'Future optimax'}} financial management, Stella Harris was influential in redefining the Real Estate industry and creating an execution plan that became the preeminent strategic priority. Stella Harris also served as the Real Estate Consultant of Lincoln property Company ATL, following the acquisitions Stella Harris also led a successful integration to drive synergies and profitable growth. Stella Harris spent the first 5 years of her career advising clients in M&A, restructuring, liquidity optimization, and audit. She holds a Bachelors's degree in Finance from the University of California, Los Angeles, and a Masters's degree in Accountancy from Boston University.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-portfolio-manager.jpg")}}" alt="portfolio manager">
      </div>
      <h4>emily marling</h4>
      <small>portfolio manager</small>
      <figcaption>
          <button class="read-bio-cta" id="4">read bio</button>
          <p class="bio-text" id="4">
              Emily Marling is an Experienced Portfolio Manager. In those roles, she oversees the firm's Portfolio Management Department, which includes the Research, Investment Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a member of the Technology Transformation Committee. Emily speaks regularly at client seminars and meets with institutional clients globally, providing information regarding market outlook, portfolio positioning and global economic factors. Emily joined {{$compd? $compd->Companyname: 'Future optimax'}} financial Management in 2005 and has served on the firm's five-member IPC since 2011. Prior to her current responsibilities, She held several different positions at the firm, including Capital Markets Research Team Leader, Securities Research Team Leader and Securities Research Analyst. She has a degree in Finance from the University of Arizona. She lives in the San Francisco Bay Area with her husband and two children.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-financial-analyst.jpg")}}" alt="financial analyst">
      </div>
      <h4>evelyn d chow</h4>
      <small>finacial analyst</small>
      <figcaption>
          <button class="read-bio-cta" id="5">read bio</button>
          <p class="bio-text" id="5">
   Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of analysis and trading in the finance market, highly skilled in Risk Management, Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio Management Department, which includes the Research, Investment, Operations and Investment Solutions. Mrs. Evelyn started her career at Aspen Financial Management in 2016 and was previously an Analyst at Neuberger Berman Prior affiliations include Goldman Sachs where she was responsible for developing investment strategies for the taxable core and asset-liability portfolios, Contract Negotiation and Asset Management. She received her strong finance professional with a Master’s Degree focused in Business Managerial Economics from Baruch College.   
    </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-finacial-advisor.jpg")}}" alt="finacial advisor">
      </div>
      <h4>mark geller</h4>
      <small>Certified Retirement Financial Advisor</small>
      <figcaption>
          <button class="read-bio-cta" id="6">read bio</button>
          <p class="bio-text" id="6">
              Mark Geller is a Certified Retirement Financial Advisor and a member of the Investment Policy Committee (IPC). He oversees the firm’s Retirement plan offers And carries out Researches about, Investment Operations, Investment Solutions, Global Custody Management, and Portfolio Evaluation Groups. He is also a member of the Client Services Group. Mark speaks regularly at client seminars and meets with institutional clients globally, providing information regarding a perfect retirement approach. Mark Geller joined {{$compd? $compd->Companyname: 'Future optimax'}} Financial Managment in May 2012 and has been an invaluable asset to the company. Before his current responsibilities, Mark held several different positions at the firm, including Retirement Portfolio Research Team Leader, Retirement Portfolio Strategist and Analyst. Mark has a degree in Finance from the University of San Francisco and a degree in Human Resources Management.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-marketing-officer.png")}}" alt="marketing officer">
      </div>
      <h4>Michelle Klaudi Clinton</h4>
      <small>chief marketing officer</small>
      <figcaption>
          <button class="read-bio-cta" id="7">read bio</button>
          <p class="bio-text" id="7">
              Michelle Klaudi Clinton brings 10 years of extensive commercial real estate finance expertise to {{$compd? $compd->Companyname: 'Future optimax'}} financial management. Most recently, Michelle Klaudi Clinton was the National Originations Manager for Westwood Capital Real Estate Finance, for which she also shared senior management responsibility. She managed a team that originated loans across the United North America, Europe and Asia. Education - She holds a B.A. from the University of Kentucky.
          </p>
      </figcaption>
  </figure>
  <figure class="member">
      <div class="img-container">
          <img src="{{asset("images/ourteam-client-service.jpg")}}" alt=" client service">
      </div>
      <h4>grilo susan</h4>
      <small>Private Client services</small>
      <figcaption>
          <button class="read-bio-cta" id="8">read bio</button>
          <p class="bio-text" id="8">
Grilo Susan is the Executive Vice President of the American and International Private Client Services Group. In that role, Susan is responsible for all service and support, personalized financial services and products offered to the high-net-worth individual clients. Susan initially joined {{$compd? $compd->Companyname: 'Future optimax'}} Financial Management in 2015(ON CONTRACT) and has held a variety of roles at the firm
She spent the early part of her career as an Accountant, working directly with private clients, and in a variety of support roles. She then held managerial roles in Client Programs and thereafter served as a Group Vice President in charge of Investment Counselors and Client Programs. Susan regularly meets with private clients nationwide, sharing the firm’s market outlook, presenting current portfolio positioning and answering questions. She received her bachelors degree from the University of California, Los Angeles and a master’s of business administration from Grand Canyon University.
          </p>
      </figcaption>
  </figure>
</section>
</main>


@endsection