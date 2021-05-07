<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$tid = mysqli_real_escape_string($conn, $_REQUEST['tid']);
$tname = mysqli_real_escape_string($conn, $_REQUEST['tname']);
$tcost= mysqli_real_escape_string($conn, $_REQUEST['tcost']);

// Attempt insert query execution
$sql = "INSERT INTO test (tid,tname,tcost) VALUES ('$tid','$tname','$tcost')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
