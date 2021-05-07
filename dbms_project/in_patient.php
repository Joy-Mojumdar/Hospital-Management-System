<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
$rid= mysqli_real_escape_string($conn, $_REQUEST['rid']);
$arrival_date= mysqli_real_escape_string($conn, $_REQUEST['arrival_date']);
$discharge_date= mysqli_real_escape_string($conn, $_REQUEST['discharge_date']);
$disease= mysqli_real_escape_string($conn, $_REQUEST['disease']);

// Attempt insert query execution
$sql = "INSERT INTO in_patient (pid,nid,rid,arrival_date,discharge_date,disease) VALUES ('$pid','$nid','$rid','$arrival_date','$discharge_date','$disease')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
