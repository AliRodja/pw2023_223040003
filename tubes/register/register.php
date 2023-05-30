<?php

require '../php/function.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Berhasil ditambahkan');
            window.location = '../login/index.php';
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}

?>


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
  <link rel="shortcut icon" href="../img/logo-1.png" type="image/x-icon" />
  <title>Always Healthy</title>
</head>

<body>
  <div class="global-container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">SIGN UP</h1>
      </div>

      <!-- form -->
      <div class="card-text">
        <form action="" method="post">
          <div class="fullname mb-3 d-flex">
            <!-- First name -->
            <div class="first-name">
              <label for="exampleInputEmail1 first_name" class="form-label">First name</label>
              <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <!-- Last name -->
            <div class="last-name ms-3">
              <label for="exampleInputEmail1 last_name" class="form-label justify-items-end">Last name</label>
              <input name="last_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1 email" class="form-label justify-items-end">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1 password" class="form-label text-right">Set a password</label>
            <input name="password" type="password" class="form-control mb-2" id="exampleInputPassword1" />
          </div>
          <!-- <div class="mb-3">
            <label for="exampleInputPassword1 birth_date" class="form-label text-right">Date of birth</label>
            <input name="birt_date" type="date" class="form-control mb-2" id="exampleInputPassword1" />
          </div> -->

          <div class="text-center p-3">
            <span class="d-inline">Have an account? <a href="../login/index.php" class="d-inline text-decoration-none">Sign in</a></span>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="register" class="btn btn-primary">Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>