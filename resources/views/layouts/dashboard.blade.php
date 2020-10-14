<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard | SIAN </title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="Usama Imdad">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index-2.html">
    <meta property="og:url" content="index-2.html">
    <meta property="og:site_name" content="SMS">
    @include('inc.dashboard.header-imports')
    @yield('styles')
</head>
<body>
    <div class="app">
        @include('inc.dashboard.header')
        @include('inc.dashboard.sidebar')

        <main class="app-main">
            @yield('content')
        </main>
    </div>
    <footer class="app-footer">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a class="text-muted" href="#">Terms of Service</a>
            </li>
        </ul>
        <div class="copyright"> Copyright © 2018. All right reserved. </div>
    </footer>
    @include('inc.dashboard.footer-imports')
    @yield('jsScript')
</body>
</html>