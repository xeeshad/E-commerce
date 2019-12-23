<?php $__env->startSection('content'); ?>
<!--Start Sidebar+ Content -->
<div class='container margin-top-20'>
  <div class="row">
    <div class="col-md-4">
      <?php echo $__env->make('partials.product-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <div class="col-md-8">
      <div class="widget">
        <h3>Feature product</h3>
        <div class="row">

          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="<?php echo e(asset('Images/Product/'.'seclo40.png')); ?>" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="<?php echo e(asset('Images/Product/'.'seclo40.png')); ?>" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="<?php echo e(asset('Images/Product/'.'seclo40.png')); ?>" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="<?php echo e(asset('Images/Product/'.'seclo40.png')); ?>" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="widget">

      </div>

   </div>

    </div>
  </div>
</div>


<!--End Sidebar+ Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/pages/index.blade.php ENDPATH**/ ?>