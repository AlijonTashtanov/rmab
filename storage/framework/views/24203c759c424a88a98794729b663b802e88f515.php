<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="m-0 text-dark"><?php echo e($title); ?></h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="<?php echo e(route($parentRoute)); ?>"><i class="<?php echo e($parentIcon); ?>"></i> <?php echo e($parent); ?></a></li>
            <li class="breadcrumb-item active"><i class="<?php echo e(isset($icon) ? $icon: 'fas fa-pencil-alt'); ?>"></i> <?php echo e($title); ?>

            </li>
        </ol>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/components/headers.blade.php ENDPATH**/ ?>