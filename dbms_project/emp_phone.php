<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$empid = mysqli_real_escape_string($conn, $_REQUEST['empid']);
$phoneno = mysqli_real_escape_string($conn, $_REQUEST['phoneno']);

// Attempt insert query execution
$sql = "INSERT INTO emp_phone (empid,phoneno) VALUES ('$empid','$phoneno')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
