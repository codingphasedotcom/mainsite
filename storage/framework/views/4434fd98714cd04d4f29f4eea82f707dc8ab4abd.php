 <?php $__env->startSection('content'); ?>
<div id="channels">
  <div>

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

                  <?php if(isset($post->user->user_img)): ?>
                    <img src="<?php echo e($post->user->user_img); ?>" />
                  <?php else: ?> 
                    <img src="/img/defaults/user-no-img.png" />
                  <?php endif; ?>
                  

                </div>
                <div class="user-name"><?php echo e($post->user->username); ?></div>
                <div class="user-stats">
                  <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                  <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
                </div>
              </div>
              <div class="user-post post">
                <h2><a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>">
              <strong>
                <?php if($post->post_type_id == 1 ): ?>
                Link:
                <?php elseif( $post->post_type_id == 2 ): ?>
                Blog:
                <?php else: ?> 
                Q&A:
                <?php endif; ?>
              </strong> 
                <?php echo e($post->title); ?>

                </a>
                </h2>
                <a href="<?php echo e($post->link_url); ?>" target="new" >
                  <div class=""
                  style="background: url(<?php echo e($post->image_url); ?>) no-repeat center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;height: 250px;"></div>
                </a>
              </div>
            </div>
            </div>
            </div>

            <div class="col-md-8">
              <div class="content-box post-box comment">
                <form action="/channels/<?php echo e($post->channel->slug); ?>/<?php echo e($post->slug); ?>/comment" method="POST">
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" name="pi" value="<?php echo e($post->id); ?>">
                  <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                    <label for="description">Comment</label>
                    <textarea type="text" class="form-control" id="description" placeholder="leave a respectful comment...." name="description"><?php echo e(old('description')); ?></textarea>                  
                      <?php if($errors->has('description')): ?>
                      <span class="help-block">
                        <strong>
                          <?php echo e($errors->first('description')); ?>

                          </strong>
                      </span> 
                      <?php endif; ?>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content-box post-box question">
                  <div class="user-info">
                    <div class="user-img">
                      <i class="fa fa-bolt" aria-hidden="true"></i>
                      <?php if(isset($comment->user->user_img)): ?>
                        <img src="<?php echo e($comment->user->user_img); ?>" />
                      <?php else: ?> 
                        <img src="/img/default/user-no-img.png" />
                      <?php endif; ?>

                    </div>
                    <div class="user-name"><?php echo e($comment->user->username); ?></div>
                    <div class="user-stats">
                      <span>132</span><i class="fa fa-star" aria-hidden="true"></i>
                      <span>23</span><i class="fa fa-heart" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="user-post post">
                    <p>
                      <?php echo e($comment->description); ?>

                    </p>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              <center>
                <?php echo e($comments->links()); ?>

              </center>
            </div>
            <div class="col-md-4">
              <div class="content-box post-box question">
                <center>
                  <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </center>
                </div>
            </div>


            </div>

        
    </div>
  </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>