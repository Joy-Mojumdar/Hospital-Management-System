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
$column = mysqli_real_escape_string($conn, $_REQUEST['column']);
$column_value = mysqli_real_escape_string($conn, $_REQUEST['column_value']);
$sql = "UPDATE Employee SET $column='$column_value' WHERE empid=$empid";

if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
