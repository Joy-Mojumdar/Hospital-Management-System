<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$rname = mysqli_real_escape_string($conn, $_REQUEST['rname']);
$rtype= mysqli_real_escape_string($conn, $_REQUEST['rtype']);
$pno= mysqli_real_escape_string($conn, $_REQUEST['pno']);

// Attempt insert query execution
$sql = "INSERT INTO relatives (pid,rname,rtype,pno) VALUES ('$pid','$rname','$rtype','$pno')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
