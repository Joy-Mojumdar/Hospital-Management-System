<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$tid = mysqli_real_escape_string($conn, $_REQUEST['tid']);
$testdate= mysqli_real_escape_string($conn, $_REQUEST['testdate']);

// Attempt insert query execution
$sql = "INSERT INTO hadtest (pid,tid,testdate) VALUES ('$pid','$tid','$testdate')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
