<?php
  // Create database connection
  $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");


 // If upload button is clicked ...
  
  if (isset($_POST['VenueAdded'])) {
    // Get image name

    $image = $_FILES['images']['name'];

    session_start();
    

    $ManagerUsername=$_SESSION['ManagerUsername'];
    

    
    // Get text    
  
    $PlaceName=$_POST['PlaceName'];
    $PlaceCity=$_POST['PlaceCity'];
    $PlaceDetail=$_POST['PlaceDetail'];
    

    // image file directory
    $target = "images/".basename($image);

    $file_ext=explode('.',$_FILES['images']['name']);
    $file_ext=strtolower(end($file_ext));
    $extensions= array("jpeg","jpg","png");
      
     if(in_array($file_ext,$extensions)=== false){
          //echo "<script> alert('Please Upload a JPEG,JPG or PNG file')</script>";
          //header("Location: http://localhost/sportsscout/playersSignupFrontEnd.php");

          echo "<script>
          alert('Please Upload a JPEG,JPG or PNG file');
          window.location.href='http://localhost/sportsscout/addVenues.php';
        </script>";
      }else{





    $sql = "INSERT INTO venues VALUES ('$ManagerUsername','$PlaceName','$PlaceCity','$PlaceDetail','$image')";
    // execute query
    
    if(mysqli_query($db, $sql))
      {
        echo "<script>
        alert('Data Enter Successfully');

        </script>";
        header("Location: http://localhost/sportsscout/addVenues.php");
      }
    else{
      echo "<script>
        alert('Place already exists');
                </script>";
    }

    if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";

    }else{
      $msg = "Failed to upload image";
    }

    


  } 
    }

    //$result = mysqli_query($db, "SELECT * FROM playerssignup");
?>


		<?php


		// if (isset($_POST['VenueAdded']) and isset($_FILES["PlaceImage"])) {


		// $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");;

		// session_start();

		// $ManagerUsername=$_SESSION['ManagerUsername'];
		// $image = $_FILES['PlaceImage']['name'];
  //   // Get text    
  	
  //   $PlaceName=$_POST['PlaceName'];
  //   $PlaceCity=$_POST['PlaceCity'];
  //   $PlaceDetail=$_POST['PlaceDetail'];



  // 	// image file directory
  // 	$target = "places/".basename($image);


  // 	$sql = "INSERT INTO venues VALUES ('$ManagerUsername','$PlaceName','$PlaceCity,'$PlaceDetail','$image')";
  // 	// execute query
  	
  // 	if(mysqli_query($db, $sql))
  // 		{
  // 			echo "<script>
  //       alert('Place Added Successfully');
  //       </script>";
  //      // header("Location: http://localhost/sportsscout/playersLoginFront.php");
  // 		}
  // 	else{
  // 		echo "<script>
  //       alert('Error try checking place Name');
  //       </script>";
  // 	}

  // 	if (move_uploaded_file($_FILES['PlaceImage']['tmp_name'], $target)) {
  // 		$msg = "Image uploaded successfully";

  // 	}else{
  // 		$msg = "Failed to upload image";
  // 	}

    


//  } 
    

	