<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE doctor (
    doc_id int,
    qualification varchar(20),
    PRIMARY KEY(doc_id),
    FOREIGN KEY(doc_id) REFERENCES employee(empid) ON DELETE CASCADE)";

if ($conn->query($sql) === TRUE) {
    echo "Table doctor created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
