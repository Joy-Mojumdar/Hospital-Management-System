<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE out_patient (
  pid  int,
  arrival_date date,
  disease varchar(40),
  PRIMARY key(pid,arrival_date),
  FOREIGN KEY(pid) REFERENCES patient_table(pid))";

if ($conn->query($sql) === TRUE) {
    echo "Table out_patient_table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
