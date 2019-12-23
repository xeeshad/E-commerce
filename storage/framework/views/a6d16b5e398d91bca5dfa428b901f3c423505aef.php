    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Online medicine shop</title>
          <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </head>
          <body>
            <div class="wrapper">

            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </body>
    </html>
<?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/layouts/master.blade.php ENDPATH**/ ?>