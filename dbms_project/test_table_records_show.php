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

$sql = "SELECT* FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "[tid]:  " . $row["tid"]. "    [tname]:  " . $row["tname"]. "    [tcost]:  " . $row["tcost"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
