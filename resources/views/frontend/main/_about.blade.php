<div class="my-section bg-gray">
    <div class="my-container">
        <div class="my-section-in">
            <div class="about-page">
                <div class="img-bg center">
                    <img src="{{$activeAbout?->getImageUrl()}}" alt="aboutInfo.data.title">
                </div>
                <div class="text-blog">
                    <p class="txt-33 nav-text">
                        {{ $activeAbout?->getTranslation('title', app()->getLocale()) }}
                    </p>
                    <p class="txt-18 sec-text">
                        {{ $activeAbout?->getTranslation('description', app()->getLocale()) }}
                    </p>

                    <a href="#">
                        <button class="my-btn">Batafsil</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
