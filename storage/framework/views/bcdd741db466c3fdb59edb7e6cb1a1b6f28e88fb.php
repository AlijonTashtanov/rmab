<?php $__env->startSection('title'); ?>
    Xizmatlar
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => ['icon' => 'fas fa-circle','title' => 'Xizmatlar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fas fa-circle','title' => 'Xizmatlar']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div class="d-flex justify-content-end py-2">
        <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('service.service-table')->html();
} elseif ($_instance->childHasBeenRendered('H3IalWP')) {
    $componentId = $_instance->getRenderedChildComponentId('H3IalWP');
    $componentTag = $_instance->getRenderedChildComponentTagName('H3IalWP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('H3IalWP');
} else {
    $response = \Livewire\Livewire::mount('service.service-table');
    $html = $response->html();
    $_instance->logRenderedChild('H3IalWP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/admin/services/index.blade.php ENDPATH**/ ?>