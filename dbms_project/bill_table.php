<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE bill (
      pid int,
      mcost float,
      tcost float,
      roomcharges float,
      othercharges float,
      billdate date,
      PRIMARY KEY(pid,billdate))";

if ($conn->query($sql) === TRUE) {
    echo "Table bill created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
