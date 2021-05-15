<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>{!! config('app.name') !!}</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('cooladmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('cooladmin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('cooladmin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('cooladmin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER -->
        @include('layouts.header')
        <!-- END HEADER  -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- CONTENT-->
            @yield('content')
            <!-- END CONTENT-->

            <!-- COPYRIGHT-->
            @include('layouts.footer')
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('cooladmin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('cooladmin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('cooladmin/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('cooladmin/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('cooladmin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->