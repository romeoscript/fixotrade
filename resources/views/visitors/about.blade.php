@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">About</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section About Us -->
    <section class="bg-light sp-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h5 class="subtitle-left">Introducing</h5>
                    <h3>Delivering Superior Investment Results</h3>
                    <p class="mb-30">{{$compd? $compd->Companyname: 'Coming soon'}} is a top-tier investment management firm that specializes in alternative
                        investment strategies on a global scale. The company's edge lies in its seasoned team of investment
                        experts, a worldwide presence, and a cohesive investment philosophy.</p>
                    <p>This approach to investment is guided by six core principles, namely, risk management, consistency,
                        exploiting market inefficiencies, specialization, bottom-up analysis, and rejection of market
                        timing. In addition to these tenets, Everest also adheres to a set of fundamental business
                        principles, which reflect its dedication to superior investment performance, alignment of interests
                        with clients, fostering a culture of collaboration and cooperation, and pursuing disciplined,
                        strategic growth opportunities.</p>
                </div>
                <div class="col-lg-6 col-12 d-none d-lg-block wow zoomIn pl-5">
                    <div class="about-page-img">
                        <img src="{{asset('ldxa-trade.com/img/pages/about-img.png')}}" class="img-fluid" alt="Business">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section About Us -->



    <!-- START Section About Us -->


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <style>
            a {
                color: red;
            }
        </style><!--
    <style>
    .container {
        background-color: #f9f9f9;
        padding: 50px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
        margin-bottom: 50px;
    }
    .subtitle-left {
        color: #1c2331;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    h5 {
        color: #1c2331;
        font-size: 40px;
        margin-bottom: 30px;
    }
    .registration-number, .address {
        color: #444;
        font-size: 18px;
        margin-bottom: 10px;
    }
    a.btn {
        background-color: #f44336;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        padding: 10px 30px;
        text-transform: uppercase;
        transition: all 0.3s ease-in-out;
    }
    a.btn:hover {
        background-color: #1c2331;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
    }
    @media (max-width: 768px) {
        .subtitle-left {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
        .col-lg-6 {
            margin-bottom: 30px;
        }
        a.btn {
            width: 100%;
        }
    }
    </style>-->



    </head>

    <body>



        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h5 class="subtitle-left">Certificate</h5>
                    <h5>UK Certificate</h5>
                    <div class="registration-number">Registration number: 08130377</div>
                    <div class="address">Address: 1st Floor Hanover House, 14 Hanover Square, London, England, W1S 1HN</div>
                </div>
                <br>
                <div class="col-lg-6 col-12 text-lg-end text-center">
                    <a href="https://find-and-update.company-information.service.gov.uk/company/08130377"
                        class="btn btn-primary">Verify Certificate</a>
                </div>
            </div>
        </div>



        <img src="{{asset('ldxa-trade.com/img/certificate.png')}}" alt="Certificate" class="responsive-image">
    </body>


    <!-- START Section Services -->
    <section class="service-section overlay-bg bg-light sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-left text-center text-lg-left">
                        <h3 class="top-sep">Business Principles</h3>
                        <p>Our community is directed by our commercial tenets, and our tactics function in accordance with
                            our cohesive investment ideology. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-consultation"></i>
                        </div>
                        <h5 class="btm-sep">Market Research</h5>
                        <p> Our inquiry centers on listing the constituents necessary for achieving prosperity and detecting
                            potential investments that fulfill those prerequisites. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-search-engine"></i>
                        </div>
                        <h5 class="btm-sep">Excellence</h5>
                        <p>Our objective entails achieving superior outcomes in the realm of investment. Specifically, we
                            aim to secure favorable returns while limiting risk exposure. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-computer"></i>
                        </div>
                        <h5 class="btm-sep">Ethical Personnel</h5>
                        <p>It is essential to maintain a workplace where cooperation is promoted and harmony prevails. To
                            achieve this, it is necessary to avoid personnel leaving the organization frequently, prevent
                            political maneuvering within the office, and discourage unhealthy competition among colleagues.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-seo"></i>
                        </div>
                        <h5 class="btm-sep">Common Interests</h5>
                        <p>In order to establish mutual interests with our customers, we place significant emphasis on
                            identifying potential conflicts of interests, and if feasible, prevent them from occurring. When
                            avoidance is not an option, we handle these situations in an equitable manner.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-management"></i>
                        </div>
                        <h5 class="btm-sep">Client Communication</h5>
                        <p>Our correspondence with customers should cater to their requirements and reinforce our
                            associations with them. It is our objective that each customer comprehends our ideology,
                            methodology, undertakings, and outcomes. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12 mb-30">
                    <div class="service-box">
                        <div class="icon-box">
                            <i class="flaticon-deal"></i>
                        </div>
                        <h5 class="btm-sep">Profitability</h5>
                        <p>The financial gain of our enterprise must arise from executing the aforementioned actions.
                            Premium Holding is administered with the objective of serving its patrons and their respective
                            groups, in addition to benefiting its proprietors and staff. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Services -->



    <!-- START Section Projects -->
    <section class="project-section bg-w sp-100-70">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title title-left text-center text-lg-left">
                        <h3 class="top-sep">Key Market Stakes</h3>

                    </div>
                </div>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener"
                        target="_blank"><span class="blue-text"></span></a></div>

                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                        "width": "100%",
                        "height": "500",
                        "symbolsGroups": [{
                                "name": "Indices",
                                "originalName": "Indices",
                                "symbols": [{
                                        "name": "FOREXCOM:SPXUSD",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "FOREXCOM:NSXUSD",
                                        "displayName": "Nasdaq 100"
                                    },
                                    {
                                        "name": "FOREXCOM:DJI",
                                        "displayName": "Dow 30"
                                    },
                                    {
                                        "name": "INDEX:NKY",
                                        "displayName": "Nikkei 225"
                                    },
                                    {
                                        "name": "INDEX:DEU30",
                                        "displayName": "DAX Index"
                                    },
                                    {
                                        "name": "FOREXCOM:UKXGBP",
                                        "displayName": "FTSE 100"
                                    }
                                ]
                            },
                            {
                                "name": "Commodities",
                                "originalName": "Commodities",
                                "symbols": [{
                                        "name": "CME_MINI:ES1!",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "CME:6E1!",
                                        "displayName": "Euro"
                                    },
                                    {
                                        "name": "COMEX:GC1!",
                                        "displayName": "Gold"
                                    },
                                    {
                                        "name": "NYMEX:CL1!",
                                        "displayName": "Crude Oil"
                                    },
                                    {
                                        "name": "NYMEX:NG1!",
                                        "displayName": "Natural Gas"
                                    },
                                    {
                                        "name": "CBOT:ZC1!",
                                        "displayName": "Corn"
                                    }
                                ]
                            },
                            {
                                "name": "Bonds",
                                "originalName": "Bonds",
                                "symbols": [{
                                        "name": "CME:GE1!",
                                        "displayName": "Eurodollar"
                                    },
                                    {
                                        "name": "CBOT:ZB1!",
                                        "displayName": "T-Bond"
                                    },
                                    {
                                        "name": "CBOT:UB1!",
                                        "displayName": "Ultra T-Bond"
                                    },
                                    {
                                        "name": "EUREX:FGBL1!",
                                        "displayName": "Euro Bund"
                                    },
                                    {
                                        "name": "EUREX:FBTP1!",
                                        "displayName": "Euro BTP"
                                    },
                                    {
                                        "name": "EUREX:FGBM1!",
                                        "displayName": "Euro BOBL"
                                    }
                                ]
                            },
                            {
                                "name": "Forex",
                                "originalName": "Forex",
                                "symbols": [{
                                        "name": "FX:EURUSD"
                                    },
                                    {
                                        "name": "FX:GBPUSD"
                                    },
                                    {
                                        "name": "FX:USDJPY"
                                    },
                                    {
                                        "name": "FX:USDCHF"
                                    },
                                    {
                                        "name": "FX:AUDUSD"
                                    },
                                    {
                                        "name": "FX:USDCAD"
                                    }
                                ]
                            }
                        ],
                        "colorTheme": "light",
                        "isTransparent": false,
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>

    </section>
    <!-- END Section Projects -->
@endsection
