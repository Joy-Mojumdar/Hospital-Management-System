<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE employee_inactive (
      empid int,
      fname varchar(20) not null,
      lname varchar(20),
      gender varchar(6) not null,
      emptype varchar(20) not null,
      Hno varchar(10),
      street varchar(20),
      city varchar(20),
      state varchar(20),
      date_of_joining date,
      date_of_leaving date,
      email varchar(30),
      PRIMARY key(empid))";

if ($conn->query($sql) === TRUE) {
    echo "Table employee_inactive created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
