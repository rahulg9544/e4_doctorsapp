
<?php include('inc.header.php')?>


	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<div class="reg-logo">
					<img   src="images/logo.png" width="20%"  > 
				</div>


						<h3>Login To wing</h3>
						<form action="#" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					 <div class="social-auth-links text-center mb-3">
        <!-- <p>- OR -</p> -->
        <a href="#" class="btn btn-block btn-primary  mb-2">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
					<div class="forg">
						<a href="#" class="forg-left">Forgot Password</a>
						<!--<a href="registered.php" class="forg-right">Register</a>-->
						<a id="bt" onclick="toggle(this)" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
					
					
					
						<div class="form-w3agile form1" id="cont" style="display:none;">
					<h3>Register</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Full Name" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name';}" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" value="Phone Numer" name="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Numer';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
				
				
				
				</div>
			</div>
				<!--login-->
				
				
				
				
				
				
				
				
				
		</div>
		<!--content-->
		
		
	<script>
    function toggle(ele) {
        var cont = document.getElementById('cont');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';

            document.getElementById(ele.id).value = 'Show DIV';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = 'Hide DIV';
        }
    }
</script>

<?php include('inc.footer.php')?>
