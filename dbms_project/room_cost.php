<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$roomtype = mysqli_real_escape_string($conn, $_REQUEST['roomtype']);
$rcost = mysqli_real_escape_string($conn, $_REQUEST['rcost']);

// Attempt insert query execution
$sql = "INSERT INTO room_cost (roomtype,rcost) VALUES ('$roomtype','$rcost')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
