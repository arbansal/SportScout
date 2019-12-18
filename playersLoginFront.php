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
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./home2.css">
<!--===============================================================================================-->
</head>



<body>
<div class="page-menu-bar">
<ul class="page-menu">
        <li class="menu-link"><a class="link-a" href="index.php">Home</a></li>
        <li class="menu-link"><a class="link-a" href="playersLoginFront.php">Player</a></li>
        <li class="menu-link"><a class="link-d" href="trainerLoginFront.php">Trainer</a></li>
        <li class="menu-link"><a class="link-b" href="ManagerLoginFront.php">Manager</a></li>
		<li class="menu-link"><a class="link-b" href="Admin.php">Admin </a></li>
		<li class="menu-link"><a class="link-b" href="contact.php">Contact Us</a></li>
    </ul>
    <div class="res-menu-button">
        &equiv;
    </div>
</div>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">

<form method='post' action='playersLoginBack.php' class="login100-form">

<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

<span class="login100-form-title p-b-34 p-t-27">
						Player
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