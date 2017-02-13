-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2016 pada 04.43
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemprasarana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `no` int(10) NOT NULL,
  `kd_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(10) NOT NULL,
  `jml_barang` int(4) NOT NULL,
  `deskripsi` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`no`, `kd_barang`, `nama_barang`, `jml_barang`, `deskripsi`) VALUES
(27, 'P001', 'Proyekor', 10, 'Pembesar Layar'),
(28, 'p003', 'Speaker', 5, 'Pembesar SUara'),
(29, 'p004', 'Kabel VGA', 100, 'Kable Proyektor dan tampilan'),
(30, 'p005', 'meja', 1000, 'buat naro barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meminjam`
--

CREATE TABLE `meminjam` (
  `no` int(10) NOT NULL,
  `kd_barang` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` text NOT NULL,
  `jumlah_dipinjam` int(5) NOT NULL,
  `tgl_pinjam` varchar(20) NOT NULL,
  `keterangan` enum('sudah kembali','belum kembali','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meminjam`
--

INSERT INTO `meminjam` (`no`, `kd_barang`, `nama`, `kelas`, `jumlah_dipinjam`, `tgl_pinjam`, `keterangan`) VALUES
(11, 'P001 | Proyekor', 'fajar', 'XI AK 5', 2, '24 November, 2016', 'belum kembali'),
(12, 'P001 | Proyekor', 'babeh', 'XI RPL 5', 3, '23 November, 2016', 'belum kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeluser`
--

CREATE TABLE `tabeluser` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabeluser`
--

INSERT INTO `tabeluser` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
