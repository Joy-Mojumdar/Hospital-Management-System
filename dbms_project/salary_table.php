<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE salary (
   etype varchar(20),
   salary float,
   PRIMARY key(etype))";

if ($conn->query($sql) === TRUE) {
    echo "Table salary_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
