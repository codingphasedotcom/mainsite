<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CodingPhase</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,500,600,700|Raleway:300,400,500" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Styles -->
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-37043736-9', 'auto');
          ga('send', 'pageview');

        </script>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>


    <div class="page-content">
    @include('includes/mobile-nav')
      @include('includes/navigation')

      @yield('content')
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