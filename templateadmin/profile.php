
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

            <li><a href="deli-pack.php" title="">Subscription <span class="pull-right"><i class="fas fa-angle-double-right"></i></span></a></li>
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
            
            <li><a href="account.php" title="">Suggest Products</a></li>
            <li><a href="address.php" title="">Address</a></li>
        </ul>
   </div>
</div> 



<div class="col-sm-9">
	
<h1 class="text-center pb-1">Profile</h1>
 <div class="row">
		<div class="well">
        <!-- <h1 class="text-center">Order History</h1> -->
        <div class="list-group pro">
          <a href="#" class="list-group-item">
                
                <div class="col-md-8">
                    

                		
<div class="col-md-12 frm-pd">

<h2>Shefeeq</h2>

</div>

<div class="col-md-12">

<label for="exampleInputEmail1">Email : example@gmail.com</label>
<!-- <input type="text" class="form-control" id="exampleInputEmail1" value="Avatar" disabled> -->
</div>

<div class="col-md-12">
<label for="exampleInputEmail1">Mobile : 9955455855</label>
<!-- <input type="file" class="form-control" id="" placeholder="Email"> -->
</div>







                </div>
                <div class="media col-md-4">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive"  src="images/pro-1.jpg" alt="placehold.it/350x250" >
                    </figure>
                </div>
                


                <div class="col-md-12" 

            	style="
            	    background-color: #01b3e3;
    color: #fff;
    padding: 1em;
    margin: 1em;
            	" 
            	>
							<h4>Child Details</h4>
					</div>

<div class="row">
	
	<div class="col-md-8">
		
	
					
<div class="col-md-12 frm-pd">

<label for="exampleInputEmail1">Name</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Text">
</div>



<div class="col-md-12 frm-pd">
<label for="exampleInputEmail1">Date of Birth</label>
<input type="date" class="form-control" id="" placeholder="Email">
</div>


<div class="col-md-12 frm-pd">
    
<label class="radio-inline"><input type="radio" name="optradio" checked>Girl</label>
<label class="radio-inline"><input type="radio" name="optradio">Boy</label>

</div>
<div class="col-md-6 frm-pd">
<button type="button" class="btn btn-default btn-md btn-block pull-left"> Save </button>
</div>

</div>


<div class="media col-md-4">
                    <figure class="pull-right">
                        <img class="media-object img-rounded img-responsive"  src="images/pro-2.jpg" alt="placehold.it/350x250" >
                    </figure>
                </div>









</div>













          </a>




           

           



         
        </div>
        </div>
	</div>

</div>






</div>
</div>





<?php include('inc.footer.php')?>
