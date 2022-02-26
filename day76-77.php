<html>

<head>
    <title>Kalkulator</title>
</head>

<body>
    <?php
    switch ($operator) {
        case 1:
            $hasil = $nilai1 + $nilai2;
            $ope = '+';
            break;
        case 2:
            $hasil = $nilai1 - $nilai2;;
            $ope = '-';
            break;
        case 3:
            $hasil = $nilai1 * $nilai2;
            $ope = '*';
            break;
        case 4:
            $hasil = $nilai1 / $nilai2;
            $ope = '/';
            break;
    }
    echo "Hasil dari : $a $ope $b adalah $c <br>";
    ?>
    <a href="day761.php"> Kembali </a>
</body>

</html>