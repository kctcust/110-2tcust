<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, myname, myemail, myaddress FROM mytable1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["myname"]. " - Email: " . $row["myemail"].  " - Address: " . $row["myaddress"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>

</html>