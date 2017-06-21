-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2017 at 08:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `possi_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_cart`
--

CREATE TABLE `shop_cart` (
  `id_cart` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qnty_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_kategori`
--

CREATE TABLE `shop_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_kategori`
--

INSERT INTO `shop_kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
(12, 'Aksesoris', 'Deskripsi aksesoris'),
(13, 'Sepatu', 'Deskripsi sepatu'),
(14, 'Pakaian', 'Deskripsi pakaian');

-- --------------------------------------------------------

--
-- Table structure for table `shop_media`
--

CREATE TABLE `shop_media` (
  `id_media` int(11) NOT NULL,
  `url_img` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_merk`
--

CREATE TABLE `shop_merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_produk`
--

CREATE TABLE `shop_produk` (
  `id_produk` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `desk_produk` text NOT NULL,
  `spek_produk` text NOT NULL,
  `hrgjual_produk` bigint(20) NOT NULL,
  `hrgbeli_produk` bigint(20) NOT NULL,
  `tglmsk_produk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `diskon_produk` int(11) NOT NULL,
  `size_produk` varchar(50) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `jumlah_stok` bigint(20) NOT NULL,
  `pajak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_produk`
--

INSERT INTO `shop_produk` (`id_produk`, `id_supplier`, `id_kategori`, `id_merk`, `nama_produk`, `gambar_produk`, `path`, `desk_produk`, `spek_produk`, `hrgjual_produk`, `hrgbeli_produk`, `tglmsk_produk`, `diskon_produk`, `size_produk`, `berat_produk`, `jumlah_stok`, `pajak`) VALUES
(1, 2, 13, 0, 'Adidas Buzenits Original', '424565-1680x10504.jpg', 'foto_produk/', 'Bahan leather, gumsol', 'Hanya tersedia warna hitam', 2100000, 2100000, '2017-06-21 17:46:54', 10, '43', 1, 10, 210000);

-- --------------------------------------------------------

--
-- Table structure for table `shop_shipping`
--

CREATE TABLE `shop_shipping` (
  `id_shipping` int(11) NOT NULL,
  `harga_shipping` bigint(20) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_supplier`
--

CREATE TABLE `shop_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `nama_penanggungjawab` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_supplier`
--

INSERT INTO `shop_supplier` (`id_supplier`, `nama_supplier`, `no_hp`, `nama_penanggungjawab`, `alamat`) VALUES
(2, 'Technoline Bandung', '859', 'braw', 'sindanglaya'),
(3, 'Technoline Jakarta', '859', 'youmanz', 'sindanglaya'),
(4, 'Technoline Zimbabwe', '858', 'crew', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `shop_transaksi`
--

CREATE TABLE `shop_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_shipping` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_invoice` varchar(255) DEFAULT NULL,
  `hrgtotal_pemesanan` bigint(20) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `payment_methode` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `tgl_transfer` date DEFAULT NULL,
  `total_transfer` bigint(20) DEFAULT NULL,
  `bank_tujuan` varchar(100) DEFAULT NULL,
  `verifikasi` tinyint(1) DEFAULT NULL,
  `payment_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_wishlist`
--

CREATE TABLE `shop_wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qnty_produk` int(11) NOT NULL,
  `subtotal_wishlist` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_kategori`
--
ALTER TABLE `shop_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `shop_produk`
--
ALTER TABLE `shop_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `shop_supplier`
--
ALTER TABLE `shop_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop_kategori`
--
ALTER TABLE `shop_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `shop_produk`
--
ALTER TABLE `shop_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_supplier`
--
ALTER TABLE `shop_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
