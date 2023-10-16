@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">Investments</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Investments</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section Plan -->
    <section class="bg-light sp-100-70">
        <div class="container">

            <div class="tab-content wow fadeIn">
                <div role="tabpanel" class="tab-pane fade show active" id="yearly">
                    <div class="row justify-content-center">
                        @if ($investmentplans)
                            @foreach ($investmentplans as $price)
                                <div class="col-md-6 col-lg-4 mb-30">
                                    <div class="price-item text-center">
                                        <div class="price-top">

                                            <h4 class="mb-0">{{ $price->name }}</h4>

                                        </div>
                                        <div class="price-content">
                                            <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Plan Return - {{ $price->percentage }}%
                                                        Daily</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Plan Duration - {{ $price->noofrepeat }}
                                                        Days</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Minimum Capital - ${{ $price->minimum }}</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Maximum Capital - ${{ $price->maximum }}</span>
                                                </li>
                                                <li>
                                                    <i class="zmdi zmdi-check mr-2"></i>
                                                    <span class="c-black">Referral Commission -
                                                        {{ $price->refpercent }}%</span>
                                                </li>


                                            </ul>
                                            <a href="{{ route('register') }}" class="btn btn-custom">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="col-md-6 col-lg-4 mb-30">
                            <div class="price-item text-center">
                                <div class="price-top">

                                    <h4 class="mb-0">Silver Plan</h4>

                                </div>
                                <div class="price-content">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Return - 3% Daily</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Duration - 5 Days</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Minimum Capital - $5,000</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Maximum Capital - $19,999</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Referral Commission - 10%</span>
                                        </li>


                                    </ul>
                                    <a href="?a=signup" class="btn btn-custom">Invest Now</a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6 col-lg-4 mb-30">
                            <div class="price-item text-center popular">
                                <div class="price-top">

                                    <h4 class="mb-0">Gold Plan</h4>

                                </div>
                                <div class="price-content">
                                    <ul class="border-bottom mb-30 mt-md-4 pb-3 text-left">
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Return - 5% Daily</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Plan Duration - 5 Days</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Minimum Capital - $20,000</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Maximum Capital - Unlimited</span>
                                        </li>
                                        <li>
                                            <i class="zmdi zmdi-check mr-2"></i>
                                            <span class="c-black">Referral Commission - 10%</span>
                                        </li>


                                    </ul>
                                    <a href="?a=signup" class="btn btn-custom">Invest Now</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>
@endsection()
