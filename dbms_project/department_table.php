<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE department (
      deptid int,
      dname varchar(20) not null,
      dept_headid int,
      PRIMARY key(deptid))";

if ($conn->query($sql) === TRUE) {
    echo "Table department_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
