@php


   @endphp
<div class="xizmatlar my-section">
    <div class="my-container">
        <div class="xizmatlar-in">
            <h1 class="txt-33 nav-text text-center">
                Bizning <span>xizmatlar</span>
            </h1>
            <div class="my-cards-6 w-full flex">
                <div class="xizmat-card">

                    @foreach($activeServices as $service)

{{--                        @dd($service->getImageUrl())--}}
                        <div class="xizmat-card">
                            <a href="#">
                                <div class="icon-bg center">
                                    <img src="{{$service->getImageUrl()}}" alt="">
                                </div>
                                <p class="txt-18">
                                    {{ $service->getTranslation('name', app()->getLocale()) }}
                                </p>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <BannerSlider/>
    </div>
</div>
