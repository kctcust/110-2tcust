<!DOCTYPE html>
<html>
<body>
<?php include "nav1.html" ?>
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "myDB1";
$tbname = "myTable1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn, "set names utf8");

$sql = "SELECT * FROM $tbname ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["id"]. " - Name: ". $row["myname"]. "- email: " . $row["myemail"] .  "- address: " . $row["myaddress"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>