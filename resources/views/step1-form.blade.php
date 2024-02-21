@extends('layouts.app')
@section('content')

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
    <section class="container px-160 py-4">
    	<div class="row">
    		<div class="col-md-8 px-4">
    			<form class="row font-14 ">
	    			<div class="container-form">
	    				<div class="blue-area-bg px-48 py-2">
	    					<h1 class="m-0">Customer Information
	    					<img class="float-right" src="{{ asset('app-logo/us-flag.png') }}" />
	    					</h1>
	    				</div>


						<div class="col-md-6 mt-4 ">
							<label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
						    <input required type="email" class="form-control" id="firstName">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="lastName" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
						    <input type="text" class="form-control" id="lastName">
						</div>

						<div class="col-md-6 mt-4 ">
							<label for="email" class="font-weight-500 form-label"><span class="red">*</span> Email Address</label>
						    <input required type="email" class="form-control" id="email">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="confirEmail" class="font-weight-500 form-label"><span class="red">*</span> Email Address</label>
						    <input type="text" class="form-control" id="confirEmail">
						</div>

						<div class="col-md-6 mt-4 ">
							<label for="alternativeEmail" class="font-weight-500 form-label"><span class="red">*</span> Alternative Email Address</label>
						    <input required type="email" class="form-control" id="alternativeEmail">
						</div>
						<div class="col-md-6 mt-4 ">
						    <label for="number" class="font-weight-500 form-label"><span class="red">*</span> Phone Number</label>
						    <select class="form-select form-control" id="number" data-placeholder="Choose one thing">
							    <option></option>
							    <option>Reactive</option>
							    <option>Solution</option>
							    <option>Conglomeration</option>
							    <option>Algoritm</option>
							    <option>Holistic</option>
							</select>
						</div>

                        <div class="blue-area-bg px-48 py-2 mt-4">
                            <h1 class="m-0">Secure Billing Information
                            <img class="float-right" src="{{ asset('app-logo/us-flag.png') }}" />
                            </h1>
                        </div>

                        <div class="col-md-6 mt-4 ">
                            <label for="firstName" class="font-weight-500 form-label"><span class="red">*</span> First Name</label>
                            <input required type="email" class="form-control" id="firstName">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="lastName" class="font-weight-500 form-label"><span class="red">*</span> Last Name</label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="streetAddress" class="font-weight-500 form-label"><span class="red">*</span> Street Address</label>
                            <input required type="email" class="form-control" id="streetAddress">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="city" class="font-weight-500 form-label"><span class="red">*</span> City</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="zipCode" class="font-weight-500 form-label"><span class="red">*</span> Zip Code</label>
                            <input type="text" class="form-control" id="zipCode">
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="country" class="font-weight-500 form-label"><span class="red">*</span> Country</label>
                            <select class="form-select form-control" id="country" data-placeholder="Choose one thing">
                                <option>Select Country</option>
                                @foreach ($countries as $country)
                                <option>{{ $country->countryName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-4 ">
                            <label for="cardNumber" class="font-weight-500 form-label"><span class="red">*</span> Card Number</label>
                            <input type="text" class="form-control" id="cardNumber">
                        </div>
                        <div class="col-md-5 mt-4 ">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="cvv" class="font-weight-500 form-label"><span class="red">*</span> CVV</label>
                                    <input type="text" class="w-90 form-control" id="cvv">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <img src="{{ asset('app-logo/cvv_small.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mt-4 ">
                            <label for="cardExpiration" class="font-weight-500 form-label"><span class="red">*</span> Card Expiration</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select form-control" id="cardExpiration" data-placeholder="Choose Month">
                                        <option></option>
                                        <option>1- January</option>
                                        <option>2- Febuary</option>
                                        <option>3- March</option>
                                        <option>4- April</option>
                                        <option>5- May</option>
                                        <option>6- June</option>
                                        <option>7- July</option>
                                        <option>8- August</option>
                                        <option>9- September</option>
                                        <option>10- October</option>
                                        <option>11- November</option>
                                        <option>12- December</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" id="cardExpiration" data-placeholder="Choose Year">
                                        <option></option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                        <option>2031</option>
                                        <option>2032</option>
                                        <option>2033</option>
                                        <option>2034</option>
                                        <option>2035</option>
                                        <option>2036</option>
                                    </select>
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
                            <button class="btn btn-success me-md-2" type="button">Order Now <i class="fa fa-angle-right"></i> </button>
                        </div>
                    </div>
    			</form>
    		</div>
    		<div class="col-md-4 p-48 border-left">
                <div class="sidebar-form">
        			<div class="row">
                        <h2 class="light-grey px-32 sidebar-head">B-2 TOURIST VISA APPLICATION GUIDE</h2>
                        <img src="{{ asset('app-logo/b-2-tourist-visa.jpg') }}" class="mb-4 px-32">
                        <p class="px-46 text-center mt-4"><img src="{{ asset('app-logo/icon_pdf.png') }}" /> PRICE US$ 9.95 </p>
                        <img class="my-5 px-46" src="{{ asset('app-logo/star-separator.png') }}">
                        <p class="text-justify">Many visitors to the U.S. need to apply for a B-2 tourist visa depending on which passport is being used. The B-2 tourist visa application process can take several months, and all tourists  are advised to start the visa process early to avoid any trip delays. Download the Visa Application Guide for more information about how to apply and what documents are needed.</p>
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
</div>



@endsection
<script type="text/javascript">
	$(document).ready(function() {
		$('#number').select2( {
		    theme: "bootstrap-5",
		    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
		    placeholder: $( this ).data( 'placeholder' ),
		} );
	});
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
