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
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        {{ $page->getTranslation('title', app()->getLocale()) }}
                    </h1>
                    <p class="txt-18 section-text">
                       {!! $page->getTranslation('description', app()->getLocale()) !!}
                    </p>
                    <img src="{{$page->getImageUrl()}}" alt="" class="w-full h-[388px] rounded-[32px]">
                    <form action="" class="aplication-form">
                        <div class="aplication-form__item">
                            <label for="inputName" class="aplication-form__label">Ism</label>
                            <input type="text"  id="inputName"
                                   class="aplication-form__input my-input" placeholder="Ism kiriting" />

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputNumber" class="aplication-form__label">Telefon raqam</label>
                            <input class="aplication-form__input my-input" id="inputNumber" placeholder="+998"

                            />

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputAddress" class="aplication-form__label">Email</label>
                            <input type="email"  id="inputAddress" class="aplication-form__input my-input"

                                   placeholder="Email addres" />

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputLocateAdress" class="aplication-form__label">Tashkilot nomi</label>
                            <input type="text"  id="inputLocateAdress" class="aplication-form__input my-input"
                                   placeholder="Tashkilot nomini kiriting" />

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputRegion"
                                   class="block mb-2 text-sm font-medium text-gray-900  aplication-form__label">Viloyatlar</label>
                            <select id="inputRegion"
                                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input">
                                <option selected>Tanlang</option>
                                <option >Andijon viloyati </option>
                                <option >Farg’ona viloyati </option>
                                <option >Namangan viloyati </option>
                            </select>

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputCity"
                                   class="block mb-2 text-sm font-medium text-gray-900  aplication-form__label">Shaxarni tanlang</label>
                            <select id="inputCity"
                                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                            >
                                <option selected>Tanlang</option>
                                <option>Toshloq</option>
                                <option>Margilon</option>
                                <option>qoqon</option>
                            </select>

                        </div>

                        <div class="aplication-form__item">
                            <label for="inputCity"
                                   class="block mb-2 text-sm font-medium text-black  aplication-form__label">Xizmat turi</label>
                            <select id="inputCity"
                                    class="block w-full p-2 mb-6  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                            >
                                <option selected>Tanlang</option>
                                <option>Maxsus aloqa xizmatlari</option>
                                <option>Telekomunikatsiya xizmatlari</option>
                                <option>Ovozni mustahkamlash xizmatlari</option>
                            </select>

                        </div>

                        <div class="aplication-form__item">
                            <label for="inputLocation"
                                   class="block mb-2 text-sm font-medium text-gray-900 text-black aplication-form__label">Yuboruv geografiyasi</label>
                            <select id="inputLocation" v-model="location"
                                    class="block w-full p-2 mb-6 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 aplication-form__input my-input"
                            >
                                <option selected>tanlang</option>
                                <option>Andijon</option>
                                <option>Farg’ona</option>
                            </select>

                        </div>
                        <button class="my-btn aplication-btn">Yuborish</button>
                    </form>
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

</script>
@stop

