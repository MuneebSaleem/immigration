@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('dist/css/styles.css')  }}">
@section('content')
    <link rel="stylesheet" href="{{ asset('dist/css/modal.css')  }}">

    <style>

        .bg-atlantic-blue {
            --bs-bg-opacity: 1;
            background-color: #0f184E;
        }

        .py-20 {
            padding-top: 2.25rem !important;
            padding-bottom: 2.25rem !important;
        }



    </style>
<div class="loading" style="display: none;">Loading&#8230;</div>

    <section id="top-bar-main" class="bg-atlantic-blue py-20">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">
                    <img class="navbar-brand" src="{{asset('app-logo/LogoWebp.webp')}}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">


                    <div class="my-auto me-3 d-none d-md-block">
                        <p class="check-gold text-white mb-0 check-gold">24/7 Customer Service</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <header class="image-color-background">
    <div class="secure-text">
        <i class="fa fa-shield"></i> SECURE APPLICATION
    </div>
    </header>
    <section class="container main-section-content px-5 py-4">
    	<div class="row">
    		<div class="col-md-8 px-4">
    			<form class="row font-14" id="paymentForm">
	    			<div class="container-form">


                        <div class="blue-area-bg px-4 py-2 mt-4">
                            <h1 class="m-0">Secure Billing Information
                            <img class="float-right" src="{{ asset('app-logo/CanadaPNG.png') }}" />
                            </h1>
                        </div>

                        <div class="col-md-6 mt-4 ">
                            <label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
                            <input required type="text" class="form-control" id="ssl_first_name" name="ssl_first_name" value="{{ isset($userData['firstName']) ? $userData['firstName']  : '' }}">
                            <div class="invalid-feedback">Please enter your first name.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="ssl_last_name" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
                            <input required type="text" class="form-control" id="ssl_last_name" name="ssl_last_name" value="{{ isset($userData['lastName']) ? $userData['lastName']  : '' }}">
                            <div class="invalid-feedback">Please enter your last name.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="streetAddress" class="font-weight-500 form-label"><span class="red">*</span> Street Address</label>
                            <input required type="text" class="form-control" id="streetAddress" name="ssl_avs_address">
                            <div class="invalid-feedback">Please enter your Street Address.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="ssl_city" class="font-weight-500 form-label"><span class="red">*</span> City</label>
                            <input required type="text" class="form-control" id="city" name="ssl_city">
                            <div class="invalid-feedback">Please enter your city.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="email" class="font-weight-500 form-label"> Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ isset($userData['email']) ? $userData['email']  : '' }}">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="country" class="font-weight-500 form-label"><span class="red">*</span> Country</label>
                            <select required class="form-select form-control" id="country"  name="country">
                                <option value="" selected disabled>Select Country</option>
                                @foreach ($countries as $country)
                                    @if ($country->countryName == 'Canada')
                                        <option value="{{ $country->countryName }}" selected style="font-weight: bold;">{{ $country->countryName }}</option>
                                    @else
                                        <option value="{{ $country->countryName }}">{{ $country->countryName }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select country.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="ssl_card_number" class="font-weight-500 form-label"><span class="red">*</span> Card Number</label>
                            <input required type="number" class="form-control" id="ssl_card_number" name="ssl_card_number" maxlength="16">
                            <div class="invalid-feedback" id="card_validation">Card number must be exactly 16 digits.</div>
                        </div>
                        <div class="col-md-5 mt-4 ">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="ssl_cvv2cvc2" class="font-weight-500 form-label"><span class="red">*</span> CVV</label>
                                    <input required type="number" class="w-90 form-control" id="ssl_cvv2cvc2" name="ssl_cvv2cvc2">
                                    <div class="invalid-feedback">Please enter your cvv code.</div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <img src="{{ asset('app-logo/cvv_small.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mt-4 ">
                            <label for="month" class="font-weight-500 form-label"><span class="red">*</span> Card Expiration</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select required name="month" class="form-select form-control" id="month" data-placeholder="Choose Month">
                                        <option value="" selected disabled>Select Month</option>
                                        <option value="01">01- January</option>
                                        <option value="02">02- Febuary</option>
                                        <option value="03">03- March</option>
                                        <option value="04">04- April</option>
                                        <option value="05">05- May</option>
                                        <option value="06">06- June</option>
                                        <option value="07">07- July</option>
                                        <option value="08">08- August</option>
                                        <option value="09">09- September</option>
                                        <option value="10">10- October</option>
                                        <option value="11">11- November</option>
                                        <option value="12">12- December</option>
                                    </select>
                                    <div class="invalid-feedback">Please select month.</div> <!-- Move outside the <select> element -->
                                </div>
                                <div class="col-md-6">
                                    <select required name="year" class="form-select form-control" id="cardExpiration" data-placeholder="Choose Year">
                                        <option value="" selected disabled>Select Year</option>
                                        <option value= "24">2024</option>
                                        <option value= "25">2025</option>
                                        <option value= "26">2026</option>
                                        <option value= "27">2027</option>
                                        <option value= "28">2028</option>
                                        <option value= "29">2029</option>
                                        <option value= "30">2030</option>
                                        <option value= "31">2031</option>
                                        <option value= "32">2032</option>
                                        <option value= "33">2033</option>
                                        <option value= "34">2034</option>
                                        <option value= "35">2035</option>
                                        <option value= "36">2036</option>
                                    </select>
                                    <div class="invalid-feedback">Please select year.</div>
                                </div>
                            </div>
                        </div>


	    			</div>
                    <div class="mt-4 form-check bg-grey p-5">
                      <input class="form-check-input" type="checkbox" value="" id="agreeCheck">
                      <label class="form-check-label" for="agreeCheck">
                        I have read and consent to the <a style="color: #3798DC !important; text-decoration: none; margin-right: 0rem !important;" class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#privacy" data-bs-toggle="modal" data-bs-target="#privacy" id="privacylModal"> Privacy Policy</a> and <a style="color: #3798DC !important; text-decoration: none; margin-right: 0rem !important;" class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#terms" data-bs-toggle="modal" data-bs-target="#terms" id="termModal"> Terms & Conditions</a> of this website. I am of legal age, or have parental/guardian consent. Price: $9.99 CAD</label>
                    </div>
                    <div class="col-md-12 mt-4 ">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button id="orderButton" class="btn btn-success me-md-2" type="button">Order Now  </button>
                        </div>
                    </div>
    			</form>
    		</div>
    		<div class="col-md-4 p-5 gap-2 border-left">
                <div class="sidebar-form">
        			<div class="row">
                        <h2 class="light-grey px-5 sidebar-head">Crossing the Line: A Step-by-Step Guide to Form I-192 U.S. Entry Waivers for Canadians.</h2>
                        <img src="{{ asset('app-logo/b-2-tourist-visa.jpg') }}" class="mb-4 px-5">
                        <p class="px-5 text-center mt-4"><img src="{{ asset('app-logo/icon_pdf.png') }}" /> PRICE $9.99 CAD</p>
                        <img class="my-3 px-5" src="{{ asset('app-logo/star-separator.png') }}">
                        <p class="text-justify text-paragraph">Criminal records can haunt individuals, impacting job prospects, travel plans, and more. With one in seven adult Canadians having a record, the need for a U.S. Entry Waiver is common. The application process, sometimes taking months, demands early action to avoid travel disruptions. Both waivers and record suspensions are crucial for crossing the border, securing employment, housing, education, and volunteering opportunities. Our guide, "Crossing the Line: A Step-by-Step Guide to Form I-192 U.S. Entry Waivers for Canadians," provides comprehensive assistance, including official document requirements, stay duration clarity, recommended visa types, eligibility factors, and all necessary documents and forms. Purchase now for instant access!</p>
                        <ul class="list-style mx-3">
                            <li class="gap-reduce">Impact of criminal records on employment and travel</li>
                            <li class="gap-reduce">Common need for a U.S. Entry Waiver among Canadians</li>
                            <li class="gap-reduce">Lengthy application process necessitates early action</li>
                            <li class="gap-reduce">Waiver essential for various aspects of life, including travel and employment</li>
                            <li class="gap-reduce">Guide "Crossing the Line" offers comprehensive assistance</li>
                            <li class="gap-reduce">Includes official document requirements and visa types</li>
                            <li class="gap-reduce">Instant access to all necessary documents and forms.</li>
                        </ul>
                        <p class="text-center">
                            <img width="200" src="{{ asset('app-logo/credit-cards-accepted.png') }}" class="img-payment">
                        </p>

                    </div>
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
                        <a class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#legal" data-bs-toggle="modal" data-bs-target="#legal" id="legalModal">Legal Disclaimer</a>

                        <a class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#terms" data-bs-toggle="modal" data-bs-target="#terms" id="termModal">Terms &amp;
                            Conditions</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#privacy" data-bs-toggle="modal" data-bs-target="#privacy" id="privacylModal">Privacy Policy</a>
                        <a class="text-white me-md-3 mb-3 mb-md-0 link-decortion-none" type="button" href="#cookies" data-bs-toggle="modal" data-bs-target="#cookies" id="cookiesModal">Cookies</a>
                        <a class="text-white button link-decortion-none" href="#contact" data-bs-toggle="modal" data-bs-target="#contact" id="contactModal">Contact</a>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <section class="container copy-right px-5 py-4">
        <div class="row">
            <div class="col-md-6">
                <p>© 2024 SERVICES OF CANADA - All Rights Reserved</p>
            </div>
            <div class="col-md-6">
                <img class="float-right" src="{{ asset('app-logo/footer-icons.png') }}">
            </div>
        </div>
    </section>
</div>


@endsection
@include('home_modal')



<div class="modal failure-modal" tabindex="-1" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Status</h5>
        <button type="button" class="btn-close close-modal" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-danger">Your Card Details not valid</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-lg close-btn close-modal-button" data-dismiss="modal">Close</button>


      </div>
    </div>
  </div>
</div>






<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




<script type="text/javascript">

    $(document).ready(function() {

        $("#legalModal").click(function () {
            $("#legal").removeClass( "fade" )
        });

        $("#termModal").click(function () {
            $("#terms").removeClass( "fade" )
        });

        $("#privacylModal").click(function () {
            $("#privacy").removeClass( "fade" )
        });

        $("#cookiesModal").click(function () {
            $("#cookies").removeClass( "fade" )
        });

        $("#contactModal").click(function () {
            $("#contact").removeClass( "fade" )
        });

        $('#ssl_card_number').on('input', function() {
            var cardNumber = $(this).val().replace(/[^\d]/g, ''); // Remove non-numeric characters
            if (cardNumber.length > 16) {
                cardNumber = cardNumber.slice(0, 16); // Limit to 10 digits
            }
            $(this).val(cardNumber); // Update the input value
        });



        $('.btn-close').on('click', function() {
          var modalFail = $('.failure-modal');
          modalFail.hide();
        });


        $('.close-modal-button').on('click', function() {
          var modalFail = $('.failure-modal');
          modalFail.hide();
        });


        $('#orderButton').click(function(event) {
            event.preventDefault();
            var form = $('#paymentForm');
            form.find('.is-invalid').removeClass('is-invalid');
            form.removeClass('was-validated');

            form.find('select').each(function() {
                if ($(this).val() === "select") {
                    $(this).addClass("is-invalid");
                }
            });

            if (!form[0].checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                form.addClass('was-validated');
                return;
            }


            var cardNumbercheck = $('#ssl_card_number').val().replace(/[^\d]/g, ''); // Remove non-numeric characters
            if (cardNumbercheck.length !== 16) {
                event.preventDefault();
                event.stopPropagation();
                $('#ssl_card_number').addClass('is-invalid');
                $('.invalid-feedback').text('Card number must be 16 digits.');

                return;
            }


            $(".loading").show();
            var formData = form.serialize();
            var convertFormData = form.serialize();

            var formDataObject = {};
            convertFormData.split('&').forEach(function(keyValue) {
                var pair = keyValue.split('=');
                var decodedValue = decodeURIComponent(pair[1].replace(/\+/g, ' ')); // Replace + with space
                formDataObject[pair[0]] = decodedValue.trim(); // Trim leading and trailing spaces
            });

            $.ajax({
                url: "{{ route('step.send_payment') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                success: function(response) {
                    if(response.success === true){
                        $.ajax({
                            url: "{{ route('order-email.send') }}",
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                response: response,
                                requestData: JSON.stringify(formDataObject)
                            },
                            success: function(response) {
                                window.location.href = "{{ route('thankyou') }}";
                            },
                            error: function(xhr, status, error) {
                                console.error('Request failed!');
                            },
                            complete: function() {
                                $(".loading").hide();
                            }
                        });
                    } else {
                        $(".failure-modal").css("display", "block");
                        $(".loading").hide();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed!');
                    $(".loading").hide();
                }
            });
        });

        $('#number').select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
        } );
    });

</script>

