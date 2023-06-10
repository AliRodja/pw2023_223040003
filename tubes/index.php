<?php
require "partials/session-user.php";
require "koneksi.php";
$queryKategori = mysqli_query($con, "SELECT * FROM kategori");
$tampil = mysqli_query($con, "SELECT p.*, k.*, k.nama AS nama_kategori, p.nama AS nama_brg, p.id AS id_produk
                              FROM produk p
                              JOIN kategori k ON p.kategori_id = k.id
                              WHERE ketersediaan_stok = 'tersedia'");

$data_produk = [];
while ($row = mysqli_fetch_assoc($tampil)) {
    $data_produk[] = $row;
}
$data_kategori = [];
while ($row = mysqli_fetch_assoc($queryKategori)) {
    $data_kategori[] = $row;
}




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
    <title>Always Healthy</title>
</head>

<body>
    <?php require "partials/navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-light">
            <h1>Melengkapi Solusi Kesehatan</h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna1 telusuri ">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- kategori -->
    <div class="section" id="isi2">
        <div id="portofolio">
            <div class="container text-center mt-5">
                <h1 class="sub-title">Kategori Terlaris</h1>
                <div class="items-list">
                    <div class="items" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <img src="img/isi-2-1.png" />
                        <div class="layer1">
                            <a href="produk.php?kategori=ALAT KESEHATAN" class="btn warna1 telusuri " type="submit">ALAT KESEHATAN</a>
                        </div>
                    </div>
                    <div class="items " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <img src="img/isi-2-2.png" />
                        <div class="layer1">
                            <a href="produk.php?kategori=SUPLEMEN" class="btn warna1 telusuri  " type="submit">SUPLEMEN</a>
                        </div>
                    </div>
                    <div class="items" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <img src="img/isi-2-3.png" />
                        <div class="layer1">
                            <a href="produk.php?kategori=KESEHATAN WANITA" class="btn warna1 telusuri " type="submit">KESEHATAN WANITA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
    <div class="container-fluid  py-5 tentang" id="tentang">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-7 mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat recusandae quia neque magni error cupiditate hic? Error dolores vitae nulla reprehenderit, quaerat beatae soluta nostrum cum pariatur eligendi laudantium blanditiis ipsam fugiat sit fugit odit cumque animi, natus, vero tempore! Dolorem tenetur asperiores voluptate iure explicabo nisi harum natus dolores atque cumque molestias provident sequi laborum autem odio deleniti ratione, officiis quasi ipsa? Consequatur totam minus aliquid nisi quibusdam natus veniam aut cupiditate officia ex harum exercitationem molestias hic, sit facilis vero! Necessitatibus officiis minima architecto. Quo dolorem, facere ea ab corrupti fugiat itaque! Ratione enim nihil hic. Voluptatem, sint.</p>
        </div>
    </div>



    <!-- produk -->
    <div class="container-fluid py-5" id="produk">
        <div class="container text-center ">

            <h3>Produk</h3>

            <div class="row mt-5">
                <?php foreach ($data_produk as $t) : ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                                <img src="img/<?= $t['foto'] ?>" alt="" class="card-img-top" />
                            </div>
                            <div class="card-body">
                                <h4 class="card-title mt-3"><?= $t['nama_brg'] ?></h4>
                                <p style="color:red;"><?= $t['nama_kategori']; ?></p>
                                <p class="card-text text-truncate " style="font-size: 15px ;"><?= $t['detail'] ?></p>
                                <div class="card-fasilitas py-3">
                                    <h4>Rp. <?= $t['harga'] ?>/-</h4>
                                    <div class="py-3">
                                        <a href="produk-detail.php?id=<?= $t['id_produk']; ?>" class="btn warna1 text-white telusuri">Lihat Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <a class="btn  warna1 telusuri m-3" href="produk.php" style="color: white;">See More</a>
        </div>

    </div>



    <!-- footer -->
    <?php require "partials/footer.php" ?>
    <!-- Java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>