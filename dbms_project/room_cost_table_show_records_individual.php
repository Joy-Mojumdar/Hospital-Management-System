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
$roomtype = mysqli_real_escape_string($conn, $_REQUEST['roomtype']);
$sql = "SELECT* FROM room_cost WHERE roomtype='$roomtype'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "[roomtype]:  " . $row["roomtype"]. "    [rcost]:  " . $row["rcost"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
