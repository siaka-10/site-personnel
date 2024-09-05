 <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="image.jpg">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/summernote/summernote-bs4.min.css">
</head>

<!-- jQuery -->
<script src="http://localhost/pscpd/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/pscpd/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/pscpd/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/pscpd/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/pscpd/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/pscpd/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/pscpd/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/pscpd/assets/plugins/moment/moment.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/pscpd/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/pscpd/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/pscpd/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/pscpd/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/pscpd/assets/dist/js/image.jpg"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/pscpd/assets/dist/js/pages/dashboard.js"></script>
<script src="http://localhost/pscpd/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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

