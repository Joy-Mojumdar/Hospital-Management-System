<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE in_patient (
     pid int,
     nid int,
     rid int,
     arrival_date date,
     discharge_date date,
     disease varchar(40),
     primary key(pid,arrival_date),
     FOREIGN key(pid) REFERENCES patient_table(pid),
     FOREIGN KEY(nid) REFERENCES employee(empid),
     FOREIGN key(rid) REFERENCES room(rid))";

if ($conn->query($sql) === TRUE) {
    echo "Table in_patient created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
