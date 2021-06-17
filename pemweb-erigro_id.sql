-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 03:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb-erigro_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibit`
--

CREATE TABLE `bibit` (
  `idBibit` int(11) NOT NULL,
  `bibit` varchar(20) NOT NULL,
  `jumlahBibit` int(6) NOT NULL,
  `jadwalAmbil` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bibit`
--

INSERT INTO `bibit` (`idBibit`, `bibit`, `jumlahBibit`, `jadwalAmbil`) VALUES
(1, 'Akasia', 500, '2021-06-30 01:00:00'),
(2, 'Alpukat', 200, '2021-06-17 20:06:00'),
(3, 'Belimbing', 150, '2021-06-16 20:07:00'),
(4, 'Mangga', 300, '2021-06-17 20:12:00'),
(5, 'Salak', 200, '2021-06-18 20:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idPengajuan` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idBibit` int(11) NOT NULL,
  `jumlahPengajuan` int(6) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `luasLahan` int(6) NOT NULL,
  `statusPengajuan` enum('menunggu_verifikasi','proposal_diterima','proposal_ditolak','bibit_dikirim','bibit_ditanam') NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idPengajuan`, `idUser`, `idBibit`, `jumlahPengajuan`, `tujuan`, `luasLahan`, `statusPengajuan`, `tanggal`) VALUES
(1, 1, 1, 30, 'rumahquu', 25, 'bibit_ditanam', '2021-06-24 00:00:00'),
(8, 2, 1, 50, 'asd', 1, 'proposal_diterima', '2021-06-17 13:56:22'),
(9, 2, 1, 50, 'qwe', 20, 'menunggu_verifikasi', '2021-06-17 13:58:42'),
(10, 2, 1, 50, 'qwe', 20, 'menunggu_verifikasi', '2021-06-17 13:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hakAkses` enum('admin','user') NOT NULL,
  `namaLengkap` varchar(30) NOT NULL,
  `noHp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `hakAkses`, `namaLengkap`, `noHp`) VALUES
(1, 'admin', 'admin123', 'admin', 'Admin', '0000000'),
(2, 'user', 'user123', 'user', 'User', '088888888888'),
(3, 'asd', 'asd123', 'user', 'aku', '089878997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`idBibit`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idPengajuan`),
  ADD KEY `pengajuan-bibit` (`idBibit`),
  ADD KEY `pengajuan-user` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit`
--
ALTER TABLE `bibit`
  MODIFY `idBibit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `idPengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan-bibit` FOREIGN KEY (`idBibit`) REFERENCES `bibit` (`idBibit`),
  ADD CONSTRAINT `pengajuan-user` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
