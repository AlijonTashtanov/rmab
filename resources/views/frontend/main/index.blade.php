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

@stop

{{--<script src="./js/swiper-bundle.min.js"></script>--}}
{{--<script src="./js/app.js"></script>--}}

{{--<script>--}}
{{--    setTimeout(() => {--}}
{{--        document.querySelectorAll(".accordion-header").forEach((button) => {--}}
{{--            button.addEventListener("click", () => {--}}
{{--                const accordionContent = button.nextElementSibling;--}}

{{--                button.classList.toggle("active");--}}

{{--                if (button.classList.contains("active")) {--}}
{{--                    accordionContent.style.maxHeight =--}}
{{--                        accordionContent.scrollHeight + "px";--}}
{{--                } else {--}}
{{--                    accordionContent.style.maxHeight = 0;--}}
{{--                }--}}

{{--                // Close other open accordion items--}}
{{--                document--}}
{{--                    .querySelectorAll(".accordion-header")--}}
{{--                    .forEach((otherButton) => {--}}
{{--                        if (otherButton !== button) {--}}
{{--                            otherButton.classList.remove("active");--}}
{{--                            otherButton.nextElementSibling.style.maxHeight = 0;--}}
{{--                        }--}}
{{--                    });--}}
{{--            });--}}
{{--        });--}}
{{--    }, 2000);--}}
{{--</script>--}}
