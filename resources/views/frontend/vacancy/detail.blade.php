<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
?>
@extends('layouts.frontend.main')
@section('content')
<div class="detail-page">
    <div class="my-container">
        <div class="detail-in">
            <div class="left-content">
                <img src="{{$oneVacancy->getImageUrl()}}" alt="image" class="base-img">
                <div class="nav-text txt-28">
                    {{ $oneVacancy?->getTranslation('title', app()->getLocale()) }}
                </div>
                <p class="txt-20 nav-text">
                    <span>{{$oneVacancy->salary}}</span>
                </p>
                <p class="txt-18 section-text">
                    {!! $oneVacancy?->getTranslation('description', app()->getLocale()) !!}
                </p>
            </div>
            @include('layouts.frontend._side-vacancy')
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        document.querySelectorAll(".accordion-header").forEach((button) => {
            button.addEventListener("click", () => {
                const accordionContent = button.nextElementSibling;

                button.classList.toggle("active");

                if (button.classList.contains("active")) {
                    accordionContent.style.maxHeight =
                        accordionContent.scrollHeight + "px";
                } else {
                    accordionContent.style.maxHeight = 0;
                }

                // Close other open accordion items
                document
                    .querySelectorAll(".accordion-header")
                    .forEach((otherButton) => {
                        if (otherButton !== button) {
                            otherButton.classList.remove("active");
                            otherButton.nextElementSibling.style.maxHeight = 0;
                        }
                    });
            });
        });
    }, 2000);
</script>
@stop

