<?php $__env->startSection('content'); ?>
  <div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New channel
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin/channels"><i class="fa fa-dashboard"></i> channels</a></li>
        <li class="active">New channel</li>
      </ol>
    </section>

    <form action="/admin/channels/<?php echo e($channel->id); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

      <?php echo e(method_field('PUT')); ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-9">

          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Quick Example</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                    <label for="title">Channel Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter email" value="<?php echo e($channel->title); ?>" name="title" >
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter email" name="description"><?php echo e($channel->description); ?></textarea>
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('description')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>

                  <div class="form-group<?php echo e($errors->has('logo_img') ? ' has-error' : ''); ?>">
                    <label for="logo_img">Logo URL</label>
                    <input type="text" class="form-control" id="logo_img" placeholder="Enter Image URL"  value="<?php echo e($channel->logo_img); ?>" name="logo_img">
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('logo_img')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>

                  <div class="form-group<?php echo e($errors->has('submitted_id') ? ' has-error' : ''); ?>">
                    <label for="logo_img">Submitted By (UserId)</label>
                    <input type="text" class="form-control" id="submitted_id" placeholder="Enter Image URL"  value="<?php echo e($channel->submitted_id); ?>" name="submitted_id">
                    <?php if($errors->has('submitted_id')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('logo_img')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>

                  <div class="form-group<?php echo e($errors->has('approved') ? ' has-error' : ''); ?>">
                    <label for="logo_img">Status</label>
                    <select class="form-control" name="approved">
                      <?php if($channel->approved): ?>
                        <option value="1" selceted>Approved</option>
                        <option value="0">Pending</option>
                      <?php else: ?>
                        <option value="1">Approved</option>
                        <option value="0" selected>Pending</option>
                      <?php endif; ?>
                    </select>
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('logo_img')); ?></strong>
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


    <!-- /.content -->
  </div>







<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.js"></script>


<script>
  var allSkills;





  $(".skill-list").select2({
      placeholder: "Select a skill",
      allowClear: true
    });
</script>


  <script>
  $('.modal-primary').on('shown.bs.modal', function () {
  $('.add-skills').focus()
  })
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>