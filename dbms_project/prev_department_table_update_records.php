<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$empid = mysqli_real_escape_string($conn, $_REQUEST['empid']);
$deptid = mysqli_real_escape_string($conn, $_REQUEST['deptid']);
$date_of_leaving = mysqli_real_escape_string($conn, $_REQUEST['date_of_leaving']);
$column = mysqli_real_escape_string($conn, $_REQUEST['column']);
$column_value = mysqli_real_escape_string($conn, $_REQUEST['column_value']);
$sql = "UPDATE prev_department SET $column='$column_value' WHERE empid=$empid and deptid=$deptid and date_of_leaving='$date_of_leaving'";

if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
