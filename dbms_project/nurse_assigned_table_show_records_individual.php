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
$nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
$sql = "SELECT* FROM nurse_assigned WHERE nid=$nid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "[nid]:  " . $row["nid"]. "    [countpatient]:  " . $row["countpatient"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
