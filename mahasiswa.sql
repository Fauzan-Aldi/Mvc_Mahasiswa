-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 17 Sep 2025 pada 12.35
-- Versi server: 9.1.0
-- Versi PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_d`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nim` (`nim`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `jurusan`, `fakultas`, `created_at`, `updated_at`) VALUES
(6, '2301020090', 'Rizki Wardani', 'rizkiwardani@gmail.com', 'Teknik Informatika', 'Fakultas Teknik', '2025-09-17 07:07:53', '2025-09-17 07:07:53'),
(7, '2301020124', 'Muhammad Ridho Faizal', 'ridho@gmail.com', 'Teknik Informatika', 'Fakultas Teknik', '2025-09-17 07:08:49', '2025-09-17 07:08:49'),
(8, '2301020093', 'Roy Adiyta', 'royadiyta@gmail.com', 'Teknik Informatika', 'Fakultas Teknik', '2025-09-17 07:11:16', '2025-09-17 07:11:16'),
(9, '2301020095', 'Rara Anjali Apsarini', 'raraanjaliapsarini@gmail.com', 'Teknik Informatika', 'Fakultas Teknik', '2025-09-17 07:12:14', '2025-09-17 07:12:14'),
(10, '2201020130', 'Grayesi Silitonga', 'grayesi.silitonga@gmail.com', 'Teknik Informatika', 'Fakultas Teknik', '2025-09-17 07:13:07', '2025-09-17 08:39:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
