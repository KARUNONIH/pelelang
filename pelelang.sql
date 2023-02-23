-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2023 at 02:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` bigint UNSIGNED NOT NULL,
  `bid_price` int NOT NULL,
  `id_item` int NOT NULL,
  `id_user` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `bid_price`, `id_item`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1101, 1, 1, '2023-02-21 21:26:11', '2023-02-21 21:26:11'),
(2, 961, 12, 1, '2023-02-21 22:47:02', '2023-02-21 22:47:02'),
(3, 1081, 19, 1, '2023-02-21 23:39:01', '2023-02-21 23:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `complete_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama`, `harga_awal`, `deskripsi`, `gambar`, `kategori_id`, `harga_akhir`, `id_user`, `status`, `complete_at`, `created_at`, `updated_at`) VALUES
(1, 'Dandelion', '1000', 'dandelion (Taraxacum) adalah genus besar dalam keluarga Asteraceae.', 'item_image/S592cvqdmOjOaxKpXy9SmEOKGmigec4VDSB1raKJ.jpg', '1', '1101', 1, 0, '2023-03-10 04:28:00', '2023-02-21 21:25:25', '2023-02-21 21:26:11'),
(2, 'Sofian', '1000', 'Bunga Sofian', 'item_image/wfTQA7QB7jidFFSBNwhBVxxxWCvA7qc2JULnx8SF.jpg', '2', '1000', 0, 0, '2023-03-07 04:27:00', '2023-02-21 21:27:19', '2023-02-21 21:27:19'),
(3, 'Sakura', '1000', 'Bunga sakura', 'item_image/vpdszFlHOPjlnGD5b2EpmdsWTGo4uiRqCYSZeJmr.jpg', '1', '1000', 0, 1, '2023-02-22 06:22:51', '2023-02-21 21:28:18', '2023-02-21 23:22:51'),
(4, 'Sakura', '1000', 'Bunga sakura', 'item_image/j4NwjH04aJiALc8Zj28SwgeW24jXQGqoVx79fJ9Y.jpg', '1', '1000', 0, 0, '2023-03-07 04:29:00', '2023-02-21 21:29:55', '2023-02-21 21:29:55'),
(5, 'Mawar Biru', '200', 'Bunga mawar biru', 'item_image/TZKuVFMIhHnKnq0ng9K1ElKlxo0NBPJgfZSXQPuj.jpg', '2', '200', 0, 1, '2023-02-22 06:22:51', '2023-02-21 21:33:07', '2023-02-21 23:22:51'),
(6, 'Dandelion', '1000', 'dandelion (Taraxacum) adalah genus besar dalam keluarga Asteraceae.', 'item_image/S592cvqdmOjOaxKpXy9SmEOKGmigec4VDSB1raKJ.jpg', '1', '1101', 1, 1, '2023-02-22 06:22:51', '2023-02-21 21:25:25', '2023-02-21 23:22:51'),
(7, 'Mawar Biru', '200', 'Bunga mawar biru', 'item_image/TZKuVFMIhHnKnq0ng9K1ElKlxo0NBPJgfZSXQPuj.jpg', '2', '200', 0, 0, '2023-03-16 04:37:00', '2023-02-21 21:33:07', '2023-02-21 21:33:07'),
(8, 'Tulip', '100', 'Bunga Tulip', 'item_image/KClGQDnqfi4QzXQ5m9Jsdu7mQUEjCOGUZGUvCTMC.jpg', '2', '100', 0, 0, '2023-05-12 07:36:00', '2023-02-21 21:37:01', '2023-02-21 21:37:01'),
(9, 'Melati', '300', 'Bunga Melati', 'item_image/t97Gx65BolGdTp6eVCTxv88mlncYy0y5l6LjScoH.jpg', '1', '300', 0, 0, '2023-04-07 04:37:00', '2023-02-21 21:37:42', '2023-02-21 21:37:42'),
(10, 'Anggrek', '500', 'Bunga Anggrek', 'item_image/r6sNi2FWKTUOZiHYNKjobSt6T6SbkbVgP7RbqLnu.jpg', '2', '500', 0, 0, '2023-03-17 04:38:00', '2023-02-21 21:39:09', '2023-02-21 21:39:09'),
(16, 'Lotus', '1000', 'Bunga Lotus', 'item_image/vElkQdiwqVrkbZrmaTkK7tVRxKVecBFNscF5gwEL.jpg', '1', '1000', 0, 1, '2023-02-22 06:22:51', '2023-02-21 23:22:42', '2023-02-21 23:22:51'),
(17, 'Lotus', '100', 'Bunga Lotus', 'item_image/LbbilH9hjSGKvWp7L2VUuSIIwaZqTTfV073PPW6C.jpg', '2', '100', 0, 1, '2023-01-05 06:23:00', '2023-02-21 23:23:58', '2023-02-21 23:23:58'),
(18, 'Lotus', '200', 'Bunga Lotus', 'item_image/eDlNQsOY3OD1Jto9ruKCTsc3U7BUHpZSHbdryjDR.jpg', '1', '200', 0, 0, '2023-03-18 06:29:00', '2023-02-21 23:30:24', '2023-02-21 23:30:24'),
(19, 'Rafllesia', '900', 'Bunga Raflesia', 'item_image/2Ub30QSubgRtNSQ8N5u4mztr1m2p3vjoq4AMfqRq.jpg', '2', '1081', 1, 0, '2023-03-10 08:31:00', '2023-02-21 23:31:53', '2023-02-21 23:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Tanaman Hias', '2023-02-21 21:22:23', '2023-02-21 21:22:23'),
(2, 'Tanaman untuk di pekarangan', '2023-02-21 21:23:14', '2023-02-21 21:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_31_065518_user', 1),
(6, '2023_02_14_123454_item', 1),
(7, '2023_02_15_004106_lelang', 1),
(8, '2023_02_15_064401_kategori', 1),
(9, '2023_02_22_022713_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'panjul', 'panjul@gmail.com', NULL, 0, '$2y$10$GUMZ5knNLQgapoCSa0wz1u6UTua8KcLt/iFXFA3HlRcOsS526AJqO', NULL, '2023-02-21 21:21:48', '2023-02-21 21:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid_id_item_id_user_index` (`id_item`,`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id_user_kategori_id_index` (`id_user`,`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
