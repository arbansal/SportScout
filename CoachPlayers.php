<head>

<style type="text/css">

body{
    background-image: url('images/backGround.jpg');
    background-repeat: repeat;
    
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


</head>

<body>

<center>
        <div id='container'><center>Sports:</center></div>
        
        <form action='#' method='post'>
            <br>
            <table>
            <tr>
                <td>
            City Name:
                </td>
                <td>
            <select name="City" required>
                <option value='Bloomington'>Bloomington</option>
                <option value='Indianapolis'>Indianapolis</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>
            
            Sports:
            </td>
            <td>

            <select name="Sports" required>
                <option value='soccer'>Soccer</option>
                <option value='cricket'>Cricket</option>
                <option value='tennis'>Tennis</option>
                <option value='badminton'>Badminton</option>
                <option value='football'>Football</option>
            </select>
            </td>
            </tr>
            <tr>
                <td colspan="2">
            <input type="Submit" name='otherPlayersSubmit' value='Submit Sports' />
        </td>
            </tr>
        </table>
        </form>
        
</center>



        <?php


        if (isset($_POST['otherPlayersSubmit'])) {


        $db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");
        
        $Sports=$_POST['Sports']; 
        
        $City=$_POST['City'];

        $sql="SELECT *  FROM playerssignup natural join sporthobbies WHERE playersCity='$City' and playersSport='$Sports'";

        
    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    	echo "<center>"; 
    	
        echo "<div id='container'> Other Players </div>"; 
        echo "<br>";

       while ($row = mysqli_fetch_array($res)) { 
            
            echo "<table class='table-bordered' cellpadding='10px'>";

            echo "<tr>"; 
            
            echo "<td rowspan='9'> <img class='img-thumbnail' src=images/".$row['playersPhoto'].
            " alt='No Profile Photo' height='300px' width='250px'/> </td>";
            
            echo "</tr>";

            echo "<tr>";

            echo "<td>Username      ".$row['playersUsername']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Name      ".$row['playersName']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Age      ".$row['playersAge']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Gender      ".$row['playersGender']."</td>"; 

            echo "</tr>";

             echo "<tr>";

            echo "<td>Bio      ".$row['playersBio']."</td>";

            echo "</tr>";

            echo "<tr>";

            echo "<td>Address      ".$row['playersAddress']."</td>"; 

            echo "</tr>";


            echo "<tr>";

            echo "<td>City      ".$row['playersCity']."</td>"; 

            echo "</tr>";

            echo "<tr>";

            echo "<td>Contact      ".$row['playersContact']."</td>"; 

            echo "</tr>";

            echo "</table>";

            echo "<br><br><br>";    
            //echo "<td>Name".$row['Lastname']."</td>"; 
            //echo "<td>".$row['Age']."</td>"; 
            //echo "</tr>"; 
        } 
         
        

		}

	}
     
}
// Displaying Trainers

?>

</body>