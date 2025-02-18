<?php $__env->startSection('content'); ?>
    <!-- BANNERS -->
<?php echo $__env->make('frontend.main._banners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--END BANNERS -->
    <!-- XIZMATLAR -->
<?php echo $__env->make('frontend.main._services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--END XIZMATLAR -->

    <!-- BANNER SLIDER -->
<?php echo $__env->make('frontend.main._banner-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- BANNER SLIDER END -->

    <!-- ABOUT SECTION -->
<?php echo $__env->make('frontend.main._about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ABOUT SECTION END -->

    <!-- NEWS SLIDER -->
<?php echo $__env->make('frontend.main._news-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- NEWS SLIDER END -->

    <!-- MAP SECTION -->
<?php echo $__env->make('frontend.main._map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- MAP SECTION END -->

    <!-- PARTNERS -->
<?php echo $__env->make('frontend.main._partners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- PARTNERS END -->

    <!-- CONTACT -->
<?php echo $__env->make('frontend.main._contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- CONTACT END -->

<?php $__env->stopSection(); ?>

































<?php echo $__env->make('layouts.frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/index.blade.php ENDPATH**/ ?>