<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman 2</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">
                    <p class="h3">
                        <script lang="php">
                            if (isset($_POST['submit'])) {
                                $email = $_POST['email'];
                                echo $email;
                            }
                        </script>
                    </p>
                </span>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center" style="padding-top: 2vw">
                <a href="halaman3.php">
                    <img src="https://i.pinimg.com/564x/44/de/73/44de730992257bef1b9a6ce91a91c233.jpg" class="img-thumbnail border rounded-circle " style="width: 15vw;" alt="...">
                </a>
                <h1 class="display-4">Selamat Datang Kembali User
                </h1>
                <p class="lead">Ini merupakan aplikasi sederhana yang menyajikan tentang
                    <a href="halaman5.php">baca lengkap</a>
                </p>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah hutang </th>
                    <th scope="col">Nama barang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>10-3-2022</td>
                    <td>20000</td>
                    <td>WHISKAS 10 GR</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>10-3-2022</td>
                    <td>50000</td>
                    <td>SHAMPOO 50 ML</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>10-3-2022</td>
                    <td>6000</td>
                    <td>ME-O 10 GR</td>
                </tr>
            </tbody>
        </table>
        <a href="halaman4.php">Lihat lebih banyak tabel</a>
        <div class="container " style="padding: 5vw 20vw 5vw 20vw">
            <div class="list-group">
                <a href="halaman1.php" class="list-group-item list-group-item-action" aria-current="true">
                    Halaman 1
                </a>
                <a href="halaman2.php" class="list-group-item list-group-item-action">Halaman 2</a>
                <a href="halaman3.php" class="list-group-item list-group-item-action">Halaman 3</a>
                <a href="halaman4.php" class="list-group-item list-group-item-action">Halaman 4</a>
                <a href="halaman5.php" class="list-group-item list-group-item-action">Halaman 5</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>