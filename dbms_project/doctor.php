<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$doc_id = mysqli_real_escape_string($conn, $_REQUEST['doc_id']);
$qualification = mysqli_real_escape_string($conn, $_REQUEST['qualification']);

// Attempt insert query execution
$sql = "INSERT INTO doctor (doc_id,qualification) VALUES ('$doc_id','$qualification')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
