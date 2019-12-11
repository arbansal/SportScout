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
<!--===============================================================================================-->
</head>

<body>

<script>

function validateForm() {
  
  /*
  var Username = document.forms["trainerSignup"]["trainerUsername"].value;
  if (Username == "") {
    alert("Username must be filled out");
    return false;
  }
  */

  var Password = document.forms["trainerSignup"]["trainerPassword"].value;
  if (Password.length < 5) {
    alert("Password must be atleast 5 characters long");
    return false;
  }

}


</script>


 <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
  
  <form class="login100-form validate-form" name="trainerSignup" method="POST" action="TrainerSignupBackend.php" enctype="multipart/form-data" >
   
   <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Sign Up
          </span>
  
  	
    <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="trainerUsername" placeholder="Username" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="trainerPassword" placeholder="Password" required>
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="trainerName" placeholder="Name" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" >
            <input class="input100" type="number"  name="trainerAge" placeholder="Age" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    
    <div class="wrap-input100 validate-input" >
            <input class="input100" type="text"  name="trainerGender" placeholder="Gender" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
   
    <div class="wrap-input100 validate-input">
            <input class="input100" type="text"  name="trainerBio" placeholder="BIO" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
   
    <div class="wrap-input100 validate-input" >
            <input class="input100" type="text" name="trainerAddress"  placeholder="Address: 10th St, Fountain Park" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

    <div class="wrap-input100 validate-input" >
    City:<pre><select name="trainerCity" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='Indianapolis'>Indianapolis</option>
            </select>
          </pre>
    </div>

    <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="trainerContact"   placeholder="Contact" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    
    
    <div class="wrap-input100 validate-input">
            <input class="input100" type="file" name="trainerPhoto"placeholder="Profile pic:" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>
    
    

    <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="trainerSignup">
              SIGN UP
            </button>
      </div>

  
  </form>



</body>
</html>
