<?php $__env->startSection('content'); ?>
<div id="channels">
  <div >

    <div id="posts" class="row">

      <div class="col-md-3 col-lg-3">
        <center>
          <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        </center>
      </div>
      <div class="col-md-9 col-lg-8">
        
        <div class="">
       
          <div class="col-md-12">
           <div class="content-box post-box question">
            <div class="user-info">
              <div class="user-img">
                <i class="fa fa-bolt" aria-hidden="true"></i>
                <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg"/>

              </div>
              <div class="user-name"><?php echo e($post->user->username); ?></div>
              <div class="user-stats">
                <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
              </div>
            </div>
            <div class="user-post post">
              <h2><a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>">
              <strong>Q&A:</strong> <?php echo e($post->title); ?>

              </a></h2>
                <div class="post-buttons">
                  <a href="<?php echo e($post->link_url); ?>" target="new" >
                    <div class="more-btn">
                      View More
                    </div>
                  </a>
                  <div class="comment-btn">
                    Comment
                  </div>
                </div>
            </div>
          </div>
          </div>

          

        </div>

        <div class="content-box post-box post">
        
          <center>
            <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </center>
        </div>

        


      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>