@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">Frequently Asked</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="?a=home">Home</a></li>
                        <li class="breadcrumb-item active">Frequently Asked</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section FAQ -->
    <section class="bg-white sp-100-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="accordion" class="theme-accordion">
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc1">
                                <h5 class="mb-0">
                                    <button
                                        class="btn
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        Who are you?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse show" aria-labelledby="acc1" data-parent="#accordion">
                                <div class="card-body">
                                    <p> {{ $compd ? $compd->Companyname : 'Coming soon' }} is a leading global alternative
                                        investment management firm with expertise in investment strategies. Our firm’s
                                        competitive advantages include its experienced team of investment professionals, a
                                        global platform and a unifying investment philosophy. View our company details 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc2">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse2" aria-expanded="true"
                                        aria-controls="collapse2">
                                        What do I need to do to become an investor?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="acc2" data-parent="#accordion">
                                <div class="card-body">
                                    <p> To become an investor with us you only need to open an account. Registering an
                                        account is completely free and will take only a few minutes. After this you can
                                        officially become an investor with us. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc3">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
                                        aria-controls="collapse3">
                                        Can I have several open accounts?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="acc3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can have only one open account but can create an unlimited number of deposits.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        How can I access my account?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p> After registration, please click the "Login" button at the top of the website, enter
                                        your username, password and turing image for verification in the appropriate fields
                                        and click the "Login" button.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        How can I change my account personal information?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p> Please log into the account and click "Settings" button to enter the personal
                                        information page - there you will be able to modify your data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        What if I can't log into my account because I forgot my password?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Click "Forgot password" enter your username or e-mail and your login data will be
                                        sent to your e-mail address, if you did not receive the email, please contact us via
                                        email or live chat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        Which payments do you accept?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We accept cryptocurrencies</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        What is the minimum amount that I can invest?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The minimum amount is $100 and can be invested only on the first plan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        Can I invest several deposits at once?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you can have an unlimited number of deposits, but each of them will be processed
                                        separately. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        Can I deposit directly from my account balance?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can make a deposit from your account balance. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        After I make a withdrawal request, when will the funds be available on my wallet?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Withdrawals are processed immediately. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        Do you have a referral program?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we developed a single-level affiliate program according to which a program
                                        beneficiary will earn 10% of commission from the each of his/her partner deposit
                                        amounts. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-30">
                            <div class="card-header bg-white border-bottom-0 p-0" id="acc4">
                                <h5 class="mb-0">
                                    <button
                                        class="btn collapsed
                   position-relative text-decoration-none w-100 text-left"
                                        data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                                        aria-controls="collapse4">
                                        How will I receive my referral commission?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="acc4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The referral commission is accrued to your account balance instantly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section FAQ -->
@endsection()
