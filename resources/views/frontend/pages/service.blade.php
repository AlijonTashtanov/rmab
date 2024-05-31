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
                    <img src="{{$page->getImageUrl()}}" alt="image" class="base-img">
                    <form action="" class="aplication-form">

                        <div class="aplication-form__item">
                            <label for="inputNumber" class="aplication-form__label">Telefon raqam</label>
                            <input class="aplication-form__input my-input" id="inputNumber" placeholder="+998"
                            />

                        </div>


                        <div class="aplication-form__item">
                            <label for="inputRegion" class="block mb-2 text-sm font-medium text-gray-900   aplication-form__label">Xizmat identifikatori</label>
                            <select

                                required
                                class="block w-full p-2  text-sm  border text-dark border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input">

                                <option selected>Tanlang</option>
                                <option>Fellegerni chaqirish</option>
                                <option>Yuk tashish</option>
                            </select>

                        </div>
                        <div class="aplication-form__item">
                            <label for="inputDate" class="block mb-2 text-sm font-medium  text-gray-900 aplication-form__label">Qachon va qaysi vaqtda borishi</label>
                            <input type="datetime-local" id="inputDate"
                                   class="h-[48px] rounded-[12px] py-[12px]   px-[18px] border-2"
                                   placeholder="jo`natma kuni"
                            />

                        </div>

                        <div class="aplication-form__item mt-[30px]">
                            <label class="label" for="note">Izoh</label>
                            <textarea placeholder="Izoh yozing" id="inputFidbek"
                                      class="aplication-form__input my-input input-textAre__item"></textarea>

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

    //contact maska
    const phoneInput = document.getElementById("inputNumber");
    const phoneMask = IMask(phoneInput, {
        mask: "+{998}(90) 000-00-00",
    });

</script>
@stop

