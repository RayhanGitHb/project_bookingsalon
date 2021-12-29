-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `image`, `password`) VALUES
(1, 'Rayhan', 'rayhansmktkj3@gmail.com', 'default.jpg', '$2y$10$kalmirC5QBkktWh8a1tywe.mkszAjCh2maW2PwE7tirm3tj9Z/9Zy'),
(2, 'admin A', 'admin@admin.com', 'bsi.jpg', '$2y$10$kalmirC5QBkktWh8a1tywe.mkszAjCh2maW2PwE7tirm3tj9Z/9Zy');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jml_kategori` varchar(128) NOT NULL,
  `jml_biaya` varchar(128) NOT NULL,
  `bukti_pembayaran` varchar(128) NOT NULL,
  `konfirmasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `nama`, `no_hp`, `alamat`, `tgl_booking`, `jml_kategori`, `jml_biaya`, `bukti_pembayaran`, `konfirmasi`) VALUES
(19, 48, 'Rayhan', '089081234124', 'Tasikmalaya', '2021-12-07', '2', '105000', 'default_bukti.jpg', 0),
(20, 49, 'Rayhan Rayhan', '089081234124', 'Tasikmalaya', '2021-12-09', '1', '50000', 'default_bukti.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `email`, `no_hp`) VALUES
(7, 'Rayhan', 'Tasik', '2021-12-22', 'Tasik', 'Islam', 'ray@ray.com', '21321412');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `kategori`) VALUES
(78, 48, 'Creambath'),
(79, 48, 'Masking'),
(80, 49, 'Hair Styling'),
(81, 50, 'Creambath'),
(82, 50, 'Makeup'),
(83, 50, 'Pijatlulur'),
(84, 50, 'Pedicure'),
(85, 51, 'Creambath'),
(86, 51, 'Pedicure'),
(87, 51, 'Masking');

-- --------------------------------------------------------

--
-- Table structure for table `list_kategori`
--

CREATE TABLE `list_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_kategori`
--

INSERT INTO `list_kategori` (`id`, `kategori`, `harga`) VALUES
(1, 'Creambath', '50000'),
(2, 'Make over', '80000'),
(3, 'Pijat lulur', '100000'),
(4, 'Pedicure', '75000'),
(5, 'Hair Styling', '50000'),
(6, 'Face masking', '55000'),
(7, 'Waxing', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `alamat_user` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_order` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `no_hp`, `tgl_booking`, `tgl_order`) VALUES
(48, 'Rayhan', 'Tasikmalaya', '089081234124', '2021-12-09', '2021-12-09 00:00:00'),
(49, 'Rayhan Rayhan', 'Tasikmalaya', '089081234124', '2021-12-09', NULL),
(50, 'Arieq', 'Tasikmalaya', '089081234124', '2021-12-09', NULL),
(51, 'Roni Imam', 'Tasikmalaya', '082321312', '2021-12-16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `list_kategori`
--
ALTER TABLE `list_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `list_kategori`
--
ALTER TABLE `list_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
