<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
?>
@extends('layouts.frontend.main')
@section('content')
    <!-- BANNERS -->
@include('frontend.main._banners')
    <!--END BANNERS -->
    <!-- XIZMATLAR -->
@include('frontend.main._services')
    <!--END XIZMATLAR -->

    <!-- BANNER SLIDER -->
@include('frontend.main._banner-slider')
<!-- BANNER SLIDER END -->

    <!-- ABOUT SECTION -->
@include('frontend.main._about')
    <!-- ABOUT SECTION END -->

    <!-- NEWS SLIDER -->
@include('frontend.main._news-slider')
    <!-- NEWS SLIDER END -->

    <!-- MAP SECTION -->
@include('frontend.main._map')
<!-- MAP SECTION END -->

    <!-- PARTNERS -->
@include('frontend.main._partners')
<!-- PARTNERS END -->

    <!-- CONTACT -->
@include('frontend.main._contact')
    <!-- CONTACT END -->

    <!-- FAQS -->
@include('frontend.main._faqs')
<!-- FAQS END -->

@stop

