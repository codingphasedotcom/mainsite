<?php $__env->startSection('content'); ?>
<div id="channels">
  <div class="">

    <div id="posts" class="row">

      <div class="col-md-3 col-lg-3">
        <center>
          <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        </center>
      </div>
      <div class="col-md-9 col-lg-8">
        <div class="content-box">
          <div class="filter-section">
            <div class="row">
              <div class="col-xs-8 col-md-9">
                <div class="col-xs-6 filter-dropdown">
                  Popular <i class="fa fa-sort-desc" aria-hidden="true"></i>
                </div>
                <div class="col-xs-6 filter-dropdown">
                  Rising <i class="fa fa-line-chart" aria-hidden="true"></i>

                </div>
              </div>
              <div class="col-xs-4 col-md-3 dropdown">
                <a href="/channels/<?php echo e($channel); ?>/new" class="add-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Post

                </a>
                <ul class="dropdown-menu" role="menu" style="width: 100%;">
                    <li>
                        <a href="/channels/<?php echo e($channel); ?>/new-link">
                            Link
                        </a>
                    </li>
                    <li>
                        <a href="/channels/<?php echo e($channel); ?>/new-blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="/channels/<?php echo e($channel); ?>/new-question">
                            Question
                        </a>
                    </li>
                </ul>


              </div>
            </div>
          </div>
        </div>

        <div class="">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($post->post_type_id == 1): ?>
        
        <div class="col-md-6">
          <div class="content-box post-box link">
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
              <h2>
              <a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>"><strong>LINK:</strong> <?php echo e($post->title); ?>

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
              

              <p><?php echo e($post->description); ?></p>
                <div class="post-buttons">
                  <a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>">
                    <div class="comment-btn">
                      Comment
                    </div>
                  </a>
                </div>
            </div>
          </div>
        </div>

          <?php elseif($post->post_type_id == 2): ?>
          <div class="col-md-6">
          <div class="content-box post-box blog">
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
              <h2><a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>"><strong>Blog:</strong> <?php echo e($post->title); ?>

              </a></h2>
              <p><?php echo e($post->description); ?></p>
                  <div class="post-buttons">
                    <a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>">
                      <div class="more-btn">
                        View More
                      </div>
                    </a>
                    <a href="/channels/<?php echo e($channel); ?>/<?php echo e($post->slug); ?>">
                      <div class="comment-btn">
                        Comment
                      </div>
                    </a>
                  </div>
            </div>
            
          </div>
          </div>

          <?php else: ?>
          <div class="col-md-6">
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

        <?php endif; ?>
          

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="content-box post-box post">
        
          <center>
            <?php echo $__env->make('includes/sideAds', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </center>
        </div>

        <div class="content-box post-box post">
        <center>
        <?php echo e($posts->links()); ?>

        </center>
        </div>


      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>