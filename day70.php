<?php
/*Tipe data string*/
echo 'contoh';
echo <<<ECHO
contoh menggunakan "heredoc"
ECHO;
echo <<<'ECHO'
contoh menggunakan "nowdoc"
ECHO;
echo "\n";
/* Variable variables */
$name = "zra";
$$name = "baru";

echo "\$name = ";
echo  $name;
echo "\n";
echo "\$zra = ";
echo $zra;
echo "\n";

/** Constant */
define("NAMA", "Siti zahra salma");
define("UMUR", "20");

echo "Nama : " . NAMA;
echo "\n";
echo "Umur : " . UMUR;
echo "\n";

/** NULL */
$isi = "ADA";
$isi = null;
echo "Isi = ";
echo $isi;
echo "\n";
echo "Is name null";
