

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




body{
	background-image: url('images/backGround.jpg');
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
<link rel="stylesheet" type="text/css" href="./home2.css">
</head>

<body >
<div class="page-menu-bar">
            <ul class="page-menu">
            <li class="menu-link"><a class="link-a" target='_blank' href="index.php">Home</a></li>
        <li class="menu-link"><a class="link-a" target='_blank' href="trainerSportInterest.php" >Expertise</a></li>
        <li class="menu-link"><a class="link-d" target='_blank' href="CoachPlayers.php">Search</a></li>
        <li class="menu-link"><a class="link-b" target='_blank' href="contact.php">Contact Us</a></li>
        <li class="menu-link"><a class="link-b"  href="logout.php">Logout </a></li>
                </ul>

            </div>
<div class="vishalDivPadding"> 


<?php

if (isset($_POST['trainerLogin'])) {



	$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
    
    $trainerUsername=$_POST['trainerUsername'];
    
    $trainerPassword=$_POST['trainerPassword'];

    $sql="SELECT * FROM trainersignup where trainerUsername='$trainerUsername' and trainerPassword='$trainerPassword' ";

 
if ($res = mysqli_query($db, $sql)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	echo "<div class='heading'> Your Profile </div>";
    	echo "<br>";
        echo "<table class='table-bordered' cellpadding='10px'>"; 

        session_start();
        $_SESSION["trainerUsername"] = $trainerUsername;


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td rowspan='9'> <img class='img-thumbnail' src=images/".$row['image'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>Username      ".$row['trainerUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Name      ".$row['trainerName']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Age      ".$row['trainerAge']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Gender      ".$row['trainerGender']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Bio      ".$row['trainerBio']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Address      ".$row['trainerAddress']."</td>"; 

            echo "</tr>";


            echo "<tr>";

            echo "<td>City      ".$row['trainerCity']."</td>"; 

            echo "</tr>";

            echo "<tr>";

            echo "<td>Contact      ".$row['trainerContact']."</td>"; 

            echo "</tr>";

            
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
        echo "</table>";


        
      	$sportssql="SELECT trainerSports FROM trainersignup natural join trainersporthobbies where trainerUsername='$trainerUsername'";

    if ($res = mysqli_query($db, $sportssql)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "<br>";
        echo "<div class='heading'> Your coaching expertise (Sports) </div>";
        echo "<br>";
        echo "<table class='table-bordered' cellpadding='10px'>"; 
        echo "<col width='450px'>";


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td><center>".$row['trainerSports']."</center></td>";

            echo "</tr>";

       
        //mysqli_free_res($res); 
    }

     echo "</table>";

        echo "</center>";

    }

    } 


        

		}
        else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/trainerLoginFront.php';
        </script>"; 
    }     



	}
     

       
    

}

?>
