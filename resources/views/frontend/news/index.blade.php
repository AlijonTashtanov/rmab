<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>x
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
                 {{$activeNews->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
