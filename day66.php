<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Perulangan pada PHP";
    //for
    for ($i = 0; $i < 5; $i++) {
        echo "<h1>Menghitung dari 1-5</h1>";
        echo "<h3>Mengitung di mulai</h3>";
        echo "<br>";
        echo "$i";
    }

    $ulang = 0;
    while ($ulang <= 10) {
        echo "ini adlah contoh while";
        echo "<br>";
        echo "perulangan dari $ulang";
        echo "<br>";
        $ulang++;
    }
    ?>
</body>

</html>