<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
$mcost= mysqli_real_escape_string($conn, $_REQUEST['mcost']);

// Attempt insert query execution
$sql = "INSERT INTO medicine (mid,mname,mcost) VALUES ('$mid','$mname','$mcost')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
