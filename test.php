<?php
$servername = "db.soic.indiana.edu";
$username = "p565f18_arbansal";
$password = "sqlmypass123";
$dbname = "p565f18_arbansal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO p565f18_arbansal.test VALUES(10);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>