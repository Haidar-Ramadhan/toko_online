<?php
require "session.php";
require "../js/koneksi.php";

$id = $_GET['p']; 
$query = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <h2>Detail Kategori</h2>

        <div class="col-12 col-md-6">
            <form action="" method="post">
                <label for="kategori">Kategori</label>
                <input type="" name="kategori" id="kategori" class="form-control" value="<?php echo
                $data['nama'];?>">

                <div mt-5>
                    <button type="submit" class="btn btn-primary" name="editBtn">Ubah</button>
                </div>
            </form>
            <?php
            if(isset($_POST['editBtn'])) {
                $kategori = htmlspecialchars($_POST['kategori']);
                $querySimpan = mysqli_query($con, "UPDATE kategori SET nama='$kategori' WHERE
                 id='$id'");
                 $query = mysqli_query($con, "SELECT * FROM kategori WHERE nama='$kategori'");
                 $jumlahData = mysqli_num_rows($query);

                if($querySimpan){
                    ?>
                    <div class="alert alert-primary mt-3" role="alert">
                        Kategori Berhasil disimpan
                    </div>
                      <meta http-equiv="refresh" content="0; url=kategori.php" />
                    <?php
                }
                else if ($jumlahData > 0){
                
                    
                        ?>
                        <div class="alert alert-waning mt-3" role="alert">
                            Kategori Sudah Ada
                        </div>
                        <?php
                    
                }
            }
            ?>
        </div>
    </div>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>