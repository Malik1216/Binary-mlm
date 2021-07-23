<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100-signup ">
			
				<form class="login100-form validate-form col-md-12 mx-auto signup-form">
					<span class="login100-form-title">
						Get New Account
					</span>
						<div class="alert alert-danger alert-dismissible" id="error1" style="width:100%; display:none; " >
  					       
  					        <strong>Failed!</strong> Email is already in use.
				        </div>
				        
				        <div class="alert alert-danger alert-dismissible" id="error2" style="width:100%; display:none;" >
  					        
  					        <strong>Failed!</strong> Rquired data is missing.
				        </div>
				        <div class="alert alert-danger alert-dismissible" id="error3" style="width:100%; display:none; " >
  					       
  					        <strong>Failed!</strong> Username is already takken.
				        </div>
				    <div class="wrap-input100 validate-input" data-validate = "A valid username is required" >
						<input class="input100" type="text" name="uname" id="uname" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "A valid email is required" >
						<input class="input100" type="email" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="row" >
					<div class="wrap-input100 validate-input col-md-6" id="fname-validate" data-validate = "First name is required" >
						<input class="input100" type="text" name="fname" id="fname" placeholder="First name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input col-md-6" id="lname-validate" data-validate = "Last name is required" >
						<input class="input100" type="text" name="lname" id="lname" placeholder="Last name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					</div>
					
					<div class="row" >
					<div class="wrap-input100 validate-input col-md-6" data-validate = "password is required" >
						<input class="input100" type="password" name="password" id="pass"  placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input col-md-6" data-validate = "Password didn't match" >
						<input class="input100" type="password" name="cpass" id="cpass" placeholder="Confirm password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>
					</div>
					
						<div class="row" >
					<div class="wrap-input100 validate-input col-md-6" id="fname-validate" data-validate = "City name is required" >
						<input class="input100" type="text" name="city" id="city" placeholder="City name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-building-o" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input col-md-6" id="lname-validate" data-validate = "Country name is required" >
						<input class="input100" type="text" name="country" id="country" placeholder="Country name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>
					</div>
						<div class="wrap-input100 validate-input" data-validate = "A valid phone is required" >
						<input class="input100" type="text" onkeyup="checkPhone()" name="phone" id="phone" placeholder="phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Invalid Sponsor id" >
					    <?php
					    if (isset($_GET['id']))
					    {
					        ?>
					        <input class="input100" type="text" name="sponsor-id" id="sid" value ="<?php echo  str_replace(' ', '+',$_GET['id']); ?>"  placeholder="Sponsor id" disabled >
					        <?php
					    }
					    else
					    {
					    ?>
					    <input class="input100" type="text" name="sponsor-id" id="sid"   placeholder="Sponsor id">
					    <?php
					    }
					    ?>
						
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<i class="fa fa-handshake-o" aria-hidden="true"></i>
							</span>
					</div>
					
				</form>
					
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="submit()" >
							Signup
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						Alredy have an account?
						</span>
						<a class="txt2" href="login">
						
							 Login 
							
						</a>
					</div>
			
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		});
		
	</script>
<!--===============================================================================================-->
<script src="js/signup.js"></script>

</body>
</html>