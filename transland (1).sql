-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2023 at 08:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transland`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel_imgs`
--

DROP TABLE IF EXISTS `carousel_imgs`;
CREATE TABLE IF NOT EXISTS `carousel_imgs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel_imgs`
--

INSERT INTO `carousel_imgs` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, 'slide1.jpg', NULL, '2023-10-12 12:01:58'),
(2, 'slide2.jpg', NULL, NULL),
(3, 'slide3.jpg', NULL, NULL),
(4, 'slide4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
CREATE TABLE IF NOT EXISTS `configs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(2, 'map_lang', '118', NULL, '2023-10-09 15:31:34'),
(3, 'map_lat', '34.118486', NULL, '2023-10-09 15:31:46'),
(4, 'site_title', 'Cronus', NULL, '2023-10-12 06:23:32'),
(1, 'feedback_email', 'ashotr@gmail.com', NULL, '2023-10-09 15:31:41'),
(5, 'Title_phone', '987-098-098-09', NULL, '2023-10-12 06:23:57'),
(6, 'Title_email', 'info@example.com', NULL, '2023-10-12 06:23:57'),
(7, 'Title_location', 'Cargo Hub, LD 32614, UK', NULL, '2023-10-12 06:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(13, '2019_08_19_000000_create_failed_jobs_table', 3),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(15, '2023_10_07_002518_carousel_imgs', 3),
(16, '2023_10_07_003237_texts', 3),
(9, '2023_10_07_005905_map_config', 2),
(17, '2023_10_07_005341_titles', 3),
(18, '2023_10_07_005351_photos', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photos`, `created_at`, `updated_at`) VALUES
(1, 'about-air.jpg', NULL, '2023-10-12 09:06:08'),
(2, 'air.jpg', NULL, NULL),
(3, 'ship.jpg', NULL, NULL),
(4, 'road.jpg', NULL, NULL),
(5, 'warehouse.jpg', NULL, NULL),
(6, 'drone-fright.jpg', NULL, NULL),
(7, 'rail.jpg', NULL, NULL),
(8, '1.jpg', NULL, NULL),
(9, '2.jpg', NULL, NULL),
(10, '3.jpg', NULL, NULL),
(11, '4.jpg', NULL, NULL),
(12, '5.jpg', NULL, NULL),
(13, '6.jpg', NULL, NULL),
(14, '7.jpg', NULL, NULL),
(15, '8.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Transland is the world’s driving worldwide coordinations supplier — we uphold industry and exchange the worldwide trade of merchandise through land transport.Transland is the world’s driving worldwide coordinations supplier — we uphold industry and exchange the worldwide trade of merchandise through land transport.\r\n\r\nOur worth added administrations guarantee the progression of products proceeds consistently and supply chains stay lean and streamlined for progress.', NULL, '2023-10-12 08:12:54'),
(2, 'As a leader in global air freight forwarding, OIA Global excels in providing tailored transportation', NULL, '2023-10-12 08:44:37'),
(3, 'Ocean Freight plays perhaps the most vital role in most transportation and supply chain solutions.', NULL, NULL),
(4, 'Cargo are transported at some stage of their journey along the world’s roads where we give you a reassuring presence.', NULL, NULL),
(5, 'Package and store your things effectively and securely to make sure them in storage. best warehouse for your products.', NULL, NULL),
(6, 'Ship are transported at some stage of their journey along the world’s roads where we give you a reassuring presence.', NULL, NULL),
(7, 'Continental Rail are transported at some stage of their journey along the world’s roads where we give you a presence.', NULL, NULL),
(8, 'Alaxis D. Dowson!', NULL, '2023-10-12 09:24:27'),
(9, 'Alaxis D. Dowson', NULL, NULL),
(10, 'Alaxis D. Dowson', NULL, NULL),
(11, 'Salman Ahmed', NULL, NULL),
(12, 'SALMAN AHMED', NULL, '2023-10-12 09:25:52'),
(13, 'MIRANDA H. HALIM', NULL, NULL),
(14, 'ALEX D. DENZILAN', NULL, NULL),
(15, 'KILMON L. LIMONA', NULL, NULL),
(16, 'info@example.com!\r\njobs@example.com', NULL, '2023-10-12 09:39:25'),
(17, '098-098-098-09\n+(098) 098-098-765', NULL, NULL),
(18, 'B2, Miranda City Winnetka\r\nNew York, US', NULL, '2023-10-12 09:39:38'),
(19, 'Cargo Hub, LD 32614, UK', NULL, NULL),
(20, '987-098-098-09', NULL, NULL),
(21, 'info@example.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `titles`, `created_at`, `updated_at`) VALUES
(1, 'Company Overview', NULL, NULL),
(2, 'Air Freight', NULL, '2023-10-12 08:44:37'),
(3, 'Ocean Freight', NULL, NULL),
(4, 'Road Freight', NULL, NULL),
(5, 'Warehousing', NULL, NULL),
(6, 'Drone Freight', NULL, NULL),
(7, 'Continental Rail', NULL, NULL),
(8, 'Founder!', NULL, '2023-10-12 09:24:32'),
(9, 'Founder', NULL, NULL),
(10, 'Founder', NULL, NULL),
(11, 'Support', NULL, NULL),
(12, 'Founder', NULL, NULL),
(13, 'CEO', NULL, NULL),
(14, 'Desginer', NULL, NULL),
(15, 'Support Engineer', NULL, NULL),
(16, 'Email Address', NULL, NULL),
(17, 'Phone Number', NULL, NULL),
(18, 'Office Address', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cronus2023', NULL, NULL, '$2y$10$iWLFjhK6NZdYMlsfhKMd1.soNt2JLXOOUDRky16RHGnqY9we2k39K', NULL, '2023-03-11 12:40:28', '2023-03-14 13:52:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
