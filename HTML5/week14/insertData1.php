<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
<?php include "nav1.html" ?>
    <form action="" method="GET">
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="text" name="email"></p>
        <p>Address: <input type="text" name="address"></p>
        <input type="submit" value="送出表單" class="btn btn-primary">
        <button type="reset" value="Reset" class="btn btn-info">Reset</button>
    </form>
    <?php

    $myname = $_GET["name"];
    $myemail = $_GET["email"];
    $myaddress = $_GET["address"];

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

    $sql = "INSERT INTO $tbname (myname, myemail, myaddress) VALUES ('$myname', '$myemail', '$myaddress')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>

</html>