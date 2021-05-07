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
$email= mysqli_real_escape_string($conn, $_REQUEST['email']);
$deptid= mysqli_real_escape_string($conn, $_REQUEST['deptid']);
$date_of_birth= mysqli_real_escape_string($conn, $_REQUEST['date_of_birth']);

// Attempt insert query execution
$sql = "INSERT INTO Employee (empid,fname,lname,gender,emptype,Hno,street,city,state,date_of_joining,email,deptid,date_of_birth) VALUES ('$empid','$fname','$lname','$gender','$emptype','$Hno','$street','$city','$state','$date_of_joining','$email','$deptid','$date_of_birth')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>
