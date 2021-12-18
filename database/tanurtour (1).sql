-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2021 pada 12.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanurtour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelanggans`
--

CREATE TABLE `datapelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapelanggans`
--

INSERT INTO `datapelanggans` (`id`, `namalengkap`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `ktp`, `telp`, `no_passport`, `alamat`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rizqi meisani', 'Laki-laki', 'tegal', '2021-08-26', '333333333341', '01433523143', '42532546', 'tegal', NULL, '2021-08-14 16:41:57', '2021-08-14 16:41:57'),
(2, 'rizqi meisani', 'Laki-laki', 'tegal', '2021-08-26', '333333333341', '01433523143', '42532546', 'tegal', '2021-08-14 16:42:48', '2021-08-14 16:42:12', '2021-08-14 16:42:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_travels_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `paket_travels_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/galeris/UOppul4Bk572SxGNraMVGnE4wlrEKfPirW6xaGPv.png', NULL, '2021-07-17 05:31:49', '2021-07-17 05:31:49'),
(2, 2, 'assets/galeris/RiB0h94UL7fP4CyGbJ51ZqB6toAKU7T2O13JyOH8.png', NULL, '2021-07-17 05:32:10', '2021-07-17 05:32:10'),
(3, 2, 'assets/galeris/UDaqXJgF1w3Od3I3GrmwoGH7G27ypmK3rm1cPPiL.png', '2021-08-14 08:27:13', '2021-07-17 05:33:38', '2021-08-14 08:27:13'),
(4, 3, 'assets/galeris/IsfrtWs3jOF86EY2Yy0SiEAXESF4aAQapmQBELwS.png', NULL, '2021-07-17 05:34:20', '2021-07-17 05:34:20'),
(5, 4, 'assets/galeris/sHXcz8B44MNzbrFUZA3N8BNixTs0uVA0Or2zdIek.png', NULL, '2021-08-14 08:28:21', '2021-08-14 08:28:21');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_06_29_142101_create_paket_travels_table', 1),
(14, '2021_06_29_143327_create_galeris_table', 1),
(15, '2021_06_29_143703_create_transaksis_table', 1),
(16, '2021_06_29_150108_create_transaksi_details_table', 1),
(17, '2021_06_30_005426_add_roles_field_to_users_table', 1),
(18, '2021_07_01_003018_add_username_field_to_users_table', 1),
(36, '2021_08_09_131726_create_datapelanggans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_travels`
--

CREATE TABLE `paket_travels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapaket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maskapai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenispaket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `programhari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket_travels`
--

INSERT INTO `paket_travels` (`id`, `title`, `slug`, `namapaket`, `deskripsi`, `hotel`, `maskapai`, `jenispaket`, `tgl_berangkat`, `programhari`, `bandara`, `kamar`, `type`, `harga`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Paket Umrah', 'paket-umrah', 'EASY UMRAH NEW NORMAL 2021', 'EASY UMRAH NEW NORMAL 2021', 'leemakkah', 'citilink', 'new normal', '2021-07-31', '10 hari', 'soekarno hatta', '1 kamar', 'umrah', 31000000, NULL, '2021-07-17 05:28:40', '2021-07-17 05:28:40'),
(2, 'paket wisata 1', 'paket-wisata-1', 'Istanbul', '--kosong--', 'leemakkah', 'citilink', 'easy', '2021-07-27', '10 hari', 'soekarno hatta', '2 kamar', 'open trip', 25000000, NULL, '2021-07-17 05:29:39', '2021-08-14 08:28:05'),
(3, 'Paket Haji', 'paket-haji', 'EASY HAJI NEW NORMAL 2021', '--kosong--', 'madinah', 'citilink', 'new normal', '2022-06-23', '30 hari', 'soekarno hatta', '1 kamar', 'haji', 100000000, NULL, '2021-07-17 05:31:14', '2021-07-17 05:31:14'),
(4, 'paket wisata 2', 'paket-wisata-2', 'kairo', 'ada data', 'alliswell', 'citilink', 'easy', '2021-07-20', '10 hari', 'soekarno hatta', '2 kamar', 'family trip', 30000000, NULL, '2021-07-17 05:33:19', '2021-08-14 08:27:53'),
(5, 'Paket Umrah 2', 'paket-umrah-2', 'EASY HAJI NEW NORMAL 2021', 'kosong', 'madinah', 'citilink', 'easy', '2021-09-02', '10 hari', 'soekarno hatta', '1 kamar', 'umrah', 20000000, '2021-08-16 00:04:57', '2021-08-16 00:04:32', '2021-08-16 00:04:57');

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
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_travels_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `tambah_visa` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `sukses_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `paket_travels_id`, `users_id`, `tambah_visa`, `total_transaksi`, `sukses_transaksi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 0, 31000000, 'SUCCESS', '2021-08-12 06:08:07', '2021-07-17 05:35:45', '2021-08-12 06:08:07'),
(2, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:08:04', '2021-07-17 06:08:21', '2021-08-12 06:08:04'),
(3, 3, 3, 0, 100000000, 'PENDING', '2021-08-12 06:07:36', '2021-07-21 06:41:08', '2021-08-12 06:07:36'),
(4, 1, 3, 0, 62000000, 'IN_CART', '2021-08-12 06:07:39', '2021-08-05 23:56:39', '2021-08-12 06:07:39'),
(5, 2, 3, 0, 25000000, 'IN_CART', '2021-08-12 06:07:41', '2021-08-08 04:57:47', '2021-08-12 06:07:41'),
(6, 3, 3, 0, 100000000, 'IN_CART', '2021-08-12 06:07:43', '2021-08-08 05:03:05', '2021-08-12 06:07:43'),
(7, 3, 3, 0, 100000000, 'IN_CART', '2021-08-12 06:07:45', '2021-08-08 06:17:02', '2021-08-12 06:07:45'),
(8, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:24', '2021-08-09 06:04:41', '2021-08-12 06:07:24'),
(9, 3, 3, 0, 100000000, 'PENDING', '2021-08-12 06:07:25', '2021-08-09 06:07:16', '2021-08-12 06:07:25'),
(10, 3, 3, 0, 100000000, 'IN_CART', '2021-08-12 06:07:46', '2021-08-09 20:07:57', '2021-08-12 06:07:46'),
(11, 3, 3, 0, 100000000, 'IN_CART', '2021-08-12 06:07:26', '2021-08-09 20:08:00', '2021-08-12 06:07:26'),
(12, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:28', '2021-08-10 09:00:01', '2021-08-12 06:07:28'),
(13, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:29', '2021-08-11 06:45:57', '2021-08-12 06:07:29'),
(14, 2, 3, 0, 25000000, 'PENDING', '2021-08-12 06:07:31', '2021-08-11 07:05:39', '2021-08-12 06:07:31'),
(15, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:08:01', '2021-08-11 07:12:09', '2021-08-12 06:08:01'),
(16, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:59', '2021-08-11 07:39:16', '2021-08-12 06:07:59'),
(17, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:56', '2021-08-11 08:13:29', '2021-08-12 06:07:56'),
(18, 3, 3, 0, 100000000, 'PENDING', '2021-08-12 06:07:53', '2021-08-11 08:22:02', '2021-08-12 06:07:53'),
(19, 2, 3, 0, 25000000, 'PENDING', '2021-08-12 06:07:51', '2021-08-12 04:41:20', '2021-08-12 06:07:51'),
(20, 3, 3, 0, 100000000, 'PENDING', '2021-08-12 06:07:49', '2021-08-12 04:47:39', '2021-08-12 06:07:49'),
(21, 1, 3, 0, 31000000, 'PENDING', '2021-08-12 06:07:23', '2021-08-12 05:05:10', '2021-08-12 06:07:23'),
(22, 2, 3, 0, 25000000, 'SUCCESS', NULL, '2021-08-12 06:08:38', '2021-08-16 00:05:53'),
(23, 1, 3, 0, 31000000, 'PENDING', NULL, '2021-08-12 06:25:31', '2021-08-12 06:25:37'),
(24, 1, 3, 0, 31000000, 'PENDING', NULL, '2021-08-12 08:00:25', '2021-08-12 08:00:31'),
(25, 1, 3, 0, 31000000, 'PENDING', NULL, '2021-08-12 08:14:34', '2021-08-12 08:14:41'),
(26, 2, 3, 0, 25000000, 'PENDING', NULL, '2021-08-12 08:16:49', '2021-08-12 08:16:54'),
(27, 1, 1, 0, 31000000, 'IN_CART', '2021-08-12 08:54:05', '2021-08-12 08:53:33', '2021-08-12 08:54:05'),
(28, 2, 5, 0, 25000000, 'IN_CART', NULL, '2021-08-13 06:48:06', '2021-08-13 06:48:06'),
(29, 1, 5, 2200000, 64200000, 'PENDING', NULL, '2021-08-13 07:06:13', '2021-08-13 08:11:29'),
(30, 2, 5, 0, 25000000, 'PENDING', NULL, '2021-08-13 08:16:00', '2021-08-13 08:16:06'),
(31, 1, 1, 0, 31000000, 'PENDING', NULL, '2021-08-14 16:17:29', '2021-08-14 16:18:33'),
(32, 1, 3, 1100000, 63100000, 'IN_CART', NULL, '2021-08-15 23:56:50', '2021-08-15 23:57:26'),
(33, 1, 3, 0, 31000000, 'IN_CART', NULL, '2021-08-16 00:06:30', '2021-08-16 00:06:30'),
(34, 1, 3, 0, 31000000, 'PENDING', NULL, '2021-08-16 00:13:24', '2021-08-16 00:13:54'),
(35, 1, 3, 0, 31000000, 'IN_CART', NULL, '2021-08-16 00:24:20', '2021-08-16 00:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_details`
--

CREATE TABLE `transaksi_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksis_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebangsaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi_details`
--

INSERT INTO `transaksi_details` (`id`, `transaksis_id`, `username`, `kebangsaan`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'afizah', 'ID', 0, '2026-07-17', NULL, '2021-07-17 05:35:45', '2021-07-17 05:35:45'),
(2, 2, 'afizah', 'ID', 0, '2026-07-17', NULL, '2021-07-17 06:08:21', '2021-07-17 06:08:21'),
(3, 3, 'afizah', 'ID', 0, '2026-07-21', NULL, '2021-07-21 06:41:08', '2021-07-21 06:41:08'),
(4, 4, 'afizah', 'ID', 0, '2026-08-06', NULL, '2021-08-05 23:56:40', '2021-08-05 23:56:40'),
(5, 4, 'rizqi08', 'CN', 0, '2021-08-05', NULL, '2021-08-05 23:58:25', '2021-08-05 23:58:25'),
(6, 5, 'afizah', 'ID', 0, '2026-08-08', NULL, '2021-08-08 04:57:48', '2021-08-08 04:57:48'),
(7, 6, 'afizah', 'ID', 0, '2026-08-08', NULL, '2021-08-08 05:03:05', '2021-08-08 05:03:05'),
(8, 7, 'afizah', 'ID', 0, '2026-08-08', NULL, '2021-08-08 06:17:02', '2021-08-08 06:17:02'),
(9, 8, 'afizah', 'ID', 0, '2026-08-09', NULL, '2021-08-09 06:04:41', '2021-08-09 06:04:41'),
(10, 9, 'afizah', 'ID', 0, '2026-08-09', NULL, '2021-08-09 06:07:16', '2021-08-09 06:07:16'),
(11, 10, 'afizah', 'ID', 0, '2026-08-10', NULL, '2021-08-09 20:07:58', '2021-08-09 20:07:58'),
(12, 11, 'afizah', 'ID', 0, '2026-08-10', NULL, '2021-08-09 20:08:01', '2021-08-09 20:08:01'),
(13, 12, 'afizah', 'ID', 0, '2026-08-10', NULL, '2021-08-10 09:00:01', '2021-08-10 09:00:01'),
(14, 13, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 06:45:58', '2021-08-11 06:45:58'),
(15, 14, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 07:05:39', '2021-08-11 07:05:39'),
(16, 15, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 07:12:09', '2021-08-11 07:12:09'),
(17, 16, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 07:39:16', '2021-08-11 07:39:16'),
(18, 17, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 08:13:29', '2021-08-11 08:13:29'),
(19, 18, 'afizah', 'ID', 0, '2026-08-11', NULL, '2021-08-11 08:22:02', '2021-08-11 08:22:02'),
(20, 19, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 04:41:20', '2021-08-12 04:41:20'),
(23, 22, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 06:08:38', '2021-08-12 06:08:38'),
(24, 23, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 06:25:31', '2021-08-12 06:25:31'),
(25, 24, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 08:00:25', '2021-08-12 08:00:25'),
(26, 25, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 08:14:34', '2021-08-12 08:14:34'),
(27, 26, 'afizah', 'ID', 0, '2026-08-12', NULL, '2021-08-12 08:16:49', '2021-08-12 08:16:49'),
(28, 27, 'rizqiadmin', 'ID', 0, '2026-08-12', NULL, '2021-08-12 08:53:33', '2021-08-12 08:53:33'),
(29, 28, 'fadhil28', 'ID', 0, '2026-08-13', NULL, '2021-08-13 06:48:07', '2021-08-13 06:48:07'),
(30, 29, 'fadhil28', 'ID', 0, '2026-08-13', '2021-08-13 07:20:59', '2021-08-13 07:06:13', '2021-08-13 07:20:59'),
(31, 29, 'afizah', 'china', 1, '2021-12-09', NULL, '2021-08-13 07:15:15', '2021-08-13 07:15:15'),
(32, 29, 'fadhil28', 'SP', 1, '2021-07-07', NULL, '2021-08-13 07:23:25', '2021-08-13 07:23:25'),
(33, 30, 'fadhil28', 'ID', 0, '2026-08-13', NULL, '2021-08-13 08:16:00', '2021-08-13 08:16:00'),
(34, 31, 'rizqiadmin', 'ID', 0, '2026-08-14', '2021-08-14 16:17:56', '2021-08-14 16:17:29', '2021-08-14 16:17:56'),
(35, 31, 'afizah', 'ID', 0, '2021-07-22', NULL, '2021-08-14 16:18:18', '2021-08-14 16:18:18'),
(36, 32, 'afizah', 'ID', 0, '2026-08-16', NULL, '2021-08-15 23:56:50', '2021-08-15 23:56:50'),
(37, 32, 'fadhil28', 'CN', 1, '2021-07-22', NULL, '2021-08-15 23:57:26', '2021-08-15 23:57:26'),
(38, 33, 'afizah', 'ID', 0, '2026-08-16', NULL, '2021-08-16 00:06:30', '2021-08-16 00:06:30'),
(39, 34, 'afizah', 'ID', 0, '2026-08-16', NULL, '2021-08-16 00:13:24', '2021-08-16 00:13:24'),
(40, 35, 'afizah', 'ID', 0, '2026-08-16', NULL, '2021-08-16 00:24:20', '2021-08-16 00:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'rizqi meisani', 'rizqimeisani948@gmail.com', '2021-08-11 09:23:53', '$2y$10$kscPI0wh6CYFLf2tU8zkrOI./KEVHlSuRmznfq2fJGUJOtbJReHAe', NULL, '2021-07-17 05:13:14', '2021-08-11 09:23:53', 'ADMIN', 'rizqiadmin'),
(2, 'afizah', 'afizahluana@gmail.com', NULL, '$2y$10$1DGt64g8Hd4s7JaRN/YCo.sI.C5/VueM8/S1RjQNCPhjS4cVmsBSy', NULL, '2021-07-17 05:17:11', '2021-07-17 05:17:11', 'USER', 'afizahluana'),
(3, 'afizah luana', 'afizahluana15@gmail.com', '2021-07-17 05:26:27', '$2y$10$w/2w0tG6hC4VQik5iBoKBeJjGEMs32tg7hBDdJt7fT3SyftQVHGhK', NULL, '2021-07-17 05:22:12', '2021-07-17 05:26:27', 'USER', 'afizah'),
(4, 'rizqi meisani', 'rizqi08@gmail.com', NULL, '$2y$10$Ho9XE2PNXpxvjuQxauCbvuNqT/vrPJLTciug2CzCnAvWGltEVlcfu', NULL, '2021-08-05 23:54:39', '2021-08-05 23:54:39', 'USER', 'rizqi08'),
(5, 'fadhil fathi', 'fadhil@gmail.com', '2021-08-13 06:47:59', '$2y$10$WDXga6fO3.3bL/7/BnpT7Ovml8Ud80SP1H7gX686tZwoNDxQqwLg6', NULL, '2021-08-13 06:45:41', '2021-08-13 06:47:59', 'USER', 'fadhil28'),
(6, 'hdfhdshd', 'fffdhdshfd@xhg', NULL, '$2y$10$VbhI.NoYh5Z8HC61W9KE7O3ROyZHya3QrOBaG/SLPZcQ./gTTn1bK', NULL, '2021-08-13 07:02:25', '2021-08-13 07:02:25', 'USER', 'dfdhfed');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapelanggans`
--
ALTER TABLE `datapelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_travels`
--
ALTER TABLE `paket_travels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `datapelanggans`
--
ALTER TABLE `datapelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `paket_travels`
--
ALTER TABLE `paket_travels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `transaksi_details`
--
ALTER TABLE `transaksi_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
