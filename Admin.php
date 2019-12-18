<html>
<head>
	<style type="text/css">
	body{
    background-image: url('images/backGround.jpg');
    background-repeat: repeat;
    
}

table{
    font-family: sans-serif; 
    color: #3da8c6;
    
    background-image: url('images/tableBack.jpg');
    
}

#container {
 /*stitching*/
 color: white;
 outline: 1px dashed #98abb9;
 outline-offset: -5px;
 padding-top:10px;  
 background-color: Coral;
 height: 50px;
 width: 250px;
 
 /*shadow*/
 -webkit-box-shadow: 2px 2px 2px #000;
 -moz-box-shadow: 2px 2px 2px #000;
 box-shadow: 2px 2px 2px #000;
}

</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./home2.css">
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

<center>
<div id="container"><pre> Admin Login</pre></div>



			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			 <table >

			 <tr>
			  <td>
			  	Password:
			  </td>
			  <td>
			   	<input type="Password" name="Password">
			  </td>
			</tr>
			<tr>
			 	<td colspan="2">
			 	<center> 
			  <input type="submit" name="Adminsubmit" value="Submit">
			  	</center>
			  	</td>
			  </tr>
			 
			 </table>
			
			</form>
		
</center>		


			<?php

			if(isset($_POST['Adminsubmit'])) {
			
			$Password=$_POST['Password'];

			if($Password=="admin"){



			$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

			 $sql="SELECT *  FROM comments";

    		if ($res = mysqli_query($db, $sql)) { 
    
    		if (mysqli_num_rows($res) > 0) { 
    		
    		echo "<center>";
    		 while ($row = mysqli_fetch_array($res)) {

    		if (strlen($row['Name'])>1){  	
    		echo "<table class='table-bordered' cellpadding='10px'>";

            echo "<tr>"; 
            
        
            echo "<td>Name </td> <td>    ".$row['Name']."</td>";

            echo "</tr>";
            echo "<tr>"; 
            
        
            echo "<td>Email  </td> <td>    ".$row['Email']."</td>";

            echo "</tr>";

         	 echo "<tr>"; 
            
        
            echo "<td>Comment  </td> <td>   ".$row['Comments']."</td>";

            echo "</tr>";
            echo "</table>";
        }

            }
            echo "</center>";
		}
			}

}else{
echo "<script>
          alert('Wrong  Password');
          window.location.href='http://localhost/sportsscout/Admin.php';
        </script>"; 
}			
		
}

?>
</body>
</html>

