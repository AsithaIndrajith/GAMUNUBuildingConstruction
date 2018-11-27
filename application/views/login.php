<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gamunu Builders Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../public/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/fonts-login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/fonts/fonts-login/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../public/vendors/vendor-login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../public/css/css-login/util.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/css-login/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="loginAdmin" method="post">
					<span style="text-align: center">
						<img src="../../public/img/logo.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="user_id" required>
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="user_password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Login">
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

				</ul>
				</form>
			</div>
		</div>
	</div>
    
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../../public/vendors/vendor-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendors/vendor-login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendors/vendor-login/bootstrap/js/popper.js"></script>
	<script src="../../public/vendors/vendor-login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendors/vendor-login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../public/vendors/vendor-login/daterangepicker/moment.min.js"></script>
	<script src="../../public/vendors/vendor-login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/vendors/vendor-login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public/js/js-login/main.js"></script>

</body>
</html>