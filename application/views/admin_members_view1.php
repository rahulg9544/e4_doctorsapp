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
            <h1>Members</h1>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-app float-sm-right"  data-toggle="modal" data-target="#modal-xl" onclick="clearall();">
                  <i class="fas fa-user-plus"></i> Add Member
                </a>

                
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
            <div class="card-body" id="membtable">
              
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
              <h4 class="modal-title">Add Member</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" id="membForm">

            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <input type="hidden" name="regid" id="regid">
                    <label for="regno">Register No</label>
                    <input type="text" name="regno" readonly="readonly" class="form-control" id="regno" >
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required="required" placeholder="First Number">
                  </div>

              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="mname">Middle name</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle name">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name">
                  </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="speciality">Specialty</label>
                    <input type="text" class="form-control" name="speciality" id="speciality" required="required" placeholder="Speciality">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="qlfy">highest Qualification</label>
                    <input type="text" required="required" class="form-control" name="qlfy" id="qlfy" placeholder="Qualification">
                  </div>

              </div>
            </div>



            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" name="department" id="department" required="required" placeholder="Department">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="inst">Institution</label>
                    <input type="text" class="form-control" name="inst" id="inst"  placeholder="Institution">
                  </div>

              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="emaile">Email</label>
                    <input type="mail" class="form-control" name="emaile" id="emaile" required="required" placeholder="Mail id">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" required="required" placeholder="Password">
                  </div>

              </div>
            </div>



            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" name="street" id="street" placeholder="Street">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                  </div>
                 
              </div>
            </div>


             <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="dist">District</label>
                    <select class="custom-select" required="required" name="dist" id="dist">
                       <option value="">Select</option>
                          <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                          <option value="Pathanamthitta">Pathanamthitta</option>
                          <option value="Kollam">Kollam</option>
                          <option value="Kottayam">Kottayam</option>
                          <option value="Idukki">Idukki</option>
                          <option value="Alappuzha">Alappuzha</option>
                          <option value="Ernakulam">Ernakulam</option>
                          <option value="Thrissur">Thrissur</option>
                          <option value="Malappuram">Malappuram</option>
                          <option value="Palakkad">Palakkad</option>
                          <option value="Kozhikode">Kozhikode</option>
                          <option value="Kannur">Kannur</option>
                          <option value="Wayanad">Wayanad</option>
                          <option value="Kasaragod">Kasaragod</option>
                        </select>
                  </div>
              </div>
              <div class="col-md-6">
                
               
                   
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" class="form-control" name="pincode" id="pincode" required="required" placeholder="Postal pincode">
                      </div>
                  

              </div>
            </div>


              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Phone no</label>
                    <input type="text" class="form-control" id="phon" name="phon" required="required" placeholder="Phone">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    
                    <label for="faxno">Fax</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                      <input type="text" class="form-control" id="faxno" name="faxno" placeholder="Fax no">
                  </div>

                  </div>

              </div>


             <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="pimage">Photo</label>
                    <input type="file" class="form-control" name="pimage" id="pimage" placeholder="postal pincode">
                    <input type="hidden" name="image1" id="image1">
                    <div id="imagefill"></div>
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    
                    <label for="my-checkbox">Payment Done?</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="checkbox" name="my-checkbox" id="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success" data-on-text="YES" data-off-text="NO">
                     
                  </div>

                  </div>

              </div>
              
              <div class="row" >
              
              <div class="col-md-6" id="paymid">
                
                 <div class="form-group">
                    
                    <label for="paymentid">Payment ID</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="enter only if payment done" class="form-control" name="paymentid" id="paymentid">
                     
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
          
          getmembs();
          
      
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

 

 function getmembs(){
           $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_members/getmembers');?>/",
                data: '', // serializes the form's elements.
               success: function(data){
                // console.log(data);
                $('#membtable').html(data);
                // $('#example1').DataTable();
                      
              }
             });
      }

  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "sScrollX": '100%'
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


  function clearall()
  {
    $('#regid').val('');
    $('#regno').val('');
    $('#fname').val('');
    $('#mname').val('');
    $('#lname').val('');
    $('#speciality').val('');
    $('#qlfy').val('');
    $('#department').val('');
    $('#inst').val('');
    $('#emaile').val('');
    $('#password').val('');
    $('#street').val('');
    $('#city').val('');
    $('#dist').val('');
    $('#pincode').val('');
    $('#phon').val('');
    $('#faxno').val('');
    $('#pimage').val('');
    $('#image1').val('');
    $('#paymentid').val('');
    $('#imagefill').html('');

    fillreg();
  }


  function fillreg()
  {
   
    $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_members/getregno');?>/",
              data: '',
              // serializes the form's elements.
               success: function(data){

                // alert(data);

                $('#regno').val(data);
            
              }
             });
  }


 $("#membForm").submit(function(e) {

        // alert("hi");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
         $.ajax({
                method: "POST",
                url: "<?php echo base_url('index.php/Admin_members/insertmemb');?>/",
              data: new FormData(this),
              processData:false,
                     contentType:false,
                     cache:false,
              // serializes the form's elements.
               success: function(data){

                alert(data);
               if($.trim(data) == "success"){
                  notifyresult('Data Saved','success');
                  $('#modal-xl').modal('hide');
                  getmembs();
               }
               else if($.trim(data)=="mailexist")
               {
                 notifyresult('Mail id exist','danger');
                  // $('#modal-xl').modal('hide');
                  getmembs();
               }
               else{
                  notifyresult('Error','danger');
                  // $('#modal-xl').modal('hide');
                  getmembs();
               }

              // show response from the php script.            
              }
             });
      });

function editmember(id)
{
   $('#modalcaption').text("Edit member");
        $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_members/editmemb');?>/",
              data: {id:id}, // serializes the form's elements.
             success: function(data){
              // alert(data);
              var res = JSON.parse(data);
              // getprods();
              
              getmembs();
              // console.log(data);
              $("#pimage").prop('required',false);
              $('#regid').val(res.members_id);
              $('#regno').val(res.members_regno);
              $('#fname').val(res.members_fname);
              
              $('#mname').val(res.members_mname);
              $('#lname').val(res.members_lname);
              $('#speciality').val(res.members_speciality);
              $('#qlfy').val(res.members_qualify);
              $('#department').val(res.members_dep);
              $('#inst').val(res.members_inst);
              $('#emaile').val(res.members_mail);
              $('#password').val(res.members_password);
              $('#street').val(res.members_street);
              $('#city').val(res.members_city);
              $('#dist').val(res.members_dist);
              $('#pincode').val(res.members_pin);
              $('#phon').val(res.members_phone);
              $('#faxno').val(res.members_fax);
              $('#paymentid').val(res.members_payment_id);
              // $('#my-checkbox').val(res.members_payment_stat)

              var pstat = res.members_payment_stat;

              if(pstat=='on')
              {
               
                $("#my-checkbox").bootstrapSwitch('state', true);
              }
              else
              {
                $("#my-checkbox").bootstrapSwitch('state', false);
              }
             
               
              
              $('#pimage').val('');
             
              $('#image1').val(res.members_pic); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.members_pic+'">') 

              
               
              // $('#file1').val(res.file);
              // $('#otherfill').html(res.file); 
              
               

            }
        });
}


function deletemember(id,img)
{
  var result = confirm("Are you want to delete?");
          if (result) {
              $.ajax({
              method: "POST",
              url: "<?php echo base_url('index.php/Admin_members/delete_memb');?>/",
              data: {id:id,img:img}, // serializes the form's elements.
             success: function(data){
              if(data == "success"){
                  notifyresult('Data Deleted','success');
                  
               }else{
                  notifyresult('Error','danger');
                  
               }
               

            }
          });
     }         
}



</script>
</body>
</html>
