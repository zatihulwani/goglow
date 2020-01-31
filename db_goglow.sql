-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 02:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_goglow`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `nama_barang` varchar(300) NOT NULL,
  `harga` varchar(300) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `nama_barang`, `harga`, `gambar`) VALUES
(33, 'FREEMAN Cucumber + pink salt CLAY MASK (Rejuvenati', '120150', 'cm2.jpg'),
(34, 'Queen Helene Apricot Scrub Masker Wajah [170 g]', '105000', 'scrub3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `level` enum('admin','customer','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `nama`, `email`, `alamat`, `telp`, `level`) VALUES
(1, 'admingogloww', 'sasa1234', 'wani', 'lailinur78@gmail.com', 'jalan gejayan', '082277463154', 'admin'),
(2, 'sintajojo', 'sasa123', 'citra', 'lailinur78@gmail.com', 'yogya', '0873618367994', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Clay Mask'),
(2, 'Sheet Mask'),
(3, 'Gel Mask'),
(4, 'Scrub Mask'),
(5, 'Peel Off'),
(6, 'Powder Mask');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'FREEMAN Avocado + oatmeal CLAY MASK (Purifying)', 'FREEMAN Avocado + oatmeal CLAY MASK (Purifying) No', '120150', 'cm1.jpeg', 1),
(2, 'FREEMAN Cucumber + pink salt CLAY MASK (Rejuvenati', 'Cucumber + pink salt CLAY MASK Nourish and purify ', '120150', 'cm2.jpg', 1),
(3, 'FREEMAN Dead sea mineral CLAY MASK (Antri-stress)', 'Dead sea mineral CLAY MASK Nourish and purify with', '100000', 'cm3.jpg', 1),
(4, 'Innisfree Jeju Volcanic Color Clay Mask 70ml (Vita', 'Skin looks and feels squeaky clean and is soft to ', '130000', 'cmin1.jpg', 1),
(5, 'Innisfree Jeju Volcanic Color Clay Mask 70ml (Hydr', 'Innisfree Jeju Volcanic Color Clay Mask, Nourish a', '130000', 'cmin2.jpg', 1),
(6, 'Innisfree Jeju Volcanic Melting Clay Mask 100ml', 'Innisfree Jeju Volcanic Melting Clay Mask, Nutrien', '150000', 'cmin3.jpg', 1),
(7, 'Innisfree Sheet Mask (Coconut)', 'Nutrient-rich Vitamin E, Avocado and Oatmeal moist', '20000', 'sheetmask1.jpg', 2),
(8, 'Innisfree Sheet Mask (Cucumber)', 'Perfect for normal to combination skin.', '20000', 'sheetmask2.png', 2),
(9, 'Innisfree Sheet Mask (Greentea)', 'Innisfree Sheet Mask (Greentea) Skin looks and fee', '20000', 'sheetmask4.jpg', 2),
(10, 'Mask Egg White Peel Off Putih Telur Masker Wajah', 'Mask Egg White Peel Off Putih Telur Masker Wajah N', '28000', 'peeloff1.jpg', 5),
(11, 'Everwhite Cucumber & Aloe Vera Peel Off Mask Maske', 'Everwhite Cucumber & Aloe Vera Peel Off Mask  Skin', '110000', 'peeloff2.jpg', 5),
(12, 'EKE Peel Off Pack Pomegranate Masker Wajah', 'Perfect for normal to combination skin', '101500', 'peeloff3.jpg', 5),
(13, 'Momus Green Tea Gel Mask', 'Momus Green Tea Gel Mask nourish and purify with o', '192000', 'gelmask1.jpg', 3),
(14, 'Momus Charcoal Black Gel Mask', 'Momus Charcoal Black Gel Mask Skin looks and feels', '192000', 'gelmask2.jpg', 3),
(15, 'Momus Job\'s Tears Whitening Gel Mask', 'Momus Job\'s Tears Whitening Gel Mask, Skin looks a', '192000', 'gelmask3.jpg', 3),
(16, 'St. Ives 6 Fluid Ounce Nourished and Smooth Oatmea', 'St. Ives 6 Fluid Ounce Nourished and Smooth Oatmea', '115500', 'scrub1.jpg', 4),
(17, 'St. Ives Nourished Smooth Oatmeal Scrub & Mask [17', 'St. Ives Nourished  purify with one amazing mask! ', '85000', 'scrub2.jpg', 4),
(18, 'Queen Helene Apricot Scrub Masker Wajah [170 g]', 'Queen Helene Apricot, Skin looks and feels squeaky', '105000', 'scrub3.jpg', 4),
(19, 'Jordanie Peel Off Powder Mask Charcoal Masker Waja', 'Peel Off Powder Mask Charcoal, Perfect for normal ', '19000', 'powder1.jpg', 6),
(20, 'Jordanie Peel Off Powder Mask Chocolate Masker Waj', 'Peel Off Powder Mask Chocolate Jordanie, Perfect f', '19000', 'powder2.jpg', 6),
(21, 'OVALE Black Tea Face Powder Mask [15 g]', 'Black Tea Face Powder Mask. Skin looks and feels s', '7900', 'powder3.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
