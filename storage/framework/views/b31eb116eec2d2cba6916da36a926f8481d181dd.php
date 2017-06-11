<section id="header">
    <div class="logo">

      <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('/img/logoblack.png')); ?>"  class="logoimg"/></a>
    </div>

  


  <div class="menu">

    <ul class="desktop-nav">
     <li><a href="/channels">Channels</a></li>
     <li><a href="#">Stacks</a></li>
     <li><a href="/resources">Resources</a></li>
     <li><a href="/podcasts">Podcasts</a></li>
     <li><a href="http://www.crystalcasts.io">crystalcast.io</a></li>
      <li class="burger">
        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </li>
      <?php if(Auth::guest()): ?>
         <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
         <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
     <?php else: ?>
         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                 <?php echo e(Auth::user()->fname); ?> <span class="caret"></span>
             </a>

             <ul class="dropdown-menu" role="menu">
                 <li>
                     <a href="<?php echo e(route('logout')); ?>"
                         onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                         Logout
                     </a>

                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                         <?php echo e(csrf_field()); ?>

                     </form>
                 </li>
             </ul>
         </li>
     <?php endif; ?>
    </ul>


  </div>
</section>
