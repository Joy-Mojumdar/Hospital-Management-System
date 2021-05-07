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
$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
$med_date = mysqli_real_escape_string($conn, $_REQUEST['med_date']);
$column = mysqli_real_escape_string($conn, $_REQUEST['column']);
$column_value = mysqli_real_escape_string($conn, $_REQUEST['column_value']);
$sql = "UPDATE had_medicine SET $column='$column_value' WHERE pid=$pid and mid=$mid and med_date='$med_date'";

if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
