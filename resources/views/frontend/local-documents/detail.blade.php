<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
$activeLocalDocuments = \App\Models\LocalDocument::where('status', \App\Models\LocalDocument::$status_active)->get();
?>
@extends('layouts.frontend.main')
@section('content')
<div class="detail-page">
    <div class="my-container">
        <div class="detail-in">
            <div class="left-content">
                <div class="nav-text txt-28">
                    {{ $localDocuments->getTranslation('name', app()->getLocale()) }}
                </div>
                <a
                    class="localDocument-link"
                    href="#"
                    download
                    target="blank"
                > <span style="color: #007bff"> Yuklab olish({{ $localDocuments->getFileSize() }} )</span></a
                >
                <p
                    class="txt-16 time-sec"
                > {{ $localDocuments->getTranslation('content', app()->getLocale()) }}
                </p>
            </div>
            <div class="right-content">
                <div class="nav-text txt-20">
                    Boshqa hujjatlar
                </div>
                <div class="right-content_sroll">
                    @foreach($activeLocalDocuments as $local)
                    <div>
                        <a href="#">
                            <div class="corruptionDocument-list">
                                <p class="txt-16 corruptionDocument-list__desc text-16-bold">
                                    {{ $localDocuments->getTranslation('name', app()->getLocale()) }}
                                </p>
                                <a class="txt-16 corruptionDocument-list__link" @click.stop href="#"
                                   download target="blank"> <span style="color: #007bff"> Yuklab olish({{ $localDocuments->getFileSize() }} )</span></span></a>
                            </div>
                        </a>
                    </div>
                    @endforeach
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
@stop

