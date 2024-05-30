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
            <div class="detail-content pb-[50px]">
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        Rekvizitlar
                    </h1>
                    @foreach($activeProps as $prop)
                    <div>
                        <p class="txt-18 section-text" style="margin-bottom: 1rem;">
                            {{ $prop->getTranslation('title', app()->getLocale()) }}
                        </p>
                        <p class="txt-18 section-text">
                            {!!  $prop->getTranslation('content', app()->getLocale())  !!}
                        </p>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

