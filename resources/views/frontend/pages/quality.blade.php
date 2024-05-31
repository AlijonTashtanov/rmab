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
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content">
                <div v-if="!loader" class="my-about">
                    <h1 class="txt-33 nav-text">
                        {{ $page->getTranslation('title', app()->getLocale()) }}
                    </h1>
                    <p class="txt-18 section-text">
                        {!! $page->getTranslation('description', app()->getLocale()) !!}
                    </p>
                    <img src="{{$page->getImageUrl()}}" alt="" class="base-img">
                    <form action="" class="interactive form">
                        <div class="box flex gap-2">
                            <div ref="reviewRating" class="rating" >
                                <svg width="33" height="33" fill="#0162A7FF" xmlns="http://www.w3.org/2000/svg" class="svg">
                                    <path
                                        d="m16.5 27.145-8.091 5.116c-.302.185-.604.262-.906.233a1.6 1.6 0 0 1-.822-.32 1.814 1.814 0 0 1-.568-.724c-.133-.298-.155-.627-.064-.988l2.148-9.632-7.144-6.483a1.62 1.62 0 0 1-.452-1.778c.112-.302.274-.549.484-.74.211-.192.5-.317.864-.376l9.428-.864 3.66-9.095c.132-.338.334-.589.605-.75C15.912.58 16.2.5 16.5.5c.301 0 .587.081.858.243.27.162.473.413.606.75l3.66 9.096 9.427.864c.365.059.653.184.864.376.21.191.371.438.483.74a1.62 1.62 0 0 1-.452 1.778l-7.143 6.483 2.148 9.632c.09.36.07.69-.064.988a1.813 1.813 0 0 1-.568.723 1.6 1.6 0 0 1-.822.321c-.302.03-.604-.048-.906-.233L16.5 27.145Z" />
                                </svg>

                            </div>
                            <div ref="reviewRating" class="rating"  >
                                <svg width="33" height="33" fill="#0162A7FF" xmlns="http://www.w3.org/2000/svg" class="svg">
                                    <path
                                        d="m16.5 27.145-8.091 5.116c-.302.185-.604.262-.906.233a1.6 1.6 0 0 1-.822-.32 1.814 1.814 0 0 1-.568-.724c-.133-.298-.155-.627-.064-.988l2.148-9.632-7.144-6.483a1.62 1.62 0 0 1-.452-1.778c.112-.302.274-.549.484-.74.211-.192.5-.317.864-.376l9.428-.864 3.66-9.095c.132-.338.334-.589.605-.75C15.912.58 16.2.5 16.5.5c.301 0 .587.081.858.243.27.162.473.413.606.75l3.66 9.096 9.427.864c.365.059.653.184.864.376.21.191.371.438.483.74a1.62 1.62 0 0 1-.452 1.778l-7.143 6.483 2.148 9.632c.09.36.07.69-.064.988a1.813 1.813 0 0 1-.568.723 1.6 1.6 0 0 1-.822.321c-.302.03-.604-.048-.906-.233L16.5 27.145Z" />
                                </svg>

                            </div>
                            <div ref="reviewRating" class="rating"  >
                                <svg width="33" height="33" fill="#0162A7FF" xmlns="http://www.w3.org/2000/svg" class="svg">
                                    <path
                                        d="m16.5 27.145-8.091 5.116c-.302.185-.604.262-.906.233a1.6 1.6 0 0 1-.822-.32 1.814 1.814 0 0 1-.568-.724c-.133-.298-.155-.627-.064-.988l2.148-9.632-7.144-6.483a1.62 1.62 0 0 1-.452-1.778c.112-.302.274-.549.484-.74.211-.192.5-.317.864-.376l9.428-.864 3.66-9.095c.132-.338.334-.589.605-.75C15.912.58 16.2.5 16.5.5c.301 0 .587.081.858.243.27.162.473.413.606.75l3.66 9.096 9.427.864c.365.059.653.184.864.376.21.191.371.438.483.74a1.62 1.62 0 0 1-.452 1.778l-7.143 6.483 2.148 9.632c.09.36.07.69-.064.988a1.813 1.813 0 0 1-.568.723 1.6 1.6 0 0 1-.822.321c-.302.03-.604-.048-.906-.233L16.5 27.145Z" />
                                </svg>

                            </div>
                            <div ref="reviewRating" class="rating" >
                                <svg width="33" height="33" fill="#0162A7FF" xmlns="http://www.w3.org/2000/svg" class="svg">
                                    <path
                                        d="m16.5 27.145-8.091 5.116c-.302.185-.604.262-.906.233a1.6 1.6 0 0 1-.822-.32 1.814 1.814 0 0 1-.568-.724c-.133-.298-.155-.627-.064-.988l2.148-9.632-7.144-6.483a1.62 1.62 0 0 1-.452-1.778c.112-.302.274-.549.484-.74.211-.192.5-.317.864-.376l9.428-.864 3.66-9.095c.132-.338.334-.589.605-.75C15.912.58 16.2.5 16.5.5c.301 0 .587.081.858.243.27.162.473.413.606.75l3.66 9.096 9.427.864c.365.059.653.184.864.376.21.191.371.438.483.74a1.62 1.62 0 0 1-.452 1.778l-7.143 6.483 2.148 9.632c.09.36.07.69-.064.988a1.813 1.813 0 0 1-.568.723 1.6 1.6 0 0 1-.822.321c-.302.03-.604-.048-.906-.233L16.5 27.145Z" />
                                </svg>

                            </div>
                            <div ref="reviewRating" class="rating"  >
                                <svg width="33" height="33" fill="#0162A7FF" xmlns="http://www.w3.org/2000/svg" class="svg">
                                    <path
                                        d="m16.5 27.145-8.091 5.116c-.302.185-.604.262-.906.233a1.6 1.6 0 0 1-.822-.32 1.814 1.814 0 0 1-.568-.724c-.133-.298-.155-.627-.064-.988l2.148-9.632-7.144-6.483a1.62 1.62 0 0 1-.452-1.778c.112-.302.274-.549.484-.74.211-.192.5-.317.864-.376l9.428-.864 3.66-9.095c.132-.338.334-.589.605-.75C15.912.58 16.2.5 16.5.5c.301 0 .587.081.858.243.27.162.473.413.606.75l3.66 9.096 9.427.864c.365.059.653.184.864.376.21.191.371.438.483.74a1.62 1.62 0 0 1-.452 1.778l-7.143 6.483 2.148 9.632c.09.36.07.69-.064.988a1.813 1.813 0 0 1-.568.723 1.6 1.6 0 0 1-.822.321c-.302.03-.604-.048-.906-.233L16.5 27.145Z" />
                                </svg>

                            </div>
                        </div>
                        <div class="box area">
                            <label class="label mb-[20px] flex" for="note">Qo`shimcha izoh</label>
                            <textarea placeholder="Izoh"  id="inputFidbek"
                                      class="aplication-form__input my-input input-textAre__item"></textarea>
                        </div>
                    </form>
                    <div  class="my-btn aplication-btn txt-16 ">Yuborish</div>
                </div>
            </div>
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

