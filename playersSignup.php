



<?php
  // Create database connection
  $db = new mysqli("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
  // $conn = new mysqli("localhost", "root", "", "sportsscout") or die('Unable to connect to Database');


 // If upload button is clicked ...
  
  if (isset($_POST['upload'])) {
  	// Get image name

  	$image = $_FILES['playersPhoto']['name'];
  	
    // Get text    
  
    $playersUsername=$_POST['playersUsername'];
    $playersPassword=$_POST['playersPassword'];
    $playersName=$_POST['playersName'];
    $playersAge=$_POST['playersAge'];
    $playersGender=$_POST['playersGender'];
    $playersBio=$_POST['playersBio'];
    $playersAddress=$_POST['playersAddress'];
    $playersCity=$_POST['playersCity'];
    $playersContact=$_POST['playersContact'];
    $playersEmail=$_POST['playersEmail'];

    if (!filter_var($playersEmail, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        echo "<script>
          alert('Invalid Email Id');
          window.location.href='http://localhost/sportsscout/playersSignupFrontEnd.php';
        </script>";
      }
  	// image file directory
  	$target = "images/".basename($image);

  	$file_ext=explode('.',$_FILES['playersPhoto']['name']);
    $file_ext=strtolower(end($file_ext));
    $extensions= array("jpeg","jpg","png");
      
     if(in_array($file_ext,$extensions)=== false){
          //echo "<script> alert('Please Upload a JPEG,JPG or PNG file')</script>";
          //header("Location: http://localhost/sportsscout/playersSignupFrontEnd.php");

          echo "<script>
          alert('Please Upload a JPEG,JPG or PNG file');
          window.location.href='http://localhost/sportsscout/playersSignupFrontEnd.php';
        </script>";
      }





  	$sql =sendQuery("INSERT INTO playerssignup VALUES ('$playersUsername','$playersPassword','$playersName',$playersAge,
    '$playersGender','$playersBio','$playersAddress',
    '$playersCity','$playersContact','$image','$playersEmail');");
  	// execute query
    
  	if($sql)
  		{

            $to       = $playersEmail;
            $subject  = 'SPORTSCOUT - Signup successful';
            $message  = 'Hi, '.$playersName.'! Your registration on SportScout is completed.';
            $headers  = 'From: iusportscout@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            if(!mail($to, $subject, $message, $headers))
                echo "<script>
                          alert(Error sending message to SportScout. Please retry.);
                          window.location.href='http://localhost/sportsscout/playerSignup.php';
                      </script>";

  			echo "<script>
          alert('Sign-up Successful. Redirecting to login page.');
          window.location.href='http://localhost/sportsscout/playersLoginFront.php';
        </script>";
  		}
  	else{
  		echo "<script>
        alert('UserName already exists');
        window.location.href='http://localhost/sportsscout/playersSignupFrontEnd.php';
        </script>";
  	}

  	if (move_uploaded_file($_FILES['playersPhoto']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";

  	}else{
  		$msg = "Failed to upload image";
      echo "<script> alert('error')</script>";
  	}

    


  } 
    

    //$result = mysqli_query($db, "SELECT * FROM playerssignup");


    
function sendQuery($cmd) {
  global $db;

  $db->set_charset('utf8');
  // $result = $conn->query(strtolower($cmd));
  $result = $db->query($cmd);

  // if result has 0 rows
  /* SELECT:
   *  result has multiple rows -> return obj
   *  result has 0 rows -> return false
   *
   * INSERT/DELETE/UPDATE/...
   *  successful -> return true
   *  unsuccessful -> return false
   */
  if (gettype($result)=="boolean" or $result->num_rows > 0) {
      return $result; // to read: $result->fetch_assoc()["$column_name"]
  } else {
      return false;
  }

  $db->close();
}


?>



<?php
/*
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<p>".$row['playersUsername']."</p>";
        echo "<img width='400px' height=''300px' src='images/".$row['playersPhoto']."' >";
      	
      echo "</div>";
 
    }
 */
  ?>

