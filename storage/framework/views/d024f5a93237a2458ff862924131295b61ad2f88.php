<div class="my-section">
    <div class="my-container">
        <div class="my-section-in">
            <div class="contact-page">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63837.093125490384!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4bd9dc03a3b9610d%3A0x8eb8ad30ebbab2c4!2sInSoft%20-%20Tech%20%26%20IT%20Solutions!5e0!3m2!1sru!2s!4v1715940796234!5m2!1sru!2s"
                    width="100%" max-width="692px" height="500px" style="border-radius:24px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form action="<?php echo e(route('contact.store')); ?>" class="interactive form" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="box">
                        <label class="label" for="name">Ism</label>
                        <input class="my-input txt-16" type="text" name="full_name" id="name" placeholder="Ismingizni kiritng">
                        <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="box">
                        <label class="label" for="phone-input">Telefon raqamimiz</label>
                        <input class="aplication-form__input my-input" name="phone" id="phone-input" placeholder="+998"/>
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="box">
                        <label class="label" for="note">Savolingiz</label>
                        <textarea placeholder="Savolingizni kiriting" id="inputFidbek"
                           name="comment" class="aplication-form__input my-input input-textAre__item"></textarea>
                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="box submit aplication-btn">
                        <button type="submit" class="my-btn  txt-16 contact-btn">Yuborish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/main/_contact.blade.php ENDPATH**/ ?>