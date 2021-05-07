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

$sql = "SELECT* FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "[empid]:  " . $row["empid"]. "    [fname]:  " . $row["fname"]. "    [lname]:  " . $row["lname"]. "    [gender]: " . $row["gender"]. "    [emptype]: " . $row["emptype"]. "    [Hno]: ".$row["Hno"]."    [street]: ".$row["street"].
       "    [city]: ".$row["city"]. "    [state]: ".$row["state"]. "    [date_of_joining]: ".$row["date_of_joining"]. "    [email]: ".$row["email"]."    [deptid]: ".$row["deptid"]."    [date_of_birth]:".$row["date_of_birth"]."<br>";
   }
} else {
   echo "0 results";
}
$conn->close();
?>
