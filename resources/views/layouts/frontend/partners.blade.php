<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 22:59
 */

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Rmab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="{{asset('template/scss/main.css')}}"/>
    @yield('style')
</head>
<body>
@include('layouts.frontend._header')
@yield('content')
@include('layouts.frontend._footer')

<!-- <link ref="stylesheet" href="./scss/swiper-bundle.min.css"> -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<script src="{{asset('template/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('template/js/app.js')}}"></script>
</body>
</html>

