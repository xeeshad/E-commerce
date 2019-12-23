  
  <?php $__env->startSection('content'); ?>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-header">
          EDIT PRODUCT

        </div>

        <div class="card-body">
          <form action="<?php echo e(route('admin.product.update',$product->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($product->title); ?>" >

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>

          <textarea name="description" rows="8" cols="80"class="from-control"><?php echo e($product->description); ?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Price</label>
          <input type="number" class="form-control" name="price" id="exampleInputEmail1" value="<?php echo e($product->price); ?>">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quantity</label>
          <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" value="<?php echo e($product->quantity); ?>">

        </div>
        <div class="form-group">
          <label for="product_image">Product Image</label>
          <input type="file" class="form-control" name="product_image" id="product_image" >

        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
      </form>


        </div>


      </div>

    </div>
  </div>
  <!-- main-panel ends -->

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaraEcommerce\resources\views/admin/pages/product/edit.blade.php ENDPATH**/ ?>