-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 03:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip_surat`
--

CREATE TABLE `tb_arsip_surat` (
  `nomor_surat` varchar(50) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `file_surat` varchar(255) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_arsip_surat`
--

INSERT INTO `tb_arsip_surat` (`nomor_surat`, `id_pengajuan`, `file_surat`, `tgl_surat`) VALUES
('01/SKTM/DesaGluranPloso/06/2022', 45, '45-Ahmad Rosyihuddin-Surat Keterangan Tidak Mamapu.pdf', '2022-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `keperluan` varchar(200) DEFAULT NULL,
  `jenis_pengajuan` varchar(50) DEFAULT NULL,
  `status_pengajuan` enum('Menunggu','Di Terima','Di Tolak','Revisi Di Terima','Revisi Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `nik`, `kode_surat`, `tgl_pengajuan`, `keperluan`, `jenis_pengajuan`, `status_pengajuan`) VALUES
(45, '1234567', 'SKTM', '2022-06-28 08:28:33', 'Kuliah', 'Baru', 'Di Terima'),
(46, '1234567', 'SKTM', '2022-06-28 08:29:23', 'tes', 'Baru', 'Di Tolak'),
(47, '1234567', 'SKTM', '2022-06-28 08:30:09', 'tesss', 'Baru', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skk`
--

CREATE TABLE `tb_skk` (
  `id_pengajuan_skk` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_skk` varchar(100) DEFAULT NULL,
  `tempat_lahir_skk` varchar(20) DEFAULT NULL,
  `tgl_lahir_skk` date DEFAULT NULL,
  `gender_skk` varchar(20) DEFAULT NULL,
  `pekerjaan_skk` varchar(50) DEFAULT NULL,
  `alamat_skk` varchar(200) DEFAULT NULL,
  `hari_meninggal_skk` varchar(10) DEFAULT NULL,
  `tgl_meninggal_skk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_skm`
--

CREATE TABLE `tb_skm` (
  `id_pengajuan_skm` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_skm` varchar(100) DEFAULT NULL,
  `gender_skm` varchar(20) DEFAULT NULL,
  `tempat_lahir_skm` varchar(100) DEFAULT NULL,
  `tgl_lahir_skm` date DEFAULT NULL,
  `agama_skm` varchar(20) DEFAULT NULL,
  `status_skm` varchar(20) DEFAULT NULL,
  `pekerjaan_skm` varchar(200) DEFAULT NULL,
  `kewarganegaraan_skm` varchar(100) DEFAULT NULL,
  `alamat_skm` varchar(255) DEFAULT NULL,
  `nama_pasangan_skm` varchar(100) DEFAULT NULL,
  `gender_pasangan_skm` varchar(20) DEFAULT NULL,
  `tempat_lahir_pasangan_skm` varchar(20) DEFAULT NULL,
  `tgl_lahir_` date DEFAULT NULL,
  `kewarganegaraan_pasangan_skm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sktm`
--

CREATE TABLE `tb_sktm` (
  `id_pengajuan_sktm` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_sktm` varchar(50) DEFAULT NULL,
  `tempat_lahir_sktm` varchar(20) DEFAULT NULL,
  `tgl_lahir_sktm` date DEFAULT NULL,
  `gender_sktm` varchar(20) DEFAULT NULL,
  `status_sktm` varchar(50) DEFAULT NULL,
  `pekerjaan_sktm` varchar(50) DEFAULT NULL,
  `alamat_sktm` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sktm`
--

INSERT INTO `tb_sktm` (`id_pengajuan_sktm`, `kode_surat`, `nama_sktm`, `tempat_lahir_sktm`, `tgl_lahir_sktm`, `gender_sktm`, `status_sktm`, `pekerjaan_sktm`, `alamat_sktm`) VALUES
(45, '12345', 'SKTM', 'Gresik', '2022-06-28', 'Laki-Laki', 'Belum Kawin', 'Mahasiswa', 'Gresik'),
(46, '12345', 'SKTM', 'tes', '2022-06-28', 'Laki-Laki', 'tes', 'tes', 'tes'),
(47, '12345', 'SKTM', 'tesss', '2022-06-28', 'Laki-Laki', 'tesss', 'tesss', 'tesss');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sl`
--

CREATE TABLE `tb_sl` (
  `id_pengajuan_sl` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_sl` varchar(100) DEFAULT NULL,
  `tempat_lahir_sl` varchar(20) DEFAULT NULL,
  `tgl_lahir_sl` date DEFAULT NULL,
  `gender_sl` varchar(20) DEFAULT NULL,
  `agama_sl` varchar(20) DEFAULT NULL,
  `status_sl` varchar(20) DEFAULT NULL,
  `pekerjaan_sl` varchar(50) DEFAULT NULL,
  `no_hp_sl` varchar(20) DEFAULT NULL,
  `alamat_sl` varchar(200) DEFAULT NULL,
  `foto_ktp_sl` longblob DEFAULT NULL,
  `foto_kk_sl` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_spa`
--

CREATE TABLE `tb_spa` (
  `id_pengajuan_spa` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_ayah_spa` varchar(100) DEFAULT NULL,
  `nama_ibu_spa` varchar(100) DEFAULT NULL,
  `gender_spa` varchar(20) DEFAULT NULL,
  `agama_spa` varchar(20) DEFAULT NULL,
  `tempat_lahir_spa` varchar(20) DEFAULT NULL,
  `tgl_lahir_spa` date DEFAULT NULL,
  `hubungan_spa` varchar(100) DEFAULT NULL,
  `pekerjaan_spa` varchar(100) DEFAULT NULL,
  `alamat_spa` varchar(200) DEFAULT NULL,
  `nama_anak_spa` varchar(100) DEFAULT NULL,
  `gender_anak_spa` varchar(20) DEFAULT NULL,
  `tempat_lahir_anak_spa` varchar(20) DEFAULT NULL,
  `tgl_lahir_anak_spa` date DEFAULT NULL,
  `waktu_lahir_anak_spa` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_spk`
--

CREATE TABLE `tb_spk` (
  `id_pengajuan_spk` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_spk` varchar(100) DEFAULT NULL,
  `tempat_lahir_spk` varchar(20) DEFAULT NULL,
  `tgl_lahir_spk` date DEFAULT NULL,
  `gender_spk` varchar(20) DEFAULT NULL,
  `golongan_darah_spk` varchar(5) DEFAULT NULL,
  `agama_spk` varchar(20) DEFAULT NULL,
  `status_spk` varchar(20) DEFAULT NULL,
  `pekerjaan_spk` varchar(50) DEFAULT NULL,
  `alamat_spk` varchar(200) DEFAULT NULL,
  `rt_spk` varchar(5) DEFAULT NULL,
  `rw_spk` varchar(5) DEFAULT NULL,
  `kelurahan_spk` varchar(50) DEFAULT NULL,
  `kecamatan_spk` varchar(50) DEFAULT NULL,
  `kota_spk` varchar(50) DEFAULT NULL,
  `provinsi_spk` varchar(50) DEFAULT NULL,
  `foto_spk` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `kode_surat` char(5) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `surat_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`kode_surat`, `jenis_surat`, `surat_keluar`) VALUES
('SKK', 'Surat Keterangan Kematian', 0),
('SKM', 'Surat Keterangan Menikah', 0),
('SKTM', 'Surat Keterangan Tidak Mamapu', 1),
('SL', 'Surat Lainnya', 0),
('SM', 'Surat Masuk', 0),
('SPA', 'Surat Pengantar Akta', 0),
('SPK', 'Surat Pengantar KTP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `nomor_surat` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jenis_surat` varchar(100) DEFAULT NULL,
  `file_surat` varchar(255) NOT NULL,
  `tgl_surat_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `rt` char(10) DEFAULT NULL,
  `rw` char(10) DEFAULT NULL,
  `role_user` enum('Warga','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nik`, `username`, `password`, `nama_user`, `rt`, `rw`, `role_user`) VALUES
('1112233', 'yoga', '123', 'Yoga Tirta Permana', '1', '2', 'Warga'),
('11224433', NULL, '', 'Tegar Fakhruddin', '2', '2', 'Warga'),
('12345', 'fanani', '123', 'Ahmad Fanani', '1', '2', 'Warga'),
('1234567', 'ahmad', '123', 'Ahmad Rosyihuddin', '2', '1', 'Warga'),
('12345678', NULL, '', 'Kharisma Intan Safitri', '2', '3', 'Warga'),
('admin', 'admin', 'admin', 'admin', '', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `kode_surat` (`kode_surat`);

--
-- Indexes for table `tb_skk`
--
ALTER TABLE `tb_skk`
  ADD PRIMARY KEY (`id_pengajuan_skk`);

--
-- Indexes for table `tb_skm`
--
ALTER TABLE `tb_skm`
  ADD PRIMARY KEY (`id_pengajuan_skm`);

--
-- Indexes for table `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD PRIMARY KEY (`id_pengajuan_sktm`);

--
-- Indexes for table `tb_sl`
--
ALTER TABLE `tb_sl`
  ADD PRIMARY KEY (`id_pengajuan_sl`);

--
-- Indexes for table `tb_spa`
--
ALTER TABLE `tb_spa`
  ADD PRIMARY KEY (`id_pengajuan_spa`);

--
-- Indexes for table `tb_spk`
--
ALTER TABLE `tb_spk`
  ADD PRIMARY KEY (`id_pengajuan_spk`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`kode_surat`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_skk`
--
ALTER TABLE `tb_skk`
  MODIFY `id_pengajuan_skk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_skm`
--
ALTER TABLE `tb_skm`
  MODIFY `id_pengajuan_skm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sktm`
--
ALTER TABLE `tb_sktm`
  MODIFY `id_pengajuan_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_sl`
--
ALTER TABLE `tb_sl`
  MODIFY `id_pengajuan_sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_spa`
--
ALTER TABLE `tb_spa`
  MODIFY `id_pengajuan_spa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_spk`
--
ALTER TABLE `tb_spk`
  MODIFY `id_pengajuan_spk` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  ADD CONSTRAINT `tb_arsip_surat_ibfk_2` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_2` FOREIGN KEY (`kode_surat`) REFERENCES `tb_surat` (`kode_surat`);

--
-- Constraints for table `tb_skk`
--
ALTER TABLE `tb_skk`
  ADD CONSTRAINT `tb_skk_ibfk_1` FOREIGN KEY (`id_pengajuan_skk`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_skm`
--
ALTER TABLE `tb_skm`
  ADD CONSTRAINT `tb_skm_ibfk_1` FOREIGN KEY (`id_pengajuan_skm`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD CONSTRAINT `tb_sktm_ibfk_1` FOREIGN KEY (`id_pengajuan_sktm`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_sl`
--
ALTER TABLE `tb_sl`
  ADD CONSTRAINT `tb_sl_ibfk_1` FOREIGN KEY (`id_pengajuan_sl`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_spa`
--
ALTER TABLE `tb_spa`
  ADD CONSTRAINT `tb_spa_ibfk_1` FOREIGN KEY (`id_pengajuan_spa`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_spk`
--
ALTER TABLE `tb_spk`
  ADD CONSTRAINT `tb_spk_ibfk_1` FOREIGN KEY (`id_pengajuan_spk`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD CONSTRAINT `tb_surat_masuk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
