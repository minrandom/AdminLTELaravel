<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE Dashboard</title>

    <!-- Include Vite-compiled CSS and JS files -->
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/iss.css'])
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Main Sidebar Container -->
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('partials.footer')
    </div>
</body>
</html>
