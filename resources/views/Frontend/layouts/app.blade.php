<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting()->description }}">
    <meta name="author" content="{{ setting()->description }}">
    <meta name="generator" content="{{ setting()->description }}">
    <title>@yield('title')</title>
    <!-- Vendors CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/fontawesome-pro-5/css/all.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/animate.css">
    <link rel="stylesheet" href="{{ asset("") }}assets/vendors/mapbox-gl/mapbox-gl.min.css">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="{{ asset("") }}assets/css/themes.css">
    <!-- Favicons -->
    <link rel="icon" href="{{ asset("") }}assets/images/favicon.ico">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="{{ setting()->name }}">
    <meta name="twitter:description" content="{{ setting()->description }}">
    <meta name="twitter:image" content="{{ url("/") }}/storage/{{ setting()->header_logo }}">
    <!-- Facebook -->
    <meta property="og:url" content="{{ route("index") }}">
    <meta property="og:title" content="{{ setting()->name }}">
    <meta property="og:description" content="{{ setting()->description }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url("/") }}/storage/{{ setting()->header_logo }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
</head>
<body>

@include('Frontend.layouts.includes.header')

@yield("content")

@include('Frontend.layouts.includes.footer')

<!-- Vendors scripts -->
<script src="{{ asset("") }}assets/vendors/jquery.min.js"></script>
<script src="{{ asset("") }}assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset("") }}assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="{{ asset("") }}assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="{{ asset("") }}assets/vendors/slick/slick.min.js"></script>
<script src="{{ asset("") }}assets/vendors/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ asset("") }}assets/vendors/counter/countUp.js"></script>
<script src="{{ asset("") }}assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{ asset("") }}assets/vendors/hc-sticky/hc-sticky.min.js"></script>
<script src="{{ asset("") }}assets/vendors/jparallax/TweenMax.min.js"></script>
<script src="{{ asset("") }}assets/vendors/mapbox-gl/mapbox-gl.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Theme scripts -->
<script src="{{ asset("") }}assets/js/theme.js"></script>

<div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
    <a href="#"
       class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
       title="Back To Top"><i class="fal fa-arrow-up"></i>
    </a>
</div>


@include("Frontend.layouts.includes.sidebar")

</body>

</html>
