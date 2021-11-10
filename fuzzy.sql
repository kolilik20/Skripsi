-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 07:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(50) NOT NULL,
  `akerjasama` varchar(50) NOT NULL,
  `akemampuan` varchar(50) NOT NULL,
  `aabsensi` varchar(50) NOT NULL,
  `keputusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `akerjasama`, `akemampuan`, `aabsensi`, `keputusan`) VALUES
(2, 'Baik', 'Baik', 'Baik', 'Dapat'),
(3, 'Baik', 'Sedang', 'Baik', 'Dapat'),
(4, 'Baik', 'Buruk', 'Baik', 'Dipertimbangkan'),
(5, 'Sedang', 'Baik', 'Baik', 'Dapat'),
(6, 'Sedang', 'Sedang', 'Baik', 'Dapat'),
(7, 'Sedang', 'Buruk', 'Baik', 'Dipertimbangkan'),
(8, 'Buruk', 'Baik', 'Baik', 'Dipertimbangkan'),
(9, 'Buruk', 'Sedang', 'Baik', 'Dipertimbangkan'),
(10, 'Buruk', 'Buruk', 'Baik', 'Tidak Dapat'),
(11, 'Baik', 'Baik', 'Sedang', 'Dapat'),
(12, 'Baik', 'Sedang', 'Sedang', 'Dapat'),
(13, 'Baik', 'Buruk', 'Sedang', 'Dipertimbangkan'),
(14, 'Sedang', 'Baik', 'Sedang', 'Dapat'),
(15, 'Sedang', 'Sedang', 'Sedang', 'Dapat'),
(16, 'Sedang', 'Buruk', 'Sedang', 'Dipertimbangkan'),
(17, 'Buruk', 'Baik', 'Sedang', 'Dipertimbangkan'),
(18, 'Buruk', 'Sedang', 'Sedang', 'Dipertimbangkan'),
(19, 'Buruk', 'Buruk', 'Sedang', 'Tidak Dapat'),
(20, 'Baik', 'Baik', 'Buruk', 'Dipertimbangkan'),
(21, 'Baik', 'Sedang', 'Buruk', 'Dipertimbangkan'),
(22, 'Baik', 'Buruk', 'Buruk', 'Tidak Dapat'),
(23, 'Sedang', 'Baik', 'Buruk', 'Dipertimbangkan'),
(24, 'Sedang', 'Sedang', 'Buruk', 'Dipertimbangkan'),
(25, 'Sedang', 'Buruk', 'Buruk', 'Tidak Dapat'),
(26, 'Buruk', 'Baik', 'Buruk', 'Tidak Dapat'),
(27, 'Buruk', 'Sedang', 'Buruk', 'Tidak Dapat'),
(28, 'Buruk', 'Buruk', 'Buruk', 'Tidak Dapat');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `j_kel` varchar(255) NOT NULL,
  `absensi` varchar(255) NOT NULL,
  `kerjasama` varchar(255) NOT NULL,
  `kemampuan` varchar(255) NOT NULL,
  `prediksi` varchar(255) NOT NULL,
  `hasil_prediksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id`, `nama`, `j_kel`, `absensi`, `kerjasama`, `kemampuan`, `prediksi`, `hasil_prediksi`) VALUES
(1, 'Muhammad Ridwan', 'Laki-laki', '5', '70', '80', '65', 'Tidak Dapat'),
(9, 'Muhammad Iqbal', 'Laki-Laki', '3', '86', '78', '93.2', 'Dapat'),
(10, 'Anis Kholik', 'Laki-Laki', '0', '82', '89', '90.2', 'Dapat'),
(11, 'Siti Amiroh', 'Perempuan', '2', '84', '88', '90.8', 'Dapat'),
(12, 'Aldi Andriyanto', 'Laki-Laki', '2', '82', '85', '95', 'Dapat'),
(13, 'Dani Ikhsan', 'Laki-Laki', '4', '79', '82', '95', 'Dapat'),
(14, 'Eli Kuncara', 'Laki-Laki', '2', '80', '78', '95', 'Dapat'),
(15, 'Melinda ', 'Perempuan', '0', '84', '88', '90.8', 'Dapat'),
(16, 'IndahWidi astuti', 'Perempuan', '0', '85', '85', '95', 'Dapat'),
(17, 'Aris Prasetyo', 'Laki-Laki', '3', '88', '89', '89.375', 'Dapat'),
(18, 'Ari Wibowo', 'Laki-Laki', '3', '85', '84', '95', 'Dapat'),
(19, 'Muhammad Helmi', 'Laki-Laki', '0', '86', '89', '89.5', 'Dapat'),
(20, 'Natsir Ramadhan', 'Laki-Laki', '4', '80', '80', '95', 'Dapat'),
(21, 'Agung Pambudi', 'Laki-Laki', '3', '81', '83', '95', 'Dapat'),
(22, 'Rifki Maulana', 'Laki-Laki', '2', '78', '79', '95', 'Dapat'),
(23, 'M. Aldiyansah', 'Laki-Laki', '1', '88', '87', '89.714285714286', 'Dapat'),
(24, 'Wahyu Hadi', 'Laki-Laki', '0', '80', '79', '95', 'Dapat'),
(25, 'Adam Saputra', 'Laki-Laki', '0', '78', '82', '95', 'Dapat'),
(26, 'Tyas Ayu ', 'Perempuan', '1', '85', '86', '93.2', 'Dapat'),
(27, 'Putri Irnawati', 'Perempuan', '0', '86', '80', '93.2', 'Dapat'),
(28, 'Dina Pradita', 'Perempuan', '0', '80', '87', '91.8', 'Dapat'),
(29, 'Agung Munasetya', 'Laki-Laki', '4', '79', '77', '95', 'Dapat'),
(30, 'Budiono', 'Laki-Laki', '3', '70', '87', '79.571428571429', 'Dipertimbangkan'),
(31, 'Miftakhul Anwar', 'Laki-Laki', '2', '77', '78', '95', 'Dapat'),
(32, 'M. Royhan', 'Laki-Laki', '5', '89', '87', '70', 'Dipertimbangkan'),
(33, 'Wahyu Utami', 'Perempuan', '5', '78', '78', '70', 'Dipertimbangkan'),
(34, 'Nadhirin', 'Laki-Laki', '0', '89', '84', '90.2', 'Dapat'),
(35, 'Hanif Irsyadi', 'Laki-Laki', '3', '80', '80', '95', 'Dapat'),
(36, 'Rafly Alfareza ', 'Laki-Laki', '3', '78', '70', '80', 'Dipertimbangkan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `absen` int(100) NOT NULL,
  `kerjasama` int(80) NOT NULL,
  `kemampuan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `jk`, `absen`, `kerjasama`, `kemampuan`) VALUES
(1, 'Muhammad Ridwan', 'Laki-laki', 5, 70, 80),
(2, 'Muhammad Iqbal', 'Laki-Laki', 3, 86, 78),
(3, 'Anis Kholik', 'Laki-Laki', 0, 82, 89),
(4, 'Siti Amiroh', 'Perempuan', 2, 84, 88),
(5, 'Aldi Andriyanto', 'Laki-Laki', 2, 82, 85),
(6, 'Dani Ikhsan', 'Laki-Laki', 4, 79, 82),
(7, 'Eli Kuncara', 'Laki-Laki', 2, 80, 78),
(8, 'Melinda ', 'Perempuan', 0, 84, 88),
(9, 'IndahWidi astuti', 'Perempuan', 0, 85, 85),
(10, 'Aris Prasetyo', 'Laki-Laki', 3, 88, 89),
(11, 'Ari Wibowo', 'Laki-Laki', 3, 85, 84),
(12, 'Muhammad Helmi', 'Laki-Laki', 0, 86, 89),
(13, 'Natsir Ramadhan', 'Laki-Laki', 4, 80, 80),
(14, 'Agung Pambudi', 'Laki-Laki', 3, 81, 83),
(15, 'Rifki Maulana', 'Laki-Laki', 2, 78, 79),
(16, 'M. Aldiyansah', 'Laki-Laki', 1, 88, 87),
(17, 'Wahyu Hadi', 'Laki-Laki', 0, 80, 79),
(18, 'Adam Saputra', 'Laki-Laki', 0, 78, 82),
(19, 'Tyas Ayu ', 'Perempuan', 1, 85, 86),
(20, 'Putri Irnawati', 'Perempuan', 0, 86, 80),
(21, 'Dina Pradita', 'Perempuan', 0, 80, 87),
(22, 'Agung Munasetya', 'Laki-Laki', 4, 79, 77),
(23, 'Budiono', 'Laki-Laki', 3, 70, 87),
(24, 'Miftakhul Anwar', 'Laki-Laki', 2, 77, 78),
(25, 'M. Royhan', 'Laki-Laki', 5, 89, 87),
(26, 'Wahyu Utami', 'Perempuan', 5, 78, 78),
(27, 'Nadhirin', 'Laki-Laki', 0, 89, 84),
(28, 'Hanif Irsyadi', 'Laki-Laki', 3, 80, 80),
(29, 'Rafly Alfareza ', 'Laki-Laki', 3, 78, 70),
(30, 'Mulyani', 'Laki-Laki', 4, 87, 81);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `jk`, `Email`, `username`, `password`) VALUES
(1, 'Dedy Nur Rahman', 'Laki-Laki', 'dedynur@gmail.com', 'dedynur', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'Nur Kolilik', 'Laki-Laki', 'kolilik20@gmail.com', 'Kolilik', 'afe9b7e1f82d7d582299b775c14b410f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
