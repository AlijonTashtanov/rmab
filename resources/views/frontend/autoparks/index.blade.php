<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */

?>
@extends('layouts.frontend.vacancy')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content pb-[50px]">
                @foreach($activeAutoparks as $auto)
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        {{ $auto->getTranslation('title', app()->getLocale()) }}
                    </h1>
                    <img src="{{$auto->getImageUrl()}}" alt="" class="base-img">
                    <div>{!!  $auto->getTranslation('content', app()->getLocale())  !!}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop

