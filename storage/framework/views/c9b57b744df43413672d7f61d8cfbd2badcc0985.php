<div class="my-section bg-gray">
    <div class="my-container">
        <div class="my-section-in">
            <div class="about-page">
                <div class="img-bg center">
                    <img src="<?php echo e($activeAbout?->getImageUrl()); ?>" alt="aboutInfo.data.title">
                </div>
                <div class="text-blog">
                    <p class="txt-33 nav-text">
                        <?php echo e($activeAbout?->getTranslation('title', app()->getLocale())); ?>

                    </p>
                    <p class="txt-18 sec-text">
                        <?php echo e($activeAbout?->getTranslation('description', app()->getLocale())); ?>

                    </p>

                    <a href="<?php echo e(route('about')); ?>">
                        <button class="my-btn">Batafsil</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_about.blade.php ENDPATH**/ ?>