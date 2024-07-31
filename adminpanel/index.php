<?php
require "session.php";
require "../js/koneksi.php";

$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$jummlahKategori = mysqli_num_rows($queryKategori);

$queryProduk = mysqli_query($con, "SELECT * FROM produk");
$jumlahProduk = mysqli_num_rows($queryProduk);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">

</head>

<style>
    .kotak {
        border: solid;
    }

    .summary-category {
        background-color: #0a6b4a;
        border-radius: 15px;
    }

    .summary-product {
        background-color: #0a516b;
        border-radius: 15px;
    }

    .no_dec {
        text-decoration: none;
    }
</style>


<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i>Home
                </li>
            </ol>
        </nav>
        <h2>Halo changed <?php echo $_SESSION['username'] ?></h2>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row">


            <div class="col-lg-4 col-md-12 mb-3">
                <div class="summary-product p-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-box fa-7x text-black-50">
                            </i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4"><?php echo $jummlahKategori ?> kategori</p>
                            <p><a href="kategori.php" class="text-white no_dec">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="summary-category p-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-align-justify fa-7x text-black-50">
                            </i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Produk</h3>
                            <p class="fs-4"><?php echo $jumlahProduk ?> Produk</p>
                            <p><a href="kategori.php" class="text-white no_dec">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome-free-6.6.0-web/js/all.min.js"></script>
</body>

</html>