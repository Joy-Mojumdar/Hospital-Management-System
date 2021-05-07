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
$deptid = mysqli_real_escape_string($conn, $_REQUEST['deptid']);
$date_of_leaving = mysqli_real_escape_string($conn, $_REQUEST['date_of_leaving']);
$sql = "SELECT* FROM prev_department WHERE empid=$empid and deptid=$deptid and date_of_leaving='$date_of_leaving'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "[empid]:  " . $row["empid"]. "    [deptid]:  " . $row["deptid"]. "    [date_of_joining]:  " . $row["date_of_joining"]. "    [date_of_leaving]:  " . $row["date_of_leaving"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
