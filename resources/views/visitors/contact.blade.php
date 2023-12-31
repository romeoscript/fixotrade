@extends('layouts.spacedcustomlayout')

@section('body')
    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">Contact us</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item active">Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section Contact Us -->
    <section class="bg-white sp-100-70 contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="btm-sep pb-3 mb-5">Get in touch</h3>
                </div>
                <div class="col-lg-8 mb-60 mb-lg-0 pr-lg-5">
                    <div class="bg-white contact-form">




                        <script language=javascript>
                            function checkform() {
                                if (document.mainform.name.value == '') {
                                    alert("Please type your full name!");
                                    document.mainform.name.focus();
                                    return false;
                                }
                                if (document.mainform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.mainform.email.focus();
                                    return false;
                                }
                                if (document.mainform.message.value == '') {
                                    alert("Please type your message!");
                                    document.mainform.message.focus();
                                    return false;
                                }
                                return true;
                            }
                        </script>

                      
                        <form method="post" action="{{ route('postcontact') }}"  class="form"  novalidate="novalidate">
                            @csrf
                         

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="error_contact"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <span class="zmdi zmdi-account"></span>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="username"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <span class="zmdi zmdi-email"></span>
                                        <input type="text" class="form-control" placeholder="Enter Email" name="email"
                                            value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea rows="8" class="form-control" placeholder="Your Message" name="msg"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-custom" id="contact-submit" name="send" value="Send">
                                        <i class="fa fa-paper-plane"></i> Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 mb-30">
                    <ul class="contact-detail">
                        <li class="mb-30">
                            <i class="zmdi zmdi-pin"></i>
                            <h5 class="mb-2 c-white">Address</h5>
                            <p class="mb-0 c-white">2 Savoy Court, London, WC2R 0EZ. </p>
                        </li>
                        <li class="mb-30">
                            <i class="zmdi zmdi-email"></i>
                            <h5 class="mb-2 c-white">Email</h5>
                            <p class="mb-0 c-white"><a href="mailto:{{$compd? $compd->Companyemail: 'Coming soon'}}"
                                    style=" color: #fff;">{{$compd? $compd->Companyemail: 'Coming soon'}}</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Contact Us -->

    <!-- START Section Clients -->
    <section class="sp-100 bg-white clients-section">
        <div class="container">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.112773500161!2d14.442772615748872!3d35.89525358014485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e50230895354d%3A0x6f437fc9ce1ec68!2sSt%20Anthony%20St%2C%20Malta!5e0!3m2!1sen!2sca!4v1604314074407!5m2!1sen!2sca" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
        </div>
    </section>
    <!-- END Sections Clients -->
@endsection()
