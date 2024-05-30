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
                        Hamkorlar
                    </h1>
                    <div class="grid-5">
                        @foreach($activePartners as $partner)
                        <a href="{{$partner->url}}" target="blank" class="partner-card hover:translate-y-[-5px] transition-all">
                            <div class="top-img">
                                <img src="{{$partner->getImageUrl()}}">
                            </div>
                            <p class="txt-16 partnerClamp">
                                {{ $partner->name }}
                            </p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

