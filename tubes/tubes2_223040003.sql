-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 08:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes2_223040003`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'PROMO'),
(2, 'OBAT LANGKA'),
(3, 'OBAT GENERIK'),
(4, 'IBU & ANAK'),
(5, 'SUPLEMEN'),
(6, 'PERAWATAN TUBUH'),
(7, 'HERBAL'),
(8, 'ALAT KESEHATAN'),
(9, 'KESEHATAN PRIA'),
(10, 'KESEHATAN WANITA');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` decimal(10,3) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(15, 1, 'Valtrex 500mg Tablet', '12.000', '0108p0009.jpg', 'Valtrex merupakan obat yang digunakan untuk mengobati penyakit akibat infeksi virus seperti herpes pada pasien dengan gangguan sistem imun. Valtrex mengandung zat aktif Valaciclovir adalah suatu antivirus yang bekerja dengan menghambat polymerase DNA secara kompetitif di dalam DNA virus setelah diaktifkan dalam bentuk Acyclovir trifosfat. Bentuk aktif ini akan menghambat sintesis DNA dengan bertindak sebagai penutup jalur (Backbone) rantai DNA.', 'tersedia'),
(17, 8, 'Gea Tensimeter Aneroid Mi-1001', '128.000', 'apotek_online_k24klik_201908200903041242_gea-stetoscope.jpg-1--1-.jpg', 'Alat tensi jarum, untuk membantu mengukur tekanan dara.\r\n\r\nDengan melakukan pembelian produk Alat Kesehatan di K24klik maka Anda telah mengetahui cara penggunaan produk tersebut dengan benar. K24Klik tidak bertanggungjawab terhadap kerusakan produk Alat Kesehatan yang disebabkan karena kesalahan penggunaan oleh pelanggan. Batas waktu pengaduan produk Alat Kesehatan yang rusak adalah 2x24 jam sejak barang diterima pelanggan. ', 'tersedia'),
(18, 5, 'Hepatin 750mg Tablet', '44.000', 'apotek_online_k24klik_20200804023048359225_HEPATIN-750-MG.jpg', 'Suplemen alami untuk hati ini mengandung gabungan dari Curcuminoid, Silymarin phytosome, Echinacea extr, Choline bitartrate, Vit B6 sehingga memiliki beberapa khasiat memperbaiki fungsi hati, mengatasi gejala hepatitis (efek anti-inflamasi), mengembalikan gangguan sel hepatosit, meregenerasi sel hati. Kemudian adanya Vitamin B6 berfungsi membantu dalam metabolisme asam amino yang diperlukan oleh hati. Beli Hepatin di K24klik dan dapatkan manfaatnya. ', 'tersedia'),
(19, 1, 'Captopril Indofarma 12.5mg Tablet', '184.000', '0102c0013.jpg', 'Captopril Indofarma merupakan obat generik yang digunakan untuk mengurangi tekanan darah pada penderita hipertensi, gagal jantung kongestif, dan mengurangi kekambuhan dari stroke. Captopril Indofarma mengandung zat aktif Captopril yaitu obat golongan Angiotensin-Converting Enzyme (ACE) inhibitor yang bekerja dengan melakukan penghambatan kinerja enzim ACE sehingga kadar angiotensin menurun dan menyebabkan peningkatan kadar brakinin. Penurunan kadar angiotensin berpengaruh terhadap retensi air dan natrium, selain itu menyebabkan terjadinya vasodilatasi kapiler dan penurunan tekanan darah.', 'tersedia'),
(23, 6, 'Erhair Df Hairgrow Shampoo 100ml (per Pcs)', '75.000', 'apotek_online_k24klik_20210615083942359225_ERHAIR-DF-HAIRGROW-SHAMPOO--3-.jpg', 'ERHAIR DF HAIRGROW SHAMPOO 100ML diformulasikan secara khusus untuk mengurangi kerontokan rambut serta menutrisi rambut sehingga dapat menumbuhkan rambut baru.\r\nProduk ini memiliki kandungan:\r\n• Ekstrak Cucurbita Pepo Seed, Ekstrak Ginseng dan Niacinamide yang berfungsi melancarkan mikrosirkulasi darah pada kulit kepala serta mengoptimalkan penyerapan nutrisi vitamin dan mineral, sehingga efektif merangsang pertumbuhan rambut baru sekaligus memperbaiki kualitas rambut.\r\n• Ekstrak Pumpkin Seed yang menghambat terbentuknya DHT sebagai penyebab kerontokan rambut.', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(4, 'ali', 'imran', 'ali', '$2y$10$uxqYjqmwYWSiK4UfTyhF0uNSBP5hKOXJQc7lQ2oCG.gNdVqzDk5pi', 'user'),
(5, 'lisvin', 'unad', 'unad', '$2y$10$mdE92y6/3n4UhMvMfkbzw.O4q/haG..m.0cIuuMQn1rttggL9dt9S', 'user'),
(6, 'admind', 'admind', 'admind', '$2y$10$zgVcdAIH5opPZIOfdHzzOOvvvDYXaL27EiQss06BQ/e9FqY5I5nyu', 'admin'),
(7, 'Revalian', 'Ananda Taufan', 'revalian', '$2y$10$szmcy7.7iRKiEc4AdXzwY.kkRKmjtnvuBW5CLE/1BB7GBgWKDEu2y', 'user'),
(8, 'amar', 'udin', 'amarudin', '$2y$10$UL8cFYENR7LrMPyQSabVxuH5l4J20a6GHqBzs3k9t.gJ0xCJd.666', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
