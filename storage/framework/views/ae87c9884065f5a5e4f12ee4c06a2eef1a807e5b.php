<?php
/**
 * @author uluGbek <muhammadjonovulugbek98@gmail.com>
 * @link https://t.me/U_Muhammadjonov
 * @date 27-May-24, 23:00
 */

?>

<?php $__env->startSection('content'); ?>
    <!-- MY NAVIGATION END -->
    <div class="detail-page">
        <div class="my-container">
            <div class="detail-page-in">
                <?php echo $__env->make('layouts.frontend._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="detail-content">
                    <div class="my-about">
                        <div class="grid-1">
                            <div class="my-about">
                                <h1 class="txt-33 nav-text">Vakansiyalar</h1>
                                <div class="flex flex-col gap-[20px]">
                                    <?php $__currentLoopData = $activeVacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a href="#" class="vakansia-card" external>
                                            <img src="<?php echo e($vacancy->getImageUrl()); ?>" alt="image" class="top"/>
                                            
                                            <div class="text-blog">
                                                <p class="txt-16 nav-text">
                                                    <span><?php echo e($vacancy->salary); ?></span>
                                                </p>
                                                <p class="txt-18 nav-text"><?php echo e($vacancy->getTranslation('title', app()->getLocale())); ?></p>
                                                <p class="txt-16 fw-light sec-text">
                                                    <?php echo e($vacancy->getTranslation('description', app()->getLocale())); ?>

                                                </p>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(() => {
            document.querySelectorAll(".accordion-header").forEach((button) => {
                button.addEventListener("click", () => {
                    const accordionContent = button.nextElementSibling;

                    button.classList.toggle("active");

                    if (button.classList.contains("active")) {
                        accordionContent.style.maxHeight =
                            accordionContent.scrollHeight + "px";
                    } else {
                        accordionContent.style.maxHeight = 0;
                    }

                    // Close other open accordion items
                    document
                        .querySelectorAll(".accordion-header")
                        .forEach((otherButton) => {
                            if (otherButton !== button) {
                                otherButton.classList.remove("active");
                                otherButton.nextElementSibling.style.maxHeight = 0;
                            }
                        });
                });
            });
        }, 2000);

        //contact maska
        const phoneInput = document.getElementById("inputNumber");
        const phoneMask = IMask(phoneInput, {
            mask: "+{998}(90) 000-00-00",
        });

    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/frontend/vacancy/index.blade.php ENDPATH**/ ?>