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
$doc_id = mysqli_real_escape_string($conn, $_REQUEST['doc_id']);
$sql = "SELECT* FROM doctor WHERE doc_id=$doc_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "[doc_id]:  " . $row["doc_id"]. "    [qualification]:  " . $row["qualification"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
