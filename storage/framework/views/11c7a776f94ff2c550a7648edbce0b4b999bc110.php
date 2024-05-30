<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [uz]</label>
        <input type="text" class="form-control" id="nameInput" name="name_uz"
               value="<?php echo e(old("name_uz") ?? $response->getTranslation('name','uz')); ?>">
        <?php $__errorArgs = ['name_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [ru]</label>
        <input type="text" class="form-control" id="nameInput" name="name_ru"
               value="<?php echo e(old("name_ru") ?? $response->getTranslation('name','ru')); ?>">
        <?php $__errorArgs = ['name_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [en]</label>
        <input type="text" class="form-control" id="nameInput" name="name_en"
               value="<?php echo e(old("name_en") ?? $response->getTranslation('name','en')); ?>">
        <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot Uz</label>
        <div class="form-floating">
                                <textarea id="noImage1" class="form-control" name="content_uz" required
                                          style="height: 100px"><?php echo e(old("content_uz") ?? $response->getTranslation('content','uz')); ?></textarea>
            <?php $__errorArgs = ['content_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">* <?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot Ru</label>
        <div class="form-floating mt-3">
                                <textarea id="noImage3" class="form-control" name="content_ru" required
                                          style="height: 100px"><?php echo e(old("content_ru") ?? $response->getTranslation('content','ru')); ?></textarea>
            <?php $__errorArgs = ['content_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">* <?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot En</label>
        <div class="form-floating mt-3">
                                <textarea id="noImage2" class="form-control" name="content_en" required
                                          style="height: 100px"><?php echo e(old("content_en") ?? $response->getTranslation('content','en')); ?></textarea>
            <?php $__errorArgs = ['content_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-danger">* <?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Rasmi</label>
        <input type="file" name="image"
               class="form-control  <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
               id="image">
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <img src="<?php echo e($response->getImageUrl()); ?>"
                 alt="" id="showImage" class="rounded avatar-lg" style="width: 60px">
        </div>
    </div>
    <div class="form-group">
        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate"
             style="width: 120px;">
            <div class="bootstrap-switch-container" style="width: 250px; margin-left: 0px;">
                <input type="checkbox" name="status" data-bootstrap-switch="" data-off-color="danger"
                       data-off-text="Nofaol"
                       data-on-color="success" data-on-text="Faol"
                       <?php echo e($response->isChecked()); ?> value="<?php echo e($response->isChecked() ? 1 :0); ?>">
            </div>
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary float-right">Saqlash</button>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>

    <script>
        CKEDITOR.replace('content_uz', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
        CKEDITOR.replace('content_en', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
        CKEDITOR.replace('content_ru', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/admin/services/form.blade.php ENDPATH**/ ?>