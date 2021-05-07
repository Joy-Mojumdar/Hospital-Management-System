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
$empid = mysqli_real_escape_string($conn, $_REQUEST['empid']);
$phoneno = mysqli_real_escape_string($conn, $_REQUEST['phoneno']);
$sql = "SELECT* FROM emp_phone WHERE empid=$empid and phoneno='$phoneno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "[empid]:  " . $row["empid"]. "    [phoneno]:  " . $row["phoneno"]. "<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
