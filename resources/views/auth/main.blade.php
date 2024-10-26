<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <!-- <link rel="stylesheet" href="{{ url('/') }}/morris.js/morris.css"> -->
      <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('/') }}/resource/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ url('/') }}/resource/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
     <!-- Select2 -->
  <link rel="stylesheet" href="{{ url('/') }}/resource/select2/dist/css/select2.min.css">
    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       
    </head>
    <body class="antialiased">
    <div class="wrapper">
        @include('auth.header')

        @include('auth.sidebar')


        @yield('content')


        @include('auth.footer')
    </div>

       
        <!-- jQuery 3 -->
        <script src="{{ url('/') }}/resource/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('/') }}/resource/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('/') }}/resource/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{{ url('/') }}/resource/raphael/raphael.min.js"></script>
    <!-- <script src="{{ url('/') }}/morris.js/morris.min.js"></script> -->
    <!-- Sparkline -->
    <script src="{{ url('/') }}/resource/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{{ url('/') }}/resource/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ url('/') }}/resource/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('/') }}/resource/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ url('/') }}/resource/moment/min/moment.min.js"></script>
    <script src="{{ url('/') }}/resource/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{{ url('/') }}/resource/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5
    <script src="{{ url('/') }}/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
    <!-- Slimscroll -->
    <script src="{{ url('/') }}/resource/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{ url('/') }}/resource/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/resource/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('/') }}/resource/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('/') }}/resource/js/demo.js"></script>

    <!-- DataTables -->
    <script src="{{ url('/') }}/resource/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/resource/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="{{ url('/') }}/resource/select2/dist/js/select2.full.min.js"></script>
    </body>
</html>
