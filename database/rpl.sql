-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `suratberitaacara`
--

CREATE TABLE `suratberitaacara` (
  `idsuratberitaacara` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judul` text NOT NULL,
  `namamitra` text NOT NULL,
  `namaperwakilanmitra` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tempattanggal` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` text NOT NULL,
  `ttd` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suratizinkegiatan`
--

CREATE TABLE `suratizinkegiatan` (
  `idsuratizinkegiatan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judulkegiatan` text NOT NULL,
  `penyelenggarakegiatan` text NOT NULL,
  `alasanizin` text NOT NULL,
  `tanggal` text NOT NULL,
  `tanggalmulai` date NOT NULL,
  `tanggalselesai` date NOT NULL,
  `status` text NOT NULL,
  `ttd` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suratkerjapraktek`
--

CREATE TABLE `suratkerjapraktek` (
  `idsuratkerjapraktek` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tujuansurat` text NOT NULL,
  `namamitra` text NOT NULL,
  `alamatmitra` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `nim1` text NOT NULL,
  `nama1` text NOT NULL,
  `nim2` text NOT NULL,
  `nama2` text NOT NULL,
  `nim3` text NOT NULL,
  `nama3` text NOT NULL,
  `nim4` text NOT NULL,
  `nama4` text NOT NULL,
  `status` text NOT NULL,
  `ttd` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suratpengumuman`
--

CREATE TABLE `suratpengumuman` (
  `idsuratpengumuman` int(11) NOT NULL,
  `iduser` text NOT NULL,
  `judulpengumuman` text NOT NULL,
  `isipengumuman` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` text NOT NULL,
  `ttd` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suratupload`
--

CREATE TABLE `suratupload` (
  `idsuratupload` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nim` text DEFAULT NULL,
  `nik` text NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` enum('Pria','Wanita') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `notlp` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `nim`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `notlp`, `level`) VALUES
(15, 'admin@gmail.com', '$2y$10$cBQR1nZ8R6UBKIIc1ACseu1ZAGjXrGE.OCOWBa3zBY5rq5p7UCfvu', 'admin', 'admin', 'Administrator', 'Palembang', '2000-01-01', 'Pria', 'Islam', 'Jl. Nungcik', 'Admin', '08988387271', 'admin'),
(18, 'taufikgoodman@gmail.com', '$2y$10$/KDa3D6ZIsZjn68EXTsDaO04p86qe0jvGXUhujQvKoQQQR/emtHGK', '123', '123', 'Taufik', 'Palembang', '2021-11-22', 'Pria', 'Islam', 'Jl. Pasundan', 'PNS', '08988387271', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suratberitaacara`
--
ALTER TABLE `suratberitaacara`
  ADD PRIMARY KEY (`idsuratberitaacara`);

--
-- Indexes for table `suratizinkegiatan`
--
ALTER TABLE `suratizinkegiatan`
  ADD PRIMARY KEY (`idsuratizinkegiatan`);

--
-- Indexes for table `suratkerjapraktek`
--
ALTER TABLE `suratkerjapraktek`
  ADD PRIMARY KEY (`idsuratkerjapraktek`);

--
-- Indexes for table `suratpengumuman`
--
ALTER TABLE `suratpengumuman`
  ADD PRIMARY KEY (`idsuratpengumuman`);

--
-- Indexes for table `suratupload`
--
ALTER TABLE `suratupload`
  ADD PRIMARY KEY (`idsuratupload`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suratberitaacara`
--
ALTER TABLE `suratberitaacara`
  MODIFY `idsuratberitaacara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratizinkegiatan`
--
ALTER TABLE `suratizinkegiatan`
  MODIFY `idsuratizinkegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratkerjapraktek`
--
ALTER TABLE `suratkerjapraktek`
  MODIFY `idsuratkerjapraktek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratpengumuman`
--
ALTER TABLE `suratpengumuman`
  MODIFY `idsuratpengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratupload`
--
ALTER TABLE `suratupload`
  MODIFY `idsuratupload` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
