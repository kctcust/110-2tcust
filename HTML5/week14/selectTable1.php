<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>資料庫網頁建置</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .container {
        width: 100%;
        max-width: 700px;
    }
    </style>
</head>

<body>
<?php include "nav1.html" ?>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "myDB1";
    $tbname = "MyTable1";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn, "set names utf8");
    $sql = "SELECT * FROM $tbname";
    $data = $conn->query($sql);
    ?>
    <div class="container">
        <table class="table table-hover" border="1">
            <tr class="bg-primary text-white">
                <td>id</td>
                <td>姓名</td>
                <td>email信箱</td>
                <td>地址</td>
                <td>日期</td>
            </tr>
            <?php
            for ($i = 1; $i <= mysqli_num_rows($data); $i++) {
                $rs = mysqli_fetch_row($data);
            ?>
            <tr>
                <td><?php echo $rs[0] ?></td>
                <td><?php echo $rs[1] ?></td>
                <td><?php echo $rs[2] ?></td>
                <td><?php echo $rs[3] ?></td>
                <td><?php echo $rs[4] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <p>&nbsp;</p>
</body>

</html>