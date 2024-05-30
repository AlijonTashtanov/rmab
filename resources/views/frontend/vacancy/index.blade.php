<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */

?>
@extends('layouts.frontend.main')
@section('content')
    <!-- MY NAVIGATION END -->
    <div class="detail-page">
        <div class="my-container">
            <div class="detail-page-in">
                @include('layouts.frontend._sidebar')
                <div class="detail-content">
                    <div class="my-about">
                        <div class="grid-1">
                            <div class="my-about">
                                <h1 class="txt-33 nav-text">Vakansiyalar</h1>
                                <div class="flex flex-col gap-[20px]">
                                    @foreach($activeVacancies as $vacancy)
                                        <a href="#" class="vakansia-card" external>
                                            <img src="{{$vacancy->getImageUrl()}}" alt="image" class="top"/>
                                            {{--                                        <img src="{{asset('/storage/'.$item->image)}}" alt="" style="width: 100px;height: 100px">--}}
                                            <div class="text-blog">
                                                <p class="txt-16 nav-text">
                                                    <span>{{$vacancy->salary}}</span>
                                                </p>
                                                <p class="txt-18 nav-text">{{ $vacancy->getTranslation('title', app()->getLocale()) }}</p>
                                                <p class="txt-16 fw-light sec-text">
                                                    {{ $vacancy->getTranslation('description', app()->getLocale()) }}
                                                </p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

