@extends('layouts.app')
<title>Pardons Canada Application Guide</title>
<link rel="stylesheet" href="{{ asset('dist/css/b5st9632.css')  }}">
<style>
    /* Hide number input spinner arrows */
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }

    .bg-atlantic-blue {
        --bs-bg-opacity: 1;
        background-color: #114A7E;
    }

    .py-20 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important;
    }
    .custom-h2{
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
    }
    .custom-p{
        font-size: 14px;
        line-height: 20px;
        font-style: normal;
        font-weight: 400;
    }

    .check-green {
        list-style-type: none;
        padding-left: 32px;
    }

    .check-green li {
        margin-bottom: 0.5rem;
    }

    /* Media Queries */
    @media (max-width: 991px) {
        .col-lg-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    .custom-li {
        position: relative !important;
        list-style: none !important;
        line-height: 20px !important;
        margin-bottom: 8px !important;
    }
    .list-inline{
        display: flex;
    }

    h1.text-text-primary {
        font-size: 30px;
    }

    /* Media query for mobile devices */
    @media only screen and (max-width: 768px) {
        h1.text-text-primary {
            font-size: 20px;
        }
    }

    .meta-value{
        color: #4b5565;
    }


</style>
@section('content')


    <section id="top-bar-main" class="bg-atlantic-blue py-20">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="navbar-brand" src="{{ asset('app-logo/LogoChanges2.webp') }}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">
                    <div class="my-auto me-3 d-none d-md-block">
                        <p class="check-gold text-white mb-0 check-gold">24/7 Customer Service</p>
                    </div>
                              </div>
            </div>
        </div>
    </section>





    <section id="disclaimer-top" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col my-2 text-gray-900">
                    <p>Services of Canada is an information website not affiliated with the United States government. We do not provide legal services.</p>
                </div>
            </div>
        </div>
    </section>







    <section id="eligibility-form" class="py-32 py-md-128">
        <div class="container">
            <div class="form-wrapper row">
                <div class="col-12 col-xl-6 offset-xl-3">

                    <!-- STEP 1 -->
                    <section id="eligibility-form-step-1-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-1"  method="get">
                            <div class="step-header">
                                <div class="w-75" style="width: 103% !important;">
                                    <h1 class="text-text-primary mb-10">
                                        <b>Pardons Canada Application Guide</b></h1>
                                </div>
                            </div>

                            <div class="step-row">
                                <label for="citizenship-country">Which country issued your passport?</label>
                                <select name="citizenship-country" id="citizenship-country">
                                    <option value="" disabled selected>Select country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c->countryCode }}" @if($c->countryName === 'Canada') selected style="font-weight:bold;" @endif>{{ $c->countryName }}</option>
                                    @endforeach
                                </select>
                                <div id="errorCitizenship" class="text-danger" style="display: none">Please select your citizenship</div>
                            </div>

                            <div class="step-row">
                                <label for="has-secondary-citizenship" class="form-item-wrapper">
                                    <input type="checkbox" name="has-secondary-citizenship" id="has-secondary-citizenship">
                                    <span>
                                        Check the box if you hold more than one passport                                    </span>
                                </label>
                            </div>

                            <div id="secondary-citizenship-container" class="step-row d-none">
                                <label for="citizenship-country-secondary">
                                    Select your second passport                                    </label>
                                <select name="citizenship-country-second" id="citizenship-country-second">
                                    <option value="" disabled selected>Select country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c->countryCode }}">{{ $c->countryName }}</option>
                                    @endforeach
                                </select>
                                <div id="errorCitizenshipsecond" class="text-danger" style="display: none">Please select your citizenship</div>
                            </div>
                            <hr>

                            <div class="step-row mx-md-2">
                                <div id="reason-for-travel" class="mb-4">
                                    <label class="text-dark mb-2">
                                        Select reason for travelling to the United States                                      </label>
                                    <div class="row">
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-tourism" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-tourism" value="tourism">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="{{ asset('app-logo/Tourism.svg')  }}">
                                                    <div class="p-strong text-center mt-1">
                                                        Tourism &amp; Travel                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-business" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-business" value="business">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="{{ asset('app-logo/Business.svg')  }}">
                                                    <div class="p-strong text-center mt-1">
                                                        Business                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                        <div class="col-12 col-md-4 px-md-1">

                                            <label for="reason-for-travel-transit" class="form-item-wrapper">
                                                <input class="form-check-input mx-auto" type="radio" name="reason-for-travel" id="reason-for-travel-transit" value="transit">

                                                <div class="wrapper text-center my-auto">
                                                    <img class="d-none d-md-block" src="{{ asset('app-logo/Career.svg')  }}">
                                                    <div class="p-strong text-center mt-1">
                                                        Career                                                                                                                                                                                                </div>
                                                </div>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                        <div class="step-row mt-16 mt-md-24 text-center">

                            <button  id="form_1_proceed" class="btn btn-success">
                                Proceed to Application</button>
                        </div>
                    </section>

                    <!-- STEP 2 -->

                    <section id="eligibility-form-step-2-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-2" action="#" method="get">

                            <div class="append-data"></div>
                        </form>
                    </section>


                    <section id="eligibility-form-step-add-form-section" class="form-step">
                        <form autocomplete="off" id="eligibility-form-step-2-custom" action="#" method="get">
                            <div class="summary mb-16 d-flex" id="eligibility-form-step-2-outcome"><img src="{{ asset('app-logo/tick.png')  }}" alt="esta-eligibility-checker-eligible">
                                <h2 style="padding-top: 15px;" class="text-center">Personal Details<br>
                                </h2>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="firstName" class="form-label m-0">First Name</label>
                                    <input type="text" name="firstName" class="form-control" id="firstName" required>
                                    <div class="invalid-feedback">Please enter your first name.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="middleName" class="form-label m-0">Middle Name</label>
                                    <input type="text" name="middleName" class="form-control" id="middleName">
                                </div>
                                <div class="col-md-4">
                                    <label for="lastName" class="form-label m-0">Last Name</label>
                                    <input type="text"  name="lastName" class="form-control" id="lastName" required>
                                    <div class="invalid-feedback">Please enter your last name.</div>
                                </div>
                            </div>

                            <div class="row mt-2">

                                <div class="col-md-6">
                                    <label for="email" class="form-label m-0">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm_email" class="form-label m-0">Confirm Email</label>
                                    <input type="email" name="confirm_email" class="form-control" id="confirm_email" required>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6 m-0">
                                    <label for="countryCode" class="form-label m-0">Country Code</label>
                                    <select name="countryCode" class="form-control" id="countryCode" required>
                                        <option value="" selected disabled>Select Country Code</option>
                                        @foreach($country as $countryItem)
                                            <option value="{{ $countryItem->telephonePrefix }}" @if($countryItem->isoAlpha3 === 'CAN') selected @endif>
                                                {{ $countryItem->isoAlpha3 }} ({{ $countryItem->telephonePrefix }})
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select a country code.</div>
                                </div>
                                <div class="col-md-6 m-0">
                                    <label for="phoneNumber" class="form-label m-0">Phone No</label>
                                    <input type="text" name="phoneNumber" class="form-control phoneNumber" id="phoneNumber" placeholder="(XXX) XXX-XXXX" required>
                                    <div class="invalid-feedback">Please enter your phone number.</div>
                                </div>
                            </div>



                        </form>
                        <div class="step-row mt-16 mt-md- text-center">
                            <button id="eligibility-form-canadian-pardon" class="btn btn-success text-white text-uppercase ajax-request">Proceed To Application</button>
                        </div>
                    </section>

                    <!-------------------------CUSTOM-------------------->


                </div>
            </div>
        </div>
    </section>


        <section class="py-24">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <h2 class="custom-h2">Visiting the USA with a Criminal Record: Canadian Pardons or U.S. Entry Waiver Authorization</h2>
                    <p class="custom-p">Canadian foreign nationals, along with select international travelers visiting the United States of America (including individuals with prior arrest records or those who may have faced US deportation due to overstay violations), are required to possess a valid U.S. Entry Waiver as well as a Canadian Record Suspension (Pardon). Unlike a visa, which is obtained through a US embassy, the US Entry Waiver application undergoes a separate processing procedure. The Electronic Secured Adjudication Forms Environment (e-SAFE) simplifies the application process for the U.S. Visa Waiver Program, enabling individuals planning multiple air or sea travels to the USA to acquire necessary authorization before their journey.</p>
                </div>
                <div class="col-12 col-lg-2 my-auto">
                    <img class="w-100 ps-lg-5" src="{{ asset('app-logo/Liberty.png') }}" alt="ESTA Application">
                </div>
            </div>
            </div>
        </section>
        <section class="py-24 bg-gray-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="custom-h2">What are the requirements for an i-192 Waiver?</h2>
                        <p class="custom-p">Eligibility for the U.S. Entry Waiver and Canadian Record Suspension (Pardon) extends to citizens of Canada as well as other qualifying countries. To obtain travel authorization, applicants must complete the U.S. Entry Waiver application process. Additionally, possession of a biometric RCMP report is mandatory. The U.S. Entry Waiver permits stays of up to 179 days per year and it's good for up to FIVE years, catering to various purposes such as tourism, transit, healthcare, or participation in accredited credited study programs.</p>
                        <p class="custom-p">We recommend applying for the U.S. Entry Waiver prior to making hotel or flight reservations, as some situations may require a lengthy document collection period. Upon approval of your U.S. Entry Waiver application, you can update it with final itinerary details before your departure for added convenience.</p>
                    </div>
                </div>
            </div>
        </section>

    <section class="py-24">
        <div class="container">

        <div class="row">
            <div class="col-12">
                <p>&nbsp;</p>
                <div class="row flag-list d-flex justify-content-between mx-0">

                        <h2 class="px-0 custom-h2">Application Form I-192 for Advance Permission to Enter as a Nonimmigrant e-SAFE process for citizens of Canada:</h2>

                    <div class="p-2">
                        <strong>Eligible nonimmigrant citizens from:</strong>
                    </div>
                    <div class="col-6 col-md-auto">
                        <ul>
                            <li class="list-inline"><img decoding="async" src="{{ asset('app-logo/Frame5.png') }}" alt="ESTA Countries">  Canada </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-auto">
                        <ul>
                            <li class="list-inline"><img decoding="async" src="{{ asset('app-logo/palau.png') }}" alt="ESTA Countries">  Palau </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-auto">
                        <ul>
                            <li class="list-inline"><img decoding="async" src="{{ asset('app-logo/federated.png') }}" alt="ESTA Countries">  Federated States of Micronesia</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-auto">
                        <ul>
                            <li class="list-inline"><img decoding="async" src="{{ asset('app-logo/marshal.png') }}" alt="ESTA Countries">  Marshall Islands</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </section>








    <section class="py-24">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row flag-list d-flex justify-content-between mx-0">
                        <h2 class="px-0 custom-h2">The 41 Visa Waiver Program Member Countries:</h2>
                        <div class="col-12 py-1">
                        </div>
                        <div class="col-6 px-0 col-md-auto order-1">
                            <ul>
                                <li><img decoding="async" src="{{ asset('country/ad.png') }}" alt="ESTA Countries">  Andorra</li>
                                <li><img decoding="async" src="{{ asset('country/au.png') }}" alt="ESTA Countries">  Australia</li>
                                <li><img decoding="async" src="{{ asset('country/at.png') }}" alt="ESTA Countries">  Austria</li>
                                <li><img decoding="async" src="{{ asset('country/be-min.png') }}" alt="ESTA Countries">  Belgium</li>
                                <li><img decoding="async" src="{{ asset('country/bn-min.png') }}" alt="ESTA Countries">  Brunei</li>
                                <li><img decoding="async" src="{{ asset('country/cl-min.png') }}" alt="ESTA Countries">  Chile</li>
                                <li><img decoding="async" src="{{ asset('country/cr.png') }}" alt="ESTA Countries">  Croatia</li>
                                <li><img decoding="async" src="{{ asset('country/cz-min.png') }}" alt="ESTA Countries">  Czech Republic</li>
                                <li><img decoding="async" src="{{ asset('country/dk-min.png') }}" alt="ESTA Countries">  Denmark</li>
                            </ul>
                        </div>
                        <div class="col-6 px-0 col-md-auto order-3 order-md-2">
                            <ul>
                                <li><img decoding="async" src="{{ asset('country/ee-min.png') }}" alt="ESTA Countries">  Estonia</li>
                                <li><img decoding="async" src="{{ asset('country/fi-min.png') }}" alt="ESTA Countries">  Finland</li>
                                <li><img decoding="async" src="{{ asset('country/fr-min.png') }}" alt="ESTA Countries">  France</li>
                                <li><img decoding="async" src="{{ asset('country/de-min.png') }}" alt="ESTA Countries">  Germany</li>
                                <li><img decoding="async" src="{{ asset('country/gr-min.png') }}" alt="ESTA Countries">  Greece</li>
                                <li><img decoding="async" src="{{ asset('country/hu-min.png') }}" alt="ESTA Countries">  Hungary</li>
                                <li><img decoding="async" src="{{ asset('country/is-min.png') }}" alt="ESTA Countries">  Iceland</li>
                                <li><img decoding="async" src="{{ asset('country/ie-min.png') }}" alt="ESTA Countries">  Ireland</li>
                                <li><img decoding="async" src="{{ asset('country/il-min.png') }}" alt="ESTA Countries">  Israel</li>
                            </ul>
                        </div>
                        <div class="col-6 px-0 col-md-auto order-5 order-md-3">
                            <ul>
                                <li><img decoding="async" src="{{ asset('country/it-min.png') }}" alt="ESTA Countries">  Italy</li>
                                <li><img decoding="async" src="{{ asset('country/jp-min.png') }}" alt="ESTA Countries">  Japan</li>
                                <li><img decoding="async" src="{{ asset('country/kr-min.png') }}" alt="ESTA Countries">  South Korea</li>
                                <li><img decoding="async" src="{{ asset('country/lv-min.png') }}" alt="ESTA Countries">  Latvia</li>
                                <li><img decoding="async" src="{{ asset('country/li-min.png') }}" alt="ESTA Countries">  Liechtenstein</li>
                                <li><img decoding="async" src="{{ asset('country/lt-min.png') }}" alt="ESTA Countries">  Lithuania</li>
                                <li><img decoding="async" src="{{ asset('country/lu-min.png') }}" alt="ESTA Countries">  Luxembourg</li>
                                <li><img decoding="async" src="{{ asset('country/mt-min.png') }}" alt="ESTA Countries">  Malta</li>
                                <li><img decoding="async" src="{{ asset('country/mc-min.png') }}" alt="ESTA Countries">  Monaco</li>
                            </ul>
                        </div>
                        <div class="col-6 px-0 col-md-auto order-2 order-md-4">
                            <ul>
                                <li><img decoding="async" src="{{ asset('country/nl-min.png') }}" alt="ESTA Countries">  Netherlands</li>
                                <li><img decoding="async" src="{{ asset('country/nz-min.png') }}" alt="ESTA Countries">  New Zealand</li>
                                <li><img decoding="async" src="{{ asset('country/no-min.png') }}" alt="ESTA Countries">  Norway</li>
                                <li><img decoding="async" src="{{ asset('country/pl-min.png') }}" alt="ESTA Countries">  Poland</li>
                                <li><img decoding="async" src="{{ asset('country/pt-min.png') }}" alt="ESTA Countries">  Portugal</li>
                                <li><img decoding="async" src="{{ asset('country/sm-min.png') }}" alt="ESTA Countries">  San Marino</li>
                                <li><img decoding="async" src="{{ asset('country/sg-min.png') }}" alt="ESTA Countries">  Singapore</li>
                                <li><img decoding="async" src="{{ asset('country/sk-min.png') }}" alt="ESTA Countries">  Slovakia</li>
                                <li><img decoding="async" src="{{ asset('country/si-min.png') }}" alt="ESTA Countries">  Slovenia</li>
                            </ul>
                        </div>
                        <div class="col-6 px-0 col-md-auto order-4 order-md-5">
                            <ul>
                                <li><img decoding="async" src="{{ asset('country/es-min.png') }}" alt="ESTA Countries">  Spain</li>
                                <li><img decoding="async" src="{{ asset('country/se-min.png') }}" alt="ESTA Countries">  Sweden</li>
                                <li><img decoding="async" src="{{ asset('country/ch-min.png') }}" alt="ESTA Countries">  Switzerland</li>
                                <li><img decoding="async" src="{{ asset('country/tw-min.png') }}" alt="ESTA Countries">  Taiwan</li>
                                <li><img decoding="async" src="{{ asset('country/gb-min.png') }}" alt="ESTA Countries">  United Kingdom</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="col-12 py-1">
    </div>  <div class="col-12 py-1">
    </div>

    <section class="py-24 bg-gray-50">
    <div class="container">
        <div class="row mx-0 py-12 border-1-4 mb-4">
            <div class="col-12">
                <h2 class="custom-h2">Preparation Checklist for Visiting the United States</h2>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="check-green">
                    <li class="custom-li">Ensure your passport is valid and not expired.</li>
                    <li class="custom-li">Bring adaptors for 110V power outlets if required
                    </li>
                    <li class="custom-li">Prepare itinerary and confirm accommodation details.
                    </li>
                    <li class="custom-li">Secure travel insurance.
                    </li>
                    <li class="custom-li">Explore transportation options for getting around.
                    </li>
                    <li class="custom-li">Carry sufficient local currency (USD) and payment methods.
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="check-green">
                    <li class="custom-li">Download travel maps and relevant apps.
                    </li>
                    <li class="custom-li">Arrange for internet access during your stay.
                    </li>
                    <li class="custom-li">Stay updated by following the latest news.
                    </li>
                    <li class="custom-li">Have emergency contact information readily available.
                    </li>
                    <li class="custom-li">Consider a language translation app if needed.
                    </li>
                    <li class="custom-li">Obtain your approved U.S. Entry waiver from DHS,  or necessary travel authorization.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </section>





    <footer id="site-footer" class="bg-atlantic-blue py-20 py-md-64">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 text-center text-lg-start mb-20 my-lg-auto">

                    <img class="navbar-brand" src="{{ asset('app-logo/LogoChanges2.webp') }}" alt="US Immigration support">

                </div>

                <div class="col-12 col-lg-7 my-auto">
                    <div class="wrapper popup-control d-grid text-center text-lg-end d-md-flex
                justify-content-md-center
                justify-content-lg-end">
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#legal" data-bs-toggle="modal" data-bs-target="#legal">Legal Disclaimer</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#terms" data-bs-toggle="modal" data-bs-target="#terms">Terms &
                            Conditions</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#privacy" data-bs-toggle="modal" data-bs-target="#privacy">Privacy Policy</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0" type="button" href="#cookies" data-bs-toggle="modal" data-bs-target="#cookies">Cookies</a>
                        <a type="text-white button" href="#contact" data-bs-toggle="modal" data-bs-target="#contact">Contact</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>






    <section class="bg-gray-50 py-3" id="footer-disclaimer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0" style="text-align: center;">Services of Canada operates as a private entity, dedicated to assisting immigrants and travelers with the complex U.S. immigration process through our self-help guides and travel authorization consultancy. We are not a law firm, and our website does not provide legal advice. We are separate from the U.S. government. Applicants have the choice to submit their applications directly at uscis.gov or travel.state.gov without our aid.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-xxl">
        <div class="row pt-3">
            <div class="col-sm ">
                <p class="text-center">&copy; 2024 SERVICES OF CANADA - All Rights Reserved
                </p>
            </div>
        </div>
    </div>

    @include('home_modal')
@endsection



<script src="{{ asset('dist/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('dist/js/moment.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function(){


        $('#has-secondary-citizenship').change(function(){
            if($(this).is(":checked")) {
                $('#secondary-citizenship-container').removeClass('d-none');
            } else {
                $('#secondary-citizenship-container').addClass('d-none');
            }
        });

        $('.phoneNumber').on('input', function(event) {
            var phoneNumber = $(this).val().replace(/[^\d]/g, ''); // Remove non-numeric characters
            if (phoneNumber.length > 10) {
                phoneNumber = phoneNumber.slice(0, 10); // Limit to 10 digits
            }
            if (phoneNumber.length >= 3) {
                phoneNumber = `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3, 6)}-${phoneNumber.slice(6, 10)}`; // Apply formatting
            }
            $(this).val(phoneNumber); // Update the input value
        });



        $('#eligibility-form-step-2-section').hide();
        $('#eligibility-form-step-add-form-section').hide();

        var citizenshipCountry = $('#citizenship-country');
        var errorCitizenship = $('#errorCitizenship');

        errorCitizenship.hide();

        citizenshipCountry.change(function() {
            if (citizenshipCountry.val() !== "") {
                errorCitizenship.hide();
            }
        });

        var citizenshipCountrysecond = $('#citizenship-country-second');
        var errorCitizenshipsecond = $('#errorCitizenshipsecond');

        errorCitizenshipsecond.hide();

        citizenshipCountrysecond.change(function() {
            if (citizenshipCountrysecond.val() !== "") {
                errorCitizenshipsecond.hide();
            }
        });

        // Event listener for button click
        $('#form_1_proceed').click(function() {
            if (citizenshipCountry.val() === "" || citizenshipCountry.val() === null) {
                errorCitizenship.show();
                return;
            }
            if ($('#has-secondary-citizenship').is(':checked')) {
                if (citizenshipCountrysecond.val() === "" || citizenshipCountrysecond.val() === null) {
                    errorCitizenshipsecond.show();
                    return;
                }
            }


            $('#eligibility-form-step-add-form-section').show();
            $('#eligibility-form-step-1-section').hide();
            $('#eligibility-form-step-2-section').hide();


            var selectedCountry = $('#citizenship-country').val();
            $.ajax({
                url: '/get_country',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: { selectedCountry: selectedCountry },
                success: function (response) {
                    var checkActive = response.country[0].is_active;
                    var countryName = response.country[0].countryName;
                    var isoName = "(" + response.country[0].isoAlpha3 + ")";

                    imagePath = "{{ asset('app-logo/tick.png') }}";
                    var eligibleText = `<h3 class="text-center"><b style="color: limegreen;font-size: 37px;">Congratulations!</b><br><br><strong>You are eligible to apply for  a U.S. Entry Waiver & Canadian Record Suspension (Pardon)</strong></h3>`;

                    var sectionHtml =`<div class="summary mb-16 d-flex" id="eligibility-form-step-2-outcome">
                                        <!--<img src="${imagePath}" alt="esta-eligibility-checker-eligible">-->
                                        ${eligibleText}
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="citizenship-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Citizenship:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">${countryName} ${isoName}</span>
                                        </div>
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="length-of-stay-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Max length of stay:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">180 Days</span>
                                        </div>
                                    </div>
                                    <div class="step-row d-flex bg-gray-50 border-0-4 p-8" id="type-meta">
                                        <div class="col-6">
                                            <span class="meta-key">Recommended visa type:</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="meta-value">U.S. Entry Waiver (Valid for 5 years)</span>
                                        </div>
                                    </div>
                                    <div class="step-row bg-gray-50 border-0-4 p-8">
                                        <div class="col-12 px-0 d-flex">
                                            <p class="billing-label my-auto">
                                                Do you live in the same country as your citizenship?
                                            </p>
                                            <div class="d-flex my-auto ms-auto">
                                                <div class="form-check">
                                                    <label class="form-item-wrapper" for="is-billing-country-not-residence-yes">
                                                        <input type="radio" id="is-billing-country-not-residence-yes" name="is-billing-country-not-residence" value="yes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check ms-4">
                                                    <label class="form-item-wrapper" for="is-billing-country-not-residence-no">
                                                        <input type="radio" id="is-billing-country-not-residence-no" name="is-billing-country-not-residence" value="no">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="errorConfirmCountryYouLiveInRadio" class="text-danger"></div>
                                        <div class="col-12">
                                            <div id="billing-country-wrapper" class="wrapper d-none mt-24">
                                                <label for="country">
                                                    Select the country you live in:
                                                </label>
                                                <select name="billing-country">
                                                    <option value="" disabled="" selected="">Select country</option>

                                                </select>
                                            <div id="errorConfirmCountryYouLiveInCountry" class="text-danger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-row mt-16 mt-md- text-center">
                                    <button id="eligibility-form-step-2-submit" class="btn btn-success text-white text-uppercase">APPLY NOW</button>
                                </div>`;

                    $('.append-data').append(sectionHtml);

                },
                error: function(xhr, status, error) {
                    console.error('Error occurred while sending email:', error);
                }

            });
        });


        var imagePath = "";
        $('.form-control').focusout(function() {
            $(this).removeClass('is-invalid');
        });
        $('#eligibility-form-canadian-pardon').click(function(event){

            var form = $('#eligibility-form-step-2-custom')[0];
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();

                $(form).addClass('was-validated');

                $('.form-control').each(function() {
                    if (!this.validity.valid) {
                        $(this).addClass('is-invalid');
                    }
                });

                return;
            }

            var email = $('#email').val();
            var confirmEmail = $('#confirm_email').val();
            if (email !== confirmEmail) {
                event.preventDefault();
                event.stopPropagation();

                $('#confirm_email').addClass('is-invalid');
                $('.invalid-feedback').text('Confirm Email must match with Email.');

                return;
            }

            var phoneNumbercheck = $('#phoneNumber').val().replace(/[^\d]/g, ''); // Remove non-numeric characters
            if (phoneNumbercheck.length !== 10) {
                event.preventDefault();
                event.stopPropagation();
                $('#phoneNumber').addClass('is-invalid');
                $('.invalid-feedback').text('Phone number must be 10 digits.');

                return;
            }

            $('#eligibility-form-step-1-section').hide();
            $('#eligibility-form-step-add-form-section').hide();
            $('#eligibility-form-step-2-section').show();

            var email_send = $('#email').val();
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var countryCode = $('#countryCode').val();
            var phoneNumber = $('#phoneNumber').val();

            if (email_send) {

                $.ajax({
                    url: '/send_email',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: { email: email_send },
                    success: function (response) {
                        console.log('Email sent successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error occurred while sending email:', error);
                    }
                });

                $.ajax({
                    url: '/send_data',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        email: email_send,
                        firstName: firstName,
                        lastName: lastName,
                        countryCode: countryCode,
                        phoneNumber: phoneNumber
                    },
                    success: function (response) {
                        console.log('Send Data successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error occurred while sending email:', error);
                    }
                });


                $('#eligibility-form-step-2-submit').on('click', function(e) {
                    e.preventDefault(); // Prevent form submission
                    if ($('input[name="is-billing-country-not-residence"]:checked').length === 0) {
                        // If not checked, show error message
                        $('#errorConfirmCountryYouLiveInRadio').text('Please confirm the country where you live.');
                    } else if ($('input[name="is-billing-country-not-residence"]:checked').val() === 'no' && ($('select[name="billing-country"]').val() === '' || $('select[name="billing-country"]').val() === null)) {
                        // If "No" is selected and no country is chosen from dropdown, show error message
                        $('#errorConfirmCountryYouLiveInRadio').text('');
                        $('#errorConfirmCountryYouLiveInCountry').text('Please select the country you live in.');
                    } else {
                        // If everything is valid, redirect to the new Laravel route
                        window.location.href = '/steps1?email=' + encodeURIComponent(email_send);
                    }
                });


                $('input[name="is-billing-country-not-residence"]').change(function(){
                    if($(this).val() === 'no') {
                        $('#billing-country-wrapper').removeClass('d-none');
                    } else {
                        $('#billing-country-wrapper').addClass('d-none');
                    }
                });
                var countries = <?php echo json_encode($country); ?>; // Assuming $country is available in JavaScript
                var selectDropdown = document.querySelector('select[name="billing-country"]');

                countries.forEach(function(country) {
                    var option = document.createElement('option');
                    option.value = country.countryCode;
                    option.textContent = country.countryName;
                    selectDropdown.appendChild(option);
                });


                }
        });



    });
</script>




