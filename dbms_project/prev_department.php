<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$empid = mysqli_real_escape_string($conn, $_REQUEST['empid']);
$deptid = mysqli_real_escape_string($conn, $_REQUEST['deptid']);
$date_of_joining= mysqli_real_escape_string($conn, $_REQUEST['date_of_joining']);
$date_of_leaving= mysqli_real_escape_string($conn, $_REQUEST['date_of_leaving']);

// Attempt insert query execution
$sql = "INSERT INTO prev_department (empid,deptid,date_of_joining,date_of_leaving) VALUES ('$empid','$deptid','$date_of_joining','$date_of_leaving')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
