@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('dist/css/styles.css')  }}">
<style>
    .bg-atlantic-blue {
        --bs-bg-opacity: 1;
        background-color: #0f184E;
    }

    .py-20 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important;
    }
</style>
@section('content')



    <section id="top-bar-main" class="bg-atlantic-blue py-20">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="navbar-brand" src="{{asset('app-logo/WhiteLogo.webp')}}" alt="US Immigration support">

                </div>

                <div class="col-3 col-md-6 col-xl-8 my-auto d-flex justify-content-end text-end">
                    <div class="my-auto me-3 d-none d-md-block">
                        <p class="check-gold text-white mb-0 check-gold">24/7 Customer Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container main-section-content px-5 py-4">
        <div class="row">
            <div class="col-md-8 px-4">
                    <div class="container-form">


                        <div class=" px-4 py-2 mt-4">
                            <h1 class="m-0">Thank You for your order</h1><br>
                            <p>Product: Crossing the Line: A Step-by-Step Guide to Form I-192 U.S. Entry Waivers for Canadians</p>
                            <p>Download link: <a id="downloadLink" href="#">Click Here</a></p>
                            <p>The ebook purchased is available for immediate download using the link above. A confirmation email with the download link has also been sent to the email address used for this transaction. </p>
                            <p>The charge will be displayed on your credit card / bank statement as: SERVICESOFCANADA.HELP, CAD $9.99</p>
                            <p>Please contact us if you have any questions about your order.
                                Our Customer Support Department can be reached at: <a href="mailto:admin@recordremoval.org" style="color: blue;">admin@recordremoval.org</a>
                            </p>
                        </div>

                    </div>

            </div>
            <div class="col-md-4 p-5 gap-2 border-left">
                <div class="sidebar-form">
                    <div class="row">
                        <h2 class="light-grey px-5 sidebar-head">B-2 TOURIST VISA APPLICATION GUIDE</h2>
                        <img src="{{ asset('app-logo/b-2-tourist-visa.jpg') }}" class="mb-4 px-5">
                        <button  id="downloadButton" class="btn btn-success">
                            Download Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container-xxl">
        <div class="row pt-3">
            <div class="col-sm ">
                <p class="text-center">&copy; 2024 U.S. IMMIGRATION SUPPORT - All Rights
                    Reserved</p>
            </div>
        </div>
    </div>


@endsection
@include('home_modal')


<script src="{{ asset('dist/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('dist/js/moment.min.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>

<script>

    $(document).ready(function() {
        $("#downloadLink").on("click", function(e) {
            e.preventDefault(); // Prevent the default action of the link

            var pdfUrl = "{{ env('APP_URL') }}/book/e-book.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "e-book.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        $("#downloadButton").on("click", function(e) {
            e.preventDefault(); // Prevent the default action of the button

            var pdfUrl = "{{ env('APP_URL') }}/book/e-book.pdf";

            var link = document.createElement("a");
            link.href = pdfUrl;
            link.download = "e-book.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        $('#return_home').on('click', function() {
            window.location.href = '/';
        });


        $('#return_home').on('click', function() {
            window.location.href = '/';
        });
    });
</script>






