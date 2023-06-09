<?php
require "koneksi.php";
$queryKategori = mysqli_query($con, "SELECT * FROM kategori");



// get produk sesuai nama
if (isset($_GET['keyword'])) {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%' ");
}
// get produk sesuai kategori
else if (isset($_GET['kategori'])) {
    $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
    $kategoriId = mysqli_fetch_array($queryGetKategoriId);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
}
// get produk default
else {
    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
}

$countData = mysqli_num_rows($queryProduk);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-1.png" type="image/x-icon" />
    <title>Produk</title>
</head>

<body>
    <?php require "partials/navbar.php" ?>

    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container ">
            <h1 class="text-white text-center">Produk</h1>
        </div>
    </div>

    <!-- isi -->
    <div class="container py-5">
        <div class="row">
            <!-- kategori -->
            <div class="col-lg-3 mb-5">
                <h3>Kategori</h3>
                <div class="mt-3">
                    <ul class="list-group">
                        <?php
                        while ($kategori = mysqli_fetch_array($queryKategori)) {
                            $kategoriId = $kategori['id'];
                            $queryJumlahBarang = mysqli_query($con, "SELECT COUNT(*) AS jumlah FROM produk WHERE kategori_id = $kategoriId");
                            $jumlahBarang = mysqli_fetch_array($queryJumlahBarang)['jumlah'];
                        ?>
                            <a href="produk.php?kategori=<?php echo $kategori['nama']; ?>" class="text-decoration-none text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <?php echo $kategori['nama']; ?>
                                    <span class="badge  rounded-pill warna1"><?php echo $jumlahBarang; ?></span>
                                </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>


            <!-- produk -->
            <div class="col-lg-9">

                <h3 class="text-center mb-3">Produk</h3>

                <div class="row">
                    <?php
                    if ($countData < 1) {
                    ?>
                        <p class="text-center my-5">Produk yang anda cari tidak tersedia</p>
                    <?php
                    }
                    ?>


                    <?php while ($produk = mysqli_fetch_array($queryProduk)) {; ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="image-box">
                                    <img src="img/<?php echo $produk['foto']; ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $produk['nama']; ?></h4>
                                    <p class="card-text text-truncate"><?php echo $produk['detail']; ?></p>
                                    <p class="card-text text-harga">Rp. <?php echo $produk['harga']; ?>/-</p>
                                    <a href="produk-detail.php?nama=gghd" class="btn warna1">List Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require "partials/footer.php" ?>

    <!-- Java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>