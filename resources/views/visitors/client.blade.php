@extends("layouts.spacedcustomlayout")

@section("body")

<!-- START SECTION BANNER -->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <ul class="bread-crumb clearfix">
                <li><a href="/">{{ $compd ? $compd->companyname : 'company name' }}</a></li>
            </ul>
            <h1>Covid-19</h1>                
        </div>
    </div>
</section>
<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="inner-box" style="padding: 0px; border: none;">
                        <div class="text">
                            <h2>Our Response To Covid-19</h2>
                            <p>The global COVID-19 pandemic is an unprecedented crisis
for humanity, requiring governments and companies to
take extraordinary actions to support their citizens and stakeholders. It is testing companies’ abilities to simultaneously serve their employees, clients, shareholders and communities, while grappling with the profound challenges created by the virus. This situation has also created an important opportunity for companies to differentiate themselves with respect to the “S” in ESG, as well as demonstrate how a strong corporate sustainability framework and strategy can benefit all stakeholders. 

As we reflect on the immense economic hardships created by this crisis, our conviction in our purpose – to help more and more people experience financial well-being – is stronger than ever. Our ability to support our stakeholders during this time has been underpinned by our sound financial position and commitment to the long-term sustainability of our corporate operations and strategy, as demonstrated by the investments we have made in our technology, our strong culture, and our attention to business continuity planning and the health and safety of our employees. 

As we have adapted to this evolving situation, we have focused on the following:</p>
                            
                            <ul>
                                <li><b>1. Delivering for clients </b></li>
                                <li><b>2. Employee well-being </b></li>
                                <li><b>3. Firm culture and enablement</b></li>
                                <li><b>4. Communicating with shareholders</b></li>
                                <li><b>5. Relief efforts in our communities</b></li>
                            </ul>
                            
                            <p class='mt-3'>These efforts, in addition to our strong culture and sense
                                of purpose, will continue to drive {{ $compd ? $compd->companyname : 'company name' }} forward now and over the long-term. 
                            </p>
                            
                            <h3>1. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19 </h3>
                            
                            <h5>Delivering for clients</h5>
                            <p>
                                As an asset manager and fiduciary to our clients, our ability to operate, no matter where our employees or clients are 
                                physically located, is critical. {{ $compd ? $compd->companyname : 'company name' }} did not design our operating model with this pandemic or an almost entirely 
                                virtual work environment in mind, but our strong culture and long history of connecting a global and growing 
                                organization on one technology platform, has enabled more than 95% of our employees to work from home, 
                                while continuing to deliver for each other and our clients.
                            </p>
                            
                            <h5>Operational resilience</h5>
                            <p>
                                Since our founding, we’ve placed an emphasis on technology.
This mindset, exemplified by tech and coupled with our
“One {{ $compd ? $compd->companyname : 'company name' }}” culture, has allowed us to effectively transition {{ $compd ? $compd->companyname : 'company name' }} from a company operating majorly in offices to an almost entirely remote workforce 
“home offices.”

We swiftly implemented business continuity and social distancing measures globally to protect our employees and those around 
them. We also worked to ensure everyone across the firm had the appropriate technology to be able to do their jobs at home. 

Further, as we have adjusted to operating in a much more virtual environment, adaptation of and investment in technology 
and videoconferencing resources have proven essential to maintaining connectivity and business continuity during this crisis.
The investments made in remote access capabilities, mobility and collaboration tools have helped maintain our “One {{ $compd ? $compd->companyname : 'company name' }}”
culture as we operate the firm beyond the scope of our physical office locations. 

Our operating model has enabled us to seamlessly handle record trading volumes, manage risk in an unprecedented market and 
ensure all our employees have the means to stay connected to each other and to our clients remotely.
                            </p>
                            
                            <h5>Governance and inspiring leadership </h5>
                            <p>
                                The leadership and strategic guidance of {{ $compd ? $compd->companyname : 'company name' }}’s Board of Directors and Global Executive Committee have been critical to {{ $compd ? $compd->companyname : 'company name' }}’s ability to navigate the financial, operational, and human complexities arising from the pandemic. 

Our Board of Directors has been receiving weekly strategic, financial, and operational updates. In March, {{ $compd ? $compd->companyname : 'company name' }} held a previously scheduled Board of Directors meeting virtually. While many of the agenda 
topics that were scheduled prior to the crisis were covered 
                            </p>
                            
                            <h5>Focus on Investment Stewardship</h5>
                            <p>
                                As investors on behalf of clients, {{ $compd ? $compd->companyname : 'company name' }} has a responsibility to focus on our clients’ long-term financial interests regardless of the market environment. 

Like {{ $compd ? $compd->companyname : 'company name' }}, many of the companies held in our clients’ portfolios with whom the {{ $compd ? $compd->companyname : 'company name' }} Investment Stewardship team (BIS) engages are facing unprecedented challenges. It is under these conditions that we believe good governance and sustainable business practices matter more than ever, and we are committed to playing a constructive role as companies and shareholders alike work together to navigate new levels of uncertainty. Our concerns expressed through voting generally address past actions or performance. As a result, we do not anticipate the COVID-19 situation to markedly affect voting decisions during this proxy season. 

On March 18, BIS released its 2020 Engagement Priorities, and in April, released its Q1 2020 Global Quarterly Stewardship Report, both of which underscore {{ $compd ? $compd->companyname : 'company name' }}’s commitment to providing transparency into
how we conduct investment stewardship activities in
support of long-term sustainable performance for our clients. In 2020, we are putting an increased focus on sustainability-related issues and relevant disclosures, given the 
growing impact of these issues on long-term value creation.
                            </p>
                            
                            <h3>2. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19 </h3>
                            <p>
                                As planned, we also adapted the agenda to focus attention on the most crucial developments in our operating model. 

The Global Executive Committee – {{ $compd ? $compd->companyname : 'company name' }}’s leadership team comprised of the firm’s most senior leaders – is meeting daily by 
videoconference to keep the firm operating effectively, to monitor the well-being of our employees and their families, and 
to continue to deliver for clients. We have prioritized clear and frequent communications from senior leaders, as well as
a range of internal communications to help employees stay connected and informed. In April, over 25 {{ $compd ? $compd->companyname : 'company name' }} leaders came 
together at our first ever virtual Global Leadership Summit to 
set our direction as we contemplate the implications of the pandemic and what comes next.
                            </p>
                            
                            <h5>Staying close to our clients</h5>
                            <p>
                                As always, our clients’ financial well-being is top of mind for {{ $compd ? $compd->companyname : 'company name' }}. Our ability to communicate with and serve our clients has remained at the forefront of every decision we have made. {{ $compd ? $compd->companyname : 'company name' }}’s history as a trusted advisor in times of market volatility and uncertainty has meant that our clients are looking to {{ $compd ? $compd->companyname : 'company name' }} more than ever before for guidance. Case-in-point: {{ $compd ? $compd->companyname : 'company name' }} has connected with nearly 200 clients in the past months, significantly eclipsing all historic records for client contact. Through virtual connectivity, we are having richer conversations than ever before.

As economies and markets continue to experience the impact of
this pandemic, {{ $compd ? $compd->companyname : 'company name' }}’s goal is to help our clients navigate their current financial situation, while also staying focused on their long-term goals.

Right now, slowing the spread of the virus and protecting everyone affected by the outbreak is a top priority. At the same time, many people are growing increasingly concerned about their financial futures, especially those who are near or in retirement. In our President’s recent message to retirement investors, we shared our best thinking on how to navigate this very difficult period in the financial markets.

We also recognize that for governments, businesses and investors alike, an essential question has been to understand the sources of resilience during these past few months and how to build on them to prepare for future crises. Our latest research has established a correlation between sustainability and traditional factors such as quality and low volatility, which themselves indicate resilience. 

We detail how companies managed with a focus on sustainability
                            </p>
                            
                            
                            <h3>3. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19 </h3>
                            
                            <div class="text">
                            <blockquote>
                                <h5>
                                    Millions of Americans are facing immediate financial distress and need cash today. But, for individuals 
                                    and families who are financially able to stay invested, 
                                    history shows that people do best when they take the long-term view. 
                                </h5>
                                
                            </blockquote>
                            </div>
                            
                            <h5>Risk management</h5>
                            <p>
                                Risk management is foundational to {{ $compd ? $compd->companyname : 'company name' }}’s identity. The COVID-19 crisis has heightened risks across multiple areas, including financial, investment, cyber and technology-related risks. {{ $compd ? $compd->companyname : 'company name' }}’s Risk and Quantitative Analysis Group (RQA), which is responsible for evaluating and measuring all investment, counterparty and operational risk at the firm, has continued to manage across a broad variety of risk factors during this time. Continual advancements of {{ $compd ? $compd->companyname : 'company name' }}’s risk framework facilitated its ability to identify the primary stress points in markets, particularly changing liquidity,
as volatility surged to near record levels. 

In response to recent extreme market volatility, RQA leadership has met daily to escalate and address emerging risk issues and has provided regular updates to senior management. Additionally, {{ $compd ? $compd->companyname : 'company name' }} launched a cross-functional task force to coordinate firmwide resources and identify key risks and contingency plans in the event of extended major financial market closures. We have been regularly engaged with regulators globally, at times conducting twice daily calls to discuss markets, operations, client asset flows, fund redemptions and technology resilience. RQA has also been monitoring the impact of the COVID-19 crisis on {{ $compd ? $compd->companyname : 'company name' }}’s 

critical third parties to understand their responses to the crisis and continually assess their preparedness. 
                            </p>
                            
                            <h5>Employee well-being</h5>
                            <p>
                                Our overriding priority at {{ $compd ? $compd->companyname : 'company name' }} since the start of the crisis
has been the health and safety of our employees and their families. Amidst extraordinary circumstances, our employees have rebuilt {{ $compd ? $compd->companyname : 'company name' }} beyond its walls delivering the operational resilience and support our clients depend on and need, now more than ever before. We have implemented several initiatives to support our people as they adjust to a new normal. 

In addition to our social distancing protocol, we have prioritized communication about access to and awareness of our telemedicine and digital health resources, and we are onboarding new healthcare and wellness providers to deliver increased care and assistance to our employees. We have also extended cross-border healthcare coverage and support to employees and their dependents who are temporarily working or are on Flexible Time Off (FTO)1 outside of their home country as a result of the pandemic.

We have also emphasized the importance of mental and emotional well-being in addition to physical health because we recognize that this unprecedented time is stressful for everyone, including our employees. We have a variety of emotional and mental health benefits that are always available to all employees, including free, confidential counselling through our Employee Assistance Program, which we have reinforced during this time. In addition, we are offering all employees globally a free, one-year subscription to ‘Calm’, an award-winning meditation and relaxation mobile app. 

The pandemic has also introduced new challenges for working parents, including managing childcare and home-schooling while working from home. To support our employees with family responsibilities, we have worked with providers to find back-up childcare solutions, implemented more flexible work-from-home schedules and encouraged the use of our FTO policy. We have also created several online forums where employees can exchange ideas and crowdsource resources and tools to 
support expanded education and childcare responsibilities. 
                            </p>
                            
                            <div class="text">
                            <blockquote>
                                <h5>
                                    Toward this end, we also strive to support all aspects of employees’ physical, 
                                    emotional and financial well- being so they can stay energized, engaged and inspired
</h5>
                                <p>LARRY SVENKO’S CHAIRMAN’S LETTER TO SHAREHOLDERS </p>
                                
                            </blockquote>
                            </div>
                            
                            <h5>Firm culture and enablement </h5>
                            <p>
                                Reinforcing {{ $compd ? $compd->companyname : 'company name' }}’s culture through connectivity and support has been critical during this time. Recognizing that our people managers play a critical role in this, we launched a series of enablement sessions to equip managers with the tools they need
to keep teams motivated, informed and inspired during this rapidly changing time. The emphasis has been on empathy and flexibility to accommodate the needs of our people. We also created an intranet resource hub to streamline internal communications and enable our employees to quickly find the latest policies and protocols to perform at their best in this new environment or to ask for help when they need it. 

Our employee networks have played a critical role in reinforcing our collaborative culture and maintaining community and belonging across the firm. Employee network-led initiatives include a virtual buddy program to combat isolation during social distancing, panel discussions about balancing work with added caregiver duties, and market roundtables to stay informed and connected about market 

Under {{ $compd ? $compd->companyname : 'company name' }}’s FTO policy, employees are not held to a fixed number
of days off per year based on tenure or title. We have a high-performance culture and employees have the flexibility to take paid time off when they need it to relax and recharge. 
                            </p>
                            
                            <h4>We have also emphasized the importance of mental and emotional well- being in addition to physical health.</h4>
                            
                            <h3>6. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19</h3>
                            
                            <h5>Relief efforts in our communities</h5>
                            <p>
                                Through our Social Impact efforts, we are committed to supporting our communities, particularly as COVID-19 has exacerbated social inequalities and hardship for millions of people. Early this year, before volatility upended global markets, we contributed our remaining 20% stake in PennyMac to our existing Donor Advised Fund and a newly established {{ $compd ? $compd->companyname : 'company name' }} Foundation with the goal of addressing pressing social problems facing our communities. As the virus outbreak was declared a pandemic and threatened to devastate the physical and financial health of people around the world, we committed $50 million to COVID-19 relief efforts. 

In the first half of March, we contributed more than $23 million to over 50 organizations around the globe, with a focus on supporting frontline responders and foodbanks serving vulnerable populations in places where our employees live and work. We have made donations to over 20 local food banks or organizations supporting food banks across the United States, Italy, Spain, France, Germany and India. We also invested in the Global Food Banking Network to meet emerging needs in parts of Asia and Latin America. We donated to Robin Hood and Tipping Point, non-profit partners serving low income communities in New York City and San Francisco, and to Give2Asia, which is distributing relief to non-profits across Australia, Hong Kong, Japan, Singapore, Taiwan and South Korea that are supporting communities most impacted by the virus. 

Protecting and supporting medical professionals is another important priority in sustaining our communities.
We are supporting hospitals and personnel in Italy and France, as well as NYC Health + Hospitals, 
the largest public healthcare system in the US, to help provide fresh, pre-packaged meals and personal 
protective equipment for staff. In the UK, we contributed to charities including the National Emergencies 
Trust, Doctors Without Borders and Team Rubicon UK, an all-veterans organization recruiting volunteers to support frontline responders. Team Rubicon will also help deliver
food and supplies to hospital personnel and those quarantined for medical reasons. 
                            </p>
                            
                            
                            <h5>Protecting and supporting medical professionals
is another important priority in sustaining our communities.</h5>
                            
                            <h3>6. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19</h3>
                            <p>
                                In addition to our philanthropic contributions, {{ $compd ? $compd->companyname : 'company name' }} is donating its own supply of masks where available and trying to match other equipment and facilities with responders and hospitals. 

We are also actively supporting COVID-19 relief measures taken by our private investment partners. {{ $compd ? $compd->companyname : 'company name' }} Alternative Investors, which invests in a range of alternative instruments, including Real Assets, Private Equity, Private Credit and Hedge Funds, has been working with various investment partners over the last month to support their responses to the crisis.

For example, our Real Assets team has engaged with investment partners to identify opportunities aligned with portfolio investment objectives and supporting the surrounding community. For example, we identified an opportunity to shift construction resources to support the development of a COVID-19 treatment area at one of our hospital assets. In addition, one of our investment teams worked with a portfolio company dedicated to respiratory care to expand its production capacity to respond to unprecedented demand for ventilators and accompanying equipment globally. 

Finally, our employees worldwide have expressed interest in fundraising and volunteering to help those most affected by the crisis. In response, we launched a virtual volunteer toolkit featuring curated volunteer opportunities such as tutoring home-bound children and providing pro bono support to non-profits adapting to the new environment. Our global Mapathon event, organized in partnership with Doctors Without Borders, provides an avenue for employees to support humanitarian workers responding to the virus in developing countries. Additionally, we have doubled {{ $compd ? $compd->companyname : 'company name' }}’s match for employee contributions to their local organizations addressing the crisis in their communities. During this campaign, which ran from mid-March to early May, 
employees directed nearly $1 million to over 200 non-profits across the globe.
                            </p>
                            
                            
                            <h3>Communicating with Shareholders</h3>
                            <p>
                                The investments {{ $compd ? $compd->companyname : 'company name' }} has continuously made over the years
to build a scaled business model with diverse, global investment capabilities, best-in-class technology and rigorous risk management have enabled us to differentiate ourselves and serve clients in a variety of market environments. 

The Mapathon invites volunteers to create and edit maps of regions in the developing world so that humanitarian workers can more easily reach people in crisis 
                            </p>
                            
                            
                            <h3>7. Sustaining {{ $compd ? $compd->companyname : 'company name' }} through COVID-19 </h3>
                            <p>
                            As detailed in our first quarter earnings release, flows momentum
in 2019 continued into the first quarter, driven by cash, illiquid alternatives, iShares sustainable and factor ETFs, and active equities, despite significant market-related outflows. We remain committed to optimizing organic growth in the most efficient way possible, and focused on a long-term strategy centered around iShares, illiquid alternatives, technology and creating whole-portfolio solutions. 

As an investor and advocate for greater transparency, we also remain committed to providing meaningful sustainability information to stakeholders. We recently published our second SASB disclosure which includes year-over-year statistics and greater 
detail on diversity representation in hiring.
                            </p>
                            
                            <h3>Conclusion </h3>
                            <p>
                                Our resilience in this crisis is the product of our long-term focus and a strong and sustainable foundation built upon our commitment to serving all of our stakeholders – our clients, employees, shareholders and communities. 

We are currently in the planning phase for a gradual return to our offices in the coming months. Our planning is based on a core set of principles focused on employee health and safety and ensuring that we are able to continue effectively serving our clients. 

We recognize the importance of {{ $compd ? $compd->companyname : 'company name' }}’s purpose – to help more and more people experience financial well-being – in the context of this uncertain time. And we know that this comes with a great responsibility to support our stakeholders as they navigate the situation. 

Our ability to continue serving our stakeholders is a testament to {{ $compd ? $compd->companyname : 'company name' }}’s focus on employee well-being, health and safety, and our strong culture. Our philanthropic initiatives to support relief efforts also reflect our commitment to making a positive social impact on the world around us. 
                            </p>
                            
                            <h2>A summary of {{ $compd ? $compd->companyname : 'company name' }}’s actions and philosophy as we continue to navigate the COVID-19 pandemic</h2>
                        </div>
                        
                        
                    </div>
                    
                    
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

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