<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$empid = mysqli_real_escape_string($conn, $_REQUEST['empid']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname= mysqli_real_escape_string($conn, $_REQUEST['lname']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$emptype= mysqli_real_escape_string($conn, $_REQUEST['emptype']);
$Hno= mysqli_real_escape_string($conn, $_REQUEST['Hno']);
$street= mysqli_real_escape_string($conn, $_REQUEST['street']);
$city= mysqli_real_escape_string($conn, $_REQUEST['city']);
$state= mysqli_real_escape_string($conn, $_REQUEST['state']);
$date_of_joining= mysqli_real_escape_string($conn, $_REQUEST['date_of_joining']);
$date_of_leaving= mysqli_real_escape_string($conn, $_REQUEST['date_of_leaving']);
$email= mysqli_real_escape_string($conn, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO employee_inactive (empid,fname,lname,gender,emptype,Hno,street,city,state,date_of_joining,date_of_leaving,email) VALUES ('$empid','$fname','$lname','$gender','$emptype','$Hno','$street','$city','$state','$date_of_joining','$date_of_leaving','$email')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
