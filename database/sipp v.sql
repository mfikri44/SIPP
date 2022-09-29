-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Sep 2022 pada 09.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sippv2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` bigint(20) NOT NULL,
  `nama_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `waktu_lahir_anak` time NOT NULL,
  `jenis_kelahiran_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penolong_kelahiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id_anak`, `nama_anak`, `jenis_kelamin_anak`, `tempat_lahir_anak`, `kota_anak`, `tanggal_lahir_anak`, `waktu_lahir_anak`, `jenis_kelahiran_anak`, `anak_ke`, `penolong_kelahiran`, `berat_anak`, `tinggi_anak`, `created_at`, `updated_at`) VALUES
(1, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 19:52:05', '2022-07-22 19:52:05'),
(2, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:08:24', '2022-07-22 20:08:24'),
(3, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:11:26', '2022-07-22 20:11:26'),
(4, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:12:17', '2022-07-22 20:12:17'),
(5, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:14:25', '2022-07-22 20:14:25'),
(6, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:15:33', '2022-07-22 20:15:33'),
(7, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:16:24', '2022-07-22 20:16:24'),
(8, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:17:14', '2022-07-22 20:17:14'),
(9, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:19:08', '2022-07-22 20:19:08'),
(10, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:22:53', '2022-07-22 20:22:53'),
(11, 'qe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-22', '12:22:00', 'Tunggal', '1', 'Bidan/Perawat', '4', '12', '2022-07-22 20:26:24', '2022-07-22 20:26:24'),
(12, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:52:37', '2022-07-23 00:52:37'),
(13, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:53:52', '2022-07-23 00:53:52'),
(14, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:55:27', '2022-07-23 00:55:27'),
(15, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:56:32', '2022-07-23 00:56:32'),
(16, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:56:55', '2022-07-23 00:56:55'),
(17, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 00:58:39', '2022-07-23 00:58:39'),
(18, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:00:14', '2022-07-23 01:00:14'),
(19, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:00:20', '2022-07-23 01:00:20'),
(20, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:01:20', '2022-07-23 01:01:20'),
(21, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:02:07', '2022-07-23 01:02:07'),
(22, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:02:33', '2022-07-23 01:02:33'),
(23, 'kfyu', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '0001-02-07', '21:21:00', 'Tunggal', '1', 'Dokter', '4', '3', '2022-07-23 01:09:16', '2022-07-23 01:09:16'),
(24, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:12:10', '2022-07-23 01:12:10'),
(25, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:22:33', '2022-07-23 01:22:33'),
(26, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:23:08', '2022-07-23 01:23:08'),
(27, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:23:11', '2022-07-23 01:23:11'),
(28, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:23:48', '2022-07-23 01:23:48'),
(29, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:25:36', '2022-07-23 01:25:36'),
(30, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:26:41', '2022-07-23 01:26:41'),
(31, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:30:54', '2022-07-23 01:30:54'),
(32, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:32:43', '2022-07-23 01:32:43'),
(33, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:36:47', '2022-07-23 01:36:47'),
(34, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:39:46', '2022-07-23 01:39:46'),
(35, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:40:10', '2022-07-23 01:40:10'),
(36, 'ASA', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-20', '21:02:00', 'Tunggal', '1', 'Dokter', '2', '21', '2022-07-23 01:41:59', '2022-07-23 01:41:59'),
(37, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:06:44', '2022-07-23 07:06:44'),
(38, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:22:01', '2022-07-23 07:22:01'),
(39, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:22:39', '2022-07-23 07:22:39'),
(40, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:28:45', '2022-07-23 07:28:45'),
(41, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:29:54', '2022-07-23 07:29:54'),
(42, 'eaa', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2000-02-01', '12:02:00', 'Tunggal', '3', 'Dokter', '2', '21', '2022-07-23 07:30:44', '2022-07-23 07:30:44'),
(43, 'eqweqwe', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-21', '12:12:00', 'Tunggal', '1', 'Dokter', '21', '23', '2022-07-23 07:41:43', '2022-07-23 07:41:43'),
(44, 'Pratama', 'Laki-laki', 'Puskesmas', 'Kudus', '2022-01-24', '12:34:00', 'Tunggal', '1', 'Bidan/Perawat', '2.5', '45', '2022-07-24 16:36:28', '2022-07-24 16:36:28'),
(45, 'Choky', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-27', '18:00:00', 'Tunggal', '1', 'Dokter', '2.5', '46', '2022-07-27 01:24:40', '2022-07-27 01:24:40'),
(46, 'Choky', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-27', '18:00:00', 'Tunggal', '1', 'Dokter', '2.5', '46', '2022-07-27 01:27:13', '2022-07-27 01:27:13'),
(47, 'Ahmad Dazle', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-07-27', '15:45:00', 'Tunggal', '1', 'Dokter', '2.5', '45', '2022-07-27 05:35:36', '2022-07-27 05:35:36'),
(48, 'Jhony Deep', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '12:00:00', 'Tunggal', '1', 'Dokter', '4.6', '49', '2022-08-04 07:37:10', '2022-08-04 07:37:10'),
(49, 'Lary si lobster', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '15:00:00', 'Tunggal', '1', 'Dokter', '2.5', '34', '2022-08-04 09:43:25', '2022-08-04 09:43:25'),
(50, 'Jhony Lee', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '18:45:00', 'Tunggal', '1', 'Bidan/Perawat', '4.6', '30', '2022-08-04 10:44:42', '2022-08-04 10:44:42'),
(51, 'Luluk Eka Wahyu', 'Perempuan', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '16:27:00', 'Tunggal', '2', 'Dokter', '3', '34', '2022-08-04 10:53:44', '2022-08-04 10:53:44'),
(52, 'Hilda Milia', 'Perempuan', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-05', '06:07:00', 'Tunggal', '3', 'Dokter', '3.2', '43', '2022-08-04 11:10:50', '2022-08-04 11:10:50'),
(53, 'Suseno', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '18:09:00', 'Tunggal', '4', 'Dokter', '3.6', '34', '2022-08-04 11:27:53', '2022-08-04 11:27:53'),
(54, 'Harianto', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '06:47:00', 'Tunggal', '1', 'Dokter', '3', '34', '2022-08-04 13:41:31', '2022-08-04 13:41:31'),
(55, 'Rachel', 'Perempuan', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-08-04', '06:08:00', 'Tunggal', '2', 'Dokter', '32', '34', '2022-08-04 13:50:35', '2022-08-04 13:50:35'),
(56, 'Novianti', 'Perempuan', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-03-31', '06:08:00', 'Tunggal', '3', 'Dokter', '3.6', '27', '2022-08-04 13:57:58', '2022-08-04 13:57:58'),
(57, 'Al Jaiz', 'Laki-laki', 'Rumah Sakit/Rumah Bersalin', 'Kudus', '2022-04-04', '18:08:00', 'Tunggal', '4', 'Dokter', '3.5', '29', '2022-08-04 14:06:52', '2022-08-04 14:06:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ayah`
--

CREATE TABLE `ayah` (
  `id_ayah` bigint(20) NOT NULL,
  `nik_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `umur_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ayah`
--

INSERT INTO `ayah` (`id_ayah`, `nik_ayah`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `kewarganegaraan_ayah`, `kebangsaan_ayah`, `created_at`, `updated_at`) VALUES
(1, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:08:24', '2022-07-22 20:08:24'),
(2, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:11:26', '2022-07-22 20:11:26'),
(3, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:12:17', '2022-07-22 20:12:17'),
(4, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:14:25', '2022-07-22 20:14:25'),
(5, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:15:33', '2022-07-22 20:15:33'),
(6, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:16:24', '2022-07-22 20:16:24'),
(7, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:17:14', '2022-07-22 20:17:14'),
(8, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:19:08', '2022-07-22 20:19:08'),
(9, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:22:53', '2022-07-22 20:22:53'),
(10, '21', 'as', '', '2022-07-04', 1, 'A', 'a', 'a', 'as', 'as', 'as', 'WNI', 'a', '2022-07-22 20:26:24', '2022-07-22 20:26:24'),
(11, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'as', '2022-07-23 00:52:37', '2022-07-23 00:52:37'),
(12, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 00:53:52', '2022-07-23 00:53:52'),
(13, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 00:55:27', '2022-07-23 00:55:27'),
(14, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 00:56:32', '2022-07-23 00:56:32'),
(15, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 00:56:55', '2022-07-23 00:56:55'),
(16, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 00:58:39', '2022-07-23 00:58:39'),
(17, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:00:14', '2022-07-23 01:00:14'),
(18, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:00:20', '2022-07-23 01:00:20'),
(19, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:01:20', '2022-07-23 01:01:20'),
(20, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:02:07', '2022-07-23 01:02:07'),
(21, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:02:33', '2022-07-23 01:02:33'),
(22, '122', 'sd', '', '2000-02-12', 22, '21s', 'a1', 'as', 'a', 'as', 'as', 'WNI', 'asada', '2022-07-23 01:09:16', '2022-07-23 01:09:16'),
(23, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:12:10', '2022-07-23 01:12:10'),
(24, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:22:33', '2022-07-23 01:22:33'),
(25, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:23:08', '2022-07-23 01:23:08'),
(26, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:23:11', '2022-07-23 01:23:11'),
(27, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:23:48', '2022-07-23 01:23:48'),
(28, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:25:36', '2022-07-23 01:25:36'),
(29, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:26:41', '2022-07-23 01:26:41'),
(30, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:30:54', '2022-07-23 01:30:54'),
(31, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:32:43', '2022-07-23 01:32:43'),
(32, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:36:47', '2022-07-23 01:36:47'),
(33, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:39:46', '2022-07-23 01:39:46'),
(34, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:40:10', '2022-07-23 01:40:10'),
(35, '12', '21', '', '2022-07-19', 12, 'QW', '1QW', 'QW1', 'WQ1', 'WW1', 'QW2', 'WNA', '`QW', '2022-07-23 01:41:59', '2022-07-23 01:41:59'),
(36, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:06:44', '2022-07-23 07:06:44'),
(37, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:22:01', '2022-07-23 07:22:01'),
(38, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:22:39', '2022-07-23 07:22:39'),
(39, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:28:45', '2022-07-23 07:28:45'),
(40, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:29:54', '2022-07-23 07:29:54'),
(41, '322', 'weqdq', '', '2022-07-04', 11, 'da', 'qwe', 'qwe', 'qweq', 'qwe', 'wew', 'WNI', 'qweq', '2022-07-23 07:30:44', '2022-07-23 07:30:44'),
(42, '123', 'qweqwe', '', '2022-07-18', 1123, 'eqq', 'Jalan Imam Bonjol Nomor 207, Pendrikan Kidul, Kecamatan Semarang Tengah, Kota Semarang', 'qe', 'qwe', 'Semarang', 'qew', 'WNI', 'qwe', '2022-07-23 07:41:43', '2022-07-23 07:41:43'),
(43, '121312', 'sbvhqv', '', '2000-02-12', 21, 'ss', 'fyufquy1', 'fqdwt', 'srtqdfyd', 'dqwtud', 'sdtqd', 'WNI', 'fsqd', '2022-07-23 13:27:39', '2022-07-23 13:27:39'),
(44, '5147836435108950', 'Bayu Pratama', '', '1991-03-12', 31, 'Pegawai Negri Sipil', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-07-24 16:36:28', '2022-07-24 16:36:28'),
(45, '3955433552518207', 'Hary Nurdin', '', '1990-01-09', 32, 'Pegawai Negri Sipil', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-07-27 01:27:13', '2022-07-27 01:27:13'),
(46, '7092978809477533', 'Sukarni', '', '1977-02-09', 45, 'Petani', 'Jl.Ghanesa IV no.150', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-07-27 02:27:29', '2022-07-27 02:27:29'),
(47, '5239435291176034', 'Sutrisno', '', '1972-06-27', 50, 'Petani', 'Jl.Ghanesa IV no.456', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-07-27 05:35:36', '2022-07-27 05:35:36'),
(48, '7242216391440488', 'Sujadi', '', '1967-07-02', 55, 'Petani', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-02 02:29:30', '2022-08-02 02:29:30'),
(49, '6647172044134662', 'Sukiyem', 'Padang', '1988-12-12', 34, 'Pegawai Negri Sipil', 'Jl.Ghanesa IV no.123', 'Purwosari', 'Kota Kudus', 'kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 07:37:10', '2022-08-04 07:37:10'),
(50, '3168899088608093', 'Juki', 'Kudus', '1967-12-12', 55, 'Penyiar Radio', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 09:31:58', '2022-08-04 09:31:58'),
(51, '9199954995012547', 'Jiluet', 'Kudus', '1999-02-12', 21, 'Pegawai Negri Sipil', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 09:43:26', '2022-08-04 09:43:26'),
(52, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 10:44:42', '2022-08-04 10:44:42'),
(53, '8232464226431276', 'Juliyah', 'Kudus', '2000-01-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 10:53:44', '2022-08-04 10:53:44'),
(54, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 11:10:50', '2022-08-04 11:10:50'),
(55, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 11:27:53', '2022-08-04 11:27:53'),
(56, '9404884393811136', 'Rizal', 'Kudus', '1998-03-21', 24, 'Pegawai Negri Sipil', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 13:41:31', '2022-08-04 13:41:31'),
(57, '9404884393811136', 'Rizal', 'Kudus', '1998-03-21', 24, 'Pegawai Negri Sipil', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 13:50:36', '2022-08-04 13:50:36'),
(58, '9404884393811136', 'Rizal', 'Kudus', '1989-03-21', 24, 'Pegawai Negri Sipil', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 13:57:58', '2022-08-04 13:57:58'),
(59, '9404884393811136', 'Rizal', 'Kudus', '1998-03-21', 24, 'Pegawai Negri Sipil', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 14:06:52', '2022-08-04 14:06:52'),
(60, '4367481702120527', 'Kusnanto', 'Kudus', '1972-07-23', 51, 'Penyiar Radio', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 15:22:49', '2022-08-04 15:22:49'),
(61, '4367461702120327', 'Fahrizal Abdul Fatah', 'Kudus', '1950-06-05', 72, 'Petani', 'Sekaran Purwosari Rt 01/ Rw 04', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 15:52:41', '2022-08-04 15:52:41'),
(62, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 16:14:39', '2022-08-04 16:14:39'),
(63, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 22, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 16:39:56', '2022-08-04 16:39:56'),
(64, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 23, 'Penyiar Radio', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 16:55:52', '2022-08-04 16:55:52'),
(65, '8232464226431276', 'Juliyah', 'Kudus', '2000-06-05', 23, 'Pegawai Negri Sipil', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 22:56:07', '2022-08-04 22:56:07'),
(66, '8232464226431276', 'Juliyah', 'Kudus', '2000-01-05', 23, 'Pegawai Negri Sipil', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa tengah', 'WNI', 'Indonesia', '2022-08-04 23:16:10', '2022-08-04 23:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` bigint(20) NOT NULL,
  `nik_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kawin` date NOT NULL,
  `kebangsaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nik_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `kewarganegaraan_ibu`, `tanggal_kawin`, `kebangsaan_ibu`, `created_at`, `updated_at`) VALUES
(1, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:12:17', '2022-07-22 20:12:17'),
(2, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:14:25', '2022-07-22 20:14:25'),
(3, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:15:33', '2022-07-22 20:15:33'),
(4, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:16:24', '2022-07-22 20:16:24'),
(5, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:17:14', '2022-07-22 20:17:14'),
(6, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:19:08', '2022-07-22 20:19:08'),
(7, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:22:53', '2022-07-22 20:22:53'),
(8, '21', 'sd', '', '2000-02-09', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2000-02-09', 'a', '2022-07-22 20:26:24', '2022-07-22 20:26:24'),
(9, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 00:56:55', '2022-07-23 00:56:55'),
(10, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 00:58:39', '2022-07-23 00:58:39'),
(11, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:00:14', '2022-07-23 01:00:14'),
(12, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:00:20', '2022-07-23 01:00:20'),
(13, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:01:20', '2022-07-23 01:01:20'),
(14, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:02:07', '2022-07-23 01:02:07'),
(15, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:02:33', '2022-07-23 01:02:33'),
(16, '323', 'qsd', '', '2012-12-12', 12, 'a', 'a', 'a', 'a', 'a', 'a', 'WNI', '2001-02-21', 'a', '2022-07-23 01:09:16', '2022-07-23 01:09:16'),
(17, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:12:10', '2022-07-23 01:12:10'),
(18, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:22:33', '2022-07-23 01:22:33'),
(19, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:23:08', '2022-07-23 01:23:08'),
(20, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:23:11', '2022-07-23 01:23:11'),
(21, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:23:48', '2022-07-23 01:23:48'),
(22, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:25:36', '2022-07-23 01:25:36'),
(23, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:26:41', '2022-07-23 01:26:41'),
(24, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:30:54', '2022-07-23 01:30:54'),
(25, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:32:43', '2022-07-23 01:32:43'),
(26, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:36:47', '2022-07-23 01:36:47'),
(27, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:39:46', '2022-07-23 01:39:46'),
(28, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:40:10', '2022-07-23 01:40:10'),
(29, '12', 'QW', '', '2022-07-06', 21, 'WQW', 'QWQ', 'QWQ', 'QW', 'QW', 'WQ', 'WNA', '2022-07-15', 'a', '2022-07-23 01:41:59', '2022-07-23 01:41:59'),
(30, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:06:44', '2022-07-23 07:06:44'),
(31, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:22:01', '2022-07-23 07:22:01'),
(32, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:22:39', '2022-07-23 07:22:39'),
(33, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:28:45', '2022-07-23 07:28:45'),
(34, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:29:54', '2022-07-23 07:29:54'),
(35, '122', 'as', '', '2022-07-22', 12, 'qwq', '12', 'as', 'as', 'as', 'as', 'WNI', '2022-07-05', 'as', '2022-07-23 07:30:44', '2022-07-23 07:30:44'),
(36, '1231', '3we', '', '2022-07-05', 12, 'awe', 'eq', 'eq', 'eq', 'qeq', 'qe', 'WNI', '2022-07-03', '13wqe', '2022-07-23 07:41:43', '2022-07-23 07:41:43'),
(37, '216346', 'hfsqhf', '', '2020-02-12', 12, 'qw', 'qwqw', 'qw', 'wqw', 'qwq', 'qwqqw', 'WNI', '2000-02-20', 'hjqsqu', '2022-07-23 13:27:39', '2022-07-23 13:27:39'),
(38, '8022290958397548', 'Siti Aminah', '', '1999-02-24', 23, 'Pegawai Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2020-06-24', 'Indonesia', '2022-07-24 16:36:28', '2022-07-24 16:36:28'),
(39, '2504834012168753', 'Sri hartini', '', '1998-06-09', 24, 'Pegawai Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-06-11', 'Indonesia', '2022-07-27 01:27:13', '2022-07-27 01:27:13'),
(40, '5158110359201183', 'Kustini', '', '1980-05-06', 32, 'Pegawai Swasta', 'Jl.Ghanesa IV no.150', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1993-05-06', 'Indonesia', '2022-07-27 02:27:29', '2022-07-27 02:27:29'),
(41, '4700179655474817', 'Sinthia', '', '1980-03-12', 32, 'Pegawai Swasta', 'Jl.Ghanesa IV no.456', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1998-06-27', 'Indonesia', '2022-07-27 05:35:36', '2022-07-27 05:35:36'),
(42, '7625520701231660', 'Karniah', '', '1960-06-14', 62, 'Pegawai Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1978-06-15', 'Indonesia', '2022-08-02 02:29:30', '2022-08-02 02:29:30'),
(43, '0203547017510484', 'Kartini', 'Kudus', '1999-07-31', 23, 'Pegawai Swasta', 'Jl.Ghanesa IV no.123', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNA', '2021-02-12', 'Indonesia', '2022-08-04 07:37:10', '2022-08-04 07:37:10'),
(44, '5267188533600260', 'Fahrizal Abdul Fatah', 'Kudus', '1981-12-12', 41, 'Petani', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1976-06-05', 'Indonesia', '2022-08-04 09:31:58', '2022-08-04 09:31:58'),
(45, '9899833559094351', 'Sinthia', 'Kudus', '1999-06-05', 22, 'Ibu rumah tangga', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2021-12-12', 'Indonesia', '2022-08-04 09:43:26', '2022-08-04 09:43:26'),
(46, '3438762091641196', 'Sumiyati', 'Kudus', '1999-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 10:44:42', '2022-08-04 10:44:42'),
(47, '3438762091641196', 'Sumiyati', 'Kudus', '1999-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 10:53:44', '2022-08-04 10:53:44'),
(48, '3438762091641196', 'Sumiyati', 'Kudus', '1999-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 11:10:50', '2022-08-04 11:10:50'),
(49, '3438762091641196', 'Sumiyati', 'Kudus', '1999-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 11:27:53', '2022-08-04 11:27:53'),
(50, '9416381296761671', 'Jumiati', 'Kudus', '2000-07-06', 23, 'Karyawan Swasta', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2020-04-04', 'Indonesia', '2022-08-04 13:41:31', '2022-08-04 13:41:31'),
(51, '9416381296761671', 'Jumiati', 'Kudus', '2000-07-06', 23, 'Karyawan Swasta', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2020-04-04', 'Indonesia', '2022-08-04 13:50:36', '2022-08-04 13:50:36'),
(52, '9416381296761671', 'Jumiati', 'Kudus', '2000-07-06', 23, 'Karyawan Swasta', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2020-04-04', 'Indonesia', '2022-08-04 13:57:58', '2022-08-04 13:57:58'),
(53, '9416381296761671', 'Jumiati', 'Kudus', '2000-08-06', 23, 'Pegawai Swasta', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2020-04-04', 'Indonesia', '2022-08-04 14:06:52', '2022-08-04 14:06:52'),
(54, '4116109157360607', 'Wahyuni', 'Kudus', '1980-02-02', 42, 'Petani', 'Sekaran Purwosari Rt 01/ Rw 01', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1945-07-19', 'Indonesia', '2022-08-04 15:22:49', '2022-08-04 15:22:49'),
(55, '4116109157350306', 'Jumiah', 'Kudus', '1950-03-12', 72, 'Petani', 'Sekaran Purwosari Rt 01/ Rw 04', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '1960-03-12', 'Indonesia', '2022-08-04 15:52:41', '2022-08-04 15:52:41'),
(56, '3438762091641196', 'Sumiyati', 'Kudus', '2000-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 16:14:39', '2022-08-04 16:14:39'),
(57, '3438762091641196', 'Sumiyati', 'Kudus', '1999-03-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 16:39:56', '2022-08-04 16:39:56'),
(58, '3438762091641196', 'Sumiyati', 'Kudus', '1999-02-12', 23, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 16:55:52', '2022-08-04 16:55:52'),
(59, '3438762091641196', 'Sumiyati', 'Kudus', '2000-02-12', 23, 'Pegawai Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 22:56:07', '2022-08-04 22:56:07'),
(60, '3438762091641196', 'Sumiyati', 'Kudus', '2000-02-12', 22, 'Karyawan Swasta', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', 'WNI', '2019-03-22', 'Indonesia', '2022-08-04 23:16:10', '2022-08-04 23:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenazah`
--

CREATE TABLE `jenazah` (
  `id_jenazah` bigint(20) NOT NULL,
  `nik_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_jenazah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_jenazah` date NOT NULL,
  `umur_jenazah` int(11) NOT NULL,
  `agama_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_jenazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenazah`
--

INSERT INTO `jenazah` (`id_jenazah`, `nik_jenazah`, `nama_jenazah`, `jenis_kelamin_jenazah`, `tempat_lahir_jenazah`, `tanggal_lahir_jenazah`, `umur_jenazah`, `agama_jenazah`, `alamat_jenazah`, `desa_jenazah`, `kecamatan_jenazah`, `kabupaten_jenazah`, `provinsi_jenazah`, `created_at`, `updated_at`) VALUES
(1, '2176436', 'fghmdtd', '', 'tfdskmf', '2000-02-12', 1213, 'Islam', 'wfqf', 'dqdtqd', 'csgcgs', 'csgqg', 'gsdqh', '2022-07-23 13:27:39', '2022-07-23 13:27:39'),
(2, '0692491812762260', 'Jumaidi', 'Laki-laki', 'Kudus', '2000-06-27', 22, 'Islam', 'Sekaran Purwosari Rt 05/ Rw 06', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 02:27:28', '2022-07-27 02:27:28'),
(3, '0150440774493955', 'Suginem', 'Perempuan', 'Kudus', '1970-06-09', 52, 'Islam', 'Purwosari Rt 05/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-02 02:29:30', '2022-08-02 02:29:30'),
(4, '1496640427625969', 'Tuminem', 'Laki-laki', 'Kudus', '1988-07-19', 34, 'Islam', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:26:47', '2022-08-04 09:26:47'),
(5, '1496640427625969', 'Tuminem', 'Laki-laki', 'Kudus', '1988-07-19', 34, 'Islam', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:31:58', '2022-08-04 09:31:58'),
(6, '8235122953065091', 'Yulianto', 'Laki-laki', 'Kudus', '1945-02-05', 77, 'Islam', 'Sekaran Purwosari Rt 04/ Rw 08', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 15:22:49', '2022-08-04 15:22:49'),
(7, '0644745434542456', 'Wasidi', 'Laki-laki', 'Kudus', '1967-12-23', 55, 'Islam', 'Jl.Ghanesa IV no.67', 'Purwosari', 'Kota Kudus', 'kudus', 'Jawa Tengah', '2022-08-04 15:52:41', '2022-08-04 15:52:41'),
(8, '6560943113862068', 'Sintia Bella', 'Perempuan', 'Jepara', '2012-12-12', 10, 'Islam', 'Jl.Ghanesa IV no.12', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:14:38', '2022-08-04 16:14:38'),
(9, '0412030585762882', 'Putro', 'Laki-laki', 'Kudus', '2013-06-07', 19, 'Islam', 'Sekaran Purwosari Rt 06/ Rw 09', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:39:56', '2022-08-04 16:39:56'),
(10, '3410012241835559', 'Tukijem', 'Laki-laki', 'Kudus', '2020-07-08', 2, 'Islam', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:55:52', '2022-08-04 16:55:52'),
(11, '5428950017805059', 'Tri Sutrisno', 'Laki-laki', 'Kudus', '2001-01-31', 21, 'Islam', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 22:56:07', '2022-08-04 22:56:07'),
(12, '6544370896973983', 'Kusnanto', 'Laki-laki', 'Kudus', '2012-03-12', 10, 'Islam', 'Purwosari Rt 05/ Rw 05', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 23:16:09', '2022-08-04 23:16:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` bigint(20) NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_id` bigint(20) NOT NULL,
  `ibu_id` bigint(20) NOT NULL,
  `ayah_id` bigint(20) NOT NULL,
  `saksi1_id` bigint(20) NOT NULL,
  `saksi2_id` bigint(20) NOT NULL,
  `status` int(10) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `file_pengantar_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_surat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_buku_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama_kk`, `no_kk`, `anak_id`, `ibu_id`, `ayah_id`, `saksi1_id`, `saksi2_id`, `status`, `user_id`, `file_pengantar_rt`, `file_kk`, `file_surat_lahir`, `file_buku_nikah`, `file_ktp_ayah`, `file_ktp_ibu`, `file_ktp_saksi1`, `file_ktp_saksi2`, `created_at`, `updated_at`) VALUES
(3, 'Wagirah', '7579302006230340', 48, 43, 49, 43, 43, 3, 7, 'Sfz-pengantar_rt.jpg', 'xoT-kk_dummy.jpg', '3RK-surat_kelahiran.jpg', 'do0-buku_nikah.jpg', 'jKK-ktp4.jpeg', 'jOx-ktp1.jpeg', 'ioL-ktp2.jpeg', 'sIy-ktp3.jpeg', '2022-05-04 07:37:11', '2022-08-06 06:01:13'),
(5, 'Bayu Aji', '7209154274898821', 50, 46, 52, 46, 46, 3, 6, '1li-pengantar_rt.jpg', 'PAB-kk_dummy.jpg', 'JOC-surat_kelahiran.jpg', '5FS-buku_nikah.jpg', '2Rb-ktp4.jpeg', '2V6-ktp1.jpeg', 'Pyc-ktp5.jpeg', 'TR9-ktp4.jpeg', '2022-05-04 10:44:42', '2022-08-06 06:01:18'),
(6, 'Bayu Aji', '6658268174399273', 51, 47, 53, 47, 47, 2, 6, 'hG4-pengantar_rt.jpg', 'afN-kk_dummy.jpg', 'xqK-surat_kelahiran.jpg', 'mZF-buku_nikah.jpg', 'kQU-ktp4.jpeg', 'Y9y-ktp1.jpeg', 'SJI-ktp2.jpeg', 'yW9-ktp3.jpeg', '2022-06-04 10:53:44', '2022-08-06 05:57:16'),
(7, 'Bayu Aji', '7209154274898821', 52, 48, 54, 48, 48, 2, 6, 'rxB-pengantar_rt.jpg', 'oh1-kk_dummy.jpg', 'JrV-surat_kelahiran.jpg', 'oMk-buku_nikah.jpg', 'ard-ktp4.jpeg', 'eQh-ktp1.jpeg', '78n-ktp2.jpeg', 'XFv-ktp5.jpeg', '2022-06-04 11:10:51', '2022-08-06 05:57:18'),
(8, 'Bayu Aji', '7209154274898821', 53, 49, 55, 49, 49, 2, 6, 'hXz-pengantar_rt.jpg', 'lDF-kk_dummy.jpg', 'Yqy-surat_kelahiran.jpg', 'kD3-buku_nikah.jpg', 'EYe-ktp4.jpeg', 'NBw-ktp1.jpeg', 'd8G-ktp5.jpeg', 'UU1-ktp3.jpeg', '2022-06-04 11:27:54', '2022-08-06 05:54:34'),
(9, 'Rizal', '0314120267097216', 54, 50, 56, 50, 50, 2, 4, 'QaF-pengantar_rt.jpg', 'UC7-kk_dummy.jpg', 'xN8-surat_kelahiran.jpg', 'Kuv-buku_nikah.jpg', 'ypd-ktp4.jpeg', 'yIX-ktp2.jpeg', 'fFd-ktp1.jpeg', 'o7o-ktp3.jpeg', '2022-07-04 13:41:32', '2022-08-06 05:54:35'),
(10, 'Rizal', '0314120267097216', 55, 51, 57, 51, 51, 2, 4, 'hyx-pengantar_rt.jpg', 'lZq-kk_dummy.jpg', 'Zyd-surat_kelahiran.jpg', 'M9t-buku_nikah.jpg', 'NKK-ktp4.jpeg', 'Nv5-ktp2.jpeg', 'k3r-ktp3.jpeg', 'SiD-ktp5.jpeg', '2022-07-04 13:50:36', '2022-08-06 05:54:36'),
(11, 'Rizal', '0314120267097216', 56, 52, 58, 52, 52, 2, 4, 'gut-pengantar_rt.jpg', 'YRD-kk_dummy.jpg', 'i9c-surat_kelahiran.jpg', 'Ihe-buku_nikah.jpg', 'vmf-ktp4.jpeg', 'ggS-ktp2.jpeg', 'pdZ-ktp1.jpeg', 'eZ4-ktp3.jpeg', '2022-08-04 13:57:58', '2022-08-06 05:54:37'),
(12, 'Rizal', '0314120267097216', 57, 53, 59, 53, 53, 2, 4, 'BIT-pengantar_rt.jpg', 'wBt-kk_dummy.jpg', '87p-surat_kelahiran.jpg', 'ZXK-buku_nikah.jpg', 'LVU-ktp4.jpeg', 'rqs-ktp1.jpeg', '4yi-ktp3.jpeg', 'dgq-ktp2.jpeg', '2022-08-04 14:06:52', '2022-08-06 05:54:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` bigint(20) NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `jam_kematian` time NOT NULL,
  `sebab_kematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_kematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menerangkan_kematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenazah_id` bigint(20) NOT NULL,
  `ibu_id` bigint(20) NOT NULL,
  `ayah_id` bigint(20) NOT NULL,
  `saksi1_id` bigint(20) NOT NULL,
  `saksi2_id` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `file_pengantar_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nama_kk`, `no_kk`, `tanggal_kematian`, `jam_kematian`, `sebab_kematian`, `tempat_kematian`, `menerangkan_kematian`, `jenazah_id`, `ibu_id`, `ayah_id`, `saksi1_id`, `saksi2_id`, `status`, `user_id`, `file_pengantar_rt`, `file_kk`, `file_ktp_ayah`, `file_ktp_ibu`, `file_ktp_saksi1`, `file_ktp_saksi2`, `created_at`, `updated_at`) VALUES
(2, 'Bayu Pratama', '3522589138966914', '2022-07-27', '01:10:00', 'Kecelakaan', 'Purwosari', 'Kepolisian', 2, 40, 46, 40, 40, 2, 4, 'E1h-pengantar_rt.jpg', '2vD-kk_dummy.jpg', 'oa6-ktp4.jpeg', 't3W-ktp1.jpeg', 'SeS-ktp5.jpeg', 'Kkp-ktp2.jpeg', '2022-05-27 02:27:30', '2022-08-06 05:54:40'),
(3, 'Wagirah', '2210228783573264', '2022-08-02', '01:00:00', 'Sakit biasa/tua', 'Kudus', 'Dokter', 3, 42, 48, 42, 42, 2, 7, '64Q-pengantar_rt.jpg', 'kds-kk_dummy.jpg', 'U7Z-ktp4.jpeg', 'Kim-ktp1.jpeg', 'C0M-ktp2.jpeg', 'kKE-ktp3.jpeg', '2022-05-02 02:29:31', '2022-08-06 05:54:41'),
(4, 'Wagirah', '3259815760521097', '2022-08-04', '00:00:00', 'Kecelakaan', 'Kudus', 'Kepolisian', 5, 44, 50, 44, 44, 2, 7, 'AgM-pengantar_rt.jpg', 'eAx-kk_dummy.jpg', '5NB-ktp4.jpeg', 'WUr-ktp1.jpeg', 'wUX-ktp3.jpeg', 'xEM-ktp2.jpeg', '2022-06-04 09:31:58', '2022-08-06 05:54:50'),
(5, 'Rizal', '0314120267097216', '2022-02-23', '05:06:00', 'Sakit biasa/tua', 'Kudus', 'Lainnya', 6, 54, 60, 54, 54, 2, 4, 'JP6-pengantar_rt.jpg', 'GYK-kk_dummy.jpg', 'FFp-ktp1.jpeg', '1nn-ktp2.jpeg', 'Miq-ktp4.jpeg', 'eZK-ktp3.jpeg', '2022-06-04 15:22:49', '2022-08-06 05:54:52'),
(6, 'Rizal', '0314120267097216', '2022-08-04', '23:11:00', 'Sakit biasa/tua', 'Kudus', 'Dokter', 7, 55, 61, 55, 55, 2, 4, 'AoB-pengantar_rt.jpg', '6ni-kk_dummy.jpg', 'Q02-ktp4.jpeg', 'QOC-ktp1.jpeg', 'cMk-ktp2.jpeg', 'f9Y-ktp3.jpeg', '2022-06-04 15:52:42', '2022-08-06 05:54:53'),
(7, 'Bayu Aji', '7209154274898821', '2022-08-04', '12:03:00', 'Kecelakaan', 'Jekulo', 'Kepolisian', 8, 56, 62, 56, 56, 2, 6, 'vSf-pengantar_rt.jpg', 'YY0-kk_dummy.jpg', 'xoB-ktp4.jpeg', 'qgr-ktp2.jpeg', 'yNY-ktp1.jpeg', 'ULW-ktp5.jpeg', '2022-07-04 16:14:39', '2022-08-06 05:54:54'),
(8, 'Bayu Aji', '7209154274898821', '2022-08-04', '05:06:00', 'Bunuh diri', 'Jati', 'Kepolisian', 9, 57, 63, 57, 57, 2, 6, '6Ba-pengantar_rt.jpg', 'abw-kk_dummy.jpg', 'z2p-ktp4.jpeg', 'ryB-ktp2.jpeg', 'L2s-ktp1.jpeg', 'rng-ktp3.jpeg', '2022-07-04 16:39:57', '2022-08-06 05:54:56'),
(9, 'Bayu Aji', '7209154274898821', '2022-08-04', '12:23:00', 'Kecelakaan', 'Getas Pejaten', 'Kepolisian', 10, 58, 64, 58, 58, 2, 6, 'adt-pengantar_rt.jpg', 'n5t-kk_dummy.jpg', '6zH-ktp4.jpeg', 'J2R-ktp1.jpeg', 'V03-ktp2.jpeg', 'gOz-ktp5.jpeg', '2022-08-04 16:55:52', '2022-08-06 05:54:57'),
(10, 'Bayu Aji', '7209154274898821', '2022-08-05', '07:08:00', 'Wabah penyakit', 'Kudus', 'Dokter', 11, 59, 65, 59, 59, 2, 6, 'fOf-pengantar_rt.jpg', 'KL1-kk_dummy.jpg', 'BH8-ktp4.jpeg', 'FYT-ktp1.jpeg', '0MF-ktp2.jpeg', 'EgV-ktp3.jpeg', '2022-08-04 22:56:08', '2022-08-06 05:54:59'),
(11, 'Bayu Aji', '7209154274898821', '2022-08-05', '06:07:00', 'Kecelakaan', 'Kudus', 'Dokter', 12, 60, 66, 60, 60, 2, 6, 'iL0-pengantar_rt.jpg', 'LC1-kk_dummy.jpg', 'L3R-ktp4.jpeg', '23U-ktp3.jpeg', 'KWB-ktp1.jpeg', 'n0r-ktp4.jpeg', '2022-08-04 23:16:10', '2022-08-06 05:55:00'),
(12, 'Bayu Aji', '7209154274898821', '2022-08-05', '06:07:00', 'Kecelakaan', 'Kudus', 'Dokter', 12, 61, 67, 62, 62, 3, 2, 'iL0-pengantar_rt.jpg', 'LC1-kk_dummy.jpg', 'L3R-ktp4.jpeg', '23U-ktp3.jpeg', 'KWB-ktp1.jpeg', 'n0r-ktp4.jpeg', '2022-08-04 23:16:10', '2022-08-06 05:55:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` bigint(20) NOT NULL,
  `pemohon_id` bigint(20) NOT NULL,
  `berlaku_mulai` date NOT NULL,
  `berlaku_sampai` date NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_lain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `file_pengantar_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `pemohon_id`, `berlaku_mulai`, `berlaku_sampai`, `keperluan`, `keterangan_lain`, `status`, `user_id`, `file_pengantar_rt`, `file_kk`, `file_ktp`, `created_at`, `updated_at`) VALUES
(2, 5, '2022-05-25', '2022-05-25', 'Mengambil BPKB Motor', 'Bahwa motor SUTRISNO ditahan oleh pegadaian', 2, 6, 'dCA-pengantar_rt.jpg', 'yn8-kk_dummy.jpg', 'XsR-ktp1.jpeg', '2022-05-24 16:41:24', '2022-08-06 05:55:50'),
(3, 6, '2022-05-27', '2022-05-27', 'Pembuatan surat tanah pada notaris', 'Membawa KTP dengan NIK : 3522589138966914', 2, 4, 'Rzc-pengantar_rt.jpg', '862-kk_dummy.jpg', 'ZtJ-ktp1.jpeg', '2022-05-27 01:33:43', '2022-08-06 05:55:52'),
(4, 7, '2022-06-01', '2022-06-01', 'Pembuatan SKCK', 'Membawa KTP dengan NIK : 8344069768001688', 2, 4, 'sGC-pengantar_rt.jpg', 'Doj-kk_dummy.jpg', 'KJg-ktp1.jpeg', '2022-06-01 13:18:19', '2022-08-06 05:55:54'),
(5, 8, '2022-06-01', '2022-06-01', 'Pembuatan SKCK', 'Membawa KTP dengan NIK : 9855233207899967', 2, 4, 'Or9-pengantar_rt.jpg', 'QnT-kk_dummy.jpg', 'BLM-ktp3.jpeg', '2022-06-01 13:28:54', '2022-08-06 05:55:55'),
(7, 10, '2022-07-01', '2022-07-01', 'Mengambil BPKB Mobil', 'Bahwa mobil DJOKO ditahan oleh pegadaian', 2, 4, '9cG-pengantar_rt.jpg', 'wnA-kk_dummy.jpg', 'QDi-ktp4.jpeg', '2022-06-01 13:59:59', '2022-08-06 05:55:56'),
(8, 12, '2022-07-01', '2022-07-01', 'Pembuatan KTP', 'Membawa KK dengan Nomor KK: 5439000596235268', 2, 4, 'kA4-pengantar_rt.jpg', 'zcT-kk_dummy.jpg', 'xXN-ktp4.jpeg', '2022-06-01 14:02:33', '2022-08-06 05:55:57'),
(9, 13, '2022-08-01', '2022-08-01', 'Pembuatan SKCK', 'Membawa KTP dengan NIK : 9367752261572392', 2, 4, 'dng-pengantar_rt.jpg', 'cBB-kk_dummy.jpg', 'GTh-ktp4.jpeg', '2022-06-01 14:14:10', '2022-08-06 05:55:59'),
(10, 14, '2022-08-01', '2022-08-01', 'Pembuatan surat tanah pada notaris', 'Membawa KTP dengan NIK : 7501772643768293', 2, 4, 'nhb-pengantar_rt.jpg', 'bR7-kk_dummy.jpg', 'GpV-ktp1.jpeg', '2022-07-01 14:18:58', '2022-08-06 05:56:00'),
(11, 15, '2022-08-01', '2022-08-01', 'Mengambil BPKB Motor', 'Bahwa motor SAMINTO ditahan oleh pegadaian', 2, 4, 'WT2-pengantar_rt.jpg', 'utx-kk_dummy.jpg', 'OnU-ktp5.jpeg', '2022-07-01 14:32:09', '2022-08-06 05:56:01'),
(12, 16, '2022-08-04', '2022-08-04', 'Pembuatan SKCK', 'Membawa KTP dengan NIK : 1453911865330149', 2, 7, '3WZ-pengantar_rt.jpg', '0BN-kk_dummy.jpg', 'VE7-ktp4.jpeg', '2022-08-04 07:29:10', '2022-08-06 05:56:02'),
(13, 17, '2022-08-04', '2022-08-04', 'Pembuatan SKTM', 'Bahwa bersangkutan dalam kondisi KURANG MAMPU', 2, 7, 'NAz-pengantar_rt.jpg', 'zjA-kk_dummy.jpg', 'sTX-ktp2.jpeg', '2022-08-04 08:42:33', '2022-08-06 05:56:03'),
(14, 18, '2022-08-04', '2022-08-04', 'Mengambil BPKB Mobil', 'Bahwa mobil WAGIRAH ditahan oleh pegadaian', 2, 7, 'DM5-pengantar_rt.jpg', 'pAc-kk_dummy.jpg', 'Uzp-ktp4.jpeg', '2022-08-04 09:05:20', '2022-08-04 09:05:20'),
(15, 19, '2022-08-01', '2022-08-16', 'jkjbwiu', 'jijguguisid', 3, 2, 'h6l-Jepretan Layar 2022-08-05 pukul 11.48.25 PM.png', 's23-Jepretan Layar 2022-08-05 pukul 11.48.25 PM.png', 'RCx-Jepretan Layar 2022-08-05 pukul 11.48.25 PM.png', '2022-08-07 15:25:01', '2022-08-07 17:53:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_akses`
--

CREATE TABLE `level_akses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_06_10_133146_create_surats_table', 1),
(6, '2022_06_10_133529_create_pengajuans_table', 1),
(7, '2022_06_10_133831_drop__surat_table', 1),
(8, '2022_06_10_133843_drop__pengajuan_table', 1),
(9, '2022_06_10_134538_up__pengajuan_table', 1),
(47, '2014_10_12_000000_create_users_table', 2),
(48, '2014_10_12_100000_create_password_resets_table', 2),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(50, '2022_07_13_070524_create_level_akses_table', 2),
(51, '2022_07_18_015809_create_kelahiran_table', 2),
(52, '2022_07_18_015822_create_ayah_table', 2),
(53, '2022_07_18_015829_create_ibu_table', 2),
(54, '2022_07_18_015836_create_anak_table', 2),
(55, '2022_07_18_015847_create_saksi1_table', 2),
(56, '2022_07_18_015851_create_saksi2_table', 2),
(57, '2022_07_23_163911_create_kematian_table', 3),
(58, '2022_07_23_164003_create_keterangan_table', 3),
(59, '2022_07_23_172217_create_pemohon_table', 3),
(60, '2022_07_23_172239_create_jenazah_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` bigint(20) NOT NULL,
  `nama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_pemohon` date NOT NULL,
  `agama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `nama_pemohon`, `jenis_kelamin_pemohon`, `tempat_lahir_pemohon`, `tanggal_lahir_pemohon`, `agama_pemohon`, `created_at`, `updated_at`) VALUES
(1, '2323', 'Laki-laki', '232as', '2022-07-12', 'Kristen', '2022-07-23 16:55:31', '2022-07-23 16:55:31'),
(2, '2323', 'Laki-laki', '232as', '2022-07-12', 'Kristen', '2022-07-23 16:56:42', '2022-07-23 16:56:42'),
(3, '2323', 'Laki-laki', '232as', '2022-07-12', 'Kristen', '2022-07-23 16:57:45', '2022-07-23 16:57:45'),
(4, '2323', 'Laki-laki', '232as', '2022-07-12', 'Kristen', '2022-07-23 16:58:12', '2022-07-23 16:58:12'),
(5, 'Fahrizal Abdul Fatah', 'Laki-laki', 'Kudus', '2000-04-14', 'Islam', '2022-07-24 16:41:24', '2022-07-24 16:41:24'),
(6, 'Hajah Tutik', 'Perempuan', 'Kudus', '1996-06-13', 'Hindu', '2022-07-27 01:33:43', '2022-07-27 01:33:43'),
(7, 'Dwi Hartono', 'Laki-laki', 'Pandeglang', '2000-06-19', 'Kristen', '2022-08-01 13:18:19', '2022-08-01 13:18:19'),
(8, 'Jumiyah', 'Perempuan', 'Kudus', '1995-06-01', 'Islam', '2022-08-01 13:28:54', '2022-08-01 13:28:54'),
(9, 'Antasari', 'Laki-laki', 'Kebumen', '2022-08-01', 'Kristen', '2022-08-01 13:39:07', '2022-08-01 13:39:07'),
(10, 'Djarwo', 'Laki-laki', 'Klaten', '1986-07-16', 'Islam', '2022-08-01 13:59:59', '2022-08-01 13:59:59'),
(11, 'Ahmad Dazel', 'Laki-laki', 'Kudus', '2005-06-13', 'Islam', '2022-08-01 14:02:19', '2022-08-01 14:02:19'),
(12, 'Ahmad Dazel', 'Laki-laki', 'Kudus', '2005-06-13', 'Islam', '2022-08-01 14:02:33', '2022-08-01 14:02:33'),
(13, 'Dwiki Wijayanto', 'Laki-laki', 'Kudus', '2002-06-13', 'Islam', '2022-08-01 14:14:10', '2022-08-01 14:14:10'),
(14, 'Fauzy Layla', 'Perempuan', 'Kudus', '1997-07-01', 'Islam', '2022-08-01 14:18:58', '2022-08-01 14:18:58'),
(15, 'Fauzy Indah', 'Perempuan', 'Kudus', '1990-06-05', 'Islam', '2022-08-01 14:32:09', '2022-08-01 14:32:09'),
(16, 'Juliyanto', 'Laki-laki', 'Kudus', '1990-06-05', 'Islam', '2022-08-04 07:29:10', '2022-08-04 07:29:10'),
(17, 'Jhony Deep', 'Laki-laki', 'Kudus', '2000-12-31', 'Islam', '2022-08-04 08:42:32', '2022-08-04 08:42:32'),
(18, 'Mulyadi', 'Laki-laki', 'Pandeglang', '1999-06-01', 'Islam', '2022-08-04 09:05:20', '2022-08-04 09:05:20'),
(19, 'Sri Nurhayati', 'Perempuan', 'fuy', '2022-08-02', 'Islam', '2022-08-07 15:25:01', '2022-08-07 18:05:48'),
(20, 'Sri Nurhayati', 'Laki-laki', 'fuy', '2022-08-02', 'Islam', '2022-08-07 15:47:12', '2022-08-07 15:47:12'),
(21, 'Sri Nurhayatiiii', 'Laki-laki', 'fuy', '2022-08-02', 'Islam', '2022-08-07 15:47:40', '2022-08-07 15:47:40'),
(22, 'Sri NurhayatiSSS', 'Laki-laki', 'fuy', '2022-08-02', 'Islam', '2022-08-07 15:57:38', '2022-08-07 15:57:38'),
(23, 'Sri NurhayatiIII', 'Laki-laki', 'fuy', '2022-08-02', 'Islam', '2022-08-07 16:07:17', '2022-08-07 16:07:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi1`
--

CREATE TABLE `saksi1` (
  `id_saksi1` bigint(20) NOT NULL,
  `nik_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_saksi1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_saksi1` date NOT NULL,
  `umur_saksi1` int(11) NOT NULL,
  `pekerjaan_saksi1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_saksi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saksi1`
--

INSERT INTO `saksi1` (`id_saksi1`, `nik_saksi1`, `nama_saksi1`, `tempat_lahir_saksi1`, `tanggal_lahir_saksi1`, `umur_saksi1`, `pekerjaan_saksi1`, `alamat_saksi1`, `desa_saksi1`, `kecamatan_saksi1`, `kabupaten_saksi1`, `provinsi_saksi1`, `created_at`, `updated_at`) VALUES
(1, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:12:17', '2022-07-22 20:12:17'),
(2, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:14:25', '2022-07-22 20:14:25'),
(3, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:15:33', '2022-07-22 20:15:33'),
(4, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:16:24', '2022-07-22 20:16:24'),
(5, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:17:14', '2022-07-22 20:17:14'),
(6, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:19:08', '2022-07-22 20:19:08'),
(7, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:22:53', '2022-07-22 20:22:53'),
(8, '221', 'a', '', '0000-00-00', 1, '', 'sa', 'asa', 'as', 'asa', 'as', '2022-07-22 20:26:24', '2022-07-22 20:26:24'),
(9, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 00:56:55', '2022-07-23 00:56:55'),
(10, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 00:58:39', '2022-07-23 00:58:39'),
(11, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:00:14', '2022-07-23 01:00:14'),
(12, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:00:20', '2022-07-23 01:00:20'),
(13, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:01:20', '2022-07-23 01:01:20'),
(14, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:02:07', '2022-07-23 01:02:07'),
(15, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:02:33', '2022-07-23 01:02:33'),
(16, '121', 'asa', '', '0000-00-00', 21, '', 'ass', 'as', 'asa', 'as', 'ad`a', '2022-07-23 01:09:16', '2022-07-23 01:09:16'),
(17, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:12:10', '2022-07-23 01:12:10'),
(18, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:22:33', '2022-07-23 01:22:33'),
(19, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:23:08', '2022-07-23 01:23:08'),
(20, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:23:11', '2022-07-23 01:23:11'),
(21, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:23:48', '2022-07-23 01:23:48'),
(22, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:25:36', '2022-07-23 01:25:36'),
(23, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:26:41', '2022-07-23 01:26:41'),
(24, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:30:54', '2022-07-23 01:30:54'),
(25, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:32:43', '2022-07-23 01:32:43'),
(26, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:36:47', '2022-07-23 01:36:47'),
(27, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:39:46', '2022-07-23 01:39:46'),
(28, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:40:10', '2022-07-23 01:40:10'),
(29, '21', 'QW', '', '0000-00-00', 12, '', '`QWEQ', '`QW1', 'WQ`Q`', 'Q1', 'WQ', '2022-07-23 01:41:59', '2022-07-23 01:41:59'),
(30, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:06:44', '2022-07-23 07:06:44'),
(31, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:22:01', '2022-07-23 07:22:01'),
(32, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:22:39', '2022-07-23 07:22:39'),
(33, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:28:45', '2022-07-23 07:28:45'),
(34, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:29:54', '2022-07-23 07:29:54'),
(35, '23123', 'qweqe', '', '0000-00-00', 21, '', 'eqd', 'qweq', 'qdd', 'dqd', 'dq', '2022-07-23 07:30:44', '2022-07-23 07:30:44'),
(36, '3131', 'eqweqw', '', '0000-00-00', 31, '', 'qwe', 'eqweqw', 'qweqwe', 'qweqeq', 'qewq', '2022-07-23 07:41:43', '2022-07-23 07:41:43'),
(37, '21231', 'qyfsyqfy', '', '0000-00-00', 12, '', 'dqutwq', 'qtdwq', 'qtdtq', 'dstd', 'wtq', '2022-07-23 13:27:39', '2022-07-23 13:27:39'),
(38, '8671665135086902', 'Siti Azizah', '', '0000-00-00', 24, '', 'Purwosari Rt 01/ Rw 11', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-24 16:36:28', '2022-07-24 16:36:28'),
(39, '8060997865641751', 'Nasrudin', '', '0000-00-00', 27, '', 'Purwosari Rt 01/ Rw 11', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 01:27:13', '2022-07-27 01:27:13'),
(40, '0298275769751291', 'Jhony Kurniawan', '', '0000-00-00', 34, '', 'Sekaran Rt 03/ Rw 02', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 02:27:29', '2022-07-27 02:27:29'),
(41, '8447428795358590', 'Hany Surtani', '', '0000-00-00', 34, '', 'Jl.BIma 5 no.243', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 05:35:36', '2022-07-27 05:35:36'),
(42, '2069983179194636', 'Saefuri', '', '0000-00-00', 32, '', 'Sekaran Rt 03/ Rw 02', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-02 02:29:31', '2022-08-02 02:29:31'),
(43, '2348075347659678', 'Naryo', 'Kudus', '2000-12-12', 21, 'Pegawai Swasta', 'Jl. Ganesha II no.345', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 07:37:10', '2022-08-04 07:37:10'),
(44, '9339250086539781', 'Tukiyem', 'Kupang', '1999-06-06', 23, 'Wiraswasta', 'Purwosari Rt 01/ Rw 11', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:31:58', '2022-08-04 09:31:58'),
(45, '2349512586819747', 'RIda', 'Kudus', '1998-03-12', 23, 'Pegawai Swasta', 'Jl.Ghanesa IV no.32', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:43:26', '2022-08-04 09:43:26'),
(46, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 10:44:42', '2022-08-04 10:44:42'),
(47, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 10:53:44', '2022-08-04 10:53:44'),
(48, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 11:10:50', '2022-08-04 11:10:50'),
(49, '5032111739747794', 'Karina', 'Bandung', '2001-01-21', 22, 'Pegawai Swasta', 'Jl.Ghanesa IV no.150', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 11:27:54', '2022-08-04 11:27:54'),
(50, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 22, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:41:31', '2022-08-04 13:41:31'),
(51, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 22, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:50:36', '2022-08-04 13:50:36'),
(52, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 22, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:57:58', '2022-08-04 13:57:58'),
(53, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 23, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 14:06:52', '2022-08-04 14:06:52'),
(54, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 23, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 15:22:49', '2022-08-04 15:22:49'),
(55, '0823332875705858', 'Hartini', 'Kupang', '2000-08-06', 23, 'Siswa /mahasiswa', 'jl.BIma 5 no.8', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 15:52:41', '2022-08-04 15:52:41'),
(56, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:14:39', '2022-08-04 16:14:39'),
(57, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 23, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:39:56', '2022-08-04 16:39:56'),
(58, '9483356763761546', 'Anton', 'Kudus', '2000-07-05', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:55:52', '2022-08-04 16:55:52'),
(59, '6941972902113593', 'Hidyatul', 'Kudus', '2000-12-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 22:56:08', '2022-08-04 22:56:08'),
(60, '6941972902113593', 'Hidyatul', 'Kudus', '2000-11-23', 22, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.67', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 23:16:10', '2022-08-04 23:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi2`
--

CREATE TABLE `saksi2` (
  `id_saksi2` bigint(20) NOT NULL,
  `nik_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_saksi2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir_saksi2` date NOT NULL,
  `umur_saksi2` int(11) NOT NULL,
  `pekerjaan_saksi2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_saksi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saksi2`
--

INSERT INTO `saksi2` (`id_saksi2`, `nik_saksi2`, `nama_saksi2`, `tempat_lahir_saksi2`, `tanggal_lahir_saksi2`, `umur_saksi2`, `pekerjaan_saksi2`, `alamat_saksi2`, `desa_saksi2`, `kecamatan_saksi2`, `kabupaten_saksi2`, `provinsi_saksi2`, `created_at`, `updated_at`) VALUES
(1, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:12:17', '2022-07-22 20:12:17'),
(2, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:14:25', '2022-07-22 20:14:25'),
(3, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:15:33', '2022-07-22 20:15:33'),
(4, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:16:24', '2022-07-22 20:16:24'),
(5, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:17:14', '2022-07-22 20:17:14'),
(6, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:19:08', '2022-07-22 20:19:08'),
(7, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:22:53', '2022-07-22 20:22:53'),
(8, '22', 'sa', '', '0000-00-00', 12, '', 'as', 'as', 'as', 'as', 'as', '2022-07-22 20:26:24', '2022-07-22 20:26:24'),
(9, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 00:56:55', '2022-07-23 00:56:55'),
(10, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 00:58:39', '2022-07-23 00:58:39'),
(11, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:00:14', '2022-07-23 01:00:14'),
(12, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:00:20', '2022-07-23 01:00:20'),
(13, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:01:20', '2022-07-23 01:01:20'),
(14, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:02:07', '2022-07-23 01:02:07'),
(15, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:02:33', '2022-07-23 01:02:33'),
(16, '121', 'ad', '', '0000-00-00', 21, '', 'as', 'asa1', 'asd', 'as`', 'as', '2022-07-23 01:09:16', '2022-07-23 01:09:16'),
(17, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:12:10', '2022-07-23 01:12:10'),
(18, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:22:33', '2022-07-23 01:22:33'),
(19, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:23:08', '2022-07-23 01:23:08'),
(20, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:23:11', '2022-07-23 01:23:11'),
(21, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:23:48', '2022-07-23 01:23:48'),
(22, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:25:36', '2022-07-23 01:25:36'),
(23, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:26:41', '2022-07-23 01:26:41'),
(24, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:30:54', '2022-07-23 01:30:54'),
(25, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:32:43', '2022-07-23 01:32:43'),
(26, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:36:47', '2022-07-23 01:36:47'),
(27, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:39:46', '2022-07-23 01:39:46'),
(28, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:40:10', '2022-07-23 01:40:10'),
(29, '121', 'WQW', '', '0000-00-00', 12, '', 'QW`', 'qw', 'sq', 'qsa', 'asaq', '2022-07-23 01:41:59', '2022-07-23 01:41:59'),
(30, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:06:44', '2022-07-23 07:06:44'),
(31, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:22:01', '2022-07-23 07:22:01'),
(32, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:22:39', '2022-07-23 07:22:39'),
(33, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:28:45', '2022-07-23 07:28:45'),
(34, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:29:54', '2022-07-23 07:29:54'),
(35, '2e131', 'da', '', '0000-00-00', 31, '', 'eqd', 'ad', 'qeq', 'adsd', 'dsqd', '2022-07-23 07:30:44', '2022-07-23 07:30:44'),
(36, '1333', 'weqqe', '', '0000-00-00', 13, '', 'eqqqwe', '31', 'qweq1', 'ee1', 'eqqe', '2022-07-23 07:41:43', '2022-07-23 07:41:43'),
(37, '1213', 'sfqy', '', '0000-00-00', 12, '', 'stdtqdu', 'sdtuqtd', 'stdw', 'sdwtu', 'dtutd', '2022-07-23 13:27:39', '2022-07-23 13:27:39'),
(38, '2976325548717687', 'Sutrisno', '', '0000-00-00', 65, '', 'Purwosari Rt 04/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-24 16:36:28', '2022-07-24 16:36:28'),
(39, '9364453354233583', 'Nur Aliyah', '', '0000-00-00', 28, '', 'Purwosari Rt 04/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 01:27:14', '2022-07-27 01:27:14'),
(40, '7140952648306937', 'Siti Maemunah', '', '0000-00-00', 36, '', 'Sekaran Rt 03/ Rw 02', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 02:27:30', '2022-07-27 02:27:30'),
(41, '6094146014623427', 'Wartini', '', '0000-00-00', 32, '', 'Jl.Ghanesa IV no.423', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-07-27 05:35:36', '2022-07-27 05:35:36'),
(42, '9844613934878803', 'Kitman', '', '0000-00-00', 34, '', 'Purwosari Rt 04/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-02 02:29:31', '2022-08-02 02:29:31'),
(43, '3324257043339518', 'Fahrizal Abdul Fatah', 'Kudus', '2000-03-21', 22, 'Siswa / mahasiswa', 'jl.BIma 5 no.243', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 07:37:10', '2022-08-04 07:37:10'),
(44, '1460761486652176', 'Jumiyati', 'Kuta', '1998-05-04', 24, 'Karyawan Swasta', 'Purwosari Rt 04/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:31:58', '2022-08-04 09:31:58'),
(45, '2782864723578115', 'Jumiyati', 'Kudus', '1997-06-05', 24, 'Karyawan Swasta', 'Jl. Ganesha II', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 09:43:26', '2022-08-04 09:43:26'),
(46, '9483356763761546', 'Anton', 'Kudus', '2000-07-05', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 10:44:42', '2022-08-04 10:44:42'),
(47, '9483356763761546', 'Anton', 'Kudus', '2000-07-05', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 10:53:44', '2022-08-04 10:53:44'),
(48, '9483356763761546', 'Anton', 'Kudus', '2000-07-05', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 11:10:50', '2022-08-04 11:10:50'),
(49, '6709162505020408', 'Hima Wati', 'Kudus', '1990-12-21', 30, 'Wiraswasta', 'Jl.Ghanesa IV no.150', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 11:27:54', '2022-08-04 11:27:54'),
(50, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-02-04', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:41:31', '2022-08-04 13:41:31'),
(51, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-02-04', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:50:36', '2022-08-04 13:50:36'),
(52, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-02-04', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 13:57:58', '2022-08-04 13:57:58'),
(53, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-02-04', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 14:06:52', '2022-08-04 14:06:52'),
(54, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-02-04', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 15:22:49', '2022-08-04 15:22:49'),
(55, '2089839266276608', 'Jumiatun', 'Bekasi', '2000-08-06', 23, 'Ibu Rumah Tangga', 'Jl. Ganesha II no 87', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 15:52:42', '2022-08-04 15:52:42'),
(56, '9483356763761546', 'Anton', 'Kudus', '2000-07-05', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:14:39', '2022-08-04 16:14:39'),
(57, '9483356763761546', 'Fahrizal Abdul Fatah', 'Anton', '2000-07-05', 23, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:39:56', '2022-08-04 16:39:56'),
(58, '6941972902113593', 'Hidyatul', 'Kudus', '1999-12-23', 23, 'Ibu Rumah Tangga', 'Jl.Ghanesa IV no.56', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 16:55:52', '2022-08-04 16:55:52'),
(59, '9483356763761546', 'Anton', 'Kudus', '2000-12-23', 22, 'Karyawan Swasta', 'Purwosari Rt 09/ Rw 07', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 22:56:08', '2022-08-04 22:56:08'),
(60, '9483356763761546', 'Anton', 'Kudus', '2000-12-23', 22, 'Wiraswasta', 'Jl.Ghanesa IV no.81a', 'Purwosari', 'Kota Kudus', 'Kudus', 'Jawa Tengah', '2022-08-04 23:16:10', '2022-08-04 23:16:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name_user`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Fahrizal', 'fah333@gmail.com', 'admin123', 3, '2022-07-22 18:19:22', '2022-08-07 18:46:02'),
(3, 'Fahrizal', 'fah444@gmail.com', '$2y$10$YjA0dtVN7cD8o0xg4zx4UupJa8fAJJPh2.JZ6Mxc57yCNgaa1oKEi', 2, '2022-07-24 14:26:54', '2022-07-24 14:26:54'),
(4, 'rizal', 'rizal@mail.com', '$2y$10$fd44KIP7xTGGykqrD7A41e/glLV6jX581.g6INYhbSzJNBcBwNo3u', 3, '2022-07-24 15:58:02', '2022-07-24 15:58:02'),
(5, 'Fahrizal Abdul Fatah', 'fahrizal123@gmail.com', '$2y$10$eu2XAQGQdVhfRuDOMizBp.EaNOfC6Y40ZlACdjyQtv2Liq7Z1AONW', 2, '2022-07-24 16:05:20', '2022-07-24 16:05:20'),
(6, 'Bayu Pratama', 'bayu657@gmail.com', '$2y$10$KTKTfUVrJ1LBQ.KOYQA9XurjTuLzZXMD3cJGa35a5coHnrSS559ye', 3, '2022-07-24 16:18:15', '2022-07-24 16:18:15'),
(7, 'Wagirah', 'wagirah@mail.com', '$2y$10$upkpyd66tc2UqCL9jFmPmODw9wL2X6RTS1kF9qesuCv1osGSHvqa2', 3, '2022-08-02 02:15:04', '2022-08-02 02:15:04'),
(8, 'Fahrizal', 'fahri1@gmail.com', '$2y$10$vajRY/lsZd5hITriDmv4xelxIaVt/6L8.3ubjnAYH5foqQBS4Kwju', 1, '2022-08-05 08:25:49', '2022-08-05 08:25:49'),
(9, 'Oke', 'murjono@gmail.com', '$2y$10$f2u2/ZnERwvJ2NI5pCKRZeXaLqlSFQiipvv4jyfkxNueGGmuB3VyW', 3, '2022-08-06 05:47:41', '2022-08-07 18:48:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `ayah`
--
ALTER TABLE `ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `jenazah`
--
ALTER TABLE `jenazah`
  ADD PRIMARY KEY (`id_jenazah`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `FK_anak` (`anak_id`),
  ADD KEY `FK_ayah` (`ayah_id`),
  ADD KEY `FK_ibu` (`ibu_id`),
  ADD KEY `FK_saksi1` (`saksi1_id`),
  ADD KEY `FK_saksi2` (`saksi2_id`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `FK_jenazah` (`jenazah_id`);

--
-- Indeks untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`),
  ADD KEY `FK_pemohon` (`pemohon_id`);

--
-- Indeks untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `saksi1`
--
ALTER TABLE `saksi1`
  ADD PRIMARY KEY (`id_saksi1`);

--
-- Indeks untuk tabel `saksi2`
--
ALTER TABLE `saksi2`
  ADD PRIMARY KEY (`id_saksi2`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `ayah`
--
ALTER TABLE `ayah`
  MODIFY `id_ayah` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `jenazah`
--
ALTER TABLE `jenazah`
  MODIFY `id_jenazah` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `saksi1`
--
ALTER TABLE `saksi1`
  MODIFY `id_saksi1` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `saksi2`
--
ALTER TABLE `saksi2`
  MODIFY `id_saksi2` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `FK_anak` FOREIGN KEY (`anak_id`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ayah` FOREIGN KEY (`ayah_id`) REFERENCES `ayah` (`id_ayah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ibu` FOREIGN KEY (`ibu_id`) REFERENCES `ibu` (`id_ibu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_saksi1` FOREIGN KEY (`saksi1_id`) REFERENCES `saksi1` (`id_saksi1`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_saksi2` FOREIGN KEY (`saksi2_id`) REFERENCES `saksi2` (`id_saksi2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD CONSTRAINT `FK_jenazah` FOREIGN KEY (`jenazah_id`) REFERENCES `jenazah` (`id_jenazah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  ADD CONSTRAINT `FK_pemohon` FOREIGN KEY (`pemohon_id`) REFERENCES `pemohon` (`id_pemohon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
