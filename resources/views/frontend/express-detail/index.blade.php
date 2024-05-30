<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */
$activeServices = \App\Models\Service::where('status', \App\Models\Service::$status_active)->get();
$activeVacancies = \App\Models\Vacancy::where('status', \App\Models\Vacancy::$status_active)->get();
?>
@extends('layouts.frontend.main')
@section('content')

    <div class="detail-page">
        <div class="my-container">
            <div class="detail-page-in">
                <div class="sidebar">
                    <p class="txt-20 nav-text">Bizning xizmatlar</p>
                    <ul class="sidebar-menu">
                        @foreach($activeServices as $service)
                            <li>
                                <a href="#" class="data-btn">
                                    <p class="txt-18">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17" fill="none">
                                            <path d="M21.6594 4.08903L14.3087 0.0527141C14.2457 0.0181303 14.1749 0 14.103 0C14.0311 0 13.9604 0.0181303 13.8973 0.0527141L11.1331 1.57055C11.07 1.58824 11.0119 1.62018 10.963 1.66389L6.54659 4.08903C6.47947 4.12588 6.42349 4.18009 6.38448 4.24599C6.34548 4.31188 6.32489 4.38704 6.32487 4.46361V5.33741H1.39416C1.15813 5.33741 0.966797 5.52887 0.966797 5.76478C0.966797 6.00081 1.15813 6.19214 1.39416 6.19214H6.32491V7.73066H3.87473C3.6387 7.73066 3.44736 7.92212 3.44736 8.15803C3.44736 8.39407 3.6387 8.5854 3.87473 8.5854H6.32491V10.8077H2.73503C2.49899 10.8077 2.30766 10.9992 2.30766 11.2351C2.30766 11.4711 2.49899 11.6624 2.73503 11.6624H6.32491V12.5364C6.32491 12.6923 6.40987 12.8359 6.54663 12.911L13.8973 16.9473C13.9614 16.9825 14.0322 17 14.103 17C14.1738 17 14.2446 16.9825 14.3087 16.9473L21.6594 12.911C21.7265 12.8741 21.7825 12.8199 21.8215 12.754C21.8605 12.6881 21.8811 12.6129 21.8811 12.5364V10.6226C21.8811 10.3867 21.6897 10.1952 21.4537 10.1952C21.2177 10.1952 21.0263 10.3867 21.0263 10.6226V12.2834L14.5304 15.8505V8.75284L16.5963 7.61848V9.41876C16.5962 9.47489 16.6073 9.53048 16.6287 9.58234C16.6502 9.6342 16.6817 9.68132 16.7214 9.72101C16.7611 9.7607 16.8082 9.79218 16.86 9.81365C16.9119 9.83511 16.9675 9.84615 17.0236 9.84613C17.0944 9.84613 17.1653 9.82861 17.2296 9.79318L18.8049 8.92627C18.8719 8.88935 18.9278 8.83513 18.9667 8.76927C19.0056 8.7034 19.0261 8.6283 19.0261 8.55181V6.28428L21.0263 5.18595V7.20364C21.0263 7.43967 21.2177 7.631 21.4537 7.631C21.6897 7.631 21.8811 7.43967 21.8811 7.20364V4.46361C21.8811 4.30771 21.7962 4.16411 21.6594 4.08903ZM13.6756 15.8505L7.17965 12.2834V5.18599L13.6756 8.7528V15.8505ZM14.103 8.01243L7.64022 4.46361L9.67141 3.34831L16.1343 6.89713L14.103 8.01243ZM17.0223 6.4095L10.5594 2.86064L11.26 2.47601L17.7228 6.02487L17.0223 6.4095ZM18.1713 8.29923L17.451 8.69574V7.14919L18.1713 6.75353V8.29923ZM18.6107 5.5372L12.148 1.98839L14.103 0.91497L20.5658 4.46361L18.6107 5.5372Z" fill="#0162A7" />
                                        </svg>
                                        <span>{{ $service->getTranslation('name', app()->getLocale()) }}</span>
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="detail-content">
                    <div class="our-services">
                        <div class="left-content">
                            <div class="my-about">
                                <h1 class="txt-33 nav-text">{{ $serviseDetail->getTranslation('name', app()->getLocale()) }}</h1>
                                <div class="txt-18 section-text">
                                    {!! $serviseDetail->getTranslation('content', app()->getLocale()) !!}
                                </div>
                            </div>
                        </div>
                        <div class="right-content document-right">
                            @foreach($activeVacancies as $vacancy)
                                <div>
                                    <a href="#" class="vakansia-card vakansia-mini">
                                        <img src="./images/vaka.png" alt="image" class="top">
                                        <div class="text-blog">
                                            <p class="txt-14 time-sec">
                                                <span>1 500 000 UZS - 3 000 000 UZS</span>
                                            </p>
                                            <p class="txt-16 nav-text">
                                                {{ $vacancy->getTranslation('title', app()->getLocale()) }}
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
    </div>

@stop
