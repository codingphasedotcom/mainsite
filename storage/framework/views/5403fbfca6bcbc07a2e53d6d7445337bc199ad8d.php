<?php $__env->startSection('content'); ?>
<div id="channels">
  <div class="container">

    <div class="row">

      <div class="col-md-3">
        <center>
          <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        </center>
      </div>
      <div class="col-md-9">
        <div class="content-box">
          <div class="filter-section">
            <div class="row">
              <div class="col-xs-9 col-md-9">
                <div class="filter-dropdown">
                  Popular <i class="fa fa-sort-desc" aria-hidden="true"></i>
                </div>
                <div class="filter-dropdown">
                  Rising <i class="fa fa-line-chart" aria-hidden="true"></i>

                </div>
              </div>
              <div class="col-xs-3 col-md-3">
                <a href="/channels/submit" class="add-btn">
                  Add Channel
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-xs-6 col-md-3">
              <div class="channel">

                <a href="/channels/<?php echo e($channel->slug); ?>">
                  <div class="circle spin-circle" style="background-image: linear-gradient(135deg,rgba(181,18,18,.2) 0,#002d77 100%),url(<?php echo e($channel->logo_img); ?>);
    background-position: center;
    background-size: cover;">
                  <div class="letter">
                    <?php 
                      echo substr($channel->title,0)
                     ?>

                  </div>
                </div>
                </a>
                <div class="channel-title"><?php echo e($channel->title); ?></div>
                <a href="#" class="follow-btn">
                  Follow
                </a>
              </div>
            </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>

        <div class="center-ad">
          <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

      </div>

    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>