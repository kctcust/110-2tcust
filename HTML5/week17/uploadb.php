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
        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        //限制圖片型別格式，大小
        // if (($_FILES["file"]["type"] == "image/gif")) {
        //     echo "OK";
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
        || $imageFileType == "gif" && ($_FILES["fileToUpload"]["size"] < 300000)) {
            // echo "OK";
            if ($_FILES["fileToUpload"]["error"] > 0) {
                echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
            } else {
                echo "file name: " . $_FILES["fileToUpload"]["name"] . "<br />";
                echo "file type: " . $_FILES["fileToUpload"]["type"] . "<br />";

                //設定檔案上傳路徑，選擇指定資料夾
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Fail, wrong type, not image！ or file size too big!"; //上傳失敗後顯示錯誤資訊
        }



        ?>
    </div>
</body>

</html>