<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$deptid = mysqli_real_escape_string($conn, $_REQUEST['deptid']);
$dname = mysqli_real_escape_string($conn, $_REQUEST['dname']);
$dept_headid= mysqli_real_escape_string($conn, $_REQUEST['dept_headid']);

// Attempt insert query execution
$sql = "INSERT INTO department (deptid,dname,dept_headid) VALUES ('$deptid','$dname','$dept_headid')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
