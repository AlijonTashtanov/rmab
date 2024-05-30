<div class="my-section">
    <div class="my-container">
        <div class="my-section-in">
            <div class="top-nav">
                <h1 class="txt-33 nav-text">
                    Sayt <span>Yangiliklar</span>
                </h1>
                <a href="<?php echo e(route('news')); ?>">
                    <button class="my-btn1">
                        Barchasi
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                             fill="none">
                            <path
                                d="M13.4697 9.03033C13.1768 8.73744 13.1768 8.26256 13.4697 7.96967C13.7626 7.67678 14.2374 7.67678 14.5303 7.96967L18.5303 11.9697C18.8232 12.2626 18.8232 12.7374 18.5303 13.0303L14.5303 17.0303C14.2374 17.3232 13.7626 17.3232 13.4697 17.0303C13.1768 16.7374 13.1768 16.2626 13.4697 15.9697L16.1893 13.25H6.5C6.08579 13.25 5.75 12.9142 5.75 12.5C5.75 12.0858 6.08579 11.75 6.5 11.75H16.1893L13.4697 9.03033Z"
                                fill="#38434E"/>
                        </svg>
                    </button>
                </a>
            </div>
            <div class="news-slider">
                <button class="slider-btn news-lider-prev prev hov">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M10.5303 9.03033C10.8232 8.73744 10.8232 8.26256 10.5303 7.96967C10.2374 7.67678 9.7626 7.67678 9.4697 7.96967L5.4697 11.9697C5.1768 12.2626 5.1768 12.7374 5.4697 13.0303L9.4697 17.0303C9.7626 17.3232 10.2374 17.3232 10.5303 17.0303C10.8232 16.7374 10.8232 16.2626 10.5303 15.9697L7.8107 13.25H17.5C17.9142 13.25 18.25 12.9142 18.25 12.5C18.25 12.0858 17.9142 11.75 17.5 11.75H7.8107L10.5303 9.03033Z"
                            fill="white"/>
                    </svg>
                </button>
                <button class="slider-btn news-lider-next next hov">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path
                            d="M13.4697 9.03033C13.1768 8.73744 13.1768 8.26256 13.4697 7.96967C13.7626 7.67678 14.2374 7.67678 14.5303 7.96967L18.5303 11.9697C18.8232 12.2626 18.8232 12.7374 18.5303 13.0303L14.5303 17.0303C14.2374 17.3232 13.7626 17.3232 13.4697 17.0303C13.1768 16.7374 13.1768 16.2626 13.4697 15.9697L16.1893 13.25H6.5C6.08579 13.25 5.75 12.9142 5.75 12.5C5.75 12.0858 6.08579 11.75 6.5 11.75H16.1893L13.4697 9.03033Z"
                            fill="white"/>
                    </svg>
                </button>
                <div class="newsSwiper slider-fikr w-100 mt-3 overflow-hidden">
                    <?php $__currentLoopData = $activeNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <a class="news-card">
                                <img src="<?php echo e($news->getImageUrl()); ?>" alt="">

                                <div class="text-blog">
                                    <p class="txt-16 time-sec">
                                        <?php echo e($news->created_at); ?>

                                    </p>
                                    <p class="txt-20 nav-text clamp">
                                        <?php echo e($news->getTranslation('title', app()->getLocale())); ?>

                                    </p>
                                </div>
                            </a>
                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_news-slider.blade.php ENDPATH**/ ?>