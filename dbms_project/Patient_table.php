<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE patient_table (
	pid int,
    fname varchar(20) not null,
    lname varchar(20),
    gender varchar(6) not null,
    dob date not null,
    blood_group varchar(3),
    doc_id int,
    HNo varchar(10),
    street varchar(20),
    city varchar(16),
    state varchar(20),
    email varchar(30),
    Primary Key(pid))";

if ($conn->query($sql) === TRUE) {
    echo "Table patient_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>