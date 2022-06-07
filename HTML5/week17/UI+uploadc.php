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
        <form action="uploadc.php" method="POST" enctype="multipart/form-data">
            <p>Check File Type</p>
            <p>image name: <input type="text" name="name"></p>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
            <button type="reset" value="Reset" class="btn btn-info">Reset</button>
        </form>
    </div>
</body>

</html>