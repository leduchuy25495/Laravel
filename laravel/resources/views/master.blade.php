<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trang Chủ</title>
  <base href="{{asset('')}}">
  <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
  <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
  <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
  <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
  <link rel="stylesheet" href="source/assets/dest/css/animate.css">
  <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">

   <link rel="stylesheet" href="source/assets/dest/css/style.css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

<link href="https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_nav/css/bootsnav.css" rel="stylesheet">


    </head>
    <body>
    @include('header')
  <div class="rev-slider">
    @yield('content')
  </div> <!-- .container -->
  @include('footer')

<!-- include js files -->

  <!-- include js files -->
  <script src="source/assets/dest/js/jquery.js"></script>
  <script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
  <script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
  <script src="source/assets/dest/vendors/animo/Animo.js"></script>
  <script src="source/assets/dest/vendors/dug/dug.js"></script>
  <script src="source/assets/dest/js/scripts.min.js"></script>
  <script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="source/assets/dest/js/waypoints.min.js"></script>
  <script src="source/assets/dest/js/wow.min.js"></script>
  <!--customjs-->
  <script src="source/assets/dest/js/custom2.js"></script>





 </body>
</html>
