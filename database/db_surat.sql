-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 18.08
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `tb_arsip_surat`
--

CREATE TABLE `tb_arsip_surat` (
  `nomor_surat` varchar(50) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `file_surat` varchar(255) DEFAULT NULL,
  `tgl_surat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_arsip_surat`
--

INSERT INTO `tb_arsip_surat` (`nomor_surat`, `id_pengajuan`, `file_surat`, `tgl_surat`) VALUES
('01/SKTM/DesaGluranPloso/06/2022', 45, '45-Yoga Tirta Permana-Surat Keterangan Tidak Mampu.docx', '2022-10-31'),
('02/SKTM/DesaGluranPloso/10/2022', 47, '47-Yoga Tirta Permana-Surat Keterangan Tidak Mampu.pdf', '2022-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengajuan`
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
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `nik`, `kode_surat`, `tgl_pengajuan`, `keperluan`, `jenis_pengajuan`, `status_pengajuan`) VALUES
(45, '1234567', 'SKTM', '2022-06-28 08:28:33', 'Salah nama\r\n', 'Revisi', 'Revisi Di Terima'),
(46, '1234567', 'SKTM', '2022-06-28 08:29:23', 'tes', 'Baru', 'Di Tolak'),
(47, '1234567', 'SKTM', '2022-06-28 08:30:09', 'Nama salah', 'Revisi', 'Menunggu'),
(48, '1234567', 'SKTM', '2022-11-08 23:08:47', 'Kuliah', 'Baru', 'Menunggu'),
(49, '3516150505020003', 'SKM', '2022-11-19 15:09:28', 'menikah', NULL, 'Menunggu'),
(50, '3516150505020003', 'SKTM', '2022-11-19 16:37:20', 'SKTM', 'Baru', 'Menunggu'),
(51, '3516150505020003', 'SKTM', '2022-11-19 16:45:17', 'SKTM', 'Baru', 'Menunggu'),
(52, '3516150505020003', 'SKTM', '2022-11-19 16:45:48', 'SKTM', 'Baru', 'Menunggu'),
(53, '3516150505020003', 'SKTM', '2022-11-19 16:47:09', 'sktm', 'Baru', 'Menunggu'),
(54, '3516150505020003', 'SKTM', '2022-11-19 16:47:55', 'sktm', 'Baru', 'Menunggu'),
(55, '3516150505020003', 'SKTM', '2022-11-19 16:50:43', 'sktm', 'Baru', 'Menunggu'),
(56, '3516150505020003', 'SKTM', '2022-11-19 17:08:15', 'sktm', 'Baru', 'Menunggu'),
(57, '3516150505020003', 'SKTM', '2022-11-19 17:10:49', 'sktm', 'Baru', 'Menunggu'),
(58, '3516150505020003', 'SKTM', '2022-11-19 17:19:52', 'sktm', 'Baru', 'Menunggu'),
(59, '3516150505020003', 'SKTM', '2022-11-19 17:21:27', 'sktm', 'Baru', 'Menunggu'),
(60, '3516150505020003', 'SKTM', '2022-11-19 17:24:02', 'jhojbj', 'Baru', 'Menunggu'),
(61, '3516150505020003', 'SKTM', '2022-11-19 17:30:02', 'knkj', 'Baru', 'Menunggu'),
(62, '3516150505020003', 'SKTM', '2022-11-19 17:38:46', 'BARU', 'Baru', 'Menunggu'),
(63, '3516150505020003', 'SKTM', '2022-11-19 17:57:50', 'bjbb', 'Baru', 'Menunggu'),
(64, '3516150505020003', 'SKTM', '2022-11-19 18:02:47', 'bjbbj', 'Baru', 'Menunggu'),
(65, '3516150505020003', 'SKK', '2022-11-21 23:13:31', 'mati', NULL, 'Menunggu'),
(66, '3516150505020003', 'SKK', '2022-11-21 23:20:08', 'mati', NULL, 'Menunggu'),
(67, '3516150505020003', 'SKK', '2022-11-21 23:27:51', 'mati', NULL, 'Menunggu'),
(68, '3516150505020003', 'SKK', '2022-11-21 23:29:06', 'mati', NULL, 'Menunggu'),
(69, '3516150505020003', 'SKK', '2022-11-21 23:30:30', 'mati', NULL, 'Menunggu'),
(70, '3516150505020003', 'SKK', '2022-11-21 23:33:56', 'mati', NULL, 'Menunggu'),
(71, '3516150505020003', 'SKK', '2022-11-21 23:39:50', 'manusia', NULL, 'Menunggu'),
(72, '3516150505020003', 'SKK', '2022-11-21 23:42:22', 'manusia', NULL, 'Menunggu'),
(73, '3516150505020003', 'SKK', '2022-11-21 23:44:15', 'manusia', NULL, 'Menunggu'),
(74, '3516150505020003', 'SKK', '2022-11-22 00:01:18', 'mati', NULL, 'Menunggu'),
(75, '3516150505020003', 'SKK', '2022-11-22 00:04:08', 'mati', NULL, 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skk`
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
  `tgl_meninggal_skk` date DEFAULT NULL,
  `penyebab_skk` varchar(20) DEFAULT NULL,
  `umur_skk` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_skk`
--

INSERT INTO `tb_skk` (`id_pengajuan_skk`, `kode_surat`, `nama_skk`, `tempat_lahir_skk`, `tgl_lahir_skk`, `gender_skk`, `pekerjaan_skk`, `alamat_skk`, `hari_meninggal_skk`, `tgl_meninggal_skk`, `penyebab_skk`, `umur_skk`) VALUES
(65, '35161', 'SKK', 'Mojokerto', NULL, 'Laki-Laki', 'Mahasiswa', 'jlin', 'selasa', '2022-11-21', NULL, NULL),
(71, '35161', 'SKK', 'Kota Surabaya', NULL, 'Laki-Laki', 'mekanik', 'Jl asemjaya', 'selasa', '2022-11-21', NULL, NULL),
(72, 'SKK', 'paijo a', 'Mojokerto', NULL, 'Laki-Laki', 'Mahasiswa', 'jlin', 'selasa', '2022-11-21', NULL, NULL),
(73, 'SKK', 'safira', 'lamongan', '2022-11-21', 'Laki-Laki', 'Mahasiswa', 'jln jln', 'selasa', '2022-11-22', NULL, NULL),
(74, 'SKK', 'budi leksmana', 'Gresik', '2022-11-25', 'Laki-Laki', 'Mahasiswa', 'Jl asemjaya', 'Senin', '2022-11-22', '', ''),
(75, 'SKK', 'budu', 'Gresik', '2022-11-21', 'Laki-Laki', 'Ibu Rumah Tangga', 'Jl asemjaya', 'Rabu', '2022-11-23', 'Sakit', '18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skm`
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

--
-- Dumping data untuk tabel `tb_skm`
--

INSERT INTO `tb_skm` (`id_pengajuan_skm`, `kode_surat`, `nama_skm`, `gender_skm`, `tempat_lahir_skm`, `tgl_lahir_skm`, `agama_skm`, `status_skm`, `pekerjaan_skm`, `kewarganegaraan_skm`, `alamat_skm`, `nama_pasangan_skm`, `gender_pasangan_skm`, `tempat_lahir_pasangan_skm`, `tgl_lahir_`, `kewarganegaraan_pasangan_skm`) VALUES
(49, 'SKM', 'paijo a', 'Laki-Laki', 'Gresik', '2022-11-19', 'Islam', 'belum kawin', 'Mahasiswa', 'Indonesia', 'Jl. Dupak Masigit 5 No.16', 'Putri', 'Perempuan', 'Jombang', '2022-11-19', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sktm`
--

CREATE TABLE `tb_sktm` (
  `id_pengajuan_sktm` int(11) NOT NULL,
  `kode_surat` varchar(5) DEFAULT NULL,
  `nama_sktm` varchar(50) DEFAULT NULL,
  `tempat_lahir_sktm` varchar(20) DEFAULT NULL,
  `tgl_lahir_sktm` date DEFAULT NULL,
  `gender_sktm` varchar(20) DEFAULT NULL,
  `pekerjaan_sktm` varchar(50) DEFAULT NULL,
  `alamat_sktm` varchar(200) DEFAULT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `tempat_lahir_murid` varchar(20) DEFAULT NULL,
  `tgl_lahir_murid` date DEFAULT NULL,
  `gender_murid` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `anak_murid` varchar(20) DEFAULT NULL,
  `alamat_murid` varchar(20) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sktm`
--

INSERT INTO `tb_sktm` (`id_pengajuan_sktm`, `kode_surat`, `nama_sktm`, `tempat_lahir_sktm`, `tgl_lahir_sktm`, `gender_sktm`, `pekerjaan_sktm`, `alamat_sktm`, `nama_murid`, `tempat_lahir_murid`, `tgl_lahir_murid`, `gender_murid`, `agama`, `anak_murid`, `alamat_murid`, `nisn`) VALUES
(45, '12345', 'SKTM', 'Gresik', '2022-06-28', 'Laki-Laki', 'Mahasiswa', 'Gresik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '12345', 'SKTM', 'tes', '2022-06-28', 'Laki-Laki', 'tes', 'tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '12345', 'SKTM', 'tesss', '2022-06-28', 'Laki-Laki', 'tesss', 'tesss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '12345', 'SKTM', 'Mojokerto', '2002-05-05', 'Laki-Laki', 'Mahasiswa', 'Mojokerto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '12345', 'Budiono', 'Surabaya', '2022-11-01', 'Laki-laki', 'Mahasiswa', 'Jl. sendiri', 'Andy', 'Surabaya', '2022-11-09', 'Laki-laki', 'islam', 'budiono', 'jl. sendiri', '71236712'),
(55, 'SKTM', 'Yoga', 'Mojokerto', '2022-11-19', 'Laki-Laki', 'mekanik', 'Jl. Dupak Masigit 5 No.16', 'Ari', 'Mojokerto', '2022-11-19', 'Laki-Laki', '', '', '', '0058619240'),
(56, 'SKTM', 'Jamal', 'Bandung', '2022-11-19', 'Laki-Laki', 'mekanik', 'Jl asemjaya', 'siti', 'Bandung', '0000-00-00', 'Perempuan', '', '', 'Jl asemjaya', '213141231'),
(57, 'SKTM', 'safira', 'Gresik', '2022-11-19', 'Perempuan', 'Ibu Rumah Tangga', 'Jl asemjaya', 'danang', 'Gresik', '2022-11-19', 'Laki-Laki', '', '', 'Jl asemjaya', '0058619240'),
(58, 'SKTM', '', 'Surabaya', '2022-11-19', 'Laki-Laki', 'Ibu Rumah Tangga', 'Jl asemjaya', 'danang', 'Surabaya', '2022-11-19', 'Perempuan', '', '', 'Jl asemjaya', '0058619240'),
(59, 'SKTM', '', 'Bandung', '2022-11-02', 'Perempuan', 'Ibu Rumah Tangga', 'jlin', 'Ari', 'Bandung', '2022-11-19', 'Perempuan', '', '', 'Jl asemjaya', '0058619240'),
(60, 'SKTM', '', 'nobp k', '2022-11-19', 'Laki-Laki', 'mekanik', 'Jl asemjaya', 'siti', 'Bandung', '2022-11-19', 'Perempuan', '', '', 'Jl asemjaya', '0058619240'),
(61, 'SKTM', '', 'Mojokerto', '2022-11-19', 'Perempuan', 'Ibu Rumah Tangga', 'Jl asemjaya', 'Ari', 'Bandung', '2022-11-19', 'Laki-Laki', '', '', 'Jl asemjaya', '0058619240'),
(62, 'SKTM', '', 'Surabaya', '2022-11-19', 'Perempuan', 'Mahasiswa', 'jl ina', 'danang', 'Bandung', '2030-02-13', 'Perempuan', '', '', 'Jl asemjaya', '0058619240'),
(63, 'SKTM', '', 'Bandung', '2022-11-19', 'Perempuan', 'Ibu Rumah Tangga', 'Jl. Dupak Masigit 5 No.16', 'danang', 'Bandung', '2002-01-22', 'Laki-Laki', '', '', 'Jl asemjaya', '0058619240'),
(64, 'SKTM', 'Lisa', 'Bandung', '2003-01-02', 'Perempuan', 'Ibu Rumah Tangga', 'jln jln', 'danang', 'Bandung', '2202-01-01', 'Laki-Laki', '', '', 'Jl asemjaya', '0058619240');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sl`
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
-- Struktur dari tabel `tb_spa`
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
-- Struktur dari tabel `tb_spk`
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
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `kode_surat` char(5) NOT NULL,
  `jenis_surat` varchar(50) NOT NULL,
  `surat_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`kode_surat`, `jenis_surat`, `surat_keluar`) VALUES
('SKK', 'Surat Keterangan Kematian', 0),
('SKM', 'Surat Keterangan Menikah', 0),
('SKTM', 'Surat Keterangan Tidak Mampu', 2),
('SL', 'Surat Lainnya', 0),
('SM', 'Surat Masuk', 0),
('SPA', 'Surat Pengantar Akta', 0),
('SPK', 'Surat Pengantar KTP', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `nomor_surat` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jenis_surat` varchar(100) DEFAULT NULL,
  `file_surat` varchar(255) NOT NULL,
  `tgl_surat_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`nomor_surat`, `nik`, `jenis_surat`, `file_surat`, `tgl_surat_masuk`) VALUES
('1231231244', 'admin', 'Undangan', '1231231244-Undangan-2022-10-31.pdf', '2022-10-31'),
('2000412356', 'admin', 'Undangan Acara', '2000412356-Undangan Acara-2022-11-01.pdf', '2022-11-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nik` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `role_user` enum('Warga','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nik`, `username`, `password`, `nama_user`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `alamat`, `role_user`) VALUES
('1234567', 'user', 'user', 'User Pertama', 'Bangkalan', '01-01-2000', 'Laki-Laki', '', 'Bangkalan', 'Warga'),
('321398193918391', 'budisatotok', 'budisatotok', 'budi satotok', 'Surabaya', '2022-11-19', 'Laki-Laki', 'Islam', 'jln jln', 'Warga'),
('3516150505020003', 'yoga', 'yoga', 'Yoga Tirta Permana', 'Mojokerto', '2002-05-05', 'Laki-Laki', 'Islam', 'Mojokerto', 'Warga'),
('3516175403020001', 'yoena', 'yoena', 'Yoena Rindu Perdana', 'Mojokerto', '', 'Perempuan', '', 'Mojokerto', 'Warga'),
('3517126003020002', 'dilla', 'dilla', 'Ovadilla Aisyah Rahma', 'Jombang', '', 'Perempuan', '', 'Jombang', 'Warga'),
('3526022106010002', NULL, '', 'Kevin Agung J Mahendra', 'Bangkalan', '', 'Laki-Laki', '', 'Bangkalan', 'Warga'),
('3578130104020002', NULL, '', 'Chendy Tri Wardani', 'Surabaya', '', 'Laki-Laki', '', 'Surabaya', 'Warga'),
('admin', 'admin', 'admin', 'Admin Pertama', 'Bangkalan', '01-01-2000', 'Laki-Laki', '', 'Bangkalan', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `kode_surat` (`kode_surat`);

--
-- Indeks untuk tabel `tb_skk`
--
ALTER TABLE `tb_skk`
  ADD PRIMARY KEY (`id_pengajuan_skk`);

--
-- Indeks untuk tabel `tb_skm`
--
ALTER TABLE `tb_skm`
  ADD PRIMARY KEY (`id_pengajuan_skm`);

--
-- Indeks untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD PRIMARY KEY (`id_pengajuan_sktm`);

--
-- Indeks untuk tabel `tb_sl`
--
ALTER TABLE `tb_sl`
  ADD PRIMARY KEY (`id_pengajuan_sl`);

--
-- Indeks untuk tabel `tb_spa`
--
ALTER TABLE `tb_spa`
  ADD PRIMARY KEY (`id_pengajuan_spa`);

--
-- Indeks untuk tabel `tb_spk`
--
ALTER TABLE `tb_spk`
  ADD PRIMARY KEY (`id_pengajuan_spk`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`kode_surat`);

--
-- Indeks untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`nomor_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_skk`
--
ALTER TABLE `tb_skk`
  MODIFY `id_pengajuan_skk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tb_skm`
--
ALTER TABLE `tb_skm`
  MODIFY `id_pengajuan_skm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  MODIFY `id_pengajuan_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tb_sl`
--
ALTER TABLE `tb_sl`
  MODIFY `id_pengajuan_sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_spa`
--
ALTER TABLE `tb_spa`
  MODIFY `id_pengajuan_spa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_spk`
--
ALTER TABLE `tb_spk`
  MODIFY `id_pengajuan_spk` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_arsip_surat`
--
ALTER TABLE `tb_arsip_surat`
  ADD CONSTRAINT `tb_arsip_surat_ibfk_2` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_2` FOREIGN KEY (`kode_surat`) REFERENCES `tb_surat` (`kode_surat`);

--
-- Ketidakleluasaan untuk tabel `tb_skk`
--
ALTER TABLE `tb_skk`
  ADD CONSTRAINT `tb_skk_ibfk_1` FOREIGN KEY (`id_pengajuan_skk`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_skm`
--
ALTER TABLE `tb_skm`
  ADD CONSTRAINT `tb_skm_ibfk_1` FOREIGN KEY (`id_pengajuan_skm`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_sktm`
--
ALTER TABLE `tb_sktm`
  ADD CONSTRAINT `tb_sktm_ibfk_1` FOREIGN KEY (`id_pengajuan_sktm`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_sl`
--
ALTER TABLE `tb_sl`
  ADD CONSTRAINT `tb_sl_ibfk_1` FOREIGN KEY (`id_pengajuan_sl`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_spa`
--
ALTER TABLE `tb_spa`
  ADD CONSTRAINT `tb_spa_ibfk_1` FOREIGN KEY (`id_pengajuan_spa`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_spk`
--
ALTER TABLE `tb_spk`
  ADD CONSTRAINT `tb_spk_ibfk_1` FOREIGN KEY (`id_pengajuan_spk`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Ketidakleluasaan untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD CONSTRAINT `tb_surat_masuk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
