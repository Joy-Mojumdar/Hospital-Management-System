<?php
$servername = "localhost";
$username = "ashik";
$password = "ashmm1999";
$dbname = "dbms_project2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT* FROM department";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "[deptid]:  " . $row["deptid"]. "    [dname]:  " . $row["dname"]. "    [dept_headid]:  " . $row["dept_headid"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
