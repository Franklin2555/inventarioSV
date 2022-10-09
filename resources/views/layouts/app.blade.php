<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invetario SV</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  {{-- Estilos locales --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Page Content -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <main>

      {{ $slot }}

    </main>
  </div>

  
  <!-- jQuery -->
  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{url('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{url('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{url('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{url('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{url('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{url('plugins/moment/moment.min.js')}}"></script>
  <script src="{{url('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{url('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{url('dist/js/pages/dashboard.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
