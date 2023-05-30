<?php

// CONNECT TO DBMS
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "tubes_223040003");

    return $conn;
}

// FUNCTION QUERY
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// REGISTRASI
function registrasi($data)
{
    $conn = koneksi();

    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $first_name = mysqli_real_escape_string($conn, $data["first_name"]);
    $last_name = mysqli_real_escape_string($conn, $data["last_name"]);
    // $birth = strtolower($conn, $data["birth_date"]);



    // cek email sudah ada atau belum 
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('email sudah terdaftar')
              </script>";
        return false;
    }

    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES(null, '$first_name', '$last_name', '$email', '$password' )");

    return mysqli_affected_rows($conn);
}
