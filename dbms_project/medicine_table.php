<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE medicine (
  mid int,
   mname varchar(40) not null,
   mcost float,
   PRIMARY key(mid))";

if ($conn->query($sql) === TRUE) {
    echo "Table medicine created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
