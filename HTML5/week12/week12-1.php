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
$tbname = "MyTable1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

for ($i = 1; $i <= 20; $i++)
{
  $sql = "INSERT INTO $tbname (myname, myemail, myaddress)
  VALUES ('John$i', 'john$i@example.com', 'Hualien$i')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
</body>

</html>