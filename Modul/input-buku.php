<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<style>

</style>

<body>
    <form action="./database/proses-simpan.php" method="POST">
        <p>
            Masukkan data buku :
        </p>
        <label> ID Buku </label>
        <input type="text" name="id_buku">
        <br><br>
        <label> Judul Buku </label>
        <input type="text" name="judul">
        <br><br>
        <label> Nama Penulis </label>
        <input type="text" name="nama_penulis">
        <br><br>
        <label> Nama Penerbit </label>
        <input type="text" name="nama_penerbit">
        <br><br>
        <label> Tahun Terbit </label>
        <input type="text" name="tahun_terbit">
        <br><br>
        <label> Rak </label>
        <select name="rak">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
        </select>
        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>
