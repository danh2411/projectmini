<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DD Group</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- icons bootstrap
  ============================================ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- jquery upload 
  ============================================ -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/img/favicon.ico')}}">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/owl.transitions.css')}}">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/animate.css')}}">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/normalize.css')}}">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/meanmenu.min.css')}}">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/main.css')}}">
  <!-- educate icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/educate-custon-icon.css')}}">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/morrisjs/morris.css')}}">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/metisMenu/metisMenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/metisMenu/metisMenu-vertical.css')}}">

  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/calendar/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/calendar/fullcalendar.print.min.css')}}">

  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assets/admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>


</head>

<body>

  <!-- Nav Menu -->
  @include('admin.blocks.header')
  <!-- Nav Menu -->


  <div class="all-content-wrapper">

    <!-- content-->
    @yield('content')
    <!-- endcontent -->

    <!-- footer -->
    @include('admin.blocks.footer')
    <!-- end footer -->

  </div>

  <!-- end main -->


  <!-- js boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- modernizr JS
		============================================ -->
  <script src="{{asset('assets/admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>

  <script src="{{asset('assets/admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
  <!-- wow JS
		============================================ -->
  <script src="{{asset('assets/admin/js/wow.min.js')}}"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="{{asset('assets/admin/js/jquery-price-slider.js')}}"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="{{asset('assets/admin/js/jquery.meanmenu.js')}}"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="{{asset('assets/admin/js/owl.carousel.min.js')}}"></script>
  <!-- sticky JS
		============================================ -->
  <script src="{{asset('assets/admin/js/jquery.sticky.js')}}"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{asset('assets/admin/js/jquery.scrollUp.min.js')}}"></script>
  <!-- counterup JS
		============================================ -->
  <script src="{{asset('assets/admin/js/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/counterup/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/counterup/counterup-active.js')}}"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="{{asset('assets/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="{{asset('assets/admin/js/metisMenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/metisMenu/metisMenu-active.js')}}"></script>
  <!-- morrisjs JS
		============================================ -->
  <script src="{{asset('assets/admin/js/morrisjs/raphael-min.js')}}"></script>
  <script src="{{asset('assets/admin/js/morrisjs/morris.js')}}"></script>
  <script src="{{asset('assets/admin/js/morrisjs/morris-active.js')}}"></script>
  <!-- morrisjs JS
		============================================ -->
  <script src="{{asset('assets/admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
  <script src="{{asset('assets/admin/js/sparkline/sparkline-active.js')}}"></script>
  <!-- calendar JS
		============================================ -->
  <script src="{{asset('assets/admin/js/calendar/moment.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/calendar/fullcalendar.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/calendar/fullcalendar-active.js')}}"></script>
  <!-- plugins JS
		============================================ -->
  <script src="{{asset('assets/admin/js/plugins.js')}}"></script>
  <!-- main JS
		============================================ -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>
  <!-- tawk chat JS
		============================================ -->
  <script src="{{asset('assets/admin/js/tawk-chat.js')}}"></script>
</body>

</html>