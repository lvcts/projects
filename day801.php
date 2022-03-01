<h3>Hasil Konversi Suhu Celcius ke Kelvin dan Fahrenheit</h3>
<br />
<?php
function kelvin($celcius)
{
    $hasil1 = 273.15 + $celcius;
    return $hasil1;
}
function fahrenheit($celcius)
{
    $hasil2 = 32 + (1.8 * $celcius);
    return $hasil2;
}
$hasil3 = $_POST['celcius'];
$hasil1 = kelvin($_POST['celcius']);
$hasil2 = fahrenheit($_POST['celcius']);
echo "<pre>Derajat Celcius : $hasil3 </pre>";
echo "<pre>Derajat Kelvin : $hasil1 </pre>";
echo "<pre>Derajat Fahrenheit : $hasil2</pre>";
?>