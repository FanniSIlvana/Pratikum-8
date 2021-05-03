-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 18.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_validation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `jenis_pendaftaran` varchar(128) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nis` varchar(50) NOT NULL,
  `no_peserta` varchar(50) NOT NULL,
  `paud` varchar(20) NOT NULL,
  `tk` varchar(20) NOT NULL,
  `no_skhun` varchar(50) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `hobi` varchar(128) NOT NULL,
  `cita_cita` varchar(50) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kebutuhan_khusus` varchar(20) NOT NULL,
  `alamat_jalan` varchar(128) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `nama_dusun` varchar(50) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `moda_transportasi` varchar(128) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `penerima_kps` varchar(10) NOT NULL,
  `no_kps` varchar(128) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
