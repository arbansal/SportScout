
<head>

<style type="text/css">
.vishalDivPadding {
  padding: 25px 50px;
}

#float{
    float: right;
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
    background-repeat: no-repeat;
    background-position: center;
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

if (isset($_POST['ManagerLogin'])) {

    echo "<div width='100%'id='float'>";
    echo "<a href='logout.php'><button class='btn btn-danger'>Logout</button></a>";
    echo "</div>";

	$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
    
    $ManagerUsername=$_POST['ManagerUsername'];
    
    $ManagerPassword=$_POST['ManagerPassword'];

    $sql="SELECT * FROM manager Where ManagerUsername='$ManagerUsername' and ManagerPassword='$ManagerPassword' ";

 
    if ($res = mysqli_query($db, $sql)) { 
    
    

    if (mysqli_num_rows($res) > 0) { 
    	

        session_start();
        $_SESSION["ManagerUsername"] = $ManagerUsername;


        echo "<center>"; 
        echo "<div id='container'> Your Account, Sir
        ".$ManagerUsername."</div>";
        echo "<br>";
        

        
        $sql="SELECT * From manager Natural Join venues  Where ManagerUsername='$ManagerUsername'";
        
        $res = mysqli_query($db, $sql);

        if ($res){
            
        if (mysqli_num_rows($res) > 0){
            

        while ($row = mysqli_fetch_array($res)) { 
            
            echo "<table class='table-bordered' cellpadding='10px'>"; 
            echo "<tr>"; 
            
            echo "<td rowspan='5'> <img class='img-thumbnail' src=images/".$row['PlaceImage'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            

            echo "<td>Place:".$row['PlaceName']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td rowspan='4'>Details:      ".$row['PlaceDetails']."</td>"; 

            echo "</tr>";
            echo "</table>";
            echo "<br>";

            }
             
            }
        }	
        
    echo "<br>"; 
    echo "<div id='newdiv'>"; 
    echo "Want to add new places";
    echo "<a target='_blank' href='addVenues.php'> Add venues </a>";
    echo "</div>";
    echo "<br>";

		}
        else { 
          echo "<script>
          alert('Wrong Username or Password');
          window.location.href='http://localhost/sportsscout/ManagerLoginFront.php';
        </script>"; 
            } 



	}
    

        


}

?>
