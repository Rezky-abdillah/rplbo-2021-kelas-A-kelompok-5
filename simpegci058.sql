-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 05:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpegci058`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_hukuman058`
--

CREATE TABLE `tbl_data_hukuman058` (
  `id_hukuman058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `id_master_hukuman058` int(11) NOT NULL,
  `uraian058` varchar(100) NOT NULL,
  `no_sk058` varchar(100) NOT NULL,
  `tanggal_sk058` date NOT NULL,
  `tanggal_mulai058` date NOT NULL,
  `tanggal_selesai058` date NOT NULL,
  `masa_berlaku058` varchar(10) NOT NULL,
  `pejabat_menetapkan058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_keluarga058`
--

CREATE TABLE `tbl_data_keluarga058` (
  `id_data_keluarga058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `nama_anggota_keluarga058` int(100) NOT NULL,
  `tempat_lahir058` int(100) NOT NULL,
  `tanggal_lahir058` date NOT NULL,
  `agama058` varchar(100) NOT NULL,
  `id_pendidikan058` int(11) NOT NULL,
  `status_keluarga058` varchar(100) NOT NULL,
  `status_pernikahan058` varchar(100) NOT NULL,
  `pekerjaan058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pegawai058`
--

CREATE TABLE `tbl_data_pegawai058` (
  `id_pegawai058` int(11) NOT NULL,
  `nik058` int(30) NOT NULL,
  `nama058` varchar(50) NOT NULL,
  `t_lahir058` varchar(30) NOT NULL,
  `tgl_lahir058` date NOT NULL,
  `j_kelamin058` varchar(30) NOT NULL,
  `status058` varchar(50) NOT NULL,
  `tgl_pengangkatan058` date NOT NULL,
  `alamat058` text NOT NULL,
  `no_npwp058` varchar(20) NOT NULL,
  `agama058` varchar(30) NOT NULL,
  `no_telpn058` varchar(15) NOT NULL,
  `tgl_mulai_kerja058` date NOT NULL,
  `photo058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_pegawai058`
--

INSERT INTO `tbl_data_pegawai058` (`id_pegawai058`, `nik058`, `nama058`, `t_lahir058`, `tgl_lahir058`, `j_kelamin058`, `status058`, `tgl_pengangkatan058`, `alamat058`, `no_npwp058`, `agama058`, `no_telpn058`, `tgl_mulai_kerja058`, `photo058`, `tanggal_entry058`) VALUES
(1, 2147483647, 'PRASETYO1', 'Pekanbaru1', '2021-09-25', 'Perempuan', 'Belum Aktif', '2021-09-25', 'asdas1', '21312321311', 'Islam', '1231231212311', '2021-09-25', 'FB_IMG_16232269798896.jpg', '2021-09-20 12:43:50'),
(2, 12313, 'weqasda', 'Pekanbaru', '2021-09-04', 'Perempuan', 'Belum Aktif', '2021-09-08', 'asdad', '41241231', 'Kristen', '123121231231', '2021-09-01', '55d5c018a034e6d53076c79c7d3defe8.jpg', '2021-09-20 12:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pelatihan058`
--

CREATE TABLE `tbl_data_pelatihan058` (
  `id_data_pelatihan058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `uraian058` text NOT NULL,
  `lokasi058` varchar(100) NOT NULL,
  `tanggal_pelatihan058` date NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_penghargaan058`
--

CREATE TABLE `tbl_data_penghargaan058` (
  `id_data_penghargaan058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `id_master_penghargaan058` int(11) NOT NULL,
  `uraian058` text NOT NULL,
  `no_sk058` varchar(20) NOT NULL,
  `tanggal_sk058` date NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_seminar058`
--

CREATE TABLE `tbl_data_seminar058` (
  `id_data_seminar058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `uraian058` text NOT NULL,
  `lokasi058` varchar(100) NOT NULL,
  `tanggal_seminar058` date NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_golongan058`
--

CREATE TABLE `tbl_master_golongan058` (
  `id_master_golongan058` int(11) NOT NULL,
  `golongan058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_golongan058`
--

INSERT INTO `tbl_master_golongan058` (`id_master_golongan058`, `golongan058`, `uraian058`, `tanggal_entry058`) VALUES
(1, 'I', 'Golongan Jabatan', '2021-09-06 06:59:35'),
(2, 'II', 'Golongan Jabatan', '2021-09-06 07:00:06'),
(3, 'IIIi', 'Golongan Jabatani', '2021-09-07 10:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_hukuman058`
--

CREATE TABLE `tbl_master_hukuman058` (
  `id_master_hukuman058` int(11) NOT NULL,
  `nama_hukuman058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_hukuman058`
--

INSERT INTO `tbl_master_hukuman058` (`id_master_hukuman058`, `nama_hukuman058`, `uraian058`, `tanggal_entry058`) VALUES
(1, 'Terlambat', 'Jika karyawan terlambat maka akan di beri sanksi', '2021-09-06 16:38:03'),
(2, 'korupsi', 'dikeluarin dari perusahaan', '2021-09-06 16:38:03'),
(3, 'fsfsadfsdfs', 'fsdafasdfasdf', '2021-09-07 10:47:16'),
(4, 'dasda', 'asda', '2021-09-07 10:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_jabatan058`
--

CREATE TABLE `tbl_master_jabatan058` (
  `id_master_jabatan058` int(11) NOT NULL,
  `nama_jabatan058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_jabatan058`
--

INSERT INTO `tbl_master_jabatan058` (`id_master_jabatan058`, `nama_jabatan058`, `uraian058`, `tanggal_entry058`) VALUES
(1, 'Office Boy', 'tukang kebersihan', '2021-09-06 16:32:40'),
(2, 'Staf IT1', 'memperbaiki komputer atau jaringan rusak1', '2021-09-06 17:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_jurusan058`
--

CREATE TABLE `tbl_master_jurusan058` (
  `id_master_jurusan058` int(11) NOT NULL,
  `nama_jurusan058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_pelatihan058`
--

CREATE TABLE `tbl_master_pelatihan058` (
  `id_master_pelatihan058` int(11) NOT NULL,
  `nama_pelatihan058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_pelatihan058`
--

INSERT INTO `tbl_master_pelatihan058` (`id_master_pelatihan058`, `nama_pelatihan058`, `uraian058`, `tanggal_entry058`) VALUES
(1, 'Android', 'Belajar Android Untuk permula', '2021-09-06 16:39:32'),
(2, 'Machine learning', 'Belajar machine learning untuk pemula', '2021-09-06 16:39:32'),
(3, 'fd', 'fs', '2021-09-07 10:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_penghargaan058`
--

CREATE TABLE `tbl_master_penghargaan058` (
  `id_master_penghargaan058` int(11) NOT NULL,
  `nama_penghargaan058` varchar(100) NOT NULL,
  `uraian058` text NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_penghargaan058`
--

INSERT INTO `tbl_master_penghargaan058` (`id_master_penghargaan058`, `nama_penghargaan058`, `uraian058`, `tanggal_entry058`) VALUES
(1, 'Karyawan Teladan', 'Prasetyo', '2021-09-06 16:40:55'),
(2, 'Mengetik 10 jari paling cepatas', 'Prasetyoas', '2021-09-07 10:48:44'),
(3, 'adsf', 'fsadfa', '2021-09-07 10:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_jabatan058`
--

CREATE TABLE `tbl_riwayat_jabatan058` (
  `id_jabatan058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `id_master_jabatan058` int(11) NOT NULL,
  `no_sk058` varchar(20) NOT NULL,
  `tgl_sk058` date NOT NULL,
  `tgl_mulai058` date NOT NULL,
  `tgl_selesai058` date NOT NULL,
  `file_sk058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_pangkat058`
--

CREATE TABLE `tbl_riwayat_pangkat058` (
  `id_pangkat058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `id_master_pangkat058` int(11) NOT NULL,
  `id_master_golongan058` int(11) NOT NULL,
  `no_sk058` varchar(20) NOT NULL,
  `tgl_sk058` date NOT NULL,
  `tgl_mulai058` date NOT NULL,
  `tgl_selesai058` date NOT NULL,
  `file_sk058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_pendidikan058`
--

CREATE TABLE `tbl_riwayat_pendidikan058` (
  `id_pendidikan058` int(11) NOT NULL,
  `id_pegawai058` int(11) NOT NULL,
  `jenjang058` varchar(100) NOT NULL,
  `nama_pendidikan058` varchar(100) NOT NULL,
  `lokasi058` varchar(100) NOT NULL,
  `jurusan058` varchar(100) NOT NULL,
  `no_ijazah058` varchar(100) NOT NULL,
  `tgl_ijazah058` date NOT NULL,
  `file_ijazah058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user058`
--

CREATE TABLE `tbl_user058` (
  `id_user058` int(11) NOT NULL,
  `nama058` varchar(30) NOT NULL,
  `email058` varchar(30) NOT NULL,
  `username058` varchar(40) NOT NULL,
  `password058` varchar(255) NOT NULL,
  `akses_level058` varchar(15) NOT NULL,
  `keterangan058` text NOT NULL,
  `photo058` varchar(100) NOT NULL,
  `tanggal_entry058` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user058`
--

INSERT INTO `tbl_user058` (`id_user058`, `nama058`, `email058`, `username058`, `password058`, `akses_level058`, `keterangan058`, `photo058`, `tanggal_entry058`) VALUES
(4, 'joko', 'joko@gmail.com', 'joko123', '99f2fa498035d9e0d97dd625f1f67606613ffc50', 'USER', 'f', '', '2021-09-06 08:13:05'),
(7, 'prasetyo', 'mrprasetyo@gmail.com', 'admin', '315f166c5aca63a157f7d41007675cb44a948b33', 'ADMIN', 'admin', '', '2021-09-05 16:34:30'),
(10, 'prasetyo', 'mrprasetyoaaa@gmail.com', 'sdfsaf', 'a779894c60365e80efdfe0f7172ebe2063e99e09', 'ADMIN', 'sadfsadf', '', '2021-09-07 08:04:39'),
(11, 'sfsdfas', 'fasdfasdf@gagsd.dasf', 'sadfasdf', '4d11628fc5ac65062fcac81477cac3a8b0dfe286', 'ADMIN', 'adfsdsf', '8d72c8db8de63db29050acf98a83e334.jpg', '2021-09-07 08:26:52'),
(21, 'fsdfas', 'adsada@fasf.fsadfs', 'fsadfsd', 'ba3a75dadbc765c04556757149b2ee6e4dfa76a6', 'ADMIN', 'sdfsdf', '11.jpg', '2021-09-07 09:20:43'),
(24, 'Prasetyo1', 'mrprasetyo21@gmail.com', 'sensei', 'ed8839ee1d5c7b8982c81caff25fa6fbf8b3aa25', 'ADMIN', 'sensei', 'FB_IMG_1623227051347.jpg', '2021-09-20 12:30:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_hukuman058`
--
ALTER TABLE `tbl_data_hukuman058`
  ADD PRIMARY KEY (`id_hukuman058`);

--
-- Indexes for table `tbl_data_keluarga058`
--
ALTER TABLE `tbl_data_keluarga058`
  ADD PRIMARY KEY (`id_data_keluarga058`);

--
-- Indexes for table `tbl_data_pegawai058`
--
ALTER TABLE `tbl_data_pegawai058`
  ADD PRIMARY KEY (`id_pegawai058`);

--
-- Indexes for table `tbl_data_pelatihan058`
--
ALTER TABLE `tbl_data_pelatihan058`
  ADD PRIMARY KEY (`id_data_pelatihan058`);

--
-- Indexes for table `tbl_data_penghargaan058`
--
ALTER TABLE `tbl_data_penghargaan058`
  ADD PRIMARY KEY (`id_data_penghargaan058`);

--
-- Indexes for table `tbl_data_seminar058`
--
ALTER TABLE `tbl_data_seminar058`
  ADD PRIMARY KEY (`id_data_seminar058`);

--
-- Indexes for table `tbl_master_golongan058`
--
ALTER TABLE `tbl_master_golongan058`
  ADD PRIMARY KEY (`id_master_golongan058`);

--
-- Indexes for table `tbl_master_hukuman058`
--
ALTER TABLE `tbl_master_hukuman058`
  ADD PRIMARY KEY (`id_master_hukuman058`);

--
-- Indexes for table `tbl_master_jabatan058`
--
ALTER TABLE `tbl_master_jabatan058`
  ADD PRIMARY KEY (`id_master_jabatan058`);

--
-- Indexes for table `tbl_master_jurusan058`
--
ALTER TABLE `tbl_master_jurusan058`
  ADD PRIMARY KEY (`id_master_jurusan058`);

--
-- Indexes for table `tbl_master_pelatihan058`
--
ALTER TABLE `tbl_master_pelatihan058`
  ADD PRIMARY KEY (`id_master_pelatihan058`);

--
-- Indexes for table `tbl_master_penghargaan058`
--
ALTER TABLE `tbl_master_penghargaan058`
  ADD PRIMARY KEY (`id_master_penghargaan058`);

--
-- Indexes for table `tbl_riwayat_jabatan058`
--
ALTER TABLE `tbl_riwayat_jabatan058`
  ADD PRIMARY KEY (`id_jabatan058`);

--
-- Indexes for table `tbl_riwayat_pangkat058`
--
ALTER TABLE `tbl_riwayat_pangkat058`
  ADD PRIMARY KEY (`id_pangkat058`);

--
-- Indexes for table `tbl_user058`
--
ALTER TABLE `tbl_user058`
  ADD PRIMARY KEY (`id_user058`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_hukuman058`
--
ALTER TABLE `tbl_data_hukuman058`
  MODIFY `id_hukuman058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_keluarga058`
--
ALTER TABLE `tbl_data_keluarga058`
  MODIFY `id_data_keluarga058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_pegawai058`
--
ALTER TABLE `tbl_data_pegawai058`
  MODIFY `id_pegawai058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_data_pelatihan058`
--
ALTER TABLE `tbl_data_pelatihan058`
  MODIFY `id_data_pelatihan058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_penghargaan058`
--
ALTER TABLE `tbl_data_penghargaan058`
  MODIFY `id_data_penghargaan058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_data_seminar058`
--
ALTER TABLE `tbl_data_seminar058`
  MODIFY `id_data_seminar058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_master_golongan058`
--
ALTER TABLE `tbl_master_golongan058`
  MODIFY `id_master_golongan058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_master_hukuman058`
--
ALTER TABLE `tbl_master_hukuman058`
  MODIFY `id_master_hukuman058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_master_jabatan058`
--
ALTER TABLE `tbl_master_jabatan058`
  MODIFY `id_master_jabatan058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_master_jurusan058`
--
ALTER TABLE `tbl_master_jurusan058`
  MODIFY `id_master_jurusan058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_master_pelatihan058`
--
ALTER TABLE `tbl_master_pelatihan058`
  MODIFY `id_master_pelatihan058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_master_penghargaan058`
--
ALTER TABLE `tbl_master_penghargaan058`
  MODIFY `id_master_penghargaan058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_riwayat_jabatan058`
--
ALTER TABLE `tbl_riwayat_jabatan058`
  MODIFY `id_jabatan058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_riwayat_pangkat058`
--
ALTER TABLE `tbl_riwayat_pangkat058`
  MODIFY `id_pangkat058` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user058`
--
ALTER TABLE `tbl_user058`
  MODIFY `id_user058` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
