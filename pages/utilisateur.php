
<?php 
session_start();

$con= new PDO('mysql:host=localhost;dbname=bases_pscpd','root','');

 $req=$con->prepare('SELECT * FROM utilisateur ');
 $req->execute();
 $sol=$req->fetchAll();


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plateforme de la Société Civile pour la Paix et la Democratie</title>
<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/pscpd/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/pscpd/assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include'../config/content.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>NOM & PRENOM</th>
                      <th>NATIONALITE</th>
                      <th>FONCTION</th>
                      <th>TELEPHONE</th>
                      <th>EMAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($sol as $key => $value) : ?>
                      <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['nom_prenom'] ?></td>
                        <td><?= $value['nationalite'] ?></td>
                        <td><?= $value['fonction'] ?></td>
                        <td><?= $value['telephone'] ?></td>
                        <td><?= $value['email'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include'../config/footer.php'; ?>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://localhost/pscpd/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/pscpd/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="http://localhost/pscpd/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/jszip/jszip.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="http://localhost/pscpd/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/pscpd/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/pscpd/assets/dist/js/demo.js"></script>
<!-- Page specific script -->
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
