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
  <link rel="stylesheet" href="dist/css/sty.css">
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
            <!-- <h1>Order Management</h1> -->
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
        <div class="col-6">
         

          <div class="card">
            <div class="card-header">
              <h5 class="text-center">Order Basic Details</h5>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">

              <div class="row">
                <div class="col-6">
                  <h6>Order Number</h6>
                  <h4 class="dan"> 212542</h4>
                </div>
                <div class="col-6">
                  <h6>Order Status</h6>
                  <hh4><span class="badge badge-warning">Pickup</span> </hh4>
                </div>
              </div>


              <div class="row">
                <div class="col-6">
                  <h6>Order Total</h6>
                  <h4 class="succ"> 112</h4>
                </div>
                <div class="col-6">
                  <h6>Order Date</h6>
                  <h4 class="prim"> 12 May 2020<br> 11:23 AM</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <h6>Delivery Charges</h6>
                  
                </div>
                <div class="col-6">
                  <h4> 212542</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <h6>Payment Type</h6>
                  
                </div>
                <div class="col-6">
                  <h4> Knet</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <h6>Payment Status</h6>
                  
                </div>
                <div class="col-6">
                  <h4> Paid</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <h6>Vendore Name</h6>
                  
                </div>
                <div class="col-6">
                  <h4> aqsasdsad</h4>
                </div>
              </div>






              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->


        <div class="col-6">


          <div class="card">
            <div class="card-header">
              <h5 class="text-center">Customer Details</h5>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">

              


             

              <div class="row">
                <div class="col-6">
                  <h6>Customer Name</h6>
                  <h4 class="dan"> Michel Rayyappan</h4>
                  
                </div>
                <div class="col-6">
                 <h6>Customer Email Id</h6>
                 <h4 class="prim">Michel@Rayyappan</h4>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <h6>Delivery Address</h6>
                  <h4 class="succ">Block 2, Street 3<br>
                    Avenue house 10, kaifan<br>
                  kuwait</h4>
                  
                </div>
                
              </div>

             






              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <div class="row">
          <div class="col-6">
            <div class="card text-center">
              <div class="card-body">
            <h6>Customer Note</h6>
            <textarea class="form-control">asadsadadah4</textarea>
          </div>
        </div>
          </div>

          <div class="col-6">
            <div class="card">
              <div class="card-body text-center">
            <h6>Delivery Date</h6>
            <h4 class="succ">12 june 2020</h4>

            <div class="row">
          <div class="col-6"><h6>Time</h6></div>
          <div class="col-6"><h4 class="succ">08:25:04</h4></div>
        </div>


          </div>
        </div>

        





          </div>
        </div>










          

        </div>




                       



                  
                  
      </div>
      <!-- /.row -->


      <div class="col-12">
        



        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Discount</th>
                  <th>Subscriber Discount</th>
                  <th>Price</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Name</td>
                  <td>5</td>
                  <td>5%</td>
                  <td>20%</td>
                  <td>23213</td>
                  
                </tr>


              </tbody>
            </table>
      </div>















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
