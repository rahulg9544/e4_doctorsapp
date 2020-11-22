<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KOA app| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/summernote/summernote-bs4.css">
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
            <h1>Events</h1>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-app float-sm-right"  data-toggle="modal" data-target="#modal-xl" onclick="clearall();">
                  <i class="fas fa-user-plus"></i> Add Event
                </a>
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
              <!-- <div class="col-4">
                 <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Customer Name">
                  </div>
              </div>
              <div class="col-4">
                
                 <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                  </div>

              </div> -->
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="abouttable">
              
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




<div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header modal-header-bl">
              <div class="block-header bg-primary" id="modalcaption"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" id="membForm">

            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <input type="hidden" name="editnm" id="editid">
                    <label for="regno">Title</label>
                    <input type="text" name="titlenm" class="form-control" id="titleid" >
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">Description</label>
                    <input type="text" class="form-control" id="descid" name="descnm" >
                  </div>

              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">Venue</label>
                    <input type="text" class="form-control" id="venueid" name="venuenm" >
                  </div>

              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">Date</label>
                    <input type="date" class="form-control" id="dateid" name="datenm" >
                  </div>

              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">Image</label>
                    <input type="file" class="form-control" id="imageid" name="imagenm" required="required">
                    <input type="hidden" name="img1nm" id="img1id">
                    <div id="imagefill"></div>
                  </div>

              </div>
            </div>
            </div>



             <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Save">
            </div>


           </form>

            </div>
           
          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>







<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/jquery/jquery.min.js"></script> -->

<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>templateadmin/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>templateadmin/admin/dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>/templateadmin/js/notify.js"></script>
    <script type="text/javascript">
      // $('.js-top-center').on('click', function() {
        function notifyresult($msg,$level){
          return $.notify($msg, {
              position: 'top center',
              hideDuration: '5',
              showAnimation: 'fadeIn',
              hideAnimation: 'fadeOut',
              className: $level
            });
        }


 $( document ).ready(function() {
          
          getadminEvent();
          
      
      });

 // function payidshow()
 // {
 //  alert("hello");
 //  var paystat = $('#my-checkbox').val();
 //  if(paystat=="on")
 //  {
 //    $('#paymid').show();
 //  }
 //  else
 //  {
 //    $('#paymid').hide();
 //  }
 // }

 

 function getadminEvent(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_event/getEvent');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#abouttable').html(data);
                // $('#example1').DataTable();
                      
              }
             });
      }

function editadminEvent(id)
{
       $('#modalcaption').text("Edit"); 
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_event/editEvent');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              // getprods();
              
              getadminEvent();
              // console.log(data);
             
              $('#editid').val(res.event_id);
              $('#titleid').val(res.event_title);
              $('#descid').val(res.event_description);
              $('#venueid').val(res.event_venue);
              $('#dateid').val(res.event_date);

              $("#imageid").prop('required',false);
              
              
             
              $('#img1id').val(res.event_image); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.event_image+'">')          

            }
        });
}





$("#membForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_event/updateEvent');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                //alert(data);
               if(data == "success"){
                  notifyresult('Data Saved','success');
                  $('#modal-xl').modal('hide');
                  getadminEvent();
               }
               
               else{
                  notifyresult('Error','danger');
                  // $('#modal-xl').modal('hide');
                  getadminEvent();
               }

              // show response from the php script.            
              }
             });
      });


function deleteadminEvent(id,img)
{
  var result = confirm("Do you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_event/deleteEvent');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              //alert(data);
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  getadminEvent();
               }else{
                  notifyresult('Error','danger');
                  getadminEvent();
               }
               

            }
          });
     }         
}


function clearall()
  {
    $('#modalcaption').text("Add Events");
    $('#titleid').val('');
    $('#descid').val('');
    $('#venueid').val('');
    $('#dateid').val('');

     $('#imagefill').html('');
        $('#image1').val('');
    $('#imageid').val('');

    getadminEvent();
  }



</script>
</body>
</html>
