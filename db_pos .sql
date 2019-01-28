-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 09:11 AM
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
  `ukuran` varchar(12) DEFAULT NULL,
  `warna` text,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kode_brg`, `nama_brg`, `merk_brg`, `kode_kategori`, `supplier`, `jml_stok`, `satuan`, `harga_beli`, `harga_jual`, `ukuran`, `warna`, `catatan`) VALUES
(1, 'Shaving Geli', 'Dens Co.', 1, 'Dens Co.', 12, 'Unit', 100000, 120000, 'Medium', 'biru', 'ini catatan'),
(3, 'mie ', 'mie soto banjar limau kui', 1, 'PT CINTA ABADI', 12, 'Gram', 20000, 20000, 'lain jumbo', 'hijau', 'ini catatan'),
(10, 'Ayam cincang cin', 'Ayam good', 2, 'PT CINTA SELALU', 0, 'Ltr', 70, 44, 'large', 'hijau', 'ini catatan'),
(11, 'Shaving Geli gen', 'Ayam good ing', 4, 'PT CINTA SELALU', 12, 'Kg', 12, 12, 'large', 'kuning', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskon`
--

CREATE TABLE `tb_diskon` (
  `kode_diskon` int(11) NOT NULL,
  `nama_diskon` varchar(50) NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `rupiah` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diskon`
--

INSERT INTO `tb_diskon` (`kode_diskon`, `nama_diskon`, `nilai`, `rupiah`, `deskripsi`) VALUES
(1, 'akhir tahun', 20, 20000, 'anehh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `kode_karyawan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`kode_karyawan`, `nama`, `alamat`, `kota`, `no_telp`, `email`, `jabatan`, `catatan`) VALUES
(1, 'riswan', 'handil bakti trans', 'Banjarmasin', '087714090303', 'riswannh4@gmail.com', 'kasir', 'saya kasir'),
(3, 'Dian', 'rawasari', 'Banjarmasin', '087714090303', 'ahmadriswannh@gmail.com', 'admin', 'saya admin dan kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kode_kategori` int(11) NOT NULL,
  `kategori_brg` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kode_kategori`, `kategori_brg`, `deskripsi`) VALUES
(1, 'sandang', 'ini untuk pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pajak`
--

CREATE TABLE `tb_pajak` (
  `kode_pajak` int(11) NOT NULL,
  `pajak_nilai` int(11) DEFAULT NULL,
  `pajak_rupiah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pajak`
--

INSERT INTO `tb_pajak` (`kode_pajak`, `pajak_nilai`, `pajak_rupiah`) VALUES
(2, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `kode_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diskon_nilai` int(11) DEFAULT NULL,
  `diskon_rupiah` int(11) DEFAULT NULL,
  `status_anggota` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`kode_pelanggan`, `nama`, `alamat`, `kota`, `no_telp`, `email`, `diskon_nilai`, `diskon_rupiah`, `status_anggota`, `catatan`) VALUES
(1, 'Muhammad Sulthony Sukma', 'sultan adam', 'Banjarmasin', '087714090303', 'riswannh4@gmail.com', 2000, NULL, 'baru', 'saya pelanggan'),
(2, 'sulthoniexx', 'handil bakti trans', 'Banjarmasin', '087714090303', 'riswannh4@gmail.com', 0, 20000, 'pelajar', 'ini pelanggan');

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
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

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
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `kode_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_diskon`
--
ALTER TABLE `tb_diskon`
  MODIFY `kode_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `kode_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pajak`
--
ALTER TABLE `tb_pajak`
  MODIFY `kode_pajak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `kode_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
