<?php
require "session.php";
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
        <h2>Halo <?php echo $_SESSION['username'] ?></h2>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 summary-category p-4">
                <div class="row">
                    <div class= "col-6">
                        <i class="fas fa-align-justify fa-5x text-black-50">
                        </i>
                    </div>
                    <div class="col-6 text-white">
                        <h3>Kategori</h3>
                        <p>4 kategori</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/boots"></script>
    <script src="../fontawesome-free-6.6.0-web/js/all.min.js"></script>
</body>

</html>