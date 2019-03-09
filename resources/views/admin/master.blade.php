
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Doctorghor- Book Appointment With a Doctor Near You !</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('public/admin') }}/assets/images/fi.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('public/admin') }}/assets/css/app-style.css" rel="stylesheet"/>
  <!-- Icons CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('public/admin') }}/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('public/admin') }}/assets/css/app-style.css" rel="stylesheet"/>
  <script src="{{ asset('public/admin') }}/assets/js/jquery.min.js"></script>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
@include('admin.inc.leftmenu')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
@include('admin.inc.header')
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
@yield('mainContent')
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->

@yield('footer')
  <!--End footer-->
   
  </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/admin') }}/assets/js/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- simplebar js -->
  <script src="{{ asset('public/admin') }}/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="{{ asset('public/admin') }}/assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('public/admin') }}/assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('public/admin') }}/assets/js/app-script.js"></script>
  
  <!-- Vector map JavaScript -->
  <script src="{{ asset('public/admin') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{ asset('public/admin') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Chart js -->
  <script src="{{ asset('public/admin') }}/assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Index js -->
  <script src="{{ asset('public/admin') }}/assets/js/index.js"></script>
  
</body>
</html>
