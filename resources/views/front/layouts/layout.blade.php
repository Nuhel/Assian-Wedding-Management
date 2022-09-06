<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Lita's Boutique</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>

    @yield('content')

    <div class="cpy_">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">

                        <div class="information_f d-flex flex-column flex-md-row justify-content-md-between">
                            <p><strong>ADDRESS:</strong> <span class="text-theme">94 ELGIN ROAD IG3 8LW , UK</span></p>
                            <p><strong>TELEPHONE:</strong> <a href="tel:+4407495736364">+4407495736364</a></p>
                            <p><strong>EMAIL:</strong> <a href="mailto:farjanalita24@gmail.com">farjanalita24@gmail.com</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <p class="mx-auto mt-2">© {{ now()->format('Y') }} All Rights Reserved By <a href="https://html.design/">Farzana
                Lita</a><br>



        </p>
    </div>
    <!-- jQery -->
    <script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('front/js/bootstrap.js') }}"></script>
    <!-- custom js -->
    @yield('script')



</body>

</html>
