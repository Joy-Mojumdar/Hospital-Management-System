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

// sql to delete a record
$sql = "DELETE FROM emp_phone";

if ($conn->query($sql) === TRUE) {
   echo "Records deleted successfully";
} else {
   echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
