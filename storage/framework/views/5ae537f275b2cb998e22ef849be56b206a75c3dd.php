<?php $__env->startSection('content'); ?>
<div id="channels">
  <div class="container">

    <div class="row">

      <div class="col-sm-3">
        <center>
          <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        </center>
      </div>
      <div class="col-sm-9">
        <div class="content-box">
          <form action="/channels/<?php echo e($channel); ?>/submit" method="POST">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" value="<?php echo e($channelData->id); ?>" name="cnum" >
            <input type="hidden" value="3" name="ctype" >
          <!-- Main content -->
          <section class="content">
            <div class="row">

              <div class="col-md-offset-1 col-md-10">

                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Create Link</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">

                        <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                          <label for="title">Link Title</label>
                          <input type="text" class="form-control" id="title" placeholder="title" value="<?php echo e(old('title')); ?>" name="title" >
                          <?php if($errors->has('title')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('title')); ?></strong>
                              </span>
                          <?php endif; ?>
                        </div>
                        <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                          <label for="description">Short Description</label>
                          <textarea type="text" class="form-control" id="description" placeholder="description" name="description"><?php echo e(old('description')); ?></textarea>
                          <?php if($errors->has('description')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('description')); ?></strong>
                              </span>
                          <?php endif; ?>
                        </div>

                        <div style="display: none;" class="form-group<?php echo e($errors->has('link_url') ? ' has-error' : ''); ?>">
                          <label for="link_url">Link URL</label>
                          <input type="text" class="form-control" id="link_url" placeholder="Enter Image URL"  value="none" name="link_url">
                          <?php if($errors->has('link_url')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('link_url')); ?></strong>
                              </span>
                          <?php endif; ?>
                        </div>

                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
              </div>

            </div>
            <!-- /.row -->
          </section>

        </form>




        </div>

      </div>

    </div>

  </div>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>