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
    <style>
        .container {
            width: 100%;
            max-width: 700px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "nav1.html" ?>
    <div class="container">
        <form action="update.php" method="GET">
            <p>id: <input type="text" name="id"></p>
            <p>Name: <input type="text" name="name"></p>
            <p>E-mail: <input type="text" name="email"></p>
            <p>Address: <input type="text" name="address"></p>
            <input type="submit" value="更新表單" class="btn btn-primary">
            <button type="reset" value="Reset" class="btn btn-info">Reset</button>
        </form>
    </div>
</body>
</html>