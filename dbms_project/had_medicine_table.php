<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE had_medicine (
     pid int,
     mid int,
     med_date date,
     qty int,
     PRIMARY KEY(pid,mid,med_date),
     FOREIGN KEY(pid) REFERENCES patient_table(pid),
     FOREIGN KEY(mid) REFERENCES medicine(mid))";

if ($conn->query($sql) === TRUE) {
    echo "Table had_medicine created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
