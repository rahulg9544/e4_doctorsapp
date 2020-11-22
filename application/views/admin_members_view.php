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
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <style type="text/css">
    div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
    }
  </style>

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
                  <input type="hidden" value="" name="regid" id="regid">
                    <label for="regno">IOA_LM_no</label>
                    <input type="text" name="ioalmno" id="ioalmno" class="form-control" >
                  </div>
              </div>
              
            </div>


            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                 
                    <label for="regno">Register No</label>
                    <input type="text" name="regno" readonly="readonly" class="form-control" id="regno" >
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required="required" placeholder="First Number">
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
                    <label for="mname">Hospital name</label>
                    <input type="text" class="form-control" id="hospname" name="hospname" placeholder="Middle name">
                  </div>
                 

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Present Address</label>
                    <textarea class="form-control" name="presadrs" id="presadrs"></textarea>
                  </div>
                 

              </div>
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="speciality">Address 2</label>
                    <input type="text" class="form-control" name="adrs2" id="adrs2" required="required" placeholder="">
                  </div>
                  

              </div>
            </div>



            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="qlfy">Address 3</label>
                    <input type="text" required="required" class="form-control" name="adrs3" id="adrs3" placeholder="">
                  </div>
                 
              </div>
              <div class="col-md-6">
                
                  <div class="form-group">
                    <label for="inst">District club</label>
                    <input type="text" class="form-control" name="distclb" id="distclb"  placeholder="">
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
                    <label for="street">Office phone no</label>
                    <input type="text" class="form-control" name="officeno" id="officeno" placeholder="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">Resident phone No</label>
                    <input type="text" class="form-control" name="resino" id="resino" placeholder="">
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
                    <label for="">State</label>
                    <input type="text" class="form-control" id="state" name="state" required="required" placeholder="">
                  </div>
              </div>
                 <div class="col-md-6">
                
                 <div class="form-group">
                    
                    <label for="">Permanent address</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                      <input type="text" class="form-control" id="permadrs" name="permadrs" placeholder="">
                  </div>

                  </div>

            </div>


              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Mobile no</label>
                    <input type="text" class="form-control" id="phon" name="phon" required="required" placeholder="Phone">
                  </div>
              </div>
              <div class="col-md-6">
                
                 <div class="form-group">
                    
                    <label for="faxno">Whatsapp no</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                      <input type="text" class="form-control" id="whatspno" name="whatspno" placeholder="Fax no">
                  </div>

              </div>

              </div>


             <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    
                    <label for="faxno">Date of birth</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                      <input type="date" class="form-control" id="dob" name="dob" placeholder="Fax no">
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

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">Blood group</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="enter only if payment done" class="form-control" name="bloodg" id="bloodg">
                     
                  </div>

                </div>

              </div>



                <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">MBBS</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="mbbs" id="mbbs">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">PGDip</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="enter only if payment done" class="form-control" name="pgdip" id="pgdip">
                     
                  </div>

                </div>

              </div>



               <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="paymentid">PG degree</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="pddgr" id="pddgr">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">Others</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="othrs" id="othrs">
                     
                  </div>

                </div>

              </div>


               <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="paymentid">TCMC reg no</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="tcmc" id="tcmc">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">IMA reg no</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="ima" id="ima">
                     
                  </div>

                </div>

              </div>


              



                <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="paymentid">Sp int</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="spint" id="spint">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">Award/honors</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="award" id="award">
                     
                  </div>

                </div>

              </div>



              <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">Wife/Husbent</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="wifehus" id="wifehus">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">child 1</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="child1" id="child1">
                     
                  </div>

                </div>

              </div>



              <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="paymentid">Child 2</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="child2" id="child2">
                     
                  </div>

                </div>

                <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="">Child 3</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="child3" id="child3">
                     
                  </div>

                </div>

              </div>




              <div class="row" >
              
              <div class="col-md-6" >
                
                 <div class="form-group">
                    
                    <label for="paymentid">Child 4</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subscription"> -->
                     <input type="text" placeholder="" class="form-control" name="child4" id="child4">
                     
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


<!-- view model -->
<div class="modal fade" id="modal-xls">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="modal-header modal-header-bl">
              <h4 class="modal-title">Member Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body">
              
              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">IOA_LM_no : <span style="color: #007bff;font-size: 20px;" id="smlmno"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Reg no : <span style="color: #007bff;font-size: 20px;" id="smreg"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Name : <span style="color: #007bff;font-size: 20px;" id="smname"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Photo : <div id="smpic"></div></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Hospital : <span style="color: #007bff;font-size: 20px;" id="smhosp"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Present Address : <span style="color: #007bff;font-size: 20px;" id="smpradrs"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Address  2 : <span style="color: #007bff;font-size: 20px;" id="smadrs2"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Address  3 : <span style="color: #007bff;font-size: 20px;" id="smadrs3"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">District club : <span style="color: #007bff;font-size: 20px;" id="smcdist"></span></label>
                    
                  </div>
              </div>
              
              </div>

               <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Email : <span style="color: #007bff;font-size: 20px;" id="smmail"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Office phone no : <span style="color: #007bff;font-size: 20px;" id="smphnofc"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Resident phone No : <span style="color: #007bff;font-size: 20px;" id="smphnres"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">District : <span style="color: #007bff;font-size: 20px;" id="smdist"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Pincode : <span style="color: #007bff;font-size: 20px;" id="smpin"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">State : <span style="color: #007bff;font-size: 20px;" id="smstate"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Permanent address : <span style="color: #007bff;font-size: 20px;" id="smpadrs"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Mobile no : <span style="color: #007bff;font-size: 20px;" id="smmob"></span></label>
                    
                  </div>
              </div>
              
              </div>


              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Whatsapp no : <span style="color: #007bff;font-size: 20px;" id="smwhatsp"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Date of birth : <span style="color: #007bff;font-size: 20px;" id="smdob"></span></label>
                    
                  </div>
              </div>
              
              </div>

                <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Payment Done? : <span style="color: #007bff;font-size: 20px;" id="smpay"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Payment ID : <span style="color: #007bff;font-size: 20px;" id="smpayid"></span></label>
                    
                  </div>
              </div>
              
              </div>


              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Blood group : <span style="color: #007bff;font-size: 20px;" id="smbld"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">MBBS : <span style="color: #007bff;font-size: 20px;" id="smmbbs"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">PGDip : <span style="color: #007bff;font-size: 20px;" id="smpgdip"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">PG degree : <span style="color: #007bff;font-size: 20px;" id="smpgdgr"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Others : <span style="color: #007bff;font-size: 20px;" id="smpothr"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">TCMC reg no : <span style="color: #007bff;font-size: 20px;" id="smtcmcreg"></span></label>
                    
                  </div>
              </div>
              
              </div>

               <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">IMA reg no : <span style="color: #007bff;font-size: 20px;" id="smimareg"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Sp int : <span style="color: #007bff;font-size: 20px;" id="smspint"></span></label>
                    
                  </div>
              </div>
              
              </div>


               <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Award/honors : <span style="color: #007bff;font-size: 20px;" id="smawd"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">Wife/Husbent : <span style="color: #007bff;font-size: 20px;" id="smspos"></span></label>
                    
                  </div>
              </div>
              
              </div>

              <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">child 1 : <span style="color: #007bff;font-size: 20px;" id="smchl1"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">child 2 : <span style="color: #007bff;font-size: 20px;" id="smchl2"></span></label>
                    
                  </div>
              </div>
              
              </div>

               <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">child 3 : <span style="color: #007bff;font-size: 20px;" id="smchl3"></span></label>
                    
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group">
                  
                    <label for="regno">child 4 : <span style="color: #007bff;font-size: 20px;" id="smchl4"></span></label>
                    
                  </div>
              </div>
              
              </div>


            </div>  


          </div>
        </div>
</div>            



<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/jquery/jquery.min.js"></script> -->

<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables/jquery.dataTables.min.js"></script>
 --><!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>templateadmin/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->

<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>templateadmin/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>templateadmin/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>templateadmin/admin/dist/js/demo.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

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
                $('#example').DataTable( {
                    "scrollX": true
                } );      
              }
             });
      }

  $(function () {
    

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
  });


  function clearall()
  {
    $('#regid').val('');
    $('#ioalmno').val('');
    $('#regno').val('');
    $('#name').val('');
    $('#hospname').val('');
    $('#presadrs').val('');
    $('#adrs2').val('');
    $('#adrs3').val('');
    $('#distclb').val('');
    $('#emaile').val('');
    $('#password').val('');
    $('#officeno').val('');
    $('#resino').val('');
    $('#dist').val('');
    $('#pincode').val('');
    $('#state').val('');
    $('#permadrs').val('');
    $('#phon').val('');
    $('#whatspno').val('');
    $('#dob').val('');
    $('#my-checkbox').val('');
    $('#paymentid').val('');
    $('#bloodg').val('');
    $('#mbbs').val('');
    $('#pgdip').val('');
    $('#pddgr').val('');
    $('#othrs').val('');
    $('#tcmc').val('');
    $('#ima').val('');
    $('#spint').val('');
    $('#award').val('');
    $('#wifehus').val('');
    $('#child1').val('');
    $('#child2').val('');
    $('#child3').val('');
    $('#child4').val('');

    $('#image1').val('');
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
    $('#ioalmno').val(res.IOA_LM_no);
    $('#regno').val(res.KOA_Reg_No);
    $('#name').val(res.Name);
    $('#hospname').val(res.Hospital_Name);
    $('#presadrs').val(res.Present_Address_1);
    $('#adrs2').val(res.Address_2);
    $('#adrs3').val(res.Address_3);
    $('#distclb').val(res.District_Club);
    $('#emaile').val(res.Email_id);
    $('#password').val(res.passowrd);
    $('#officeno').val(res.office_No);
    $('#resino').val(res.Residence_No);
    $('#dist').val(res.District);
    $('#pincode').val(res.Pin_Code);
    $('#state').val(res.State);
    $('#permadrs').val(res.Premenant_Address);
    $('#phon').val(res.Mob_no);
    $('#whatspno').val(res.WhatsApp_no);
    $('#dob').val(res.DOB);
    $('#paymentid').val(res.pay_id);
    $('#bloodg').val(res.Blood_G);
    $('#mbbs').val(res.MBBS);
    $('#pgdip').val(res.PGDip);
    $('#pddgr').val(res.PG_Degree);
    $('#othrs').val(res.Others);
    $('#tcmc').val(res.TCMC_Reg_no);
    $('#ima').val(res.IMA_reg_no);
    $('#spint').val(res.Sp_Int);
    $('#award').val(res.Award_Honors);
    $('#wifehus').val(res.spouse);
    $('#child1').val(res.Child1 );
    $('#child2').val(res.Child2);
    $('#child3').val(res.Child3);
    $('#child4').val(res.Child4);

    $('#pimage').val('');
             
              $('#image1').val(res.Photo); 
              $('#imagefill').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.Photo+'">') 
              // $('#my-checkbox').val(res.members_payment_stat)

              var pstat = res.pay_stat;

              if(pstat=='on')
              {
               
                $("#my-checkbox").bootstrapSwitch('state', true);
              }
              else
              {
                $("#my-checkbox").bootstrapSwitch('state', false);
              }
             
             
               
              // $('#file1').val(res.file);
              // $('#otherfill').html(res.file); 
              
               

            }
        });
}

function viewmember(id)
{
   $('#modalcaption').text("View member");
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
    $('#smlmno').text(res.IOA_LM_no);
    $('#smreg').text(res.KOA_Reg_No);
    $('#smname').text(res.Name);
    $('#smhosp').text(res.Hospital_Name);
    $('#smpradrs').text(res.Present_Address_1);
    $('#smadrs2').text(res.Address_2);
    $('#smadrs3').text(res.Address_3);
    $('#smcdist').text(res.District_Club);
    $('#smmail').text(res.Email_id);
    
    $('#smphnofc').text(res.office_No);
    $('#smphnres').text(res.Residence_No);
    $('#smdist').text(res.District);
    $('#smpin').text(res.Pin_Code);
    $('#smstate').text(res.State);
    $('#smpadrs').text(res.Premenant_Address);
    $('#smmob').text(res.Mob_no);
    $('#smwhatsp').text(res.WhatsApp_no);
    $('#smpayid').text(res.DOB);
    $('#smpay').text(res.pay_id);
    $('#smbld').text(res.Blood_G);
    $('#smmbbs').text(res.MBBS);
    $('#smpgdip').text(res.PGDip);
    $('#smpgdgr').text(res.PG_Degree);
    $('#smpothr').text(res.Others);
    $('#smtcmcreg').text(res.TCMC_Reg_no);
    $('#smimareg').text(res.IMA_reg_no);
    $('#smspint').text(res.Sp_Int);
    $('#smawd').text(res.Award_Honors);
    $('#smspos').text(res.spouse);
    $('#smchl1').text(res.Child1 );
    $('#smchl2').text(res.Child2);
    $('#smchl3').text(res.Child3);
    $('#smchl4').text(res.Child4);

    
             
              
              $('#smpic').html('<img  style="width:250px;height:200px;"src="<?php echo base_url();?>/uploads/'+res.Photo+'">') 
              // $('#my-checkbox').val(res.members_payment_stat)

              var pstat = res.pay_stat;

              if(pstat=='on')
              {
               
                $("#smpay").text('Done');
              }
              else
              {
                $("#smpay").text('Not done');
              }
             
             
               
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
                  getmembs();
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
