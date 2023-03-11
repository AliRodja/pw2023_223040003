<?php
// Array

// membuat Array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Ali', 40, false];
$binatang = ['🐈', '🐰', '🐷', '🐮', '🐲'];


// Mencetak Array
echo $hari[1]; // satu elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);

echo "<hr>";

// Manipulasi Array
// Menggunakan Index
// Menambah elemen di akhir menggunakan index
$hari[] = 'Kamis';
$hari[] = "Jum'at";
print_r($hari);
echo "<hr>";

// Menambah elemen di akhir menggunakan Array Push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";

// menambah elemen di awal menggunakan array_unshift()
array_unshift($binatang, '🐶');
var_dump($binatang);
echo "<hr>";

// menghapus elemen di akhir, menggunakan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapus elemen di akhir, menggunakan array_shift
array_shift($hari);
print_r($hari);
echo "<hr>";
