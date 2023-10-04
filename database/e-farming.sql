-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220909.746d1696b7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 10:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-farming`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nm_admin`, `status`) VALUES
(1, 'admin', '12345', 'Administrator', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id_bayar` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `no_referensi` varchar(25) NOT NULL,
  `tot_bayar` double NOT NULL,
  `status` varchar(25) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id_bayar`, `tgl_bayar`, `no_referensi`, `tot_bayar`, `status`, `foto`) VALUES
(1, '2022-09-26', '135088', 135000, 'Terkonfirmasi', ''),
(2, '2022-09-26', '979751', 210000, 'Terkonfirmasi', ''),
(3, '2022-09-26', '121604', 610000, 'Menunggu Verifikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_belanja`
--

CREATE TABLE `tbl_belanja` (
  `id_belanja` int(11) NOT NULL,
  `no_belanja` varchar(25) NOT NULL,
  `tgl_belanja` date NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `jml_belanja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_belanja`
--

INSERT INTO `tbl_belanja` (`id_belanja`, `no_belanja`, `tgl_belanja`, `id_produk`, `id_customer`, `jml_belanja`) VALUES
(4, 'EC-77906', '2022-09-26', 1, 1, 5),
(10, 'EC-42359', '2022-09-26', 1, 4, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id_checkout` int(11) NOT NULL,
  `no_referensi` varchar(25) NOT NULL,
  `tgl_checkout` date NOT NULL,
  `no_belanja` varchar(20) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `jml_belanja` double NOT NULL,
  `total` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`id_checkout`, `no_referensi`, `tgl_checkout`, `no_belanja`, `id_produk`, `id_customer`, `jml_belanja`, `total`, `status`, `foto`) VALUES
(1, '135088', '2022-09-26', 'EC-63722', 1, 1, 5, 75000, 'Sudah Dibayar', ''),
(2, '135088', '2022-09-26', 'EC-63004', 5, 1, 5, 50000, 'Sudah Dibayar', ''),
(3, '592925', '2022-09-26', 'EC-73751', 4, 1, 2, 50000, 'Belum Dibayar', ''),
(4, '979751', '2022-09-26', 'EC-33919', 2, 2, 20, 200000, 'Sudah Dibayar', ''),
(5, '121604', '2022-09-26', 'EC-6918', 5, 3, 50, 500000, 'Sudah Dibayar', ''),
(6, '121604', '2022-09-26', 'EC-15167', 6, 3, 20, 100000, 'Sudah Dibayar', ''),
(7, '61789', '2022-09-26', 'EC-295', 2, 4, 50, 500000, 'Belum Dibayar', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_customer` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `username`, `password`, `nm_customer`, `email`, `nohp`, `alamat`) VALUES
(1, 'emil', '0000', 'Emilia', 'emil_lia@gmail.com', '0890897643', 'Kuningan'),
(2, 'Budi1902', 'lklklkl', 'Budiyanto', 'budiyanto19@gmail.com', '087654321', 'Majalengka'),
(3, 'intan12', 'iiii', 'Intan', 'intan12@gmail.com', '0895432167567', 'Cirebon'),
(4, 'sarah02', 'ssss', 'sarah', 'sarah02@gmail.com', '0887654765', 'Cirebon'),
(5, 'jmal02', '020202', 'jamal', 'jamal02@gmail.com', '099807867583', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `ket`) VALUES
(1, 'Sayur', 'Kategori produk ini menampilkan produk - produk khusus Sayuran'),
(2, 'Buah', 'Kategori produk ini menampilkan produk - produk khusus Buah - Buahan'),
(3, 'Bahan Pokok', 'Kategori produk ini menampilkan produk - produk khusus Bahan Pokok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `kd_produk` varchar(20) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `ket` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `kd_produk`, `nm_produk`, `kategori`, `harga`, `stok`, `ket`, `gambar`) VALUES
(1, 'P001', 'Sayur Kol', '1', 15000, 500, 'Lorem Ipsum', 'product-42.png'),
(2, 'P002', 'Kentang', '1', 10000, 100, 'Lorem Ipsum', 'product-52.png'),
(3, 'P003', 'Wortel', '1', 20000, 200, 'Lorem Ipsum', 'product-7.png'),
(4, 'P004', 'Buah Jeruk', '2', 25000, 100, 'Lorem Ipsum', 'product-1.png'),
(5, 'P005', 'Beras', '3', 10000, 1000, 'Lorem Ipsum', 'blog-61.jpg'),
(6, 'P006', 'Daun Bawang', '1', 5000, 50, 'Lorem Ipsum', 'daun-bawang-800x800.jpg'),
(7, 'P007', 'Alpukat', '2', 20000, 100, 'Lorem Ipsum', 'product-62.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  ADD PRIMARY KEY (`id_belanja`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_belanja`
--
ALTER TABLE `tbl_belanja`
  MODIFY `id_belanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
