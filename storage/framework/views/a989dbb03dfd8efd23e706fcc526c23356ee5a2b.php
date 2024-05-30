<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
        <?php echo $__env->yieldPushContent('title'); ?>
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('includes/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('includes/dist/css/adminlte.min.css')); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo e(asset('includes/plugins/toastr/toastr.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('includes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">

    
    <link rel="stylesheet" href="<?php echo e(asset('includes/plugins/select2/css/select2.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="hold-transition <?php if(Cookie::get('darkMode')): ?> dark-mode <?php endif; ?>
    sidebar-mini sidebar-collapse layout-fixed text-sm">
<div class="wrapper">

    <!-- Preloader -->
    

    <!-- Navbar -->
    <?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content pt-3">
            <div class="container-fluid p-3">
                <?php echo $__env->yieldContent('content'); ?>
                <?php if(isset($slot)): ?>
                    <?php echo e($slot); ?>

                <?php endif; ?>
            </div>

        </section>
















        <!-- /.content-header -->

        <!-- Main content -->
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022-<?php echo e(now()->format('Y')); ?> <a
                href="tel:+998905807788">"INTERNATIONAL SOFTWARE" MCHJ</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.0.1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('includes/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('includes/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('includes/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- Toastr -->
<script src="<?php echo e(asset('includes/plugins/toastr/toastr.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('includes/dist/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('includes/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>

<script src="<?php echo e(asset('includes/plugins/select2/js/select2.full.min.js')); ?>"></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php if(session()->has('success')): ?>
    <script>
        toastr.success('<?php echo e(session('success')); ?>');
    </script>
<?php endif; ?>
<script>
    Livewire.on('toast', ({type, message}) => {
        toastr[type](message)
    })
</script>
<?php echo $__env->yieldContent('scripts'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>