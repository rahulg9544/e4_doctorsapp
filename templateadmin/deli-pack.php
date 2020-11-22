
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
	<!-- Category -->
	
		<h2>My Account</h2>

<button type="button" id="myButton" class="btn btn-danger next-step btn-theme btn-ord">Order History</button>


	<div class="single category">
		<!-- <h3 class="side-title">Category</h3> -->
		<ul class="list-unstyled">
            <li><a href="deli-pack.php" title="">Subscription</a></li>
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
	
<h1 class="text-center pb-1">Subscription Package</h1>
 <div class="row">
		<div class="">
        <!-- <h1 class="text-center">Order History</h1> -->
        <div class="list-group">
          <a href="#" class="list-group-item active">
                <div class="media col-md-3">
                    <figure class="pull-left">
                         <img class="media-object img-rounded img-responsive"  src="images/eve.jpg" alt="placehold.it/350x250" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> Title </h4>
      <h4 class="list-group-item-heading"> price: KD 100 </h4>
                  
                    <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. 
                       
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <!-- <h2> 14240 <small> votes </small></h2> -->
                    <button type="button" class="btn btn-default btn-lg btn-block">Buy Now</button>
                   <!--  <div class="stars">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <p> Average 4.5 <small> / </small> 5 </p> -->
                </div>




          </a>




          

         
        </div>
        </div>
	</div>

</div>






</div>
</div>





<?php include('inc.footer.php')?>
