<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE prev_department (
    empid int,
    deptid int,
    date_of_joining date,
    date_of_leaving date,
    PRIMARY KEY(empid,deptid,date_of_leaving))";

if ($conn->query($sql) === TRUE) {
    echo "Table prev_department created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
