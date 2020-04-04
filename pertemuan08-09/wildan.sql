-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 06:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `kdbarang` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`kdbarang`, `namabarang`, `harga`, `stok`) VALUES
(1, 'syal arema', 831, 2),
(7, 'arema', 12000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `jualbeli`
--

CREATE TABLE `jualbeli` (
  `id_jualbeli` int(11) NOT NULL,
  `kdbarang` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jualbeli`
--

INSERT INTO `jualbeli` (`id_jualbeli`, `kdbarang`, `jenis`, `jumlah`) VALUES
(17, 1, 'jual', 1),
(18, 1, 'beli', 12),
(19, 7, 'beli', 12),
(20, 7, 'jual', 12);

--
-- Triggers `jualbeli`
--
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `jualbeli` FOR EACH ROW BEGIN 
	UPDATE gudang
    SET stok = stok + New.jumlah
    WHERE kdbarang = New.kdbarang AND New.jenis = "beli";
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `jual` AFTER INSERT ON `jualbeli` FOR EACH ROW BEGIN 
	UPDATE gudang
    SET stok = stok - New.jumlah
    WHERE kdbarang = New.kdbarang AND New.jenis = "jual";
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `pass`, `email`, `namalengkap`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indexes for table `jualbeli`
--
ALTER TABLE `jualbeli`
  ADD PRIMARY KEY (`id_jualbeli`),
  ADD KEY `kdbarang` (`kdbarang`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `kdbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jualbeli`
--
ALTER TABLE `jualbeli`
  MODIFY `id_jualbeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jualbeli`
--
ALTER TABLE `jualbeli`
  ADD CONSTRAINT `jualbeli_ibfk_1` FOREIGN KEY (`kdbarang`) REFERENCES `gudang` (`kdbarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
