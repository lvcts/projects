<?php

/** NULL */
$isi = "ADA";
$isi = null;
echo "Isi = ";
echo $isi;
echo "\n";
echo "Is name null";
var_dump(is_null($isi));
echo "\n";
/** Menghapus variabel 
unset($isi);
echo $isi; 
Mengecek variabel selain is_null 
isset($isi);*/
/**ARRAY */
$array = [1, 2, "Tiga", "Empat"];
var_dump($array[0]);
var_dump($array[2]);
echo $array[3];
echo "\n";
$array[4] = 5;
echo $array[4];
var_dump($array);
unset($array[2]);
var_dump($array);
var_dump(count($array));

/**ARRAY SEBAGAI MAP
 * apa itu map?
 * map adalah asosiasi antara key dan value
 */
$map = array(
    'id' => "user",
    'pass' => 12345
);
var_dump($map);
echo $map['id'];
/**Array dalam array */
$zra = array(
    'id' => "zra",
    'pass' => 1111,
    'info' => [
        'name' => "stzra",
        'age' => 20,
    ]
);
var_dump($zra);
var_dump($zra['info']['name']);
