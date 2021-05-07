<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE pt_phone (
    pid int,
    phoneno varchar(11),
    PRIMARY KEY(pid,phoneno),
    FOREIGN KEY(pid) REFERENCES patient_table(pid))";

if ($conn->query($sql) === TRUE) {
    echo "Table pt_phone created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
