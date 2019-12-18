<head>
    <style type="text/css">
    body{
    background-image: url('images/background.jpg');
    background-repeat: repeat;
    
}

table{
    margin-top: 10px;
    font-family: sans-serif; 
    color: #3da8c6;
    width:500px;
    border:2px;
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
 width: 459px;
 
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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,100,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./home2.css">
    </head>


<script type="text/javascript">
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("max", today);
</script>

<center>
<form action='creditCard.php' method='post'>
<table cellspacing="5px" cellpadding="10px">

<tr>
<td>
Date: </td>
<td>
<input id="datefield" type='date' min='2020-01-01' name="bookDate"></input>
</td>

<td>
Time:
</td>

<td>
        <select name="timeValue">
		<option value="10AM-11AM">10:00AM-11:00AM</option>
		<option value="11AM-12PM">11:00AM-12:00PM</option>
		<option value="12PM-1PM">12:00PM-1:00PM</option>
		<option value="1PM-2PM">1:00PM-2:00PM</option>
		<option value="2PM-3PM">2:00PM-3:00PM</option>
		<option value="3PM-4PM">3:00PM-4:00PM</option>
		<option value="4PM-5PM">4:00PM-5:00PM</option>
		</select>
</td>
</tr>
        <td>
        Credit Card Details:
        </td>
<td>
<input type="text" ></td>
<td>
Exp Month:
</td>
<td>
    <input type="text" placeholder="10/21">
</td>

<tr>
<td colspan="4">
<CENTER><br>
<button type="submit" id="button" class="btnAll" name="BookedPlace">BOOK</button>
</CENTER>
</td></tr>
</table>
</form>
</center>
<?php
// echo $_POST['placeId'];
// echo $_POST['playersUsername'];
// echo $_POST['playersEmail'];
// echo $_POST['managersEmail'];

echo "<h2 style='background-color:lightsalmon;color:white;'>Already filled values</h2>";
echo "<br>";

if(isset($_POST['bookRedirection'])){

$placeId=$_POST['placeId'];
$playersUsername=$_POST['playersUsername'];
$playersEmail=$_POST['playersEmail'];
$managersEmail=$_POST['managersEmail'];

session_start();
$_SESSION['placeId']=$placeId;
$_SESSION['playersUsername']=$playersUsername;
$_SESSION['playersEmail']=$playersEmail;
$_SESSION['managersEmail']=$managersEmail;

$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

$sql="SELECT *  FROM bookings WHERE venueName='$placeId'";

    if ($res = mysqli_query($db, $sql)) { 
    
    if (mysqli_num_rows($res) > 0) { 
    
    echo "<center>";
    echo "<table cellspacing='20px' cellpadding='20px'>";
    echo "<tr style='background-color:#138496;color:white;'><td>Date of Booking</td><td>Time (in hours)</td></tr>";
       while ($row = mysqli_fetch_array($res)) { 
            
            echo "<tr>"; 
            
            echo "<td >".$row['date']." </td>";
 			echo "<td >".$row['timeValue']." </td>";
 			echo "</tr>";

        }
        echo "</table>";
    echo "</center>";
}

}

}

?>
