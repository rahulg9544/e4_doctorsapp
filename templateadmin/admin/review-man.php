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
            <h1>Review Management</h1>
          </div>
          <div class="col-sm-6">
            <!-- <a class="btn btn-app float-sm-right"  data-toggle="modal" data-target="#modal-xl">
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
              <div class="row">
              <div class="col-4">
                 <div class="form-group">
                        <label>Select Product</label>
                        <select class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
              </div>
              <div class="col-4">
                
                 <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                  </div> -->

              </div>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Si.no</th>
                  <th>Product Name</th>
                  <th>Product Id</th>
                  <th>Review</th>
                  <th>Star</th>
                  <th>User Name</th>
                  <th>Status</th>
                  
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
                  
                  
                  <td><span class="badge badge-success">Approved</span> </td>
                                    
                  <td> 


                   
                    <div class="btn-group btn-group-sm">
                        <!-- <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a> -->
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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







<div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header modal-header-bl">
              <h4 class="modal-title">Add New</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <div class="row">
                <!-- <div class="col-md-3"></div> -->
              <div class="col-md-6">
                 
                <div class="form-group">
                    <label for="exampleInputEmail1">Vendor Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Vendore Name">
                  </div>
                
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">User id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User id">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email Id">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="Password" class="form-control" id="exampleInputEmail1" placeholder="Confirm Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Country">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="City">
                  </div>

                  

              
                
                 <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                  </div>

              
                
                 <div class="form-group">
                    <label for="exampleInputEmail1">Sub-Category</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Sub-Category">
                  </div> -->

              </div>

              <div class="col-md-6">


                <div class="form-group">
                    <label for="exampleInputEmail1">Block Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Block Number">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Street</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Street">

                    <!-- <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Building Nomber</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Building Nomber">
                  </div>

                  

                


              </div>  

            </div>




             

              








            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>





















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
