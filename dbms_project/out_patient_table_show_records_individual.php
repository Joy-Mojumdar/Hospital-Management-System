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
$arrival_date = mysqli_real_escape_string($conn, $_REQUEST['arrival_date']);
$sql = "SELECT* FROM out_patient WHERE pid=$pid and arrival_date='$arrival_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "[pid]:  " . $row["pid"]. "    [arrival_date]:  " . $row["arrival_date"]. "    [disease]:  " . $row["disease"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
