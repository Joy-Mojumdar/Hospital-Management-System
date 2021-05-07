<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE emp_phone (
  empid int,
  phoneno varchar(11),
  PRIMARY KEY(empid,phoneno))";

if ($conn->query($sql) === TRUE) {
    echo "Table emp_phone created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
