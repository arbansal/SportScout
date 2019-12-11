<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
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
 width: 300px;
 
 /*shadow*/
 -webkit-box-shadow: 2px 2px 2px #000;
 -moz-box-shadow: 2px 2px 2px #000;
 box-shadow: 2px 2px 2px #000;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportScout</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Gilda+Display' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Knewave' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="sans-serif.css">
    <link rel="stylesheet" type="text/css" media="print" href="serif.css">
    <link rel="stylesheet" type="text/css" href="./home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="page-menu-bar">
    <ul class="page-menu">
        <li class="menu-link"><a class="link-a" href="index.php">Home</a></li>
        <li class="menu-link"><a class="link-a" href="playersLoginFront.php">Player</a></li>
        <li class="menu-link"><a class="link-d" href="TrainerHome.html">Trainer</a></li>
        <li class="menu-link"><a class="link-b" href="ManagerHome.html">Manager</a></li>
		<li class="menu-link"><a class="link-b" href="Admin.php">Admin </a></li>
		<li class="menu-link"><a class="link-b" href="contact.php">Contact Us</a></li>
    </ul>
    <div class="res-menu-button">
        &equiv;
    </div>
</div>
<div class="pre-title">
    <div class="pre-title-line"></div>
    <div class="pre-title-text">
        Welcome to
    </div>
    <div class="pre-title-line"></div>
</div>
<h1>SportScout</h1>
<h2 id="h2-text">HUSTLE, HIT AND NEVER QUIT!</h2>
<div class="about-wrapper" id="about" style = "display:flex; flex-direction:row; justify-content:space-between; ">
    <div class="about">
        <h3>Who We Are</h3>
        <p class="featured-text pink">
            We are an online community assisting individuals and groups to pursue their passion towards sports, physical training and other outdoor activities!
        </p>
        <p>Here to help you with following:</p>
        <p>- Finding availability of courts, turfs, or fields by locality!
<br>
- Find and connect with other enthusiasts who share your sports interests!
<br>
- Find trainers to help you achieve your goals and participate in tournaments!
</p>
    </div>
    <img class="about-img" src="circle-cropped.png">
</div>
<div class="service-bg-wrapper">
    <div class="services-wrapper" id="services">
        <h3  id="h3-text">What's popular right now..</h3>
        <h4 class = "h4-text">VENUES & TOURNAMENTS</h4>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="1.jpg" alt="Simon Skjodt Assembly Hall" style="width:100%;">
                        <div class="carousel-caption">
                            <h3 class="h3-text2">Simon Skjodt Assembly Hall</h3>
                            <h3 class="h3-text2">$80/hr<h3/>
                        </div>
                    </div>

                    <div class="item">
                        <img src="2.jpg" alt="Woodbridge Tennis Courts" style="width:100%;">
                        <div class="carousel-caption">
                            <h3 class="h3-text2">Woodbridge Tennis Courts</h3>
                            <h3 class="h3-text2">$50/hr<h3/>
                        </div>
                    </div>

                    <div class="item">
                        <img src="4.jpeg" alt="Tennis Tournament" style="width:100%;">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="3.jpg" alt="Indiana University Memorial Stadium" style="width:100%;">
                        <div class="carousel-caption">
                            <h3 class="h3-text2">Indiana University Memorial Stadium</h3>
                            <h3 class="h3-text2">$200/hr<h3/>
                        </div>
                    </div>

                    <div class="item">
                        <img src="7.jpeg" alt="Women's BB Tournament" style="width:100%;">
                        <div class="carousel-caption">

                        </div>
                    </div>

                    <div class="item">
                        <img src="8.jpeg" alt="Little 500" style="width:100%;">
                        <div class="carousel-caption">
                            <h3 class="h3-text2">Little 500 Tournament</h3>
                            <h3 class="h3-text2">$100/participant<h3/>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
</div>

<div>
<center style="background-color:#1AA5A; display:flex; flex-direction:column; justify-content:center; text-align:center;">
<div style="background-color:#1AA5A; display:flex; flex-direction:row; justify-content:center; text-align:center; padding-top:2vw; font-family:'Raleway', sans-serif; font-size:40px; font-weight:bold">
    Search
</div>
<form action='#' method='post' style="background-color:#1AA5A; display:flex; flex-direction:row; justify-content:center; text-align:center;">
            <table>
                <tbody style="display:flex; flex-direction:row; background-color:#1AA5AB; padding:1vw">
            <tr>
                <td style="padding:5px; font-family: 'Raleway', sans-serif; color:white; font-size:20px;">
                City Name:
                </td>
            <td style="padding:5px; font-family: 'Raleway', sans-serif;  color:black">
            <select name="City" required style="border-radius:10px;  height:30px">
                <option value='Bloomington'>Bloomington</option>
                <option value='Chicago'>Chicago</option>
                <option value='California'>California</option>
                <option value='Indianapolis'>Indianapolis</option>
                <option value='NewYork'>New York</option>
                
            </select>
                </td>
            </tr>
            <td style = "width:30px"></td>
            <tr>
            <td style="padding:5px; font-family: 'Raleway', sans-serif;  color:white; font-size:20px;">
            Sports:
            </td>
            <td style="padding:5px; font-family: 'Raleway', sans-serif;  color:black">
            <select name="Sports" required style = "border-radius:10px; height:30px">
                <option value='soccer'>Soccer</option>
                <option value='cricket'>Cricket</option>
                <option value='tennis'>Tennis</option>
                <option value='badminton'>Badminton</option>
                <option value='football'>Football</option>
            </select>
            </td>
            </tr>
            <td style = "width:20px"></td>
            <tr>
            <td colspan="2" style="padding:5px; font-family: 'Raleway', sans-serif;">
            <center><input type="Submit" name='otherPlayersSubmit' value='Submit' style="height:30px; border-radius:10px; background-color:white; color:black;"/></center>
            </td>
            </tr>
</tbody>
            </table>
        </form>
        
        </center>
<br>

        <?php


        if (isset($_POST['otherPlayersSubmit'])) {


        $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
        
        $Sports=$_POST['Sports']; 
        
        $City=$_POST['City'];

        $sql="SELECT *  FROM playerssignup natural join sporthobbies WHERE playersCity='$City' and playersSport='$Sports'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	
        echo "<div class='container'>";
        
        echo " <div class='row'>
                <div class='col'>";

        echo "<div id='container' style=\"font-family: 'Raleway', sans-serif; align-text:center; padding-top:15px; color:black; font-weight:bold; border-radius:10px; outline:0px\"> Players Available </div>"; 
        echo "<br>";

       while ($row = mysqli_fetch_array($res)) { 

            echo "<div class='card'>";
            
            echo "<table class='table' cellpadding='10px'; background-color:#1AA5AB;>";

            

            echo "<tr>";

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Username    :  ".$row['playersUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Name    :  ".$row['playersName']."</td>"; 

            echo "</tr>";

            
            echo "</table>";
            echo "</div>";
            
            echo "<br>";    
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
         
        

		}else{

        
        echo "</center> </div> ";
    }


	}
     

// Displaying Trainers

    $sql="SELECT *  FROM trainersignup natural join 
    trainersporthobbies WHERE trainerCity='$City' and trainerSports='$Sports'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
        echo "<center>"; 
        echo " <div class='col'>";
        echo "<div id='container'  style=\"font-family: 'Raleway', sans-serif; align-text:center; padding-top:15px; color:black; font-weight:bold; border-radius:10px; outline:0px\"> Trainers Available </div>";
        echo "<br>";
         


       while ($row = mysqli_fetch_array($res)) { 
        echo "<div class='card'>";
            
            echo "<table class='table' cellpadding='10px'; background-color:#1AA5AB;>";

            
            echo "<tr>";

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Username    :  ".$row['trainerUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Name    :  ".$row['trainerName']."</td>"; 

            echo "</tr>";

            
            echo "</table>";
            echo "</div>";

            echo "<br>";    
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
         
        echo "</div>";
		echo "</div>";
        }else{
            
        }

    }
     
    

    $sql="SELECT * From manager Natural Join venues WHERE PlaceCity='$City'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
        echo "<div class='col'>";
		echo "<center>"; 
        echo "<br><div id='container'  style=\"font-family: 'Raleway', sans-serif; align-text:center; padding-top:15px; color:black; font-weight:bold; border-radius:10px; outline:0px\"> Venues Available</div><br>";
		echo "<div class='col'>";

       while ($row = mysqli_fetch_array($res)) { 
        echo "<div class='card'>";

        echo "<table class='table' cellpadding='10px';>"; 
            

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Place:".$row['PlaceName']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td style=\"font-family: 'Raleway', sans-serif;  color:black;  background-color:#1AA5AB;\">Details:      ".$row['PlaceDetails']."</td>"; 

            echo "</tr>";
            echo "</table>";
            echo "</div>";
            echo "<br>";

                
        }

echo "</div>";        
echo "</div>";
         
        

        }

    }

echo "</div>";


        echo "</center>";
        //mysqli_free_res($res); 
    } 
    

?>
</center>
</div>

</body>
</html>