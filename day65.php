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
    echo "Akhirnya semuanya mulai menjadi jelas";
    echo "<br>";
    echo "Tema hari inibelajr dasar php - konstanta <br>";
    $local = "ini";
    //konstanta dpat di buat dengan 2 cara yaitu menggunakan define() atau const
    //konstanta dengan fungsi define
    define('DB_SERVER', 'Localhost');
    const DB_USER = "saya";
    echo DB_SERVER . DB_USER . "<br>";
    echo $local;
    echo "<br>";
    $local = "itu";
    echo $local;
    const DB_USER = "kita";
    //Magic konstanta katanya
    echo "ini baris ke" . __LINE__ . "<br>";
    //__FILE__
    echo "Penggunaan konstanta" . __FILE__ . "<br>";
    //__DIR__
    echo "Penggunaan konstnta" . __DIR__ . "<br>";
    //Function
    function sapa()
    {
        echo "HI, salam kenal saya dari kasjafajfbca <br>";
        echo "Ngomong-ngomong nama fungsi ini adalah" . __FUNCTION__ . "<br>";
    }
    sapa();

    class sapabalik
    {

        function print()
        {
            echo "Penggunaan" . __CLASS__ . "<br>";
        }
    }

    //objec, untuk apa objek?
    $a = new sapabalik();
    $a->print();





    ?>
</body>

</html>