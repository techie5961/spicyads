-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2025 at 03:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profitpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `tag`, `email`, `role`, `password`, `name`, `remember_token`, `status`, `updated`, `date`) VALUES
(1, 'master', 'master@gmail.com', 'Master Admin', '$2y$12$5ES5aCYmK3ZNHuHaGyV2eOHAq.S2VV4Z67furbqQ5vJ.61UD3xFQi', 'David James', 'dSF5sBVFGCQ4g3eRe3AQ6PB9qvfmUlBpnaaNaBqEWS9e8QrCWitt6Kwe2dul', 'active', '2025-08-24 06:57:37', '2025-08-24 06:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `package` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`package`)),
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `vendor_id`, `package`, `json`, `status`, `updated`, `date`) VALUES
(1, '7747558592A84BBDD882', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-03 21:29:38', '2025-09-03 21:29:38'),
(2, '0C08F656A395956416DC', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-03 21:36:16', '2025-09-03 21:36:16'),
(3, 'BB986659076BC373D162', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:12:48', '2025-09-04 03:12:48'),
(4, '5F24B972CDF410965168', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:12:52', '2025-09-04 03:12:52'),
(5, '5EB5A58B5EF3DFB84D65', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:01', '2025-09-04 03:13:01'),
(6, '909A5958551D9AEE88DF', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:05', '2025-09-04 03:13:05'),
(7, '2C69EA92BECEAC8FEB50', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:08', '2025-09-04 03:13:08'),
(8, '66D6615E88C4E93E80B6', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:12', '2025-09-04 03:13:12'),
(9, '43114BFA9971D0A66955', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:15', '2025-09-04 03:13:15'),
(10, '9D8F3780F0A5E417C7E4', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:18', '2025-09-04 03:13:18'),
(11, 'A77EF3BB2C02D86EB0C1', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'active', '2025-09-04 03:13:21', '2025-09-04 03:13:21'),
(12, '5080E8A39F69599555AF', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 03:13:25', '2025-09-04 03:13:25'),
(15, '370DFAE47A096B5BB72C', '0', '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', NULL, 'redeemed', '2025-09-04 15:59:42', '2025-09-04 15:59:42');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'paid',
  `cost` float DEFAULT NULL,
  `cashback` float DEFAULT NULL,
  `subordinate` float DEFAULT NULL,
  `first_indirect` float DEFAULT NULL,
  `free_data` float DEFAULT NULL,
  `article_writing` float DEFAULT NULL,
  `earning_per_click` float DEFAULT NULL,
  `tiktok_monitizing` float DEFAULT NULL,
  `casino_game` float DEFAULT NULL,
  `daily_advert` float DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `type`, `cost`, `cashback`, `subordinate`, `first_indirect`, `free_data`, `article_writing`, `earning_per_click`, `tiktok_monitizing`, `casino_game`, `daily_advert`, `status`, `updated`, `date`) VALUES
(5, 'Alpha Package', 'paid', 3000, 500, 2500, 1500, 1, 5000, 200, 1000, 5000, 400, 'active', '2025-08-31 22:07:01', '2025-08-31 22:07:01');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5bFexiXxlOF15RzkOo8WUKxKVfxlozd2hnj1jfHa', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV1k0cGlxVGNJeUZNbTJ3QUpOWmhJa2dBeVhiVHFWNjVaWGRYQ3VUeiI7czo1MjoibG9naW5fdXNlcnNfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjczOiJodHRwOi8vbG9jYWxob3N0L3Byb2ZpdHBheS9wdWJsaWMvdXNlcnMvdHJhbnNhY3Rpb25zP3BhZ2U9MyZwYWdpbmF0ZT10cnVlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757493679),
('Avue3IaZiRzalfKSXTpYpzUvMFg8bhMF52R12JOx', NULL, '192.168.59.49', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidzdpZkRvNDlKY1ZSS09rQTFxcjhXWUdlSWFBM0RuVmN4Umt4NUhqQSI7czo1MjoibG9naW5fdXNlcnNfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjYwOiJodHRwczovLzE5Mi4xNjguNTkuMjA0L3Byb2ZpdHBheS9wdWJsaWMvYWRtaW5zL3NpdGUvc2V0dGluZ3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUzOiJsb2dpbl9hZG1pbnNfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1757496904),
('oDooAdJPGWqkMAK2w46RLtVaDowHnPC7euWaW04o', NULL, '192.168.59.49', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzZrNkZ0eUJCU0lYUHdqWkJjNWxkSE9aSlRGU1l0SUNlNU9GZ0JueiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vMTkyLjE2OC41OS4yMDQvcHJvZml0cGF5L3B1YmxpYy91c2Vycy9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl91c2Vyc181OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1757497978);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `json`, `updated`, `date`) VALUES
(1, 'general_settings', '{\"spin_minimum\":\"500\",\"spin_maximum\":\"1500\"}', '2025-09-08 18:01:58', '2025-09-08 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `reward` float DEFAULT NULL,
  `limit` bigint(20) DEFAULT NULL,
  `completed` bigint(20) NOT NULL DEFAULT 0,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `uniqid`, `category`, `title`, `link`, `reward`, `limit`, `completed`, `json`, `status`, `updated`, `date`) VALUES
(1, 'TSK68BAC07C051B9', 'Whatsapp/Group Join', 'Whatsapp/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 200, 5585, 1, NULL, 'active', '2025-09-05 17:50:36', '2025-09-05 17:50:36'),
(2, 'TSK68BAC098B4879', 'Whatsapp/Group Join', 'Whatsapp/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 200, 5585, 1, NULL, 'active', '2025-09-05 17:51:04', '2025-09-05 17:51:04'),
(4, 'TSK68BAC11C9B929', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 55, 8885, 1, NULL, 'active', '2025-09-05 17:53:16', '2025-09-05 17:53:16'),
(5, 'TSK68BAC1380B3DE', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 255, 55, 55, NULL, 'completed', '2025-09-05 21:41:20', '2025-09-05 17:53:44'),
(6, 'TSK68BD49A1880A7', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:17', '2025-09-07 16:00:17'),
(7, 'TSK68BD49A576269', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:21', '2025-09-07 16:00:21'),
(8, 'TSK68BD49ABDBABA', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:27', '2025-09-07 16:00:27'),
(9, 'TSK68BD49AF53FBB', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:31', '2025-09-07 16:00:31'),
(10, 'TSK68BD49B2CC18C', 'Telegram/Group Join', 'Telegram/Group Join', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 0, NULL, 'active', '2025-09-07 16:00:34', '2025-09-07 16:00:34'),
(11, 'TSK68BD4AD6EACD5', 'Whatsapp/Save Contact', 'Whatsapp/Save Contact', 'https://chat.whatsapp.com/J6QiR6zDLXB7b3lZ1u9xLw', 50, 100, 1, NULL, 'active', '2025-09-07 16:05:26', '2025-09-07 16:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `task_proofs`
--

CREATE TABLE `task_proofs` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `uniqid` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'success',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_proofs`
--

INSERT INTO `task_proofs` (`id`, `user_id`, `task_id`, `json`, `uniqid`, `status`, `updated`, `date`) VALUES
(1, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4768A9D15', 'success', '2025-09-07 15:50:48', '2025-09-07 15:50:48'),
(2, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4804A4EE9', 'success', '2025-09-07 15:53:24', '2025-09-07 15:53:24'),
(3, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":2,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD480B1DD57', 'success', '2025-09-07 15:53:31', '2025-09-07 15:53:31'),
(4, 2, 4, '{\"id\":4,\"uniqid\":\"TSK68BAC11C9B929\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":55,\"limit\":8885,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:53:16\",\"date\":\"2025-09-05 10:53:16\"}', 'PRF68BD48CA54467', 'success', '2025-09-07 15:56:42', '2025-09-07 15:56:42'),
(5, 2, 2, '{\"id\":2,\"uniqid\":\"TSK68BAC098B4879\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:51:04\",\"date\":\"2025-09-05 10:51:04\"}', 'PRF68BD48CFC5855', 'success', '2025-09-07 15:56:47', '2025-09-07 15:56:47'),
(6, 2, 1, '{\"id\":1,\"uniqid\":\"TSK68BAC07C051B9\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:50:36\",\"date\":\"2025-09-05 10:50:36\"}', 'PRF68BD48D6336FB', 'success', '2025-09-07 15:56:54', '2025-09-07 15:56:54'),
(7, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":3,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4920E4496', 'success', '2025-09-07 15:58:08', '2025-09-07 15:58:08'),
(8, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":4,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD4927A399A', 'success', '2025-09-07 15:58:15', '2025-09-07 15:58:15'),
(9, 2, 5, '{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":54,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"}', 'PRF68BD494F06261', 'success', '2025-09-07 15:58:55', '2025-09-07 15:58:55'),
(10, 2, 11, '{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 09:05:26\",\"date\":\"2025-09-07 09:05:26\"}', 'PRF68BEB19910C81', 'success', '2025-09-08 17:36:09', '2025-09-08 17:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `svg` text DEFAULT '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M72,104a8,8,0,0,1,8-8h96a8,8,0,0,1,0,16H80A8,8,0,0,1,72,104Zm8,40h96a8,8,0,0,0,0-16H80a8,8,0,0,0,0,16ZM232,56V208a8,8,0,0,1-11.58,7.15L192,200.94l-28.42,14.21a8,8,0,0,1-7.16,0L128,200.94,99.58,215.15a8,8,0,0,1-7.16,0L64,200.94,35.58,215.15A8,8,0,0,1,24,208V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56Zm-16,0H40V195.06l20.42-10.22a8,8,0,0,1,7.16,0L96,199.06l28.42-14.22a8,8,0,0,1,7.16,0L160,199.06l28.42-14.22a8,8,0,0,1,7.16,0L216,195.06Z"></path></svg>',
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `status` varchar(255) NOT NULL DEFAULT 'success',
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `type`, `class`, `amount`, `svg`, `json`, `status`, `updated`, `date`) VALUES
(1, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:50:48', '2025-09-07 15:50:48'),
(2, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":1,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:53:24', '2025-09-07 15:53:24'),
(3, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":2,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:53:31', '2025-09-07 15:53:31'),
(4, 2, 'Task Reward', 'credit', 55, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":4,\"uniqid\":\"TSK68BAC11C9B929\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":55,\"limit\":8885,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:53:16\",\"date\":\"2025-09-05 10:53:16\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:42', '2025-09-07 15:56:42'),
(5, 2, 'Task Reward', 'credit', 200, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":2,\"uniqid\":\"TSK68BAC098B4879\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:51:04\",\"date\":\"2025-09-05 10:51:04\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:47', '2025-09-07 15:56:47'),
(6, 2, 'Task Reward', 'credit', 200, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":1,\"uniqid\":\"TSK68BAC07C051B9\",\"category\":\"Whatsapp\\/Group Join\",\"title\":\"Whatsapp\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":200,\"limit\":5585,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 10:50:36\",\"date\":\"2025-09-05 10:50:36\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:56:54', '2025-09-07 15:56:54'),
(7, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":3,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:08', '2025-09-07 15:58:08'),
(8, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":4,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:15', '2025-09-07 15:58:15'),
(9, 2, 'Task Reward', 'credit', 255, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":5,\"uniqid\":\"TSK68BAC1380B3DE\",\"category\":\"Telegram\\/Group Join\",\"title\":\"Telegram\\/Group Join\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":255,\"limit\":55,\"completed\":54,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-05 14:41:20\",\"date\":\"2025-09-05 10:53:44\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-07 15:58:55', '2025-09-07 15:58:55'),
(10, 2, 'Task Reward', 'credit', 50, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z\"></path></svg>', '{\"data\":{\"id\":11,\"uniqid\":\"TSK68BD4AD6EACD5\",\"category\":\"Whatsapp\\/Save Contact\",\"title\":\"Whatsapp\\/Save Contact\",\"link\":\"https:\\/\\/chat.whatsapp.com\\/J6QiR6zDLXB7b3lZ1u9xLw\",\"reward\":50,\"limit\":100,\"completed\":0,\"json\":null,\"status\":\"active\",\"updated\":\"2025-09-07 09:05:26\",\"date\":\"2025-09-07 09:05:26\"},\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 17:36:09', '2025-09-08 17:36:09'),
(11, 2, 'Spin Reward', 'credit', 1220, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1220,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:03', '2025-09-08 18:46:03'),
(12, 2, 'Spin Reward', 'credit', 746, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":746,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:56', '2025-09-08 18:46:56'),
(13, 2, 'Spin Reward', 'credit', 1106, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1106,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:46:59', '2025-09-08 18:46:59'),
(14, 2, 'Spin Reward', 'credit', 1234, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1234,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:01', '2025-09-08 18:47:01'),
(15, 2, 'Spin Reward', 'credit', 908, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":908,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:03', '2025-09-08 18:47:03'),
(16, 2, 'Spin Reward', 'credit', 512, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":512,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:05', '2025-09-08 18:47:05'),
(17, 2, 'Spin Reward', 'credit', 900, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":900,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:08', '2025-09-08 18:47:08'),
(18, 2, 'Spin Reward', 'credit', 565, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":565,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:21', '2025-09-08 18:47:21'),
(19, 2, 'Spin Reward', 'credit', 1012, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1012,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:26', '2025-09-08 18:47:26'),
(20, 2, 'Spin Reward', 'credit', 692, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":692,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:31', '2025-09-08 18:47:31'),
(21, 2, 'Spin Reward', 'credit', 880, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":880,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:47:47', '2025-09-08 18:47:47'),
(22, 2, 'Spin Reward', 'credit', 668, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":668,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:48:46', '2025-09-08 18:48:46'),
(23, 2, 'Spin Reward', 'credit', 893, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":893,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:22', '2025-09-08 18:49:22'),
(24, 2, 'Spin Reward', 'credit', 636, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":636,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:27', '2025-09-08 18:49:27'),
(25, 2, 'Spin Reward', 'credit', 789, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":789,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:29', '2025-09-08 18:49:29'),
(26, 2, 'Spin Reward', 'credit', 889, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":889,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-08 18:49:41', '2025-09-08 18:49:41'),
(27, 2, 'Spin Reward', 'credit', 1273, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1273,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-09 16:05:35', '2025-09-09 16:05:35'),
(28, 2, 'Spin Reward', 'credit', 1087, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"#000000\" viewBox=\"0 0 256 256\"><path d=\"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z\"></path></svg>', '{\"data\":1087,\"wallet\":\"activities_wallet\"}', 'success', '2025-09-10 15:31:36', '2025-09-10 15:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `package` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`package`)),
  `coupon` varchar(255) DEFAULT NULL,
  `deposit_balance` float DEFAULT 0,
  `activities_balance` float DEFAULT 0,
  `affiliate_balance` float NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`json`)),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uniqid`, `name`, `email`, `username`, `phone`, `package`, `coupon`, `deposit_balance`, `activities_balance`, `affiliate_balance`, `email_verified_at`, `password`, `type`, `remember_token`, `status`, `created_at`, `updated_at`, `json`, `updated`, `date`) VALUES
(1, 'USR68B9A5424F8BB', 'David James', 'abakpadavid05@gmail.com', 'Blaady05', 9013350351, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '370DFAE47A096B5BB72C', 0, 500, 0, NULL, '$2y$12$/EPyjWsD7PdQ5PD.9axLe.Hy2Rc4CXg.qH/Kqwh/ZjbRknJlPTQJO', 'user', NULL, 'active', NULL, NULL, NULL, '2025-09-04 21:42:10', '2025-09-04 21:42:10'),
(2, 'USR68B9A5E137162', 'David James', 'techie5961@gmail.com', 'techie_innovations', 9013350351, '{\"id\":5,\"name\":\"Alpha Package\",\"cost\":3000,\"cashback\":500,\"subordinate\":2500,\"first_indirect\":1500,\"free_data\":1,\"article_writing\":5000,\"earning_per_click\":200,\"tiktok_monitizing\":1000,\"casino_game\":5000,\"daily_advert\":400,\"status\":\"active\",\"updated\":\"2025-08-31 15:07:01\",\"date\":\"2025-08-31 15:07:01\"}', '5080E8A39F69599555AF', 0, 18545, 0, NULL, '$2y$12$bgIwXIIsxLbae8yg6XNl3.yMRRjwHxeSf4R980vFK8W5Oh9DxGudq', 'user', 'csFUuWDmx1GXmDA1OD6YbmgbaEsPrXhhtAX8mZ6tmSCtcCArMdO10FDz7r3M', 'active', NULL, NULL, NULL, '2025-09-10 15:31:36', '2025-09-04 21:44:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_proofs`
--
ALTER TABLE `task_proofs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `task_proofs`
--
ALTER TABLE `task_proofs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
