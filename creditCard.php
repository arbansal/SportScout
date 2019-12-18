<?php
if (isset($_POST['BookedPlace'])) {



session_start();
$placeId=$_SESSION['placeId'];
$playersUsername=$_SESSION['playersUsername'];
$playersEmail=$_SESSION['playersEmail'];
$managersEmail=$_SESSION['managersEmail'];

$date=$_POST['bookDate'];
$timeValue=$_POST['timeValue'];


$db = mysqli_connect("db.soic.indiana.edu", "p565f18_arbansal", "sqlmypass123", "p565f18_arbansal");

$sql2="insert into bookings values('$placeId','$playersUsername','$date','$timeValue')";
 
if ($res = mysqli_query($db, $sql2)) {
        $message="Successfully Booked for ".$date." time ".$timeValue." Venue ".$placeId;
        mail($playersEmail,"Venue Booked" , $message);
        mail($managersEmail,"Venue Booked",$message);
echo "<script>
        alert('Successfully Booked');
        
        window.close();
        </script>";
}
else{
	"<script>
        alert('Successfully Booked');
        window.location.href='BookingPage.php';
        </script>";
}

}
?>
