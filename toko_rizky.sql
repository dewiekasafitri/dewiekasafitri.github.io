-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 04:45 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_rizky`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `inc` int(9) NOT NULL,
  `beli_id` varchar(9) NOT NULL,
  `no_fak` varchar(14) NOT NULL,
  `tgl_trans` varchar(10) NOT NULL,
  `supplier_nama` varchar(90) NOT NULL,
  `biaya_kirim` double(20,0) NOT NULL,
  `total` double(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`inc`, `beli_id`, `no_fak`, `tgl_trans`, `supplier_nama`, `biaya_kirim`, `total`) VALUES
(0, 'BM-8', 'FAK-8', '2020-11-02', 'SGR', 10000, 30000),
(1, 'BM-1', 'FAK-1', '11/04/2012', 'PT INDOPRIMA UTAMA MANDIRI', 100000, 4584000),
(2, 'BM-2', 'FAK-2', '11/04/2012', 'PT RAJASRI SEJAHTERA', 110000, 4670000),
(3, 'BM-3', 'FAK-3', '11/04/2012', 'SEGAR', 109000, 4680000),
(4, 'BM-4', 'FAK-4', '12/04/2012', 'UD DEWATA SURYA UTAMA', 100000, 2940000),
(5, 'BM-5', 'FAK-5', '15/04/2012', 'SEGAR', 100000, 630000),
(6, 'BM-6', 'FAK-6', '23/04/2012', 'SEGAR', 170000, 1941000),
(7, 'BM-7', 'FAK-7', '24/04/2012', 'UD PRIORITAS 1', 100000, 1503000);

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_hutang` date NOT NULL,
  `alasan` text NOT NULL,
  `penghutang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `jumlah`, `tgl_hutang`, `alasan`, `penghutang`) VALUES
(2, 1000000, '2019-10-17', 'Pinjam', 'riza'),
(4, 100000, '2019-10-18', 'tunggu gajian', 'lufias'),
(5, 0, '2019-10-19', '', ''),
(6, 0, '2019-10-20', '', ''),
(7, 200000, '2019-10-21', 'sakit', 'saiful'),
(8, 30000, '2019-10-22', 'berobat', 'saiful riza'),
(9, 0, '2019-10-23', '', ''),
(10, 20000, '2019-10-24', 'beli domain', 'yusril'),
(11, 120000, '2019-10-25', 'arifinal', 'untuk beli hosting'),
(12, 2500000, '2019-10-26', 'azir', 'untuk beli hosting'),
(13, 70000, '2019-10-25', 'Riza', 'Mau jalan jalan'),
(14, 50000, '0000-00-00', 'Riza', 'Beli rokok'),
(15, 40000, '2019-10-27', 'Riza', 'Uang Bensi'),
(16, 80000, '2019-10-28', 'Riza', 'Mau Nikahan'),
(17, 1000000, '2019-10-29', 'Riza', 'Biaya lahiran anak');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `nopenjualan` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tglpenjualan` date NOT NULL,
  `id_produk` int(11) NOT NULL,
  `itemterjual` int(11) NOT NULL,
  `total_penjualan` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `piutang` int(11) NOT NULL,
  `keterangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nopenjualan`, `tglpenjualan`, `id_produk`, `itemterjual`, `total_penjualan`, `jumlah_bayar`, `piutang`, `keterangan`) VALUES
('PJLN2020100001', '2020-10-19', 16, 2, 8000, 3000, 0, '-'),
('PJLN2020100002', '2020-10-19', 25, 2, 2000, 2000, 0, '-'),
('PJLN2020100003', '2020-10-19', 49, 1, 2000, 2000, -2000, '-'),
('PJLN2020100004', '2020-10-06', 43, 1, 1000, 1000, -1000, '-'),
('PJLN2020100005', '2020-10-06', 43, 1, 1000, 1000, 0, '-'),
('PJLN2020100006', '2020-10-20', 53, 5, 5000, 2000, 3000, '-'),
('PJLN2020100007', '2020-10-21', 58, 2, 2000, 10000, -8000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stokproduk` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stokproduk`, `satuan`, `supplier`, `tglmasuk`) VALUES
(16, 'Tim Tam', 4000, 2, 'buah', 'PT. SURGA', '2020-02-13'),
(17, 'Tic Tac', 4000, 16, 'buah', 'UD. MAKMUR', '2020-06-16'),
(18, 'Nabati Coklat', 2000, 7, 'buah', 'pt surga', '2020-06-12'),
(23, 'Roti Tawar', 10000, 8, 'buah', 'pt surga', '2020-06-16'),
(25, 'Sosis Sonice', 1000, 8, 'buah', 'UD. Makmur', '2020-06-16'),
(27, 'Kacang Sukro', 2000, 2, 'buah', 'pt surga', '2020-10-06'),
(29, 'Aqua', 3000, 10, 'botol', 'pt surga', '2020-10-06'),
(32, 'Teh Gelas', 1000, 10, 'gelas', 'pt surga', '2020-11-02'),
(34, 'Kacang Garuda', 3000, 11, 'buah', 'UD. Makmur', '2020-10-06'),
(35, ' Mie Sedap', 1000, 10, 'gelas', 'pt surga', '2020-10-06'),
(38, 'Banana', 4000, 10, 'buah', 'pt surga', '2020-10-06'),
(39, 'Sarimi ', 3000, 13, 'biji', 'UD. Makmur', '2020-10-07'),
(40, 'simi simi', 1000, 11, 'buah', 'UD. Makmur', '2020-10-07'),
(41, 'soto kuah', 2000, 12, 'buah', 'UD. Makmur', '2020-10-07'),
(42, 'rendang', 3000, 23, 'buah', '', '2020-10-14'),
(43, 'yupi', 1000, 5, 'biji', '', '2020-10-06'),
(44, 'Nano Nano', 1000, 10, 'biji', 'UD. Makmur', '2020-04-08'),
(45, 'Mie Duo', 3000, 12, 'buah', 'UD. Makmur', '2020-10-01'),
(46, 'coki coki', 1000, 0, 'buah', 'UD.Makmur jaya', '2020-10-06'),
(47, 'Mari Kelapa', 5000, 8, 'buah', '', '2020-04-08'),
(48, 'Kelapa', 5000, 10, 'buah', '', '2020-10-28'),
(49, 'kkk', 2000, 3, 'buah', 'UD. Makmur', '2020-04-08'),
(51, 'yy', 2000, 23, 'buah', 'SGR', '2020-10-14'),
(52, 'gg', 1000, 11, 'buah', '', '2020-10-27'),
(53, 'qq', 1000, 7, 'buah', 'DWT', '2020-10-14'),
(54, 'ades', 3000, 8, 'botol', 'DWT', '2020-11-02'),
(56, 'Teh Pucuk', 3000, 11, 'botol', 'DWT', '2020-04-08'),
(58, 'Bakso', 1000, 9, 'buah', 'SGR', '2020-10-27'),
(59, 'BM-7', 0, 2020, '', '10000', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `inc` int(9) NOT NULL,
  `supplier_id` varchar(9) NOT NULL,
  `supplier_nama` varchar(90) NOT NULL,
  `supplier_alamat` varchar(90) NOT NULL,
  `supplier_kota` varchar(50) NOT NULL,
  `supplier_email` varchar(90) NOT NULL,
  `supplier_kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`inc`, `supplier_id`, `supplier_nama`, `supplier_alamat`, `supplier_kota`, `supplier_email`, `supplier_kontak`) VALUES
(1, 'SPLR0005', 'UD. BERKAH', 'Pandaan', 'Pandaan', 'dewi@gmail.com', '09988'),
(2, 'DWT', 'UD DEWATA SURYA UTAMA', 'BATU MALANG', 'Malang', 'dewata_surya_utama@yahoo.com', '085123456'),
(3, 'USMAN', 'UD PRIORITAS 1 ', 'jakarta', 'Jakarta', 'prioritas_@yahoo.com', '087128393'),
(4, 'SGR', 'SEGAR', 'ANYARSARI', 'DENPASAR', 'segar_buah@gmail.com', '036122157'),
(5, 'RJS', 'PT RAJASRI SEJAHTERA', 'JL TANAH MERDEKA PSR REBO ', 'JAKARTA', 'rajasri@yahoo.com', '087987653'),
(7, 'SPLR0007', 'UD. MAKMUR', 'Pandaan', 'Pandaan', 'dewi@gmail.com', '88887'),
(8, 'SPLR0007', 'Brendo', 'Pandaan', 'Pandaan', 'dewi@gmail.com', '09765326');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'Aziz', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0x61646d696e),
(7, 'mustika', 'mustika', 'f872533a62f1a23afa0291337401561f', 0x75736572),
(111112, 'vita', 'vita', '1116d70f3af1555dd95b361a7619eb1b', 0x61646d696e),
(111113, 'dewi', 'dewi', 'dewi', 0x61646d696e);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`inc`),
  ADD KEY `beli_id` (`beli_id`),
  ADD KEY `supplier_id` (`supplier_nama`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`nopenjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`inc`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `inc` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
