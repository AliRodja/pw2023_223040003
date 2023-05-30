<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="img/logo-1.png" type="image/x-icon" />

  <title>Always Healthy</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg border-bottom border-1 border-secondary bg-body-tertiary fixed-top">
    <div class="container-fluid d-flex">
      <a class="navbar-brand ps-4 pe-4" href="#">
        <img src="img/logo-1.png" alt="Bootstrap" width="50" height="50" /><span class="ps-2" style="color: #00bfff !important">Always </span> <span style="color: #f29e23 !important">Healthy</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ps-4">
          <li class="nav-item nav-a">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <button type="button" class="btn btn-login hp" h><a href="login/index.php" class="text-decoration-none text-light"> Login</a></button>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 px-4 py-5">
          <h1 class="display-4 aos-init aos-animate">
            Complete
            <span>Health </span>
            <span>Solutions</span>
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque optio voluptatem h</p>
          <div class="d-flex" style="flex-direction: row !important">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" style="margin-left: -12px">
                  <div class="card me-3 mb-4" style="width: 18rem">
                    <img src="..." class="card-img-top" alt="..." />
                    <div class="card-body">
                      <p class="card-text">Some quick example</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card mx-3 mb-4" style="width: 18rem">
                    <img src="..." class="card-img-top" alt="..." />
                    <div class="card-body">
                      <p class="card-text">Some quick example</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card mx-3 mb-4" style="width: 18rem">
                    <img src="..." class="card-img-top" alt="..." />
                    <div class="card-body">
                      <p class="card-text">Some quick example</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-1 btn-lg" href="#About" role="button">Learn more</a>
        </div>
      </div>
    </div>
  </div>

  <!-- isi -->
  <div class="container" style="margin-top: 100px !important">
    <h1>Special Service</h1>
    <ul class="d-flex my-4 mx-3 gambar" style="list-style: none; align-items: center !important; text-align: center !important">
      <li>
        <a href="#" class="text-decoration-none">
          <img src="img/isi-1-1.svg" class="w-25" style="border-radius: 80%" />
          <p class="text-dark pt-2">aad</p>
        </a>
      </li>
      <li>
        <a href="#" class="text-decoration-none">
          <img src="img/isi-1-2.svg" class="w-25" style="border-radius: 80%" />
          <p class="text-dark pt-2">aad</p>
        </a>
      </li>
      <li>
        <a href="#" class="text-decoration-none">
          <img src="img/isi-1-3.svg" class="w-25" style="border-radius: 80%" />
          <p class="text-dark pt-2">aad</p>
        </a>
      </li>
      <li>
        <a href="#" class="text-decoration-none">
          <img src="img/isi-1-4.svg" class="w-25" style="border-radius: 80%" />
          <p class="text-dark pt-2">aad</p>
        </a>
      </li>
    </ul>
  </div>

  <!-- isi 2 -->
  <div id="portofolio">
    <div class="container" style="margin-top: 100px !important">
      <h1 class="sub-title">Gear up and get ready for adventure</h1>
      <div class="items-list">
        <div class="items" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
          <img src="img/isi-2-1.png" />
          <div class="layer1">
            <p style="font-size: 25px">Fresh powder calls for the freshest fits.</p>
            <a href="https://www.rei.com/h/snowsports" class="btn">Shop snowsports</a>
          </div>
        </div>
        <div class="items" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
          <img src="img/isi-2-2.png" />
          <div class="layer1">
            <p>Support everyone's right to spend time outside during the season of giving.</p>
            <a href="https://www.reifund.org/donate?&ms=REIwebsitesecondary" class="btn">Donate now</a>
          </div>
        </div>
        <div class="items" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
          <img src="img/isi-2-3.png" />
          <div class="layer1">
            <p>Sometimes the best gift is an epic adventure together. Members save on REI trips!</p>
            <a href="https://www.rei.com/adventures/s/featured" class="btn">Browse featured trips</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- list barang  -->
  <div class="container" style="margin-top: 150px; margin-bottom: 64px" id="Shop">
    <div class="row">
      <div class="col">
        <h2 style="font-family: Stuart, Georgia, serif; margin: 0px 0px 32px">Shop top categories</h2>
      </div>
    </div>
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
      <div class="col tilt" data-tilt>
        <div class="card">
          <img src="img/Sepatu.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/s/just-for-members">Member collection</a></h5>
          </div>
        </div>
      </div>
      <div class="col" data-tilt>
        <div class="card">
          <img src="img/Jaket Cewe.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/s/womens-winter-clothing-accessories">Women's winter clothing</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Jaket Cowo.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/s/mens-winter-clothing-accessories">Men's winter clothing</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Papan Seluncur.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/snowboarding">Snowboarding</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Papan Seluncur 2.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/downhill-skiing">Downhill skiing</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Sepatu Lari.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/trail-running-shoes">Trail running shoes</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Barang 1.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/indoor-cycling">Indoor cycling</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Jam Tangan.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/electronics">Electronics</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Barang 2.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/c/car-racks">Car racks</a></h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/Baju.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><a href="https://www.rei.com/rei-garage/s/all-garage-products">Outlet deals</a></h5>
          </div>
        </div>
      </div>
    </div>
    <div class="tombol">
      <p>Looking for more great deals...</p>
      <a href="https://www.rei.com/f/scd-deals" class="btn">Shop all deals</a>
    </div>
  </div>

  <!-- footer -->
  <div class="footers bg-light text-center pt-5 pb-5">
    <div class="medsos-footers">
      <p>Ikuti kami di :</p>
      <div class="icon-medsos text-primary d-flex justify-content-center">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
      </div>
    </div>
    <!--  -->
    <div class="supported mt-5">
      <p>
        Supported by
        <a class="text-decoration-none text-dark" href="https://instagram.com/ziimpossible_?igshid=YmMyMTA2M2Y=" target="_blank">@ziinspiration</a>
      </p>
    </div>
    <!--  -->
    <div class="copyright mt-5">
      <i class="fa-regular fa-copyright"></i> 2022
      <a href="#" class="text-decoration-none"><i class="fa-solid fa-user-doctor text-primary ms-1"></i><span>
          Halodek</span></a>
      - Apotek online paling komplit All Rights Reserved
    </div>
  </div>

  <!-- java -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>