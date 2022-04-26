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
<!-- 寫法1 -->
<!-- Welcome <?php echo $_GET["name"]; ?><br>
Your email is: <?php echo $_GET["email"]; ?><br>
Your address is: <?php echo $_GET["address"]; ?><br> -->

<!-- 寫法2 -->
<!-- <?php
echo "Welcome:".$_GET["name"]."<br>";
echo "Your email is:".$_GET["email"]."<br>";
echo "Your address is:". $_GET["address"]."<br>";
?> -->

<!-- 寫法3 -->
<?php
echo "Get Welcome:{$_GET['name']}<br>";
echo "Get Your email is:{$_GET['email']}<br>";
echo "Get Your address is:{$_GET['address']}<br>";
?>
</body>

</html>