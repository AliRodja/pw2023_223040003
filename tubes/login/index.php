<?php
session_start();

if (isset($_SESSION["login"])) {
  header("location:../web/index.php ");
  exit;
}

require '../php/function.php';

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $conn = koneksi();

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  // CEK email
  if (mysqli_num_rows($result) === 1) {
    // CEK PASSWORD
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      header("location: ../web/index.php ");
      exit;
    }
  }

  $error = true;
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
        <img src="img/logo-2.png" class="bg" />
        <h1 class="card-title text-center">L O G I N</h1>
      </div>

      <!-- form -->
      <div class="card-text">

        <?php if (isset($error)) : ?>
          <p style="color:red; font-style:italic;">*Email / Password salah</p>
        <?php endif; ?>

        <form action="" method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control mb-2" id="exampleInputPassword1" />
            <a href="#" class="text-decoration-none text-center">Forgot password?</a>
          </div>

          <div class="text-center p-3">
            <span class="d-inline">Don't have an account? <a href="../register/register.php" class="d-inline text-decoration-none">Sign up for free</a></span>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="login" class="btn btn-primary">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>