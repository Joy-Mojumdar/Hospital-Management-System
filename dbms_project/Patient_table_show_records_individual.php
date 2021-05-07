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
$sql = "SELECT* FROM patient_table WHERE pid=$pid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "[pid]:  " . $row["pid"]. "    [fname]:  " . $row["fname"]. "    [lname]:  " . $row["lname"]. "    [gender]: " . $row["gender"]. "    [dob]: " . $row["dob"]. "    [blood_group]: ".$row["blood_group"]."    [doc_id]: ".$row["doc_id"].
     "    [HNo]: ".$row["HNo"]. "    [street]: ".$row["street"]. "    [city]: ".$row["city"]. "    [state]: ".$row["state"]."    [email]: ".$row["email"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
