<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wing Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<!-- <body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper"> -->

  <?php include('navs.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Management</h1>
          </div>
          <div class="col-sm-6">

           <!--  <a class="btn btn-app float-sm-right"  data-toggle="modal" data-target="#modal-xl">
                  <i class="fas fa-plus"></i> Add New</a> -->

                
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
              <div class="row align-items-center">
              <div class="col-4">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Select Customer</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Name">
                  </div>
              </div>
              <div class="col-4">
                
                  <button type="button" class="btn btn-success">Export orders to excel</button>

              </div>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Customer Order ID</th>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Customer Phone No</th>
                  <th>Ordered Date & Time</th>
                  <th>Delivery Boy</th>
                  <th>Delivery Date</th>
                  <th>View</th>
                  <th>Print</th>
                  <th>Shipped</th>
                  <th>Delivered</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  
                  <td>assddww</td>
                  <td>assddww</td>
                  
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                   <td> <a href="order-bas.php" class="btn btn-info"><i class="fas fa-eye"></i></a> </td>
                    <td> <a href="#" class="btn btn-info"><i class="fas fa-print"></i></a> </td>
                     <td><h6>yes</h6></td>
                     <td><h6>yes</h6></td>
                  
                                    
                  <td> 


                   
                    <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger">&times;</a>
                      </div>

                    </td>

                    


                  
                </tr>

                 <tr>
                  
                  <td>assddww</td>
                  <td>assddww</td>
                  
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                  <td>assddww</td>
                   <td> <a href="order-bas.php" class="btn btn-info"><i class="fas fa-eye"></i></a> </td>
                    <td> <a href="#" class="btn btn-info"><i class="fas fa-print"></i></a> </td>
                     <td><h6>yes</h6></td>
                     
                      <td><h6>yes</h6></td>
                  
                                    
                  <td> 


                   
                    <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger">&times;</a>
                      </div>

                    </td>

                    


                  
                </tr>

               


              
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->




                       



                  
                  
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <!-- <b>Version</b> 3.0.4 -->
    </div>
    <strong>© 2020 Wing . All rights reserved | Design and Developed by menu house</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



















<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
  });
</script>



</body>
</html>