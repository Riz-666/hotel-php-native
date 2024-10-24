-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 09:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `keterangan`, `image`) VALUES
(1, 'Billiard', 'Untuk hiburan bermain Billiard', 'fas1.jpg'),
(2, 'Cafe', 'Tempat Untuk Makan', NULL),
(3, 'Kolam Berenang', 'Untuk Hiburan ', 'fas2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `jumlah_kamar` int(3) NOT NULL,
  `fasilitas_kamar` text NOT NULL,
  `harga_sewa` float(15,2) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `tipe_kamar`, `jumlah_kamar`, `fasilitas_kamar`, `harga_sewa`, `image`) VALUES
(1, 'reguler', 5, 'Ac,Kulkas', 150000.00, 'kam1.jpg'),
(44, 'hotel', 1, 'AC', 90000.00, '622c55303b42b861081567.jpg'),
(47, 'qwqwd', 1312, '4weff', 1111.00, '622c589779a0f173833261.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `tgl_check_in` date DEFAULT NULL,
  `total_hari` int(2) DEFAULT NULL,
  `tgl_check_out` date DEFAULT NULL,
  `jumlah_kamar` int(2) DEFAULT NULL,
  `nama_pemesan` varchar(30) DEFAULT NULL,
  `nama_tamu` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `harga_sewa` float(15,2) DEFAULT NULL,
  `estimasi_biaya` float(17,2) DEFAULT NULL,
  `tgl_pemesanan` datetime DEFAULT current_timestamp(),
  `status` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`, `tgl_check_in`, `total_hari`, `tgl_check_out`, `jumlah_kamar`, `nama_pemesan`, `nama_tamu`, `email`, `no_hp`, `id_kamar`, `harga_sewa`, `estimasi_biaya`, `tgl_pemesanan`, `status`) VALUES
(6, '0000-00-00', NULL, '0000-00-00', 0, 'devanggarizki', 'Naraya', 'devanggarizki@gmail.com', '31231231', 1, NULL, NULL, '2022-03-04 15:09:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` enum('admin','receptionist') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'recep', 'recep', 'receptionist');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_pemesanan`
-- (See below for the actual view)
--
CREATE TABLE `v_detail_pemesanan` (
`id_pemesanan` int(11)
,`tgl_check_in` date
,`total_hari` int(2)
,`tgl_check_out` date
,`jumlah_kamar` int(2)
,`nama_pemesan` varchar(30)
,`nama_tamu` varchar(50)
,`email` varchar(60)
,`no_hp` varchar(15)
,`id_kamar` int(11)
,`tipe_kamar` varchar(50)
,`harga_sekarang` float(15,2)
,`harga_pemesanan` float(15,2)
,`estimasi_biaya` float(17,2)
,`tgl_pemesanan` datetime
,`status` int(2)
,`keterangan` varchar(9)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kamar`
-- (See below for the actual view)
--
CREATE TABLE `v_kamar` (
`id_kamar` int(11)
,`tipe_kamar` varchar(50)
,`jumlah_kamar` int(3)
,`fasilitas_kamar` text
,`harga_sewa` float(15,2)
,`image` varchar(30)
,`total_pemesanan` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure for view `v_detail_pemesanan`
--
DROP TABLE IF EXISTS `v_detail_pemesanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_pemesanan`  AS SELECT `t1`.`id_pemesanan` AS `id_pemesanan`, `t1`.`tgl_check_in` AS `tgl_check_in`, `t1`.`total_hari` AS `total_hari`, `t1`.`tgl_check_out` AS `tgl_check_out`, `t1`.`jumlah_kamar` AS `jumlah_kamar`, `t1`.`nama_pemesan` AS `nama_pemesan`, `t1`.`nama_tamu` AS `nama_tamu`, `t1`.`email` AS `email`, `t1`.`no_hp` AS `no_hp`, `t1`.`id_kamar` AS `id_kamar`, `t2`.`tipe_kamar` AS `tipe_kamar`, `t2`.`harga_sewa` AS `harga_sekarang`, `t1`.`harga_sewa` AS `harga_pemesanan`, `t1`.`estimasi_biaya` AS `estimasi_biaya`, `t1`.`tgl_pemesanan` AS `tgl_pemesanan`, `t1`.`status` AS `status`, CASE `t1`.`status` WHEN 1 THEN 'Booked' WHEN 2 THEN 'Check In' WHEN 3 THEN 'Check Out' WHEN 4 THEN 'Cancelled' END AS `keterangan` FROM (`tb_pemesanan` `t1` join `tb_kamar` `t2` on(`t1`.`id_kamar` = `t2`.`id_kamar`)) ORDER BY `t1`.`status` ASC, `t1`.`tgl_check_in` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_kamar`
--
DROP TABLE IF EXISTS `v_kamar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kamar`  AS SELECT `t1`.`id_kamar` AS `id_kamar`, `t1`.`tipe_kamar` AS `tipe_kamar`, `t1`.`jumlah_kamar` AS `jumlah_kamar`, `t1`.`fasilitas_kamar` AS `fasilitas_kamar`, `t1`.`harga_sewa` AS `harga_sewa`, `t1`.`image` AS `image`, count(`t2`.`id_pemesanan`) AS `total_pemesanan` FROM (`tb_kamar` `t1` left join `tb_pemesanan` `t2` on(`t1`.`id_kamar` = `t2`.`id_kamar` and `t2`.`status` <> 4)) GROUP BY `t1`.`id_kamar` ORDER BY `t1`.`id_kamar` DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD UNIQUE KEY `tipe_kamar` (`tipe_kamar`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
