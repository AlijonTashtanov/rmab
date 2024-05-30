<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        <!-- Navbar Search -->
        
        
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <?php if(Cookie::get('darkMode')): ?>
            <a class="nav-link" data-widget="light-mode" href="<?php echo e(route('setCookie', 'lightMode')); ?>" role="button">
                <i class="fas fa-sun fs-1"></i>
            </a>
            <?php else: ?>
            <a class="nav-link" data-widget="dark-mode" href="<?php echo e(route('setCookie', 'darkMode')); ?>" role="button">
                <i class="fas fa-moon fs-1"></i>
            </a>
            <?php endif; ?>
        </li>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-dropdown', [])->html();
} elseif ($_instance->childHasBeenRendered('bmQgDNi')) {
    $componentId = $_instance->getRenderedChildComponentId('bmQgDNi');
    $componentTag = $_instance->getRenderedChildComponentTagName('bmQgDNi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bmQgDNi');
} else {
    $response = \Livewire\Livewire::mount('admin.user-dropdown', []);
    $html = $response->html();
    $_instance->logRenderedChild('bmQgDNi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </ul>
</nav>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/admin/layouts/navbar.blade.php ENDPATH**/ ?>