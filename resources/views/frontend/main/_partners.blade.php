<div class="my-section">
    <div class="my-container">
        <div class="my-section-in">
            <h1 class="txt-33 nav-text text-center">
                Foydali Havolalar
            </h1>
            <div class="news-slider partner-slider">
                <div class="partnersSwiper slider-fikr w-100 mt-3 overflow-hidden">
                    <div class="swiper-wrapper ">
                        @foreach($activeLinks as $link)
                        <div class="swiper-slide">
                            <a href="{{$link->url}}" class="partner-card" target="_blank">
                                <div class="top-img">
                                    <img src="{{$link->getImageUrl()}}" alt="slide.name">
                                </div>
                                <p class="txt-14 partnerClamp">
                                    {{ $link->getTranslation('name', app()->getLocale()) }}
                                </p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
