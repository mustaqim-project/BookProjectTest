<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK STORE </title>

    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">


    <link rel="stylesheet" href="admin/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="admin/assets/css/app.css">
    <link rel="shortcut icon" href="admin/image/tokobuku.png" type="image/x-icon">
</head>

<body>
    <div id="app">




            @include('layouts.navbar')
            <!-- End Header news -->
            @yield('content')

            <!-- Footer Section -->
            @include('layouts.footer')
            <!-- End Footer Section -->

    </div>
    <script src="admin/assets/js/feather-icons/feather.min.js"></script>
    <script src="admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admin/assets/js/app.js"></script>

    <script src="admin/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="admin/assets/js/pages/dashboard.js"></script>

    <script src="admin/assets/js/main.js"></script>
</body>

</html>
