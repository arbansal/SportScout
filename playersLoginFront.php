<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>



<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">

<form method='post' action='playersLoginBack.php' class="login100-form">

<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name='playersUsername' placeholder="Username" />
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
</div>


<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name='playersPassword' placeholder="Password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>

					
			<div style = "display:flex; flex-direction:row; justify-content:space-between; align-content:center;">
					<div class="container-login100-form-btn">
						<button type='submit' name='playerLogin'class="login100-form-btn">
							Login
						</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button type='submit' name='playerRegister' formaction="playersSignupFrontEnd.php" class="login100-form-btn">
							Register
						</button>
					</div>
</div>


</form>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>