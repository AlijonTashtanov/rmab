<div class="my-section">
    <div class="my-container">
        <div class="my-section-in">
            <h1 class="txt-33 nav-text text-center">
                Foydali Havolalar
            </h1>
            <div class="news-slider partner-slider">
                <div class="partnersSwiper slider-fikr w-100 mt-3 overflow-hidden">
                    <div class="swiper-wrapper ">
                        <?php $__currentLoopData = $activeLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <a href="<?php echo e($link->url); ?>" class="partner-card" target="_blank">
                                <div class="top-img">
                                    <img src="<?php echo e($link->getImageUrl()); ?>" alt="slide.name">
                                </div>
                                <p class="txt-14 partnerClamp">
                                    <?php echo e($link->getTranslation('name', app()->getLocale())); ?>

                                </p>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_partners.blade.php ENDPATH**/ ?>