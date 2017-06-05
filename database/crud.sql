-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2017 pada 06.32
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_buku`
--

CREATE TABLE `table_buku` (
  `kode_buku` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `penulis` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_buku`
--

INSERT INTO `table_buku` (`kode_buku`, `judul`, `penulis`, `penerbit`, `harga`) VALUES
(33, 'One Piece', 'Eichiiro Oda', 'Elex Media Komputindo', 20000),
(11, 'Komik Naruto', 'Masashi Kishimotoooooo', 'Elex Media', 20000),
(12, 'Algoritma', 'Husni', 'Jogja Press', 45000),
(45, 'Dasar Pemrograman Web', 'Mubaraq', 'Sulawesi Press', 80000),
(34, 'CodeIgniter Lanjut', 'Doflamingo', 'Mercu Press', 85000),
(35, 'Menggapai Mimpi', 'Sumanto', 'Jakarta Press', 90000),
(13, 'Kali Linux 200%', 'Susanto', 'Jasakom', 85000),
(36, 'Membangun Web Dengan PHP', 'Manusia', 'Best Press', 70000),
(111, 'Pemrograman java', 'Husni', 'informatika', 50000),
(6, 'rtrtr', 'gsgsdfs', 'dfsd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_buku`
--
ALTER TABLE `table_buku`
  ADD PRIMARY KEY (`kode_buku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
