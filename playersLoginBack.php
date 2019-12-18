<head>

<style type="text/css">
.vishalDivPadding {
  padding: 25px 50px;
}

#newdiv{
    border-style: solid;
    width: 50%;
    background-image: url('images/tableBack.jpg');
}
 
/*#container {*/
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




body{
	/*background-image: url('images/backGround.jpg');*/
	background-repeat: repeat;
	
}

#float{
    float: right;
}
table{

	font-family: sans-serif; 
    color: #3da8c6;
    background-image: url('images/tableBack.jpg');
    
}


</style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"  type='text/css'>

<link rel="stylesheet" type="text/css" href="./home2.css">
<link rel="stylesheet" type="text/css" href="./playerProfile.css">
</head>

<body >
<div class="page-menu-bar">
<ul class="page-menu">
        <li class="menu-link"><a class="link-a" href="index.php" target='_blank' >Home</a></li>
        <li class="menu-link"><a class="link-a" target="_blank" href="playersSportInterest.php">Interest</a></li>
        <li class="menu-link"><a class="link-d" target="_blank" href="otherPlayers.php">Search</a></li>
        <li class="menu-link"><a class="link-b" href='player_lookingTrainers.php' target='_blank'>Announce</a></li>
		
		<li class="menu-link"><a class="link-b" target='_blank' href="contact.php">Contact Us</a></li>
        <li class="menu-link"><a class="link-b" href="logout.php">Logout </a></li>
    </ul>
    <div class="res-menu-button">
        &equiv;
    </div>
</div>
<div> 

<?php

if (isset($_POST['playerLogin'])) {

    /*echo "<div width='100%'id='float'>";
    echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";
	echo "</div>";*/
    $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
    
    $playersUsername=$_POST['playersUsername'];
    
    $playersPassword=$_POST['playersPassword'];

    $sql="SELECT * FROM playerssignup WHERE playersUsername='$playersUsername' and playersPassword='$playersPassword'";

 
if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	
        
        /*
        echo "<br>";
        echo "<center>";
        echo "<div class='container'>";
        echo " <div class='row'>
                <div class='col'>";
        echo "<div id='container'> Your Profile </div>";
        echo "<table class='table-bordered' cellpadding='10px'>"; 
*/    
        session_start();
        $_SESSION["playersUsername"] = $playersUsername;

       while ($row = mysqli_fetch_array($res)) { 

        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "   <div class='col-sm-12 col-md-6 featured-container'>";
        echo "     <div class='card featured'>";
        echo "      <center>";
        echo "   <img class='rounded-circle' src=images/".$row['playersPhoto']." width='400px' height='400px' style='margin-top:100px;'>";
        echo "</center>";
        echo "     </div>";
        echo "  </div>";
        echo "  <div class='col-sm-12 col-md-6' float='right'>";
        echo "    <div class='card sub-featured' style='height:600px;'>";
        echo "    <h2 style='background-color:lightsalmon;color:white;'>User Profile</h2>";
        echo "      <p>Username:      ".$row['playersUsername']." </p>";
        echo "      <p>Name:      ".$row['playersName']." </p>";
        echo "      <p>Age:      ".$row['playersAge']." </p>";
        echo "      <p>Gender:      ".$row['playersGender']." </p>";
        echo "      <p>Bio:      ".$row['playersBio']." </p>";
        echo "      <p>Address:      ".$row['playersAddress']." </p>";
        echo "      <p>City:      ".$row['playersCity']." </p>";
        echo "      <p>Contact:      ".$row['playersContact']." </p>";

        echo "</div>";
    
    //    echo "  </div>"; 

        
        $playersEmail=$row['playersEmail']; 
        } 


        $_SESSION['playersEmail']= $playersEmail;

		}
		else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/playersLoginFront.php';
        </script>"; 
    }   

	}
     
     
$sportssql="SELECT playersSport FROM playerssignup 
    natural join sporthobbies where playersUsername='$playersUsername'";

    if ($res = mysqli_query($db, $sportssql)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        /*echo "<div class='col'>";
        echo "<center>"; 
        echo "<br>";
 		echo "<div id='container'>Sports Interested In</div>"; 
        echo "<table cellpadding='15px' class='table-bordered'>";
        echo "<col width='450px'>";*/
        echo "  <div class='col-sm-6 col-md-3' style='width:250px; float:left;'>";
        echo "    <div class='card non-featured' style='width:250px; float:left;'>";
        echo "    <p style='background-color:#33a2ae;color:white;'>Sports Interested In </p>";
        

       while ($row = mysqli_fetch_array($res)) { 
                       
            echo "<p>".$row['playersSport']."</p>";

        

        
        //mysqli_free_res($res); 
    }
    

    }else{

        echo "<div id='newdiv'> ";
        echo "No Sports Selected";
    echo "</div>";
    
    }
    echo "    </div>";
        echo "  </div>";
    
}
$looking_for_trainer="SELECT playersSport FROM playerssignup 
    natural join playerslookingtrainer where playersUsername='$playersUsername'";

    if ($res = mysqli_query($db, $looking_for_trainer)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        echo "  <div class='col-sm-6 col-md-3' style='width:250px; float: right;'>";
            echo "    <div class='card non-featured accent' style='width:250px; float: right;'>";
            echo "    <p style='background-color:#efefef;color:grey;'>Need training in</p>";
            /*echo "</div>";*/
       while ($row = mysqli_fetch_array($res)) { 
            /*echo "<tr>"; 
            echo "<td> <center>".$row['playersSport']."</center> </td>";
            echo "</tr>";*/
           
            echo "<p>".$row['playersSport']." </p>";
            

        


        //mysqli_free_res($res); 
    }

/*echo "</table>";*/
echo "</div>";

    }else{

        echo "<div id='newdiv'> ";
        echo "Not Looking for any Trainer";
    echo "</div>";
    }
echo "    </div>";
echo "  </div>";
}


    echo "</div>";
   /* echo "<div> ";
    echo "<a href='playersSportInterest.php' target='_blank'>Select Interest</a>";
        echo "<br>";
        echo "<a href='otherPlayers.php' target='_blank'>Find nearby Players Trainer and Grounds</a>";
        echo "<br>";
        echo "<a href='player_lookingTrainers.php' target='_blank'>Announcement for Trainer</a>";
 	echo "</div>"; */      

        echo "</center>";
        //mysqli_free_res($res); 
    
    } 
      



?>

</div>

</body>