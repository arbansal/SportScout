<html>

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
<link rel="stylesheet" type="text/css" href="./home.css">
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
<script>

function validateForm() {
  
  /*
  var Username = document.forms["playersSignup"]["playersUsername"].value;
  if (Username == "") {
    alert("Username must be filled out");
    return false;
  }
  */

  var Password = document.forms["playersSignup"]["playersPassword"].value;
  if (Password.length < 5) {
    alert("Password must be atleast 5 characters long");
    return false;
  }

}


</script>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
  
  <form class="login100-form validate-form" name="playersSignup" method="POST" action="playersSignup.php" enctype="multipart/form-data" >
   
   <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Sign Up
          </span>
  	
    <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="playersUsername" placeholder="Username" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="playersPassword" placeholder="Password" required>
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="playersName" placeholder="Name" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" >
            <input class="input100" type="number"  name="playersAge" placeholder="Age" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    
    <div class="wrap-input100 validate-input" >
            <input class="input100" type="text"  name="playersGender" placeholder="Gender" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
   
    <div class="wrap-input100 validate-input">
            <input class="input100" type="text"  name="playersBio" placeholder="BIO" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
   
    <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="playersAddress"  placeholder="Address: 10th St, Fountain Park" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" >
    City:<pre><select name="playersCity" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='Indianapolis'>Indianapolis</option>
            </select>
          </pre>
    </div>

    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="playersContact"   placeholder="Contact" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
   
    
    <div class="wrap-input100 validate-input">
            <input class="input100" type="file" name="playersPhoto"placeholder="Profile pic:" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    
    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="playersEmail"placeholder="Email Id" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    

    <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="upload">
              SIGN UP
            </button>
      </div>

  
  </form>


</body>
</html>
