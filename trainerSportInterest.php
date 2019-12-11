<head>

<style type="text/css">

body{
	background-image: url('images/backGround.jpg');
	background-repeat: no-repeat;
	background-position: center;
}
#container {
 /*stitching*/
 color: white;
 outline: 1px dashed #98abb9;
 outline-offset: -5px;
 padding-top:10px;  
 background-color: Coral;
 height: 50px;
 width: 300px;
 
 /*shadow*/
 -webkit-box-shadow: 2px 2px 2px #000;
 -moz-box-shadow: 2px 2px 2px #000;
 box-shadow: 2px 2px 2px #000;
}


</style>

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./home2.css">


</head>
		<center>
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
		<div id='container'><center>Sports for Coaching::</center></div>
		<br>
		<form action='#' method='post'>
			<select name='Sports[]' multiple> 
			<option value='soccer'>Soccer</option>
			<option value='cricket'>Cricket</option>
			<option value='tennis'>Tennis</option>
			<option value='badminton'>Badminton</option>
			<option value='football'>Football</option>
			</select>
			<input type="Submit" name='CoachSportssubmit' value='Submit Sports' />
		</form>
		</center>

		<?php


		if (isset($_POST['CoachSportssubmit'])) {


		$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

		session_start();


		$trainerUsername=$_SESSION["trainerUsername"];

		$delete="DELETE FROM trainersporthobbies WHERE trainerUsername='$trainerUsername'";
	
		mysqli_query($db, $delete);

		foreach ($_POST['Sports'] as $select)
		{
		//echo "You have selected :" .$select; // Displaying Selected Value
		$sql="INSERT INTO trainersporthobbies Values('$trainerUsername','$select')";
		if(mysqli_query($db, $sql))
			{
				echo "<script>
          alert('Sport(s) Selected');
        </script>";
			}
		else{
			echo "<script>
          alert('Error in selecting Sport(s) ');
        </script>";
			}
		}

	}
		?>
		