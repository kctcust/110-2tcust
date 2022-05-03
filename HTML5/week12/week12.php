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
$conn = new mysqli($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE $dbname";
$conn->query($sql);

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE $tbname (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  myname VARCHAR(30) NOT NULL,
  myemail VARCHAR(30) NOT NULL,
  myaddress VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

$conn->query($sql);

$sql = "INSERT INTO $tbname (myname, myemail, myaddress)
VALUES ('John1', 'john1@gmail.com', 'Hualien1');"; 
$sql .= "INSERT INTO $tbname (myname, myemail, myaddress)
VALUES ('John2', 'john2@gmail.com', 'Hualien2');"; 
$sql .= "INSERT INTO $tbname (myname, myemail, myaddress)
VALUES ('John3', 'john3@gmail.com', 'Hualien3');"; 
$conn->multi_query($sql);

if ($conn->query($sql) === TRUE) {
  echo "Data created successfully";
} else {
  echo "Error creating data: " . $conn->error;
}

$conn->close();
?>
</body>

</html>