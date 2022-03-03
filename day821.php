<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .php {
            background-color: burlywood;
            text-align: center;
            padding: 5vw;
            margin: 10vw;
        }
    </style>
    </stylform>
</head>

<body>
    <div class="php">
        <?php

        if (isset($_POST['submit'])) {
            $film = $_POST['anime'];
            echo "Anime Favorit Anda adalah <b>$film</b></font>";
        }
        ?>
    </div>
</body>

</html>