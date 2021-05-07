<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$mcost = mysqli_real_escape_string($conn, $_REQUEST['mcost']);
$tcost= mysqli_real_escape_string($conn, $_REQUEST['tcost']);
$roomcharges= mysqli_real_escape_string($conn, $_REQUEST['roomcharges']);
$othercharges= mysqli_real_escape_string($conn, $_REQUEST['othercharges']);
$billdate= mysqli_real_escape_string($conn, $_REQUEST['billdate']);

// Attempt insert query execution
$sql = "INSERT INTO bill (pid,mcost,tcost,roomcharges,othercharges,billdate) VALUES ('$pid','$mcost','$tcost','$roomcharges','$othercharges','$billdate')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
