<?php
$mahasiswa = [

    [
        "nama" => "Ali Imran Rodja",
        "nrp" => "223040003",
        "email" => "ali.223040003@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "ali.png"
    ],

    [
        "nama" => "Muhammad Rifki Ramadhani",
        "nrp" => "223040046",
        "email" => "rifkiramadhani.223040046@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "rifki.jpeg"
    ],

    [
        "nama" => "Ji'ta Bilhaq",
        "nrp" => "223040055",
        "email" => "ji'ta.223040055@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "ji'ta.jpeg"
    ],

    [
        "nama" => "Muhammad Daffa Musyaffa",
        "nrp" => "223040048",
        "email" => "daffa.223040048@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "dafa.jpeg"
    ],

    [
        "nama" => "Lisvindanu",
        "nrp" => "223040038",
        "email" => "lisvindanu.223040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "danu.png"
    ],

    [
        "nama" => "Angga Nugraha Sofyan",
        "nrp" => "223040052",
        "email" => "angga.223040052@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "angga.jpeg"
    ],



    [
        "nama" => "Muhammad Alfath Septian",
        "nrp" => "223040014",
        "email" => "alfath.223040014@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "afat.jpeg"
    ],

    [
        "nama" => "Ilham Ramadhana Hartono",
        "nrp" => "223040013",
        "email" => "ilham.223040013@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "ilham.jpeg"
    ],

    [
        "nama" => "Aldi Pradana Hakim",
        "nrp" => "223040035",
        "email" => "aldipradana.223040035@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "aldi.jpeg"
    ],

    [
        "nama" => "Fakih Helmi Maulana",
        "nrp" => "223040056",
        "email" => "fakih.223040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "fakih.jpeg"
    ]


]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <?php
    foreach ($mahasiswa as $mhs) :
    ?>
        <ul>
            <li><img src="img/<?= $mhs["foto"]; ?>"></li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
        <br>

    <?php
    endforeach; ?>
</body>

</html>