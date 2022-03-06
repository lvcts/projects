<?php
if (isset($_POST['submit'])) {
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$nama_penulis = $_POST['nama_penulis'];
$nama_penerbit = $_POST['nama_penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$rak = $_POST['rak '];

include 'koneksi.php';

$sql = "INSERT INTO data_buku VALUES ('$id_buku', '$judul','$nama_penulis','$nama_penerbit','$tahun_terbit','$rak')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan";
    echo "<br>";
    echo "<a href= '../input-buku.php>Kembali<a/>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
}