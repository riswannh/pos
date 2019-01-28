-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 06:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_brg` int(11) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `merk_brg` varchar(25) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `supplier` varchar(15) NOT NULL,
  `jml_stok` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `ukuran` varchar(12) NOT NULL,
  `warna` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_brg`, `nama_brg`, `merk_brg`, `kode_kategori`, `supplier`, `jml_stok`, `satuan`, `harga_beli`, `harga_jual`, `ukuran`, `warna`, `catatan`) VALUES
(1, 'Shaving Geli', 'Dens Co.', 1, 'Dens Co.', 12, 'Kg', 100000, 120000, 'Medium', 'biru', 'ini catatan'),
(2, 'Vitamin Rambut', 'Makarizo', 2, 'Tk. Mahkota', 12, 'Kg', 100000, 120000, 'Medium', 'ungu', 'ini catatan'),
(3, 'mie ', 'mie soto banjar limau kui', 1, 'PT CINTA ABADI', 12, 'Gram', 20000, 20000, 'lain jumbo', 'hijau', 'ini catatan'),
(4, 'mie ', 'mie soto banjar limau kui', 1, 'PT CINTA ABADI', 12, 'Gram', 20000, 20000, 'lain jumbo', 'hijau', 'ini catatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskon`
--

CREATE TABLE `tb_diskon` (
  `kode_diskon` int(11) NOT NULL,
  `nama_diskon` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diskon`
--

INSERT INTO `tb_diskon` (`kode_diskon`, `nama_diskon`, `nilai`) VALUES
(1, 'bazar', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kode_kategori` int(11) NOT NULL,
  `kategori_brg` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kode_kategori`, `kategori_brg`) VALUES
(1, 'Pangann'),
(2, 'Sandang'),
(4, 'ikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pajak`
--

CREATE TABLE `tb_pajak` (
  `kode_pajak` int(11) NOT NULL,
  `nama_pajak` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pajak`
--

INSERT INTO `tb_pajak` (`kode_pajak`, `nama_pajak`, `nilai`) VALUES
(1, 'ppn', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_brg`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `tb_diskon`
--
ALTER TABLE `tb_diskon`
  ADD PRIMARY KEY (`kode_diskon`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `tb_pajak`
--
ALTER TABLE `tb_pajak`
  ADD PRIMARY KEY (`kode_pajak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `kode_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_diskon`
--
ALTER TABLE `tb_diskon`
  MODIFY `kode_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pajak`
--
ALTER TABLE `tb_pajak`
  MODIFY `kode_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `tb_kategori` (`kode_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
