 

 

<body class="hold-transition sidebar-mini sidebar-collapse">


  <link rel="stylesheet" href="<?php echo base_url(); ?>templateadmin/admin/dist/css/sty.css">


<!-- Site wrapper -->
<div class="wrapper">

 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-blue navbar-light pushmenu">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a> -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="login.php" role="button">
          <i class="fas fa-user"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
 -->

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KOA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>templateadmin/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url();?>index.php/Admin_home" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_members" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Members
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_about" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               About Page
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_contact" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
               Contact Page
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_event" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
               Event
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_descussion" class="nav-link">
              <i class="nav-icon fas fa-pen-nib"></i>
              <p>
               Discussion Topics
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url();?>index.php/Admin_login/logout" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Logout
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="adv.php" class="nav-link">
              <i class="nav-icon fas fa-ad"></i>
              <p>
               Advertisement Management
                
              </p>
            </a>


            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adv.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advertisement 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adv-2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advertisement 2</p>
                </a>
              </li>
                           
            </ul>

          </li>

          <li class="nav-item">
            <a href="cat.php" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
               Category Management
                
              </p>
            </a>

             <ul class="nav nav-treeview">
                 
                    <li class="nav-item">
                <a href="cat.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Management</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="sub-cat.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Category Management</p>
                </a>
              </li>
            </ul>
          </li>
 -->
         

         <!--  <li class="nav-item">
            <a href="product-man.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
               Product Management
                
              </p>
            </a>
            <ul class="nav nav-treeview">
                 <li class="nav-item">
                <a href="product-man.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="featured.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="brand-man.php" class="nav-link">
              <i class="nav-icon fas fa-pen-nib"></i>
              <p>
               Brand Management
                
              </p>
            </a>
          </li>
 -->
          <!-- <li class="nav-item">
            <a href="order-man.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
               Order Management
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="vendor-man.php" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
               Vendor Management
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="trans-his.php" class="nav-link">
              <i class="nav-icon fas fa-coins"></i>
              <p>
               Transaction History
                
              </p>
            </a>
          </li> -->

          <!-- <li class="nav-item">
            <a href="offr-man.php" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
               Offer Management
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="review-man.php" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
               Review Management
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="report-man.php" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
               Report Management
                
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="report-man.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="invent-rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventory Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="topsel-rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Selling Products</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="store-rpt.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Store Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="refund.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Refund Request</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="subscript.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subscription</p>
                </a>
              </li>
                           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
               CMS Management
               
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cms-man1.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cms-man2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMS - Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cms-man3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMS - Terms & Conditions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="cms-man4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CMS - Email</p>
                </a>
              </li>
            </ul>


          </li> -->
          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>