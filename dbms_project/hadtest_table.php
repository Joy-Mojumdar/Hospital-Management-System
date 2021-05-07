<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE hadtest (
   pid int,
   tid int,
   testdate date,
   PRIMARY KEY(pid,tid,testdate),
   FOREIGN KEY(pid) REFERENCES patient_table(pid),
   FOREIGN key(tid) REFERENCES test(tid))";

if ($conn->query($sql) === TRUE) {
    echo "Table hadtest created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
