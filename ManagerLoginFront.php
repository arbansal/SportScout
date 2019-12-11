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
        <li class="menu-link"><a class="link-d" href="TrainerHome.html">Trainer</a></li>
        <li class="menu-link"><a class="link-b" href="ManagerHome.html">Manager</a></li>
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

<form method='post' action='ManagerLoginBackend.php' class="login100-form validate-form">

<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

<div class="wrap-input100 validate-input" data-validate = "Enter username">
<input class="input100" type="text" name='ManagerUsername' placeholder="Username" required/>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
</div>


<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name='ManagerPassword' placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
</div>

					
					<div class="container-login100-form-btn">
						<button type='submit' name='ManagerLogin' class="login100-form-btn">
							Login
						</button>
					</div>


</form>

</center>
