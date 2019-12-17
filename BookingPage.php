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


<form action='creditCard.php' method='post'>

Date: 	<input id="datefield" type='date' min='2020-01-01' name="bookDate"></input>
<br> 
Time:   <select name="timeValue">
		<option value="1000am-1100am">10:00AM-11:00AM</option>
		<option value="1100AM-1200PM">11:00AM-12:00PM</option>
		<option value="1200PM-100PM">12:00PM-1:00PM</option>
		<option value="100PM-200PM">1:00PM-2:00PM</option>
		<option value="200PM-300PM">2:00PM-3:00PM</option>
		<option value="300PM-400PM">3:00PM-4:00PM</option>
		<option value="400PM-500PM">4:00PM-5:00PM</option>
		</select>
<br>
Credit Card Details:<input type="text" ><br>
Exp Month:<input type="text" placeholder="10/21">
<br>

<input type="submit" value="BOOK" name="BookedPlace"/>

</form>

<?php
// echo $_POST['placeId'];
// echo $_POST['playersUsername'];
// echo $_POST['playersEmail'];
// echo $_POST['managersEmail'];

echo "<h2>Already filled values</h2>";
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
    
    echo "<table>";
       while ($row = mysqli_fetch_array($res)) { 
            
            
            echo "<tr>"; 
            
            echo "<td >".$row['date']." </td>";
 			echo "<td >".$row['timeValue']." </td>";
 			echo "</tr>";

        }
        echo "</table>";

}

}

}

?>
