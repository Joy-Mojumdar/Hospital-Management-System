<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname= mysqli_real_escape_string($conn, $_REQUEST['lname']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$dob= mysqli_real_escape_string($conn, $_REQUEST['dob']);
$blood_group= mysqli_real_escape_string($conn, $_REQUEST['blood_group']);
$doc_id= mysqli_real_escape_string($conn, $_REQUEST['doc_id']);
$HNo= mysqli_real_escape_string($conn, $_REQUEST['HNo']);
$street= mysqli_real_escape_string($conn, $_REQUEST['street']);
$city= mysqli_real_escape_string($conn, $_REQUEST['city']);
$state= mysqli_real_escape_string($conn, $_REQUEST['state']);
$email= mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO patient_table (pid,fname,lname,gender,dob,blood_group,doc_id,HNo,street,city,state,email) VALUES ('$pid','$fname','$lname','$gender','$dob','$blood_group','$doc_id','$HNo','$street','$city','$state','$email')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();
?>