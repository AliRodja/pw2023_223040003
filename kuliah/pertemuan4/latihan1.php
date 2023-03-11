<?php
// $angka = 5;

// memeriksa apakah $angka itu bilangan GANJIL
// Bilangan yang jika dibagi 2 sisanya 1

function cek_ganjil_genap($angka) //parameter
{
    if ($angka % 2 == 1) {
        return "$angka   adalah bilangan GANJIL!";
    } else {
        return "$angka adalah bilangan GENAP!";
    }
}

echo cek_ganjil_genap(10); //Argument
echo "<br>";
// echo cek_ganjil_genap($angka); //Argument
echo cek_ganjil_genap(5);
