<div class="banner-slider mb-10">
    <div class="my-container relative">
        <button class="slider-btn slider-banner-prev prev hov">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path
                    d="M10.5303 9.03033C10.8232 8.73744 10.8232 8.26256 10.5303 7.96967C10.2374 7.67678 9.7626 7.67678 9.4697 7.96967L5.4697 11.9697C5.1768 12.2626 5.1768 12.7374 5.4697 13.0303L9.4697 17.0303C9.7626 17.3232 10.2374 17.3232 10.5303 17.0303C10.8232 16.7374 10.8232 16.2626 10.5303 15.9697L7.8107 13.25H17.5C17.9142 13.25 18.25 12.9142 18.25 12.5C18.25 12.0858 17.9142 11.75 17.5 11.75H7.8107L10.5303 9.03033Z"
                    fill="white"/>
            </svg>
        </button>
        <button class="slider-btn slider-banner-next next hov">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path
                    d="M13.4697 9.03033C13.1768 8.73744 13.1768 8.26256 13.4697 7.96967C13.7626 7.67678 14.2374 7.67678 14.5303 7.96967L18.5303 11.9697C18.8232 12.2626 18.8232 12.7374 18.5303 13.0303L14.5303 17.0303C14.2374 17.3232 13.7626 17.3232 13.4697 17.0303C13.1768 16.7374 13.1768 16.2626 13.4697 15.9697L16.1893 13.25H6.5C6.08579 13.25 5.75 12.9142 5.75 12.5C5.75 12.0858 6.08579 11.75 6.5 11.75H16.1893L13.4697 9.03033Z"
                    fill="white"/>
            </svg>
        </button>
        <div class=" BannerSwiper slider-fikr w-100 mt-3 overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($activeHomeBanners as $homeBanner)
                    <div class="swiper-slide">
                        <div class="banner-slider-item">
                            <img src="{{$homeBanner->getImageUrl()}}" alt="image">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
