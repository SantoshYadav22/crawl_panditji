-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 10:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crawl_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_active`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'santosh', NULL, '1', '9874563210', NULL, '$2y$10$UZIXel4ngIrg48ROdlrLEulbgfh2SwgBJj5DVuc/aUL77f6QF2q.O', NULL, '2023-04-19 09:02:04', '2023-04-20 12:00:21'),
(2, 'santosh', NULL, '1', '1234567898', NULL, '$2y$10$fCNzUvNPRDTyQOkXM3V1KOIgWxrwTFXbcOxW54/DN6Mfirs2HiC4.', NULL, '2023-04-19 09:10:21', '2023-04-19 09:10:21'),
(3, 'sanotsh', NULL, '1', '1234567890', NULL, '$2y$10$j80YLv8XPFz4wFx7a8.NHez5/AffNEFOfowJfRK0byDpjeQsJZEGq', NULL, '2023-04-19 09:16:47', '2023-04-19 15:31:50'),
(4, 'dsfsd', NULL, '1', '5456545454', NULL, '$2y$10$aaMjot362rFCEVY4nUhMleWrywUZxa0dVujo3/SnZ2mZSL/9f2Ta.', NULL, '2023-04-19 09:18:04', '2023-04-19 09:18:04'),
(5, 'fasdfsd', NULL, '1', '9999999999', NULL, '$2y$10$Hrylu7QxJr3ny3v4bVITWOJREnO/zpE1h2nHvpDmNXraP8Sat9XNO', NULL, '2023-04-19 09:20:09', '2023-04-19 09:20:09'),
(6, 'rama', NULL, '1', '1234567891', NULL, '$2y$10$5/8UHO32lnTzQhsityhsk.xs6lLaS/BIItRMp.YQ4MhTNpyZXNzR6', NULL, '2023-04-19 21:49:46', '2023-04-19 21:52:39'),
(7, 'rahul', NULL, '1', '1111111111', NULL, '$2y$10$qlIAr5EOcxbPi3o8U9y9cuoYbkv8p3ySwp6GMunWfP5G9di/DL2pW', NULL, '2023-04-19 21:50:56', '2023-04-19 21:50:56'),
(8, 'krrish', NULL, '1', '3333333333', NULL, '$2y$10$3mhhcIO22EREL5TTwgfh1.ujpiFTTecdmXN1eYctj/20RGNVXGorq', NULL, '2023-04-20 12:38:20', '2023-04-20 12:38:20'),
(9, 'manoj', NULL, '1', '2222222222', NULL, '$2y$10$qopJWxRZgx2U33.3yAw/ku2.o64XYijsoOUx.GdqR3tMPhg0sfqkC', NULL, '2023-04-20 12:39:19', '2023-04-20 12:40:21'),
(10, 'narayan', NULL, '1', '8888888888', NULL, '$2y$10$.cBsFMvMYcaVCYeoocjhWOwq41hVFxGOUvuxrg/LfUwo74toyXysy', NULL, '2023-04-20 12:50:21', '2023-04-20 12:50:21'),
(11, 'ritk', NULL, '1', '5555555555', NULL, '$2y$10$WczTCxwX9gb6SlobWuM3GOw5ydYDe9lxlNO6QIOsiXtKAh2jUxhnS', NULL, '2023-04-20 13:55:47', '2023-04-20 13:56:31'),
(12, 'sagar singh', NULL, '1', '9874563211', NULL, '$2y$10$GgSLEiW0vM7IEH0zhV4i/e6ccmvcnXqDnLH.SFKvv1L2bx3nrpylO', NULL, '2023-05-25 23:31:17', '2023-05-25 23:32:24'),
(13, 'harawsh', NULL, '1', '9632587410', NULL, '$2y$10$StcFzDuQJ1ISKpEhEohW9OZ.e36crnIcdAE.pBzHXJ6U8SCiWvmL2', NULL, '2023-07-25 07:12:24', '2023-07-25 07:12:24'),
(14, 'tan', NULL, '1', '7896541235', NULL, '$2y$10$fIcOZY2Ow5TcsvCl5SX5vuHMhzt6EFLBsvlCzth7MLvyrJ8N1ogkm', NULL, '2023-12-06 04:07:25', '2023-12-06 04:07:25'),
(15, 'qwertyu', NULL, '1', '7896541230', NULL, '$2y$10$acl7chNOjDmlESDHmRFF/eXzfUhCaJWv2QNJQguOfgwOKx.UYtaYa', NULL, '2023-12-06 04:08:14', '2023-12-06 04:08:14'),
(16, 'qwertyui', NULL, '1', '7896541231', NULL, '$2y$10$I9pqRE2G5wDdg1nrB0GLv.aQtWtZN363ZFdCmU36PmCPyomuQDKKG', NULL, '2023-12-06 04:09:23', '2023-12-06 04:09:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
