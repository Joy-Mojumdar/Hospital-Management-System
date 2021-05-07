<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE room_cost (
  roomtype varchar(20),
  rcost  int,
  PRIMARY KEY(roomtype))";

if ($conn->query($sql) === TRUE) {
    echo "Table room_cost created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
