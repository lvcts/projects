<?php

/**Pengulangan

for ($i = 0; $i < 10; $i++) {
    echo "Hehehehehehehe <br>";
}

$a = 0;
while ($a <= 10) {
    echo "Hahahahaha <br>";
    $a++;
}
$b = 5;
do {
    //lakukan hal ini selama kondisinya true
    echo "Hihihihihihih <br>";
    $b++;
} while ($b <= 10);
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2" cellpadding="20" cellspacing="2">
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($a = 0; $a < 3; $a++) {
                echo "<td> Baris $i, Kolom $a </td>";
            }
            echo "</td>";
        }
        ?>
    </table>
    <br><br><br><br><br>
    <table border="2" cellpadding="20" cellspacing="2">
        <?php for ($b = 0; $b < 5; $b++) { ?>
            <tr>
                <?php for ($c = 0; $c < 5; $c++) { ?>
                    <td>
                        <?php echo "Baris $b, Kolom $c" ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>