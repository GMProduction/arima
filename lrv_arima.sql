-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2021 pada 08.17
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrv_arima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `qty`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 'Meteran', 100000, 10, 'UNIT', '2021-08-13 07:43:11', '2021-08-18 00:19:27'),
(2, 'Barang 2', 20000, 20, 'KG', '2021-08-13 07:43:11', '2021-08-17 01:13:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_13_070357_create_master_barang', 2),
(5, '2021_08_13_074443_add_qty_barang', 3),
(7, '2021_08_13_084458_create_penjualan', 4),
(8, '2021_08_13_100423_drop_unique', 5),
(9, '2021_08_14_070433_create_prediksi', 6),
(10, '2021_08_16_082643_add_harga', 7),
(12, '2021_08_17_073358_add_penjualan_id', 8);

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
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minggu` int(11) NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `minggu`, `barang_id`, `qty`, `harga`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 42, 5000, 210000, '2021-08-13 08:55:20', '2021-08-18 00:19:49'),
(2, 2, 1, 85, 5000, 425000, '2021-08-13 08:55:20', '2021-08-18 00:19:58'),
(3, 3, 1, 79, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(4, 4, 1, 84, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(5, 5, 1, 96, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(6, 6, 1, 92, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(7, 7, 1, 72, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(8, 8, 1, 137, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(9, 9, 1, 154, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(16, 10, 1, 104, 100000, 1000000, '2021-08-16 01:50:06', '2021-08-16 01:50:06'),
(17, 11, 1, 117, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(18, 12, 1, 109, 100000, 1000000, '2021-08-16 01:50:06', '2021-08-16 01:50:06'),
(20, 13, 1, 101, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(21, 14, 1, 53, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(22, 15, 1, 68, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(23, 16, 1, 108, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(24, 17, 1, 108, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(25, 18, 1, 130, 100000, 1000000, '2021-08-16 01:50:06', '2021-08-16 01:50:06'),
(26, 19, 1, 84, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(27, 20, 1, 124, 100000, 1000000, '2021-08-16 01:50:06', '2021-08-16 01:50:06'),
(28, 21, 1, 113, 5000, 210000, '2021-08-13 08:55:20', '2021-08-18 00:19:49'),
(29, 22, 1, 127, 5000, 425000, '2021-08-13 08:55:20', '2021-08-18 00:19:58'),
(30, 23, 1, 179, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(31, 24, 1, 99, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(32, 25, 1, 94, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(33, 26, 1, 122, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(34, 27, 1, 119, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20'),
(35, 28, 1, 47, 5000, 123123123, '2021-08-13 08:55:20', '2021-08-13 08:55:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prediksi`
--

CREATE TABLE `prediksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan_id` bigint(20) UNSIGNED NOT NULL,
  `minggu` int(11) NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `prediksi` double NOT NULL,
  `kesalahan` double NOT NULL,
  `masuk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prediksi`
--

INSERT INTO `prediksi` (`id`, `penjualan_id`, `minggu`, `barang_id`, `prediksi`, `kesalahan`, `masuk`, `created_at`, `updated_at`) VALUES
(9, 35, 29, 1, 99.92438, 36.23636933031, 0, '2021-09-02 22:29:52', '2021-09-02 22:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Sq3OT8LgGiyRXXfS65LYD.mjg2CK7pmo55BldxB2V7Vt7LEuUzmj6', 'admin', '2021-08-13 00:21:05', '2021-08-13 00:21:05'),
(2, 'pimpinan', '$2y$10$kRHBBgKeilVrmpOxPm.z1.7HfitE.tHPNIGNY4o4nlvLHJXkQB1lu', 'pimpinan', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualan_barang_id_foreign` (`barang_id`);

--
-- Indeks untuk tabel `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prediksi_penjualan_id_unique` (`penjualan_id`),
  ADD KEY `prediksi_barang_id_foreign` (`barang_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `prediksi`
--
ALTER TABLE `prediksi`
  ADD CONSTRAINT `prediksi_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `prediksi_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
