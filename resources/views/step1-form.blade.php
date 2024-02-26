@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('dist/css/modal.css')  }}">
<div class="loading" style="display: none;">Loading&#8230;</div>
<div class="container">
	<section id="top-bar-main" class="py-20">
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="" src="{{ asset('app-logo/logo-main-dark.png') }}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">


                </div>
            </div>
        <!-- </div> -->
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
                            <img class="float-right" src="{{ asset('app-logo/us-flag.png') }}" />
                            </h1>
                        </div>

                        <div class="col-md-6 mt-4 ">
                            <label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
                            <input required type="text" class="form-control" id="ssl_first_name" name="ssl_first_name">
                            <div class="invalid-feedback">Please enter your first name.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="ssl_last_name" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
                            <input required type="text" class="form-control" id="ssl_last_name" name="ssl_last_name">
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
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="country" class="font-weight-500 form-label"><span class="red">*</span> Country</label>
                            <select required class="form-select form-control" id="country"  name="country">
                                <option value="" selected disabled>Select Country</option>
                                @foreach ($countries as $country)
                                <option>{{ $country->countryName }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select country.</div>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="ssl_card_number" class="font-weight-500 form-label"><span class="red">*</span> Card Number</label>
                            <input required type="number" class="form-control" id="ssl_card_number" name="ssl_card_number">
                            <div class="invalid-feedback">Please enter your card number.</div>
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
                        I have read and consent to the Privacy Policy and Terms & Conditions of this website. I am of legal age, or have parental/guardian consent. Price: US$ 9.95
                      </label>
                    </div>
                    <div class="col-md-12 mt-4 ">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button id="orderButton" class="btn btn-success me-md-2" type="button">Order Now <i class="fa fa-angle-right"></i> </button>
                        </div>
                    </div>
    			</form>
    		</div>
    		<div class="col-md-4 p-5 gap-2 border-left">
                <div class="sidebar-form">
        			<div class="row">
                        <h2 class="light-grey px-5 sidebar-head">B-2 TOURIST VISA APPLICATION GUIDE</h2>
                        <img src="{{ asset('app-logo/b-2-tourist-visa.jpg') }}" class="mb-4 px-5">
                        <p class="px-5 text-center mt-4"><img src="{{ asset('app-logo/icon_pdf.png') }}" /> PRICE US$ 9.95 </p>
                        <img class="my-3 px-5" src="{{ asset('app-logo/star-separator.png') }}">
                        <p class="text-justify text-paragraph">Many visitors to the U.S. need to apply for a B-2 tourist visa depending on which passport is being used. The B-2 tourist visa application process can take several months, and all tourists  are advised to start the visa process early to avoid any trip delays. Download the Visa Application Guide for more information about how to apply and what documents are needed.</p>
                        <ul class="list-style mx-3">
                            <li class="gap-reduce">Overview of the B-2 Tourist Visa Application</li>
                            <li class="gap-reduce">What is the B-2 Tourist Visa?</li>
                            <li class="gap-reduce">List of Who Can Apply and Restrictions</li>
                            <li class="gap-reduce">All B-2 Tourist Visa Requirements</li>
                            <li class="gap-reduce">All Documents & Forms Included</li>
                            <li class="gap-reduce">Step by Step Guide on How to Apply</li>
                            <li class="gap-reduce">All You Need to Know About the B-2 Tourist Visa Application</li>
                        </ul>
                        <p class="text-center">
                            <img width="200" src="{{ asset('app-logo/credit-cards-accepted.png') }}" class="img-payment">
                        </p>

                    </div>
                </div>
    		</div>
    	</div>
    </section>
    <section class="container px-5 py-4 background-navy">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('app-logo/logo-no-background.png') }}">
            </div>
            <div class="col-md-6">
                <ul class="list-inline footer-nav">
                  <li class="list-inline-item">Item 1</li>
                  <li class="list-inline-item">Item 2</li>
                  <li class="list-inline-item">Item 3</li>
                  <li class="list-inline-item">Item 4</li>
                  <li class="list-inline-item">Item 5</li>
                </ul>
            </div>
            <div class="col-md-12">
                <p class="footer-text">Online Immigration is owned and operated by a private company. Our mission is to help immigrants and travelers through the complex United States immigration system with our do-it-yourself immigration guides and travel authorization consultancy. We are not a law firm, and our website does not provide legal advice. We are not affiliated with the United States government. All applicants have the option to file their submission directly at uscis.gov or travel.state.gov without our assistance. Online Immigration is a division of ETAS Travel LLC, which is affiliated with a U.S. law firm.</p>
            </div>
        </div>
    </section>
    <section class="container copy-right px-5 py-4">
        <div class="row">
            <div class="col-md-6">
                <p>© 2024 onlineimmigration.com. All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <img class="float-right" src="{{ asset('app-logo/footer-icons.png') }}">
            </div>
        </div>
    </section>
</div>



@endsection



<div class="modal success-modal" tabindex="-1" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Status</h5>
        <button type="button" class="btn-close close-modal" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Congratulations! We are delighted to inform you that your request has been successfully approved! Details regarding the approval have been sent to the email.</p>
      </div>
      <div class="modal-footer">
        <button id="downloadBtn" class="btn btn-success btn-lg">Download your eBook</button>
        <button type="button" class="btn btn-secondary btn-lg close-btn close-modal-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



<script type="text/javascript">

    $(document).ready(function() {

        document.getElementById("downloadBtn").addEventListener("click", function() {
            window.open("{{ env('APP_URL') }}/book/e-book.pdf", "_blank");
        });

        $('.btn-close').on('click', function() {
          var modalFail = $('.failure-modal');
          modalFail.hide();
        });

        $('.btn-close').on('click', function() {
          var modalSuccess = $('.success-modal');
          modalSuccess.hide();
        });

        $('.close-modal-button').on('click', function() {
          var modalFail = $('.failure-modal');
          modalFail.hide();
        });

        $('.close-modal-button').on('click', function() {
          var modalSuccess = $('.success-modal');
          modalSuccess.hide();
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
                    $(".success-modal").css("display", "block");
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
                                console.log(response);
                                    $(".loading").hide();
                                    $(".success-modal").css("display", "block");
                            },
                            error: function(xhr, status, error) {
                                console.error('Request failed!');
                                $(".loading").hide();
                            }
                        });
                    }
                    if(response.success === false){
                        $(".failure-modal").css("display", "block");
                    }
                    $(".loading").hide();
                },
                error: function(xhr, status, error) {
                    console.error('Request failed!');
                    $(".loading").hide();
                }
            });
        });
    });




	$(document).ready(function() {
		$('#number').select2( {
		    theme: "bootstrap-5",
		    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
		    placeholder: $( this ).data( 'placeholder' ),
		} );
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

