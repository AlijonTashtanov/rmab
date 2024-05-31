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
                    <img src="{{$page->getImageUrl()}}" alt="" class="base-img">
                    <form action="" class="aplication-form">
                        <div class="aplication-form__item">
                            <label for="inputNumber" class="aplication-form__label">Yetkazib berish raqami</label>
                            <input type="text"  id="inputNumber" class="aplication-form__input my-input"
                                   placeholder="Jo`natma raqami"   />
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputDate" class="aplication-form__label">Jo`natma kuni</label>
                            <input type="date" id="inputDate"  class="aplication-form__input my-input"
                                   placeholder="jo`natma kuni" />
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputType" class="aplication-form__label">Javobni qanday shaklda olmoqchisiz ?</label>

                            <select id="inputType" class="aplication-form__input my-input" >
                                <option selected class="selectVal">Tanlang</option>
                                <option>Qog`oz shaklda (Official)</option>
                                <option>SAyt orqali</option>
                            </select>
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputTypeTwo" class="aplication-form__label">Shartnoma qaysi shakl asosida topshirilgan</label>
                            <input type="text"  id="inputTypeTwo"
                                   class="aplication-form__input my-input" placeholder="Shartnoma shakli" />
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

