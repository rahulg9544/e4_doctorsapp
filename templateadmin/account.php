
<?php include('inc.header.php')?>





 <div class="container acc bg-acc">

<div class="row">
<div class="col-sm-3">
    
    
 	<h2>My Account</h2>

<button type="button" id="myButton" class="btn btn-danger next-step btn-theme btn-ord">Order History</button>
	<!-- Category -->
	<div class="single category">
		<!-- <h3 class="side-title">Category</h3> -->
		<ul class="list-unstyled">


      <li><a href="deli-pack.php" title="">Subscription</a></li>
			<li><a href="event.php" title="">Event</a></li>
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
			
			<li><a href="account.php" title="">Suggest Products <span class="pull-right"><i class="fas fa-angle-double-right"></i></span></a></li>
			<li><a href="" title="">Address</a></li>
		</ul>
   </div>
</div> 



<div class="col-sm-9">
	
<h1 class="text-center pb-1">EmailPhoto of  Products You Need </h1>
<div class="row">
<div class="col-md-6">

<label for="exampleInputEmail1">Text</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Text">
</div>
<div class="col-md-6">
<label for="exampleInputEmail1">Upload Photo</label>
<input type="file" class="form-control" id="" placeholder="Email">
</div>
</div>
<div class="row">
<div class="col-md-12" style="text-align: center; margin: 3em 0em;">
	
	<button type="button" class="btn btn-primary btn-theme" style="padding: 1em;">Send Mail</button>
</div>


</div>

</div>








</div>
</div>


<?php include('inc.footer.php')?>
