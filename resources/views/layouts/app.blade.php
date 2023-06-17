<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS Local -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Local -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/assets/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.app.header')
                <!-- End of Topbar -->
                <div class="container">
                    <!-- Begin Page Content -->
                    @yield('content')
                <!-- Footer -->
                @include('layouts.app.footer')
                <!-- End of Footer -->
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!--   JS   -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
