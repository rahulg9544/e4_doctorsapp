
<?php include('inc.header.php')?>

<style type="text/css">
	
	a.list-group-item {
    height:auto;
    min-height:220px;
}
a.list-group-item.active small {
    color:#fff;
}
.stars {
    margin:20px auto 1px;    
}


</style>




 <div class="container acc bg-acc">

 	

<div class="row">
<div class="col-sm-3">
    <h2>My Account</h2>

<button type="button" id="myButton" class="btn btn-danger next-step btn-theme btn-ord">Order History</button>
	<!-- Category -->
	<div class="single category">
		<!-- <h3 class="side-title">Category</h3> -->
		<ul class="list-unstyled">
            <li><a href="event.php" title="">Event </a></li>
            <li class="lis">Currency
            	<div class="pull-right pd">
            	<select class="form-control" id="sel1">
        <option>Dollar</option>
        <option>Euro</option>
        <!-- <option>UAE</option>
        <option>4</option> -->
      </select>
  </div>



            </li>

            <li class="lis">Language
            	<div class="pull-right pd">
            	<select class="form-control" id="sel1">
        <option>English</option>
        <option>Arabic</option>
        <!-- <option>UAE</option>
        <option>4</option> -->
      </select>
  </div>



            </li>


           
            <li><a href="art.php" title="">Article & Blog</a></li>
            <li><a href="" title="">E-learning</a></li>
            <li><a href="deli-pack.php" title="">Subscription <span class="pull-right"><i class="fas fa-angle-double-right"></i></span></a></li>
            <li><a href="account.php" title="">Suggest Products</a></li>
            <li><a href="address.php" title="">Address</a></li>
        </ul>
   </div>
</div> 


<div class="col-md-9">
    <h1 class="text-center pb-1">Order History</h1>
<div class="row pb-1">
<div class="col-md-12 ord-item">



                <div class="row">
                    <div class="col-md-3">
<!-- 
                    <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive"  src="http://placehold.it/350x250" alt="placehold.it/350x250" >
                    </figure> -->

                        
                    </div>

                    <div class="col-md-6">


                        <h3>Customer Name</h3>
                        <h4>Customer Id</h4>
                        <h4>Product Name</h4>
                        <h4>KD oo</h4>
                        <h4>Order Date</h4>
                        <h4>Delivery Date</h4>
                        <h4>Delivery Address</h4>










                        




                </div>

                 <div class="col-md-3">

                        <button type="button" class="btn btn-default btn-lg btn-block">Cancel Order</button>
                        
                    </div>


            </div>

            <div class="row">
              
              <div class="col-md-12">

              <div class="row bs-wizard" style="border-bottom:0;">
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step complete">
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Order placed</div>
                </div>
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step complete"><!-- complete -->
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                 <div class="text-center bs-wizard-stepnum">On the way</div>
                </div>
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step disabled"><!-- complete -->
                 
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                 <div class="text-center bs-wizard-stepnum">Deliverd</div>
                </div>
                
                <!-- <div class="col-md-3 col-lg-3 col-xs-3 bs-wizard-step disabled">
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  
            </div> -->
                        
                    </div>

                </div>
            </div>
       
    </div>
</div>


<div class="row">

<div class="col-md-12 ord-item">



                <div class="row">
                    <div class="col-md-3">

       <!--              <figure class="pull-left">
                    <img class="media-object img-rounded img-responsive"  src="http://placehold.it/350x250" alt="placehold.it/350x250" >
                    </figure> -->

                        
                    </div>

                    <div class="col-md-6">


                        <h3>Customer Name</h3>
                        <h4>Customer Id</h4>
                        <h4>Product Name</h4>
                        <h4>KD oo</h4>
                        <h4>Order Date</h4>
                        <h4>Delivery Date</h4>
                        <h4>Delivery Address</h4>










                        




                </div>

                 <div class="col-md-3">

                        <button type="button" class="btn btn-default btn-lg btn-block"><i class="fas fa-redo-alt"></i> Reorder</button>
                        
                    </div>


            </div>

            <div class="row">
              
              <div class="col-md-12">

              <div class="row bs-wizard" style="border-bottom:0;">
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step complete">
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="text-center bs-wizard-stepnum">Order placed</div>
                </div>
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step complete"><!-- complete -->
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                 <div class="text-center bs-wizard-stepnum">On the way</div>
                </div>
                
                <div class="col-md-4 col-lg-4 col-xs-4 bs-wizard-step active"><!-- complete -->
                 
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                 <div class="text-center bs-wizard-stepnum">Deliverd</div>
                </div>
                
                <!-- <div class="col-md-3 col-lg-3 col-xs-3 bs-wizard-step disabled">
                  
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  
            </div> -->
                        
                    </div>

                </div>
            </div>
       
    </div>

</div>




</div>







</div>
</div>









<?php include('inc.footer.php')?>
