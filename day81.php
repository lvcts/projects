<html>

<head>
    <title>Variable Function</title>
</head>

<body>
    <?php
    function indonesia()
    {
        echo "Selamat datang di webku<br>";
    }
    function inggris()
    {
        echo "Welcome to my web<br>";
    }
    function jerman()
    {
        echo "Willkommen auf meiner web<br>";
    }
    function italia()
    {
        echo "Benvenuti nel Mio Web<br>";
    }

    $bahasa = "inggris";
    $bahasa(); //memanggil function inggris $bahasa "indonesia";
    $bahasa = "indonesia";
    $bahasa(); //memanggil function indonesia

    ?>
</body>

</html>