<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
?>
@extends('layouts.frontend.news')
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
                        <a href="#"  class="news-card" >
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
                </div>

                <div class="pagination" >
                    <div class="pagination-item">
                        1
                    </div>
                    <div class="pagination-item">
                        2
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQS -->
<div class="my-section faq-page">
    <div class="my-container">
        <div class="my-section-in">
            <h1 class="txt-33 nav-text text-center">
                Eng ko’p berilayotgan savollar
            </h1>
            <div class="accordion-container">
                @foreach($activeFaqs as $faq)
                    <div class="accordion-item">
                        <div class="accordion-header">
                          <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                   fill="none">
                                  <path d="M20 31.5V9.5M9 20.5H31" stroke="white" stroke-width="2"
                                        stroke-linecap="round"/>
                              </svg>
                          </span>
                            <p class="txt-20">
                                {{ $faq->getTranslation('question', app()->getLocale()) }}
                            </p>
                        </div>
                        <div class="accordion-content">
                            <p class="txt-16">{{ $faq->getTranslation('answer', app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- FAQS END -->
@stop
<!-- FOOTER -->

