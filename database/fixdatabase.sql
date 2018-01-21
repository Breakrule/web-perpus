-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 07:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(70) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `jumlah` int(10) NOT NULL,
  `b_pdf` longtext NOT NULL,
  `path_gambar` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `b_subcat`, `penulis`, `penerbit`, `deskripsi`, `jumlah`, `b_pdf`, `path_gambar`) VALUES
(1,'Membuat Web Dengan PHP 7 dan Database PDO MYSQLi', '3', 'Rahman CS', 'Gramedia', 'Pengetahuan pemprograman php7, pembuatan database dan table dengan heidiSQL dan studi kasus pembuatan blog serta toko online menggunakan PHP dan Bootstrap', 1, 'upload_pdf/1.txt','upload_image/1.jpg'),
(2,'Algoritma & Pemrograman dalam bahasa pascal dan C', '3', 'Rinaldi Munir', 'Informatika', 'Penjelasan pemprograman dan algoritma bahasa c dan pascal serta dilengkapi dengan study kasus', 2, 'upload_pdf/2.txt', 'upload_image/2.jpg'),
(3,'Kreasi photoshop CS3', '5', 'Ebhie Febrian', 'Cerdas Komputer', 'Tutorial editting menggunakan photoshop cs 3 untuk pemula dan terdapat beberapa contoh hasil editan', 3, 'upload_pdf/3.txt', 'upload_image/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kat_id` int(4) NOT NULL AUTO_INCREMENT,
  `kat_nm` varchar(30) NOT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kat_id`, `kat_nm`) VALUES
(1, 'aksi'),
(2, 'romantis'),
(3, 'programming'),
(4, 'drama'),
(5, 'umum');

-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subkat` (
  `subkat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subkat_nm` varchar(35) NOT NULL,
  PRIMARY KEY (`subkat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT 6;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subkat` (`subkat_id`, `parent_id`, `subkat_nm`) VALUES
(1, 1, 'aksi'),
(2, 2, 'romantis'),
(3, 3, 'programming'),
(4, 4, 'drama'),
(5, 5, 'umum');

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(10) DEFAULT NULL,
  `id_pengguna` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(5) NOT NULL,
  `id_buku` int(10) DEFAULT NULL,
  `id_pengguna` int(5) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_buku`, `id_pengguna`, `tanggal`, `isi`) VALUES
(1, 1, 1, '2018-01-21', 'sangat membantu'),
(2, 2, 2, '2018-01-21', 'cukup menarik'),
(3, 3, 2, '2018-01-21', 'keren juga');

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(5) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL,
  `kata_kunci` text NOT NULL,
  `peran` varchar(150) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `kata_kunci`, `peran`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member');

--
-- Indexes for dumped tables
--
--
-- AUTO_INCREMENT for dumped tables
--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `nama_pengguna` (`nama_pengguna`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
