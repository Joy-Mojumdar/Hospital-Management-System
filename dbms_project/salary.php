<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$etype = mysqli_real_escape_string($conn, $_REQUEST['etype']);
$salary = mysqli_real_escape_string($conn, $_REQUEST['salary']);

// Attempt insert query execution
$sql = "INSERT INTO salary (etype,salary) VALUES ('$etype','$salary')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
