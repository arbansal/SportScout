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
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto|Rajdhani&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./home2.css">


</head>
<body>
		<center>
		<div class="page-menu-bar">
            <ul class="page-menu">
                    <li class="menu-link"><a class="link-a" href="index.php">Home</a></li>
                    <li class="menu-link"><a class="link-a" href="trainerSportInterest.php">Expertise</a></li>
                    <li class="menu-link"><a class="link-d" href="CoachPlayers.php">Search</a></li>
                    <li class="menu-link"><a class="link-b" href="contact.php">Contact Us</a></li>
                    <li class="menu-link"><a class="link-b" href="logout.php">Logout</a></li>
                </ul>

            </div>
		<div class='heading'><center>SPORTS TO COACH</center></div>
		<br>
		<form action='#' method='post'>
		<center>
			<select name='Sports[]' multiple> 
			<option value='soccer'>Soccer</option>
			<option value='cricket'>Cricket</option>
			<option value='tennis'>Tennis</option>
			<option value='badminton'>Badminton</option>
			<option value='football'>Football</option>
			</select>
			<br><br>
		    <span>-------------    </span><button id="button" class="btnAll" name="otherPlayersSubmit">SUBMIT</button></center>
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
</body>