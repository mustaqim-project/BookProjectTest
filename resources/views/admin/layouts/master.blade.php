<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TOKO BUKU AGUNG </title>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/chartjs/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">

</head>

<body>
    <div id="app">


        @include('admin.layouts.sidebar')
        <div id="main">

            @include('admin.layouts.navbar')
            <!-- End Header news -->
            @yield('content')

            <!-- Footer Section -->
            @include('admin.layouts.footer')
            <!-- End Footer Section -->
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('admin/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
</body>

</html>
