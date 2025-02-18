<?php


?>
@extends('layouts.frontend.main')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content pb-[50px]">
                @foreach($activeAutoparks as $auto)
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        {{ $auto->getTranslation('title', app()->getLocale()) }}
                    </h1>
                    <img src="{{ asset($auto->getImageUrl())}}" alt="" class="base-img">
                    <div>{!!  $auto->getTranslation('content', app()->getLocale())  !!}</div>
                </div>
                @endforeach
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

        //contact maska
        const phoneInput = document.getElementById("inputNumber");
        const phoneMask = IMask(phoneInput, {
            mask: "+{998}(90) 000-00-00",
        });

    </script>
@stop

