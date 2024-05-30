<?php
    use App\Models\Service;

    $activeServices = Service::all(); ?>
<div class="xizmatlar my-section">
    <div class="my-container">
        <div class="xizmatlar-in">
            <h1 class="txt-33 nav-text text-center">
                Bizning <span>xizmatlar</span>
            </h1>
            <div class="my-cards-6 w-full flex">
                <div class="xizmat-card">
                    <?php $__currentLoopData = $activeServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="xizmat-card">
                            <a href="#">
                                <div class="icon-bg center">
                                    <img src="<?php echo e($service->getImageUrl()); ?>" alt="">
                                </div>
                                <p class="txt-18">
                                    <?php echo e($service->getTranslation('name', app()->getLocale())); ?>

                                </p>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
        <BannerSlider/>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_services.blade.php ENDPATH**/ ?>