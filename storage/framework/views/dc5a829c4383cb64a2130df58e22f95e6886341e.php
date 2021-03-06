<?php $__env->startSection('content'); ?>
<div id="podcasts">
  <div class="container">

    <div class="row">

      <div class="col-md-3">
        <center>
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- responsive -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-1876888588409540"
               data-ad-slot="6100356041"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>


        </center>
      </div>
      <div class="col-md-9">
        <span class="small-title">Latest Podcasts</span>
        <div class="content-box">
          <?php $__currentLoopData = $podcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="podcast-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo e($podcast->youtube_id); ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="listen-links">
                    <strong>Listen: </strong>
                    <a target="new" href="https://itunes.apple.com/us/podcast/codingphase-podcast/id1215522961#">Itunes</a>
                    <a target="new" href="https://play.google.com/music/m/I5q357nmut4dbmr73mjecirnpu4?t=CodingPhase_Podcast">Google Play</a>
                    <a target="new" href="http://www.stitcher.com/podcast/codingphase/coding-phase">Stitcher</a>
                    <a target="new" href="https://player.fm/series/codingphase-podcast">Player.FM</a>
                  </div>
                </div>
                <div class="col-md-8">
                  <h3><?php echo e($podcast->title); ?></h3>

                  <?php echo $podcast->description; ?>


                </div>

              </div>

          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

      </div>

    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>