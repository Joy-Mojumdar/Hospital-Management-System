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
$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$billdate = mysqli_real_escape_string($conn, $_REQUEST['billdate']);
$sql = "SELECT* FROM bill WHERE pid=$pid and billdate='$billdate'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "[pid]:  " . $row["pid"]. "    [mcost]:  " . $row["mcost"]. "    [tcost]:  " . $row["tcost"]. "    [roomcharges]: " . $row["roomcharges"]. "    [othercharges]: " . $row["othercharges"]. "    [billdate]: ".$row["billdate"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>