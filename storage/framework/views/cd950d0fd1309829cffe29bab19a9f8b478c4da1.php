<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Coding Phase <?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,600|Roboto:300,400,500,700,900" rel="stylesheet">
        <!-- Styles -->
        <?php echo $__env->yieldContent('top'); ?>
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>

        <link rel="stylesheet" href="<?php echo e(elixir('/css/app.css')); ?>">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-37043736-9', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    <body>



    <div class="page-content">
      <?php echo $__env->make('includes/navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('includes/mobile-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <section id="backend">



            <section class="content">
       <?php echo $__env->yieldContent('content'); ?> 
            </section>

          </section>
    </div>





    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $( ".desktop-nav" ).on( "click", '.fa-bars', function() {

        $('.page-content').addClass('menu-open');
        $( ".desktop-nav .fa" ).removeClass('fa-bars');
        $( ".desktop-nav .fa" ).addClass('fa-times');
      } );

      $( ".desktop-nav" ).on( "click", '.fa-times', function() {

        $('.page-content').removeClass('menu-open');
        $( ".desktop-nav .fa" ).removeClass('fa-times');
        $( ".desktop-nav .fa" ).addClass('fa-bars');
      } );
    });

    </script>
    <script src="/js/app.js"></script>
</body>
</html>
