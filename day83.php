<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .php {
            background-color: yellow;
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <div class="php">
        <?php
        $filename = "count.txt";
        if (file_exists($filename)) {
            echo "File  $filename Terdeteksi";
        } else {
            echo "File $filename Tidak Terdeteksi";
        }
        ?>
    </div>
</body>

</html>