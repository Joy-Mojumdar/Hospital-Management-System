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
$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
$med_date = mysqli_real_escape_string($conn, $_REQUEST['med_date']);
$sql = "SELECT* FROM had_medicine WHERE pid=$pid and mid=$mid and med_date='$med_date'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "[pid]:  " . $row["pid"]. "    [mid]:  " . $row["mid"]. "    [med_date]:  " . $row["med_date"]. "    [qty]:  " . $row["qty"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
