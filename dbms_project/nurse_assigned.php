<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
$countpatient = mysqli_real_escape_string($conn, $_REQUEST['countpatient']);

// Attempt insert query execution
$sql = "INSERT INTO nurse_assigned (nid,countpatient) VALUES ('$nid','$countpatient')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
