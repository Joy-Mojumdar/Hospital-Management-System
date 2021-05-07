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
$nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
$column = mysqli_real_escape_string($conn, $_REQUEST['column']);
$column_value = mysqli_real_escape_string($conn, $_REQUEST['column_value']);
$sql = "UPDATE nurse_assigned SET $column='$column_value' WHERE nid=$nid";

if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
   echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
