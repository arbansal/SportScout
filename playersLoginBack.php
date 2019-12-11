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
</head>

<body >

<div class="vishalDivPadding"> 

<?php

if (isset($_POST['playerLogin'])) {

    echo "<div width='100%'id='float'>";
    echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";
	echo "</div>";
    $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
    
    $playersUsername=$_POST['playersUsername'];
    
    $playersPassword=$_POST['playersPassword'];

    $sql="SELECT * FROM playerssignup WHERE playersUsername='$playersUsername' and playersPassword='$playersPassword'";

 
if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	
        
        
        echo "<br>";
        echo "<center>"; 
    	

        echo "<div class='container'>";
        
        echo " <div class='row'>
                <div class='col'>";
        echo "<div id='container'> Your Profile </div>";
        echo "<table class='table-bordered' cellpadding='10px'>"; 

        session_start();
        $_SESSION["playersUsername"] = $playersUsername;


       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td rowspan='9'> <img class='img-thumbnail' src=images/".$row['playersPhoto'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>Username:      ".$row['playersUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Name:      ".$row['playersName']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Age:      ".$row['playersAge']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Gender:      ".$row['playersGender']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Bio:      ".$row['playersBio']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Address:      ".$row['playersAddress']."</td>"; 

            echo "</tr>";


            echo "<tr>";

            echo "<td>City:      ".$row['playersCity']."</td>"; 

            echo "</tr>";

            echo "<tr>";

            echo "<td>Contact:      ".$row['playersContact']."</td>"; 

            echo "</tr>";

            
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
        echo "</table>"; 

		echo "</div>";
        
      	

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
        echo "<div class='col'>";
        echo "<center>"; 
        echo "<br>";
 		echo "<div id='container'>Your Interested Sports</div>"; 
        echo "<table cellpadding='15px' class='table-bordered'>";
        echo "<col width='450px'>";

       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td> <center>".$row['playersSport']."</center></td>";

            echo "</tr>";

       

        
        //mysqli_free_res($res); 
    }
 echo "</table>";

    }else{

        echo "<div id='newdiv'> ";
        echo "No Sports Selected";
    echo "</div>";
    }
}


$looking_for_trainer="SELECT playersSport FROM playerssignup 
    natural join playerslookingtrainer where playersUsername='$playersUsername'";

    if ($res = mysqli_query($db, $looking_for_trainer)) { 
    
    //echo "run";
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo "<br>";
 		echo "<div id='container'>You Want Coach For following Sports</div>";
        echo "<table class='table-bordered' cellpadding='15px'>";
        echo "<col width='450px'>";

       while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            
            echo "<td> <center>".$row['playersSport']."</center> </td>";

            echo "</tr>";

        
        
        //mysqli_free_res($res); 
    }

echo "</table>";
echo "</div>";
    }else{

        echo "<div id='newdiv'> ";
        echo "Not Looking for any Trainer";
    echo "</div>";
    }
}


    echo "</div>";
    echo "<br>";
    echo "<div id='newdiv'> ";
    echo "<a href='playersSportInterest.php' target='_blank'>Select Interest</a>";
        echo "<br>";
        echo "<a href='otherPlayers.php' target='_blank'>Find nearby Players Trainer and Grounds</a>";
        echo "<br>";
        echo "<a href='player_lookingTrainers.php' target='_blank'>Announcement for Trainer</a>";
 	echo "</div>";       

        echo "</center>";
        //mysqli_free_res($res); 
    
    } 
      



?>

</div>

</body>