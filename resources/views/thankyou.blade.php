@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('dist/css/b5st9632.css')  }}">

@section('content')


    <section id="top-bar-main" class="bg-atlantic-blue py-20">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-6 col-xl-4">

                    <img class="navbar-brand" src="{{ asset('app-logo/1672-X-288-White.png') }}" alt="US Immigration support">

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
                    <p>U.S. Immigration Support is an information website not affiliated with the United States government.</p>
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
                            <div class="step-header">
                            </div>
                            <div class="mb-4 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                                     fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>

                            <div class="text-center">
                                <h1>Thank You !</h1>
                                <p>Congratulations! We are delighted to inform you that your request has been successfully approved! Details regarding the approval have been sent to the email. <a id="downloadLink" href="#">Click Here</a> to download EBOOK </p>
                                <button  id="return_home" class="btn btn-success">
                                    Back Home</button>
                            </div>


                    </section>

                    <!-- STEP 2 -->




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


        $('#return_home').on('click', function() {
            window.location.href = '/';
        });
    });
</script>






