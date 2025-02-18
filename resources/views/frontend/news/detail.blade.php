<?php

$allActiveNews = \App\Models\Post::where('status', \App\Models\Post::$status_active)
    ->orderBy('created_at', 'desc')
    ->get();
?>


@extends('layouts.frontend.main')
<!-- MY NAVIGATION END -->

@section('content')
<div class="detail-page">
    <div class="my-container">
        <div class="detail-in newsId" v-if="!loader">
            <div class="left-content">
                <img src="{{$activeNews->getImageUrl()}}" alt="image" class="base-img">
                <p class="txt-16 time-sec NuxtClamp">
                    <a href="{{route('news')}}" style="color: #007bff">Yangiliklar</a>  >
                    <a href="javascript:void(0)">{{ $activeNews?->getTranslation('title', app()->getLocale()) }}
                    </a>
                </p>
                <div class="nav-text txt-28">
                    {{ $activeNews?->getTranslation('title', app()->getLocale()) }}
                </div>
            </div>
            <div class="right-content">
                <div class="nav-text txt-20">
                    O’xshash yangiliklar
                </div>
                <div class="right-content_sroll">
                    @foreach($allActiveNews as $news)
                    <div >
                        <a href="{{route('news-detail',['id'=>$news->id])}}"  class="news-card news-mini">
                            <img src="{{$news->getImageUrl()}}" alt="icone" class="top ">
                            <div class="text-blog">
                                <p class="txt-14 time-sec">
                                  {{$news->created_at}}
                                </p>
                                <p class="txt-16 nav-text">
                                    {{ $news?->getTranslation('title', app()->getLocale()) }}
                                </p>
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
</script>
@stop
