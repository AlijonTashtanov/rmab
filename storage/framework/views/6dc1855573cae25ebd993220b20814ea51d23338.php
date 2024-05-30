<div>
    <div class="card">
        <div class="card-header">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nomi [uz]</th>
                    <th>Rasm</th>
                    <th>Holati</th>
                    <th>Actions</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e((($items->currentpage()-1)*$items->perpage()+($loop->index+1))); ?></td>
                        <td><?php echo e($item->getTranslation('name','uz')); ?></td>
                        <td>
                            <img src="<?php echo e($item->getImageUrl()); ?>"
                                 alt="" style="width: 60px;height: 60px">
                        </td>
                        <td><?php echo $item->getStatusBadgeName(); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.'.$this->route.'.show', $item->id)); ?>" class="btn btn-primary"><i
                                    class="fas fa-eye"></i> Ko'rish</a>
                            <a href="<?php echo e(route('admin.'.$this->route.'.edit', $item->id)); ?>" class="btn btn-success"><i
                                    class="fas fa-pencil-alt"></i> Tahrirlash</a>
                            <form action="<?php echo e(route('admin.'.$this->route.'.destroy', $item->id)); ?>" method="POST"
                                  class="d-inline-block">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i> O'chirish
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">No data found :(</td>
                    </tr>
                <?php endif; ?>
            </table>
            <div class="d-flex justify-content-between py-3">
                <div>
                    <select class="form-control form-select" id="pagination" wire:model="perPage">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <?php echo e($items->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/livewire/service/service-table.blade.php ENDPATH**/ ?>