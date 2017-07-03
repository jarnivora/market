-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2017 at 12:43 PM
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
(15, 'Mask', 'This is mask'),
(16, 'Regulator', 'This is regulator '),
(17, 'Bouyancy Compesation Device', 'This is bouyancy compesation device'),
(18, 'Wetsuit & Drysuit', 'This is wetsuit & drysuit'),
(19, 'Weight Belt', 'This is weight belt'),
(20, 'Fins', 'This is fins'),
(21, 'Tank', 'This is tank'),
(22, 'Gauges', 'This is gauges'),
(23, 'Dive Computer', 'This is dive computer'),
(24, 'Torch', 'This is torch');

-- --------------------------------------------------------

--
-- Table structure for table `shop_media`
--

CREATE TABLE `shop_media` (
  `id_media` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_media`
--

INSERT INTO `shop_media` (`id_media`, `id_produk`, `path`, `gambar_produk`) VALUES
(1, 1, 'foto_produk/', '1.jpg'),
(2, 1, 'foto_produk/', '2.jpg'),
(3, 1, 'foto_produk/', '3.jpg'),
(4, 2, 'foto_produk/', '11.jpg'),
(5, 3, 'foto_produk/', '4.jpg'),
(6, 4, 'foto_produk/', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop_merk`
--

CREATE TABLE `shop_merk` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_merk`
--

INSERT INTO `shop_merk` (`id_merk`, `nama_merk`) VALUES
(1, 'Adidas'),
(2, 'Puma'),
(3, 'Nike');

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
  `desk_produk` text NOT NULL,
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

INSERT INTO `shop_produk` (`id_produk`, `id_supplier`, `id_kategori`, `id_merk`, `nama_produk`, `desk_produk`, `hrgjual_produk`, `hrgbeli_produk`, `tglmsk_produk`, `diskon_produk`, `size_produk`, `berat_produk`, `jumlah_stok`, `pajak`) VALUES
(1, 2, 18, 1, 'Bare Ct200 Polarwear Extreme', 'CT200 Polarwear Extreme\r\n\r\nThis underwear uses compressed Thinsulate that offers less bulk, but still extremely effective insulation for everything but the coldest dives. \r\n\r\nMaterial:\r\n\r\n• Super soft Rip Stop nylon exterior with B200 THINSULATE (6.2oz/yd2 / 210g/m2) insulated interior\r\n\r\n\r\nEntry:\r\n\r\n• Extra long front zipper (`2-way` convenience for men and rear “drop seat” zipper for women)\r\n\r\n\r\nInnovation: \r\n\r\n• HYDROSTRETCH panels for ease of movement\r\n• LUMBARE-X-TENDER panel in lower back.', 900000, 850000, '2017-07-02 23:41:18', 10, 'L', 1, 10, 90000),
(2, 2, 18, 2, 'Bare SB System Base Layer Top', 'This base layer is made from an advanced stretch breathable fabric that draws moisture away from the body creating a dry zone next-to-skin barrier. It then disperses the moisture over a larger surface allowing it to evaporate quickly.\r\n\r\nMaterial: Stretch breathable fabric made from a blend of polyester/polypropylene/spandex. Includes Polartec Power Dry® technology and is anti-microbial.\r\n\r\nInnovation: Two layer fabric draws moisture away from the body creating a dry zone next-to-skin barrier and then disperses the moisture over a large surface allowing it to evaporate quickly.\r\n\r\nDo you like Bare SB System Base Layer Top? Enter in our dive section and discover a big variety of Suits products and accessories that can help you realize your leisure activities. We verify that the dive products are in a perfect condition. Do not look any further! Our collection of Suits are available in different colours and styles.', 600000, 560000, '2017-07-02 23:45:17', 10, 'M', 1, 12, 60000),
(3, 2, 15, 1, 'Best Divers Neoprene Mask Band Double Layer', 'Neoprene Mask Strap', 120000, 95000, '2017-07-02 23:48:31', 10, 'M', 1, 12, 12000),
(4, 2, 20, 3, 'Cressi Pro Star', 'This is a futuristic fin, deriving from the Cressi deep sea skin-diving models, which introduces the use of more reactive materials also in the full foot fin sector of normal length.\r\n\r\nIn fact, the blade is not made from copolymer but from exceptionally light and reactive polypropylene.\r\n\r\nThis material is combined with a comfortable thermo-rubber (elastomer), used for the foot, for the side stringers and for various inserts.\r\n\r\nThe blade originates from the upper part of the foot pocket, with a 20% increase in useful surface area compared to a traditional fin of the same length.', 450000, 410000, '2017-07-02 23:51:37', 10, 'M', 1, 12, 45000);

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
-- Table structure for table `shop_spek`
--

CREATE TABLE `shop_spek` (
  `id_spek` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_spek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_spek`
--

INSERT INTO `shop_spek` (`id_spek`, `id_produk`, `nama_spek`) VALUES
(1, 1, 'Ribbed knit cuffs & collar for secure comfort and fit'),
(2, 1, 'Hand warmer pockets'),
(3, 1, 'Foot stirrups and thumb loops for donning ease'),
(4, 1, 'Grommets positioned for air exhaust and moisture venting'),
(5, 2, 'Form-fitting base layer includes moisture management technology that acts as the first stage in moisture movement away from the skin'),
(6, 2, 'Incorporates quick drying characteristics for rapid evaporation, keeping you dry and comfortable'),
(7, 3, 'Universal strap'),
(8, 3, 'Without velcro - saves your hair.'),
(9, 4, 'The side stringers extend for a good way along the blade, continuing in a protective seal around the whole edge of the blade.'),
(10, 4, 'Two stabilising flaps on the end of the blade, on the sole of the foot, guarantee excellent direction of the fin during kicking.'),
(11, 4, 'The excellent, highly anatomic, computer-designed foot, guarantees optimum transmission of leg-fin thrust.');

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
-- Indexes for table `shop_media`
--
ALTER TABLE `shop_media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `shop_merk`
--
ALTER TABLE `shop_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `shop_produk`
--
ALTER TABLE `shop_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `shop_spek`
--
ALTER TABLE `shop_spek`
  ADD PRIMARY KEY (`id_spek`);

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
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `shop_media`
--
ALTER TABLE `shop_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shop_merk`
--
ALTER TABLE `shop_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shop_produk`
--
ALTER TABLE `shop_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shop_spek`
--
ALTER TABLE `shop_spek`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `shop_supplier`
--
ALTER TABLE `shop_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
