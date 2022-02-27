<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR PHP DASAR</title>
</head>

<body>
    <form action="" method="GET" name="hasil">
        NAMA :
        <input type="text" name="nama"><br>
        KELAS
        <input type="text" name="kelas"><br>
        HASIL UJIAN 1 :
        <input type="text" name="nilai_ujian1"><br>
        HASIL UJIAN 2 :
        <input type="text" name="nilai_ujian2"><br>
        HASIL UJIAN 3 :
        <input type="text" name="nilai_ujian3"><br>
        <input type="submit" name="submit" value="SUBMIT">
        <br><br><br>
    </form>
</body>

</html>
<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $kelas = $_GET['kelas'];
    echo "$nama";
    echo "<br>";
    echo "$kelas";
    echo "<br>";
    $rata_rata  = ($_GET['nilai_ujian1'] + $_GET['nilai_ujian2'] + $_GET['nilai_ujian3']) / 3;
    if ($rata_rata == 100) {
        echo "$rata_rata";
        echo "<br>";
        echo "NTAPS NAK";
    } elseif ($rata_rata >= 90) {
        echo "$rata_rata";
        echo "<br>";
        echo "OK NAK";
    } elseif ($rata_rata >= 80) {
        echo "$rata_rata";
        echo "<br>";
        echo "BOLEHLAH NAK";
    } else {
        echo "$rata_rata";
        echo "<br>";
        echo "NO COMMENT";
    }
}

?>