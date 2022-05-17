<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php include "nav1.html" ?>
    <p>Use include Function to Create a MySQL Database +create Table + Data in one step</p>
    <?php
    include 'createDB1.php';
    include 'createTable1.php';
    include 'createRecord1.php';
    ?>
</body>

</html>