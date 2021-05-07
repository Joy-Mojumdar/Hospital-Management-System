<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
$med_date= mysqli_real_escape_string($conn, $_REQUEST['med_date']);
$qty= mysqli_real_escape_string($conn, $_REQUEST['qty']);

// Attempt insert query execution
$sql = "INSERT INTO had_medicine (pid,mid,med_date,qty) VALUES ('$pid','$mid','$med_date','$qty')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
