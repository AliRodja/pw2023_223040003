<?php
require('functions.php');

$name = 'Tambah Data Mahasiswa';

// ketika tombol submit di -klik

if (isset($_POST["tambah"])) {
    // jalankan fungsi tambah()
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasl ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    }
}

require('views/tambah.view.php');
