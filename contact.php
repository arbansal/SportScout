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
 width: 450px;
 
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
</head>
<body>


<?php
// define variables and set to empty values
$name = $email  = $comment  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div id="container"><pre>  	Contact Us</pre></div>

<div class="row">
        <div class="col-sm-6">

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			  <table class="table table-striped">

			 <tr>
			  <td>
			  	Name:
			  </td>
			  <td>
			   	<input type="text" name="name" required>
			  </td>
			</tr>

			 <tr>
			  <td>
			  	E-mail:
			  </td>
			  <td>
			   	<input type="text" name="email" required>
			  </td>
			 </tr>

			<tr>
			  <td>
			  Comment:
			  </td>
			  <td>
			   <textarea name="comment" rows="4" cols="40" required></textarea>
			  </td>
			 </tr>
			 <tr>
			 	<td>
			  <input type="submit" name="submit" value="Submit">
			  	</td>
			  </tr>
			 </table>
			</form>
		</div>
		<div class="col-sm-6">

			<?php

			$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

			$sql = "INSERT INTO comments VALUES ('$name','$email','$comment')";

  			mysqli_query($db, $sql);
  	



			echo "<table>";
			echo "<tr><td>Your Review:</td></tr>";
			echo "<tr><td>";
			echo $name;
			echo "</td></tr>";
			echo "<tr><td>";
			echo $email;
			echo "</td></tr>";
			echo "<tr><td>";
			echo $comment;
			echo "</td></tr>";
			
			?>
		</div>
	</div>
</body>
</html>

