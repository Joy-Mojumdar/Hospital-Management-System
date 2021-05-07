<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE nurse_assigned (
   nid int,
   countpatient int,
   PRIMARY KEY(nid),
   FOREIGN KEY(nid) REFERENCES employee(empid))";

if ($conn->query($sql) === TRUE) {
    echo "Table nurse_assigned created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
