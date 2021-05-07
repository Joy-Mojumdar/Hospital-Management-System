<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$rid = mysqli_real_escape_string($conn, $_REQUEST['rid']);
$roomtype = mysqli_real_escape_string($conn, $_REQUEST['roomtype']);

// Attempt insert query execution
$sql = "INSERT INTO room (rid,roomtype) VALUES ('$rid','$roomtype')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
