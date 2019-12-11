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




</head>
		<center>
		<div id='container'><center>Sports:</center></div>
		<br>
		<form action='#' method='post'>
			<select name='Sports[]' multiple> 
			<option value='soccer'>Soccer</option>
			<option value='cricket'>Cricket</option>
			<option value='tennis'>Tennis</option>
			<option value='badminton'>Badminton</option>
			<option value='football'>Football</option>
			</select>
			<br>
			<br>
			<input type="Submit" name='Sportssubmit' value='Submit Sports' />
		</form>
		</center>

		<?php


		if (isset($_POST['Sportssubmit'])) {


		$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

		session_start();


		$playersUsername=$_SESSION["playersUsername"];

		$delete="DELETE FROM sporthobbies WHERE playersUsername='$playersUsername'";
	
		mysqli_query($db, $delete);

		foreach ($_POST['Sports'] as $select)
		{
		//echo "You have selected :" .$select; // Displaying Selected Value
		$sql="INSERT INTO sporthobbies Values('$playersUsername','$select')";
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
		