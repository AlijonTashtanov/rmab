<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>x
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
?>


@extends('layouts.frontend.main')
<!-- MY NAVIGATION END -->

@section('content')
<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
      @include('layouts.frontend._sidebar')
            <div class="my-about" v-if="!loader">
                <h1 class="txt-33 nav-text">
                    Yangiliklar
                </h1>
                <div class="grid-3">
                    @foreach($activeNews as $news)
                    <div >
                        <a href="{{route('news-detail',['id'=>$news->id])}}"  class="news-card" >
                            <img src="{{$news->getImageUrl()}}" alt="icone" class="top news-image">
                            <div class="text-blog">
                                <p class="txt-16 time-sec">
                                  {{$news->created_at}}
                                </p>
                                <p class="txt-20 nav-text clamp">
                                    {{ $news->getTranslation('title', app()->getLocale()) }}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                        <div class="pagination" style="margin-bottom: 10px;">
                            <nav aria-label="Page navigation">
                                {{ $activeNews->links('vendor.pagination.bootstrap-4') }}
                            </nav>
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
