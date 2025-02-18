<?php

$activeArticle = \App\Models\Article::where('status', \App\Models\LocalDocument::$status_active)->get();
?>
@extends('layouts.frontend.main')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-in">
            <div class="left-content">
                <div class="articlesTwoId">
                    <img class="articlesTwoId-img" src="{{$article->getImageUrl()}}" alt="image">
                    <p class="txt-16 time-sec NuxtClamp">
                        <a href="{{route('article')}}"><span style="color: #007bff">Maqolalar</span></a> >
                        <a href="javascript:void(0)">{{ $article->getTranslation('title', app()->getLocale()) }}</a>
                    </p>
                    <h2 class="articlesTwoId-title txt-28">
                        {{ $article->getTranslation('title', app()->getLocale()) }}
                    </h2>
                    <p class="articlesTwoId-date">{{$article->created_at}}</p>
                    <p class="txt-16 articlesTwoId-desc">
                        {!! $article->getTranslation('title', app()->getLocale()) !!}
                    </p>
                </div>
            </div>
            <div class="right-content">
                <div class="nav-text txt-20">
                    Boshqa ma’qolalar
                </div>
                <div class="right-content_sroll">
                    @foreach($activeArticle as $article)
                    <div >
                        <a href="{{ route('article-detail', ['id' => $article->id]) }}" >
                            <div class="articlestwo-card text-blog ">
                                <img class="articlestwo-card__img" src="{{$article->getImageUrl()}}" alt="img">
                                <div class="articlestwo-card__info">
                                    <p class="txt-16  articlestwo-card__info--date">{{$article->created_at}}</p>
                                    <p class="txt-18  articlestwo-card__info--desc nav-text">{{ $article->getTranslation('title', app()->getLocale()) }}</p>
                                </div>
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

