<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE relatives (
 pid int,
 rname varchar(30),
 rtype varchar(30),
 pno varchar(11),
 PRIMARY key(pid))";

if ($conn->query($sql) === TRUE) {
    echo "Table relatives created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
