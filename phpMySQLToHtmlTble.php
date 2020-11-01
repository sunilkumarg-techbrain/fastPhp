<?php

$servername = "localhost:3307";
$dbname = "php";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM requestor_records;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "recordNumber: " . $row["recordNumber"]. " sapId: " . $row["sapId"]. " SPOCName" . $row["SPOCName"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>