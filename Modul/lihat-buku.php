<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="index.php">Beranda</a>
    <br>
    <a href="input-buku.php">Tambahkan data buku</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Nama Penulis</th>
            <th>Nama Penerbit</th>
            <th>Tahun Penerbit</th>
            <th>Rak</th>
        </tr>
        <?php
        include './database/koneksi.php';

        $query = "SELECT * FROM data_buku";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $data["Id_Buku"] ?></td>
                    <td><?php echo $data["Judul_Buku"] ?></td>
                    <td><?php echo $data["Nama_Penulis"] ?></td>
                    <td><?php echo $data["Nama_Penerbit"] ?></td>
                    <td><?php echo $data["Tahun_Terbit"] ?></td>
                    <td><?php echo $data["Rak"] ?></td>
                    <td>
                        <button>Hapus</button>
                        <button>Edit</button>
                    </td>
                </tr>
            <?php }
        } else { ?>
            <tr>
                <td>Tidak ada data</td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>