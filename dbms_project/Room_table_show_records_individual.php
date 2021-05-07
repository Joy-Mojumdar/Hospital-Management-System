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
$rid = mysqli_real_escape_string($conn, $_REQUEST['rid']);
$sql = "SELECT* FROM room WHERE rid=$rid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "[rid]:  " . $row["rid"]. "    [roomtype]:  " . $row["roomtype"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
