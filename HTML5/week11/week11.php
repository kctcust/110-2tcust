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
<!-- Welcome <?php echo $_POST["name"]; ?><br>
Your email is: <?php echo $_POST["email"]; ?><br>
Your address is: <?php echo $_POST["address"]; ?><br> -->

<!-- 寫法2 -->
<!-- <?php
echo "Welcome:".$_POST["name"]."<br>";
echo "Your email is:".$_POST["email"]."<br>";
echo "Your address is:". $_POST["address"]."<br>";
?> -->

<!-- 寫法3 -->
<?php
echo "Welcome:{$_POST['name']}<br>";
echo "Your email is:{$_POST['email']}<br>";
echo "Your address is:{$_POST['address']}<br>";
?>
</body>

</html>