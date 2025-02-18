<?php


?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Rmab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="<?php echo e(asset('template/scss/main.css')); ?>"/>
        <!-- Other meta tags -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
<?php echo $__env->make('layouts.frontend._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.frontend._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- <link ref="stylesheet" href="./scss/swiper-bundle.min.css"> -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/imask"></script>
<script src="<?php echo e(asset('template/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('template/js/app.js')); ?>"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/app.js"></script>

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
</script>
</body>
</html>

<?php /**PATH C:\OSPanel\domains\rmab-backend\resources\views/layouts/frontend/main.blade.php ENDPATH**/ ?>