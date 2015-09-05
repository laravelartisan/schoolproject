<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School Management Software</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/bootstrap/css/bootstrap.min.css') }}">
    {!!  Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">--}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- admin-lte Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    @yield('head')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') !!}

    {!!Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')  !!}
      {{-- <!-- <script src="{{ url('')}}"></script>
        <script src=""></script>-->--}}
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

   @include('admin.partials.header')
      <!-- Left side column. contains the logo and sidebar -->
        @include('admin.partials.sidebar')
      <!-- Content Wrapper. Contains page content -->

{{--      @include('dashboard')--}}
      <div class="content-wrapper">

{{--      @include('data')--}}
        @yield('content')

      </div>
     <!-- /.content-wrapper -->
     @include('admin.partials.mainfooter')

      <!-- Control Sidebar -->
     @include('admin.partials.controlsidebar')
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->

    {!! Html::script('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') !!}

    {{--<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>--}}
    <!-- jQuery UI 1.11.4 -->
    {!! Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}
    {{--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>--}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    {!! Html::script('bower_components/admin-lte/bootstrap/js/bootstrap.min.js') !!}
   @yield('datascript')

    {{--<script src="bootstrap/js/bootstrap.min.js"></script>--}}
    <!-- Morris.js charts -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') !!}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>--}}
    {!! Html::script('bower_components/admin-lte/plugins/morris/morris.min.js') !!}
    {{--<script src="plugins/morris/morris.min.js"></script>--}}
    <!-- Sparkline -->
    {!! Html::script('bower_components/admin-lte/plugins/sparkline/jquery.sparkline.min.js') !!}
    {{--<script src="plugins/sparkline/jquery.sparkline.min.js"></script>--}}
    <!-- jvectormap -->
    {!! Html::script('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
    {{--<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>--}}
    {!! Html::script('bower_components/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
    {{--<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>--}}
    <!-- jQuery Knob Chart -->
    {!! Html::script('bower_components/admin-lte/plugins/knob/jquery.knob.js') !!}
    {{--<script src="plugins/knob/jquery.knob.js"></script>--}}
    <!-- daterangepicker -->
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') !!}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>--}}
    {!! Html::script('bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js') !!}
    {{--<script src="plugins/daterangepicker/daterangepicker.js"></script>--}}
    <!-- datepicker -->
    {!! Html::script('bower_components/admin-lte/plugins/datepicker/bootstrap-datepicker.js') !!}
    {{--<script src="plugins/datepicker/bootstrap-datepicker.js"></script>--}}
    <!-- Bootstrap WYSIHTML5 -->
    {!! Html::script('bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
    {{--<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>--}}


    <!-- Slimscroll -->
    {!! Html::script('bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') !!}
    {{--<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>--}}
    <!-- FastClick -->
    {!! Html::script('bower_components/admin-lte/plugins/fastclick/fastclick.min.js') !!}
    {{--<script src="plugins/fastclick/fastclick.min.js"></script>--}}
    <!-- admin-lte App -->
    {!! Html::script('bower_components/admin-lte/dist/js/app.min.js') !!}
    {{--<script src="dist/js/app.min.js"></script>--}}
    <!-- admin-lte dashboard demo (This is only for demo purposes) -->
    {!! Html::script('bower_components/admin-lte/dist/js/pages/dashboard.js') !!}
    {{--<script src="dist/js/pages/dashboard.js"></script>--}}
    <!-- admin-lte for demo purposes -->
    {!! Html::script('bower_components/admin-lte/dist/js/demo.js') !!}
    {{--<script src="dist/js/demo.js"></script>--}}

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
