-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 01:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `legalisir_surat`
--

CREATE TABLE `legalisir_surat` (
  `id_legalisir` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_induk` int(50) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `file_surat` varchar(150) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `legalisir_surat`
--

INSERT INTO `legalisir_surat` (`id_legalisir`, `nama`, `nomor_induk`, `kelas`, `tujuan`, `file_surat`, `tgl_entry`) VALUES
(4, 'Rizki', 123456, 'IX', 'Pindah sekolah', 'Doc14.docx', '2021-12-15 17:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `pelacakan_surat`
--

CREATE TABLE `pelacakan_surat` (
  `id_pelacakan` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `status_pengguna` varchar(50) NOT NULL,
  `keterangan` time NOT NULL,
  `tgl_pelacakan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_surat` varchar(50) NOT NULL,
  `status_pengguna` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_induk` int(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kelas` varchar(13) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id_pengajuan`, `kode_surat`, `status_pengguna`, `nama`, `nomor_induk`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `kelas`, `kategori`, `tgl_entry`) VALUES
(1, 'SP001', 'SISWA', 'SLAMET', 123456, 'PEKANBARU', '2001-12-31', 'Laki-Laki', 'Jl. Buluh Cina No.13 A', '1112112', 'slamet13@gmail.com', 'IX', '', '2021-12-15 04:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `tgl_surat` varchar(28) NOT NULL,
  `perihal` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal_surat` varchar(50) NOT NULL,
  `kategori_surat` varchar(50) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level`, `tgl_entry`) VALUES
(1, 'rizki', 'siswa', '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'SISWA', '2021-12-15 11:14:18'),
(2, 'Aseng', 'kepala sekolah', 'b662544d3fc7d4933a6d7bc935a6149275cf55f6', 'KEPALA SEKOLAH', '2021-12-15 12:09:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `legalisir_surat`
--
ALTER TABLE `legalisir_surat`
  ADD PRIMARY KEY (`id_legalisir`);

--
-- Indexes for table `pelacakan_surat`
--
ALTER TABLE `pelacakan_surat`
  ADD PRIMARY KEY (`id_pelacakan`),
  ADD KEY `id_legalisir` (`id_pengajuan`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `legalisir_surat`
--
ALTER TABLE `legalisir_surat`
  MODIFY `id_legalisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelacakan_surat`
--
ALTER TABLE `pelacakan_surat`
  MODIFY `id_pelacakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelacakan_surat`
--
ALTER TABLE `pelacakan_surat`
  ADD CONSTRAINT `pelacakan_surat_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `legalisir_surat` (`id_legalisir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
