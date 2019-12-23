<?php $__env->startSection('content'); ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
        MANAGE PRODUCT

      </div>

      <div class="card-body">
        <table class="table table-hover table-striped">
          <tr>
            <th>#</th>
            <th>Product Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td>#</td>
            <td><?php echo e($product->title); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->quantity); ?></td>
            <td>
              <a href="<?php echo e(route('admin.product.edit', $product->id)); ?>" class="btn btn-success">Edit</a>
              <a href="#deleteModal<?php echo e($product->id); ?>" data-toggle="modal" class="btn btn-danger">Delete</a>

              <!-- delete Modal -->
              <div class="modal fade" id="deleteModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this item? </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <from action="(!!route('admin.product.delete', $product->id) !!)" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="submit" class="btn btn-danger">Permanent Delete</button>

                      </from>

                    </div>
                    <div class="modal-footer">

                      <button type="button" class="btn btn-primary">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>


            </td>

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </table>

      </div>


    </div>

  </div>
</div>
<!-- main-panel ends -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/admin/pages/product/index.blade.php ENDPATH**/ ?>