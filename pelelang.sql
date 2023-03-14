-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2023 at 01:23 AM
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
(65, 410, 39, 1, '2023-03-08 19:08:42', '2023-03-08 19:08:42'),
(66, 410, 38, 2, '2023-03-09 02:15:52', '2023-03-09 02:15:52'),
(68, 930, 47, 9, '2023-03-12 07:13:51', '2023-03-12 07:13:51');

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
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `paid_at` timestamp NULL DEFAULT NULL,
  `complete_at` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama`, `harga_awal`, `deskripsi`, `gambar`, `kategori_id`, `harga_akhir`, `id_user`, `status`, `payment`, `paid_at`, `complete_at`, `created_at`, `updated_at`) VALUES
(38, 'Dandelion', '900', 'Bunga Dandelion', 'item_image/8Zp1E5uH24JfIiag1KQZbXoWVX2voBo4t13s7Kci.jpg', '1', '910', 2, 1, 'unpaid', NULL, '2023-02-10 02:05:00', '2023-03-08 19:06:17', '2023-03-13 09:59:51'),
(39, 'Tulip', '400', 'Bunga Tulip', 'item_image/SYLj5anNxBOgerqxLNLLm8JL9qzDF73MZhB2NzYH.jpg', '1', '410', 1, 1, 'paid', '2023-03-09 02:11:59', '2023-03-09 02:09:12', '2023-03-08 19:07:35', '2023-03-13 09:59:51'),
(40, 'Mawar', '800', 'Bunga Mawar', 'item_image/RLoEuZxjXdVTSSxFIP3uaGTUC6Dqj3NNF8GPC92C.jpg', '2', '800', 0, 1, 'unpaid', NULL, '2023-03-09 02:18:55', '2023-03-08 19:17:42', '2023-03-13 09:59:51'),
(41, 'Anggrek', '200', 'Bunga Anggrek', 'item_image/OsGxDdbQF2PanJpfyAhXk61rAQWfRTohjvDxBcy5.jpg', '1', '200', 0, 1, 'unpaid', NULL, '2023-03-09 02:24:00', '2023-03-08 19:22:46', '2023-03-13 09:59:51'),
(42, 'Bonsai', '900', 'Bonsai', 'item_image/XBnhncO3tVWII0R2mdpoGoR1038JDJsFbtTNkXIz.jpg', '1', '900', 0, 1, 'unpaid', NULL, '2023-03-12 09:10:57', '2023-03-10 07:52:41', '2023-03-13 09:59:51'),
(46, 'greee', '400', 'greee', 'item_image/1DV3UXoo0t7RfgOsARwGvr4KaTpBsnh9KwAipFVI.jpg', '1', '400', 0, 1, 'unpaid', NULL, '2023-03-03 09:11:00', '2023-03-12 02:11:24', '2023-03-13 09:59:51'),
(47, 'rate', '900', 'rate', 'item_image/FJHT7tlhY1RdRFnFxnNsS9EMMi9ZJmcz8HmqUt5w.jpg', '1', '930', 9, 1, 'unpaid', NULL, '2023-03-12 14:45:00', '2023-03-12 02:17:53', '2023-03-13 09:59:51'),
(48, 'dsf', '800', 'dfds', 'item_image/wpgSyE52g6QxONCInqxVAkSJuI0Q6SU2YoyBu63Z.jpg', '1', '800', 0, 1, 'unpaid', NULL, '2023-03-12 10:59:00', '2023-03-12 03:58:02', '2023-03-13 09:59:51'),
(49, 'adsf', '300', 'dfsdfs', 'item_image/MEYlrnF6pzww50R94Mm7DtOs3E4jr1ZI40xqP81x.jpg', '1', '300', 0, 1, 'unpaid', NULL, '2023-03-12 11:02:00', '2023-03-12 04:01:33', '2023-03-13 09:59:51'),
(50, 'gas', '200', 'gas', 'item_image/WS1zFJpKVBmAC8WCH4bnB8mQefvmBvx422IlLucN.jpg', '1', '200', 0, 1, 'unpaid', NULL, '2023-03-13 14:07:00', '2023-03-12 07:57:49', '2023-03-13 09:59:51'),
(51, 'fes', '400', 'fes', 'item_image/BwUFWiB91fneATbDiDiGjEJtzTLYCElXu7PdTM2D.png', '1', '400', 0, 1, 'unpaid', NULL, '2023-03-13 14:08:10', '2023-03-12 08:01:05', '2023-03-13 09:59:51'),
(52, 'tes', '900', 'tes', 'item_image/sUGiHJvi9yVTqp7IIQdRHMchapEdERwmNQRBih5w.jpg', '1', '900', 0, 1, 'unpaid', NULL, '2023-03-11 14:09:00', '2023-03-13 07:09:15', '2023-03-13 09:59:51'),
(53, 'poppy', '800', 'poppy', 'item_image/wEoQyJQ4YoCmCIDtCMyNrXYlB8JNNLf1FX8JBANh.jpg', '2', '800', 0, 1, 'unpaid', NULL, '2023-03-13 16:48:54', '2023-03-13 07:43:08', '2023-03-13 09:59:51'),
(55, 'tree', '800', 'trees', 'item_image/PBOtAkMBLofuRVwriR05ceeBGoY8Qno8iT7sjQAo.jpg', '1', '800', 0, 0, 'unpaid', NULL, '2023-03-17 17:00:00', '2023-03-13 10:00:18', '2023-03-13 10:13:56'),
(56, 'his', '900', 'his', 'item_image/ekFL3iKgBU9uVglvGdMqSSfNkamonTMSLb1tyD32.jpg', '1', '900', 0, 2, 'unpaid', NULL, '2023-03-17 17:13:00', '2023-03-13 10:13:39', '2023-03-13 10:13:39');

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
(2, 'Tanaman untuk di pekarangan', '2023-02-21 21:23:14', '2023-02-21 21:23:14'),
(10, 'tanaman langka', '2023-03-13 08:00:44', '2023-03-13 08:00:44');

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
(9, '2023_02_22_022713_create_invoices_table', 1),
(10, '2023_02_25_101132_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `id_item` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int NOT NULL DEFAULT '1',
  `total_price` bigint NOT NULL,
  `status` enum('Unpaid','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_item`, `name`, `address`, `phone`, `qty`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(101, 39, 'panjul', NULL, NULL, 1, 410, 'Unpaid', '2023-03-08 19:10:12', '2023-03-08 19:10:12'),
(102, 39, 'panjul', NULL, NULL, 1, 410, 'Unpaid', '2023-03-08 19:10:50', '2023-03-08 19:10:50'),
(103, 39, 'panjul', NULL, NULL, 1, 410, 'paid', '2023-03-08 19:11:21', '2023-03-08 19:11:59');

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
  `status` int NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` int NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `email_verified_at`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'panjul', 1, 'panjul@gmail.com', NULL, 0, '$2y$10$GUMZ5knNLQgapoCSa0wz1u6UTua8KcLt/iFXFA3HlRcOsS526AJqO', NULL, '2023-02-21 21:21:48', '2023-02-28 09:47:20'),
(2, 'wildan', 1, 'wildan@gmail.com', NULL, 0, '$2y$10$m6SwNyDCRqs8AQCgQysixewPvD3B/Re9rfOWWUI1bpWHpiS8sHfs.', NULL, '2023-02-24 05:32:43', '2023-02-24 05:32:43'),
(3, 'asma', 1, 'asma@gmail.com', NULL, 2, '$2y$10$gEfY792BZHEAPA9uDJVR8eyuxa7w97W.WJV1TirXyZhPTtxzUCUOC', NULL, '2023-02-24 05:33:59', '2023-02-24 05:33:59'),
(4, 'gibran', 1, 'gibran@gmail.com', NULL, 1, '$2y$10$bBh5ZktC/9Y.x3QxNi4Yzedz4oqpFWirdpgUAaZBtzocoCYrWg7r6', NULL, '2023-02-24 07:29:07', '2023-02-24 07:29:07'),
(5, 'sofian', 1, 'sofian@gmail.com', NULL, 1, '$2y$10$ORVqhsTOpobq/ND27mISmObR0nEFukp76n0XoLRNcpjEHnfpouhfm', NULL, '2023-02-27 19:36:49', '2023-02-27 19:36:49'),
(6, 'yoga', 1, 'yoga@gmail.com', NULL, 0, '$2y$10$XgyXVku8leDDXGsjOd0nKOjSSJbDFbCzy3rBkquHsCDqsGR9p4pIm', NULL, '2023-02-28 05:29:34', '2023-02-28 05:29:34'),
(7, 'pra', 1, 'pra@gmail.com', NULL, 2, '$2y$10$ZhwUWqXJJmV8jfwZPZp/w.fBavNhmjKexJsQ6mXwIuTMqocWO2ShC', NULL, '2023-02-28 05:30:28', '2023-02-28 05:30:28'),
(8, 'Qarim', 1, 'Qarim@gmail.com', NULL, 2, '$2y$10$GZOcPBYoSMTKHNPes.N7xutoFeXhqxlEe1JT8ZJK.0A.onvJr/QrS', NULL, '2023-03-02 08:38:29', '2023-03-02 08:38:29'),
(9, 'angga', 1, 'angga@gmail.com', NULL, 0, '$2y$10$7QmhSKJru7vdcwsFFNmf6uaRyaeHjb4doDwz6fOyNJAYRJy6vCaHW', NULL, '2023-03-12 07:11:45', '2023-03-12 07:11:45');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
