<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE room (
      rid int,
      roomtype varchar(20),
      PRIMARY key(rid))";

if ($conn->query($sql) === TRUE) {
    echo "Table room_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
