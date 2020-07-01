-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 30, 2020 at 11:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

DROP TABLE IF EXISTS `airlines`;
CREATE TABLE IF NOT EXISTS `airlines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `airlines_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Northern Mariana Islands Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(2, 'Czech Republic Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(3, 'Georgia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(4, 'Sao Tome and Principe Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(5, 'Poland Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(6, 'Denmark Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(7, 'Mozambique Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(8, 'Slovakia (Slovak Republic) Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(9, 'Christmas Island Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(10, 'Guadeloupe Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(11, 'Saint Barthelemy Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(12, 'Bosnia and Herzegovina Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(13, 'Paraguay Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(14, 'Jordan Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(15, 'Tanzania Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(16, 'Kazakhstan Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(17, 'Bangladesh Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(18, 'Solomon Islands Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(19, 'Australia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(20, 'San Marino Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(21, 'Sierra Leone Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(22, 'French Guiana Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(23, 'Timor-Leste Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(24, 'Guernsey Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(25, 'Finland Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(26, 'Macao Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(27, 'Bahamas Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(28, 'United States Virgin Islands Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(29, 'Nicaragua Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(30, 'Samoa Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(31, 'Albania Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(32, 'Reunion Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(33, 'Tokelau Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(34, 'Slovenia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(35, 'Netherlands Antilles Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(36, 'Tunisia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(37, 'Cambodia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(38, 'Ghana Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(39, 'United Arab Emirates Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(40, 'Vanuatu Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(41, 'Anguilla Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(42, 'Tuvalu Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(43, 'Tonga Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(44, 'Micronesia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(45, 'Azerbaijan Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(46, 'Gambia Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(47, 'Chile Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(48, 'Ukraine Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(49, 'Zimbabwe Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(50, 'Antigua and Barbuda Airlines', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(51, 'TEST Airlines', '2020-06-28 09:54:24', '2020-06-28 09:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `flight_id` int(10) UNSIGNED NOT NULL,
  `ticket_count` int(10) UNSIGNED NOT NULL,
  `cart_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_flight_id_foreign` (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `flight_id`, `ticket_count`, `cart_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 43, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(2, 9, 10, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(3, 8, 35, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(4, 1, 49, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(5, 6, 5, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(6, 7, 21, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(7, 4, 39, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(8, 6, 13, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(9, 9, 47, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(10, 10, 16, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(11, 6, 31, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(12, 6, 35, 4, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(13, 2, 5, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(14, 3, 32, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(15, 8, 8, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(16, 6, 10, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(17, 3, 23, 4, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(18, 2, 33, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(19, 2, 14, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(20, 9, 27, 4, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(21, 9, 38, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(22, 9, 25, 3, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(23, 3, 13, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(24, 4, 16, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(25, 7, 11, 3, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(26, 10, 16, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(27, 8, 17, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(28, 3, 30, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(29, 8, 50, 4, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(30, 2, 49, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(31, 1, 43, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(32, 1, 16, 4, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(33, 11, 16, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(34, 4, 38, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(35, 11, 2, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(36, 9, 28, 1, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(37, 6, 3, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(38, 9, 27, 2, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(39, 11, 18, 5, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(40, 4, 44, 2, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(41, 3, 6, 1, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(42, 5, 12, 2, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(43, 5, 46, 3, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(44, 6, 3, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(45, 2, 25, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(46, 1, 40, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(47, 11, 30, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(48, 10, 21, 2, '0', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(49, 11, 16, 5, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(50, 11, 24, 3, '1', 1, '2020-06-27 22:15:44', '2020-06-27 22:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `departure_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_ticket_count` int(10) UNSIGNED NOT NULL,
  `max_luggage_size` int(10) UNSIGNED NOT NULL,
  `flight_duration` int(10) UNSIGNED NOT NULL,
  `flight_price_economy` int(10) UNSIGNED NOT NULL,
  `flight_price_business` int(10) UNSIGNED NOT NULL,
  `flight_price_both_way_ratio` float UNSIGNED NOT NULL,
  `from_location_id` int(10) UNSIGNED NOT NULL,
  `to_location_id` int(10) UNSIGNED NOT NULL,
  `airlines_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `flights_from_location_id_foreign` (`from_location_id`),
  KEY `flights_to_location_id_foreign` (`to_location_id`),
  KEY `flights_airlines_id_foreign` (`airlines_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `departure_date`, `departure_time`, `departure_type`, `max_ticket_count`, `max_luggage_size`, `flight_duration`, `flight_price_economy`, `flight_price_business`, `flight_price_both_way_ratio`, `from_location_id`, `to_location_id`, `airlines_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-07-18', '16:01:17', 'two_way', 162, 29, 18, 28229, 23319, 2, 30, 37, 24, 0, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(2, '2020-07-12', '19:51:42', 'two_way', 191, 36, 12, 5174, 19569, 1.5, 32, 30, 17, 1, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(3, '2020-07-13', '04:04:20', 'one_way', 108, 38, 5, 8147, 10660, 2, 25, 39, 24, 1, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(4, '2020-07-16', '19:31:56', 'two_way', 117, 37, 19, 23972, 13537, 1.5, 8, 47, 38, 1, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(5, '2020-07-11', '15:31:38', 'one_way', 173, 26, 7, 13857, 33003, 1.5, 15, 45, 47, 1, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(6, '2020-07-10', '01:15:40', 'two_way', 175, 33, 20, 27757, 27163, 2, 38, 40, 39, 0, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(7, '2020-07-28', '01:12:26', 'two_way', 120, 35, 7, 27157, 18973, 1.5, 8, 39, 14, 0, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(8, '2020-07-17', '11:50:22', 'two_way', 123, 35, 7, 21039, 24198, 1.5, 49, 42, 22, 1, '2020-06-28 22:34:42', '2020-06-28 22:34:42'),
(9, '2020-06-30', '08:19:13', 'two_way', 195, 32, 10, 25735, 29605, 1.5, 21, 35, 17, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(10, '2020-07-28', '20:48:04', 'two_way', 148, 26, 18, 8103, 10748, 1.5, 8, 45, 49, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(11, '2020-07-16', '23:06:01', 'one_way', 109, 32, 10, 5625, 31755, 1.5, 50, 6, 36, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(12, '2020-07-12', '19:56:44', 'two_way', 199, 28, 15, 20655, 29700, 2, 28, 10, 49, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(13, '2020-07-25', '12:59:10', 'one_way', 121, 29, 18, 21047, 32144, 2, 38, 37, 14, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(14, '2020-07-04', '00:51:33', 'one_way', 111, 34, 12, 16192, 30804, 1.5, 15, 31, 5, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(15, '2020-07-28', '23:49:42', 'one_way', 157, 33, 11, 7673, 33356, 1.5, 4, 37, 40, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(16, '2020-07-05', '11:21:02', 'one_way', 152, 35, 12, 25683, 32472, 2, 23, 34, 36, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(17, '2020-07-05', '16:38:44', 'one_way', 113, 34, 15, 23300, 21556, 1.5, 39, 1, 39, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(19, '2020-07-02', '08:07:00', 'one_way', 200, 28, 7, 23681, 32235, 2, 41, 14, 4, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(20, '2020-07-04', '02:30:23', 'two_way', 199, 37, 8, 19155, 24873, 1.5, 31, 38, 5, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(21, '2020-07-06', '04:26:46', 'one_way', 141, 27, 8, 25271, 30208, 2, 12, 1, 14, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(22, '2020-07-05', '21:52:24', 'two_way', 192, 31, 18, 24528, 32823, 1.5, 1, 6, 34, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(23, '2020-07-14', '22:16:16', 'two_way', 116, 28, 9, 17886, 39047, 2, 5, 45, 3, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(24, '2020-07-12', '19:32:56', 'two_way', 139, 35, 7, 10537, 11557, 1.5, 44, 41, 35, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(25, '2020-07-25', '08:00:44', 'one_way', 160, 29, 12, 29429, 33734, 1.5, 31, 41, 21, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(26, '2020-07-23', '08:19:56', 'one_way', 156, 40, 17, 28798, 35469, 1.5, 28, 48, 43, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(27, '2020-07-25', '11:29:39', 'two_way', 162, 36, 18, 6285, 30073, 1.5, 9, 38, 18, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(28, '2020-07-05', '12:56:30', 'one_way', 141, 36, 10, 16160, 22156, 2, 34, 18, 7, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(29, '2020-07-04', '15:56:27', 'one_way', 169, 38, 20, 19572, 29291, 1.5, 46, 30, 25, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(30, '2020-07-18', '02:29:31', 'two_way', 131, 31, 14, 23642, 25680, 2, 32, 44, 15, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(31, '2020-07-18', '10:25:09', 'two_way', 151, 30, 16, 22173, 12147, 1.5, 33, 8, 7, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(32, '2020-07-03', '14:37:24', 'one_way', 150, 30, 17, 14233, 20503, 2, 38, 13, 36, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(33, '2020-07-18', '11:42:56', 'two_way', 164, 25, 12, 28367, 23657, 1.5, 39, 9, 48, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(34, '2020-07-22', '14:21:25', 'two_way', 102, 26, 13, 9320, 19495, 1.5, 44, 1, 34, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(35, '2020-07-01', '14:49:50', 'two_way', 104, 27, 20, 11873, 13270, 1.5, 33, 29, 51, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(36, '2020-07-05', '13:18:43', 'one_way', 107, 40, 16, 9047, 39504, 2, 3, 37, 15, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(37, '2020-07-06', '22:15:36', 'one_way', 137, 28, 16, 29588, 21288, 1.5, 49, 14, 41, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(38, '2020-07-04', '02:06:21', 'one_way', 144, 30, 20, 22461, 25030, 1.5, 1, 38, 3, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(39, '2020-07-23', '01:01:20', 'two_way', 183, 38, 20, 23434, 30362, 1.5, 24, 32, 32, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(40, '2020-07-14', '14:16:03', 'two_way', 113, 27, 14, 6510, 34906, 1.5, 20, 19, 37, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(41, '2020-07-28', '17:45:56', 'two_way', 140, 25, 13, 26240, 35860, 1.5, 1, 36, 7, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(42, '2020-07-04', '18:30:39', 'one_way', 139, 38, 13, 17610, 29356, 1.5, 14, 1, 39, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(43, '2020-07-18', '13:19:07', 'two_way', 104, 37, 12, 15007, 39835, 1.5, 4, 13, 34, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(44, '2020-07-28', '05:18:15', 'one_way', 189, 25, 8, 14332, 28648, 1.5, 36, 20, 12, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(45, '2020-07-10', '04:23:44', 'one_way', 133, 34, 19, 24862, 11458, 1.5, 38, 40, 18, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(46, '2020-07-21', '12:14:02', 'one_way', 170, 31, 12, 18336, 29414, 2, 9, 21, 47, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(47, '2020-07-20', '06:13:54', 'two_way', 195, 37, 16, 7024, 38254, 2, 33, 6, 1, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(48, '2020-07-10', '06:23:52', 'two_way', 140, 30, 16, 15581, 39603, 1.5, 35, 35, 25, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(49, '2020-07-11', '19:22:14', 'two_way', 115, 36, 9, 22904, 36575, 2, 40, 6, 15, 0, '2020-06-28 22:34:43', '2020-06-28 22:34:43'),
(50, '2020-07-10', '02:32:18', 'one_way', 149, 32, 17, 10347, 19781, 1.5, 48, 17, 47, 1, '2020-06-28 22:34:43', '2020-06-28 22:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Suriname', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(2, 'Croatia', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(3, 'Andorra', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(4, 'INDIA', '2020-06-27 22:15:44', '2020-06-30 02:53:03'),
(5, 'Bangladesh', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(6, 'Costa Rica', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(7, 'Korea', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(8, 'Mali', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(9, 'Rwanda', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(10, 'Uruguay', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(11, 'Libyan Arab Jamahiriya', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(12, 'Cuba', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(13, 'Dominican Republic', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(14, 'Spain', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(15, 'Seychelles', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(16, 'Panama', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(17, 'Congo', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(18, 'Namibia', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(19, 'French Polynesia', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(20, 'United Kingdom', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(21, 'Iceland', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(22, 'Uganda', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(23, 'French Guiana', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(24, 'Somalia', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(25, 'Japan', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(26, 'Nigeria', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(27, 'Malawi', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(28, 'Guadeloupe', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(29, 'Belize', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(30, 'Western Sahara', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(31, 'Jersey', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(32, 'Botswana', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(33, 'Burkina Faso', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(34, 'United States Minor Outlying Islands', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(35, 'Mozambique', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(36, 'Benin', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(37, 'Poland', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(38, 'Palestinian Territories', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(39, 'Djibouti', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(40, 'Saint Kitts and Nevis', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(41, 'Kazakhstan', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(42, 'Pitcairn Islands', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(43, 'Singapore', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(44, 'Barbados', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(45, 'Serbia', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(46, 'Saint Martin', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(47, 'Liechtenstein', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(48, 'Gibraltar', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(49, 'Venezuela', '2020-06-27 22:15:44', '2020-06-27 22:15:44'),
(50, 'Sao Tome and Principe', '2020-06-27 22:15:44', '2020-06-27 22:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_27flights_db_migration', 2),
(5, 'tickets_db_migration', 2),
(6, '2020_06_27_125936_carts_db_migration', 1),
(7, '2020_06_27_132430_adds_api_token_to_users_table', 1),
(8, '2020_06_28_034545_create_locations_table', 1),
(9, '2020_06_28_034651_create_airlines_table', 1),
(10, '2020_06_29_035038_create_flights_table', 3),
(11, '2020_06_29_035052_create_tickets_table', 3),
(12, '2020_06_29_051833_create_tickets_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `flight_id` int(10) UNSIGNED NOT NULL,
  `adults_count` int(10) UNSIGNED NOT NULL,
  `kids_count` int(10) UNSIGNED NOT NULL,
  `passenger_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passenger_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passenger_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passenger_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_cost` int(10) UNSIGNED NOT NULL,
  `departure_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tickets_user_id_foreign` (`user_id`),
  KEY `tickets_flight_id_foreign` (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `flight_id`, `adults_count`, `kids_count`, `passenger_name`, `passenger_email`, `passenger_address`, `passenger_phone`, `total_cost`, `departure_type`, `ticket_type`, `is_confirmed`, `status`, `created_at`, `updated_at`, `token`) VALUES
(1, 9, 49, 3, 0, 'Angus Stroman', 'jarrell94@yahoo.com', '9966 Bennie PortsStephanchester, MT 34609-7908', '(489) 671-4581', 45490, 'two_way', 'economy', 1, 1, '2020-06-28 23:34:58', '2020-06-30 03:35:15', ''),
(2, 6, 6, 1, 0, 'Mervin Wintheiser', 'maximillia32@hotmail.com', '11714 Derrick Street Suite 586\nCrystelburgh, NY 32009-8408', '523.455.2915', 43491, 'one_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(3, 1, 5, 3, 2, 'Darien Homenick', 'cynthia55@macejkovic.org', '522 Colton Mews\nNorth Giovannihaven, SD 40611', '(798) 824-3361 x1952', 44930, 'one_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(4, 4, 21, 1, 2, 'Kelsi Bernhard', 'daisy.ritchie@hotmail.com', '697 Rutherford Camp\nWilkinsonmouth, MA 82037-2435', '906.720.3834 x8527', 35236, 'one_way', 'economy', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(5, 6, 42, 3, 1, 'Gracie Streich', 'emerson08@langworth.info', '6649 Jaida Ramp Apt. 109\nBartolettimouth, MN 90243-1048', '297.304.0026', 35040, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(6, 9, 4, 3, 0, 'Daniela Schuppe', 'rtremblay@bernhard.com', '606 Mayert River Apt. 733\nLake Bellaville, UT 71216', '(329) 608-5226', 35266, 'two_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(7, 2, 15, 2, 2, 'Lela Shields', 'emmerich.torrey@gmail.com', '1213 Becker Track\nStoltenberghaven, GA 14418-3520', '842.609.1854 x2544', 49071, 'two_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(8, 6, 41, 2, 1, 'Dewitt Nitzsche', 'kayden28@gmail.com', '7262 Haley Trail Suite 679\nWest Malcolm, PA 90600-1757', '514.928.0338 x439', 39471, 'one_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(9, 1, 40, 1, 1, 'Joanne Langworth', 'tommie.ruecker@hotmail.com', '17617 Kaylee Park Apt. 579\nBraunville, UT 95686-0850', '1-607-304-8547 x596', 46856, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(10, 3, 37, 2, 0, 'Clark Conroy', 'amely80@hotmail.com', '40856 Emard Avenue Apt. 891\nGrantborough, MS 97913-2691', '257.544.1885 x143', 41043, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(11, 12, 39, 1, 0, 'Samanta Upton', 'camilla.purdy@feil.com', '53393 Brendon Via Apt. 233\nPort Larry, NM 86922-9477', '1-939-910-2939', 35047, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(12, 2, 22, 2, 1, 'Ocie Greenholt', 'iborer@beier.org', '59041 Altenwerth Path\nMartinaberg, CO 52975-6311', '867-719-4246', 33336, 'two_way', 'business', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(13, 12, 17, 2, 0, 'Mr. Oswald Fay', 'sammy23@gmail.com', '597 Lysanne Roads Suite 804\nAmelyport, WA 48394-5831', '581-551-4538 x6138', 41188, 'one_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(14, 12, 17, 1, 0, 'Lesley O\'Keefe', 'kuhn.bryce@hotmail.com', '12420 Ryan Unions\nEast Kaitlynland, CO 13375', '+1-829-368-2409', 37664, 'two_way', 'business', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(15, 2, 40, 2, 0, 'Israel Franecki', 'fbarton@bednar.com', '89357 Stiedemann Radial Apt. 893\nLake Idellhaven, AK 74292-3403', '679.764.8753', 48353, 'one_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(16, 2, 1, 2, 1, 'Orland Hyatt Sr.', 'santino.lind@yahoo.com', '42094 Lehner Glen\nWest Braxton, AL 26338', '(838) 268-0293 x745', 43616, 'one_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(17, 12, 38, 2, 1, 'Albina Kling', 'madalyn46@hotmail.com', '709 Goodwin Fort Suite 781\nNorth Constance, NC 82923', '(793) 824-4881 x75975', 33426, 'two_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(18, 11, 24, 1, 2, 'Raul Lowe', 'thomas42@hotmail.com', '3281 Adams Port\nNorth Arianna, WI 26566-3697', '1-734-687-8085 x9666', 38615, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(19, 6, 7, 2, 0, 'Carlo Bergstrom', 'lily.fadel@donnelly.com', '50376 Schuster Shores Apt. 816\nWest Antoninaland, TN 05011', '(539) 351-2298 x9927', 38010, 'two_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(20, 8, 39, 2, 0, 'Noel Steuber', 'ankunding.austin@gmail.com', '2885 Roob Lock\nSchneiderborough, GA 33534', '979-851-7655', 42925, 'two_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(21, 12, 47, 2, 0, 'Thurman Abbott', 'tate.rau@wehner.com', '3496 Hector Field Apt. 520\nEast Pietro, RI 00407-8122', '253.529.3816', 40273, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(22, 4, 4, 2, 1, 'Geovanni Kunze', 'alexandria.towne@yahoo.com', '812 Collins Meadow Suite 971\nEast Pedrobury, NM 54898', '317-761-1871', 48913, 'two_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(23, 3, 36, 1, 1, 'Quinton Shields', 'wnicolas@waelchi.biz', '5849 Roob View Apt. 899\nDannymouth, NY 26403-1049', '1-786-996-4767 x631', 48626, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(24, 2, 35, 1, 1, 'Rosalia Hettinger PhD', 'georgianna.hilpert@hotmail.com', '8554 Trever Land\nVivastad, AL 49621-9961', '832-348-4582 x905', 49181, 'two_way', 'economy', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(25, 3, 36, 1, 1, 'Buford Heidenreich', 'newell.rath@yahoo.com', '47960 Ratke Roads\nTrystanbury, PA 45369-4700', '221-340-8182', 36342, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(26, 9, 24, 2, 0, 'Daren Denesik', 'elegros@hotmail.com', '99689 Berge Bypass\nDeionside, WV 46011-3809', '(456) 291-8300', 43210, 'two_way', 'economy', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(27, 3, 1, 1, 1, 'Gaetano Fay I', 'gleason.danika@donnelly.info', '73355 Ariel Springs Apt. 409\nEast Gilda, WY 66975-4639', '+17745345940', 40416, 'one_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(28, 11, 13, 2, 0, 'Mr. Charlie Jerde I', 'wehner.rosario@kling.com', '976 Gutmann Pines Suite 906\nEast Elda, IN 71436-7389', '(530) 356-2611', 41709, 'two_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(29, 9, 44, 2, 2, 'Curt Dietrich', 'gwendolyn.beier@bode.com', '6534 Tiara Stravenue Suite 960\nNew Nashberg, MA 40659', '643-223-3770 x5036', 48200, 'one_way', 'business', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(30, 3, 35, 3, 0, 'Miss Clemmie Conroy II', 'dora.purdy@white.com', '91191 Schowalter Road\nWest Carabury, IA 21675-3803', '1-294-644-2089', 37592, 'two_way', 'economy', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(31, 6, 3, 2, 2, 'Obie Herman', 'gorczany.tavares@gmail.com', '6994 Enid Terrace Apt. 069\nWest Alf, MI 96051-0618', '+1 (281) 992-8463', 30008, 'two_way', 'economy', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(32, 8, 46, 2, 0, 'Ron Renner', 'veum.gay@yahoo.com', '79518 Daugherty Road Suite 617\nYosthaven, LA 63096-5311', '(851) 994-6686', 41869, 'two_way', 'economy', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(33, 2, 35, 2, 2, 'Katelyn Predovic', 'lenore07@dare.com', '67168 Stroman Corners Suite 022\nAlyssontown, MA 20042', '747.959.5400 x0137', 31227, 'two_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(34, 2, 45, 1, 0, 'Narciso Abbott V', 'myost@hotmail.com', '286 Witting Glen Suite 026\nHowestad, IL 17387', '(224) 844-0905 x08213', 47577, 'one_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(35, 9, 29, 1, 0, 'Linda Kozey III', 'daisy.bartoletti@williamson.biz', '796 Christina Pass Suite 748\nIrvingberg, NJ 42767', '352.966.9417', 45887, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(36, 7, 47, 3, 0, 'Marcella Thiel Sr.', 'turner.mike@davis.info', '22540 Tatum Shores Apt. 293\nLefflerfort, TN 51416-4275', '1-692-422-3668', 33995, 'one_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(37, 5, 29, 1, 2, 'Rachael Steuber', 'sauer.jacquelyn@morissette.org', '3435 Amy Skyway\nNew Enola, MN 02873-2126', '+1-591-880-8467', 45428, 'one_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(38, 3, 40, 2, 1, 'Travon Torp II', 'nader.ray@gmail.com', '279 Josue Tunnel\nNikoside, IN 86427', '(432) 749-5241', 46779, 'one_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(39, 1, 18, 2, 1, 'Vella Block', 'zhegmann@schiller.com', '673 Brent Ways\nZulauftown, HI 55085-6776', '(846) 473-0680 x6701', 49199, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(40, 8, 18, 2, 1, 'Dr. Carlo Kuvalis MD', 'obailey@gmail.com', '452 Collier Expressway\nConnellytown, ND 29775', '(757) 578-8604 x23342', 48925, 'one_way', 'business', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(41, 2, 43, 2, 0, 'Haleigh Hudson', 'celestino55@okuneva.info', '79305 Cassandre Corners Suite 141\nJohnsonmouth, OH 21813-9632', '(868) 659-6299 x93976', 49943, 'one_way', 'business', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(42, 5, 40, 2, 1, 'Baylee VonRueden', 'xfahey@veum.com', '568 Melyna Lights\nShanahanton, ME 22620', '+1.421.572.6980', 37049, 'two_way', 'business', 1, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(43, 7, 34, 1, 1, 'Juliana Kirlin', 'toni.marquardt@cassin.org', '815 Williamson Lane Apt. 961\nConsidineside, TX 02087', '302.361.3099', 48848, 'one_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(44, 12, 40, 3, 1, 'Lorine Reilly', 'earlene63@boehm.info', '887 Lesley Islands\nWest Kattiemouth, MS 83324-4318', '264.931.1277 x931', 31632, 'two_way', 'business', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(45, 3, 50, 1, 1, 'Elenor Christiansen III', 'floyd15@yahoo.com', '31818 Kari Shoals\nEast Cleveton, IL 14898-3543', '(548) 256-5147 x27346', 47871, 'two_way', 'economy', 1, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(46, 5, 36, 1, 2, 'Kiera Reynolds', 'cremin.meggie@gmail.com', '316 Gutkowski Roads\nLake Shemarshire, SC 02930', '474-507-5111', 37995, 'one_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(47, 12, 2, 2, 2, 'Prof. Justen Hirthe MD', 'koss.april@hotmail.com', '5198 Pfannerstill Isle Apt. 513\nSouth Orvilleberg, GA 04217-0799', '1-626-282-5150 x9271', 49605, 'one_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(48, 5, 50, 1, 1, 'Dr. Laury Ferry II', 'esta30@paucek.com', '288 Earl Course Apt. 172\nAlainaville, PA 83458', '1-436-626-6132 x3686', 49307, 'two_way', 'business', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(49, 5, 15, 2, 2, 'Joshua Feeney', 'tyreek.bauch@heller.org', '82182 Lilyan Rest\nMurphystad, UT 84270-7791', '1-548-844-5840', 39594, 'two_way', 'economy', 0, 1, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(50, 6, 18, 2, 2, 'Mr. Buck Bogisich', 'twila.satterfield@stark.com', '4020 Rosalind Mountains Suite 203\nElsaland, VA 57823-6744', '391-601-8327 x640', 37853, 'two_way', 'economy', 0, 0, '2020-06-28 23:34:58', '2020-06-28 23:34:58', ''),
(60, 1, 2, 1, 0, 'Pawan pradhan', 'pawanpradhan325@gmail.com', 'Nayabazar', '9818926102', 5174, 'one_way', 'economy', 1, 1, '2020-06-30 01:03:21', '2020-06-30 01:03:21', ''),
(59, 1, 2, 1, 0, 'Pawan shrestha', 'pawanpradhan325@gmail.com', 'Kathmandu', '9863180880', 19569, 'one_way', 'business', 1, 1, '2020-06-30 01:01:43', '2020-06-30 01:01:43', ''),
(58, 1, 2, 1, 0, 'Pawan shrestha', 'pawanpradhan325@gmail.com', 'Kathmandu', '9863180880', 19569, 'one_way', 'business', 1, 1, '2020-06-30 00:57:01', '2020-06-30 00:57:01', ''),
(61, 1, 2, 1, 0, 'Pawan shrestha', 'pawanpradhan325@gmail.com', 'Kathmandu', '9818926102', 19569, 'one_way', 'economy', 1, 0, '2020-06-30 01:11:28', '2020-06-30 01:44:19', 'YrnchcEoBs'),
(62, 1, 2, 1, 0, 'Pawan pradhan', 'pawanpradhan325@gmail.com', 'Nayabazar', '9818926102', 5174, 'one_way', 'economy', 1, 1, '2020-06-30 01:12:55', '2020-06-30 01:12:55', 'luqGdPIUWk'),
(63, 1, 2, 1, 0, 'Anamika Karki', 'ak00413@gmail.com', 'nayabazar', '9863180880', 5174, 'one_way', 'economy', 1, 1, '2020-06-30 01:13:40', '2020-06-30 01:13:40', 'EFtwDHR7bM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `api_token`) VALUES
(1, 'admin', 'admin@test.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(2, 'Domenic Rau', 'maurice41@gmail.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(3, 'Emmanuelle Glover', 'willie15@mccullough.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(4, 'Pattie White', 'feil.keith@gmail.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(5, 'Edward Hauck II', 'rodolfo.eichmann@emmerich.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(6, 'Beth Runolfsson', 'robel.maverick@hotmail.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(7, 'Carole Marquardt', 'mschneider@kub.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(8, 'Harold Brekke', 'jeffery17@ortiz.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(9, 'Elmore Bradtke', 'williamson.priscilla@crist.org', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(10, 'Darryl Olson', 'finn.schiller@yahoo.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(11, 'Joelle Barrows', 'cyril88@wilkinson.com', NULL, '$2y$10$a2D9DnUKWidTlA7Vw7ZlHOixpd4bvcVdTuha6jAngr/6ANuksZ5B2', NULL, '2020-06-27 22:15:44', '2020-06-27 22:15:44', NULL),
(12, 'Anamika Karki', 'apple@ball.com', NULL, '$2y$10$VoLfk6P2oUZ30xNtRZUSLOy4N6Yb/6tjNwTdeVOhACLUO7YCLuRju', NULL, '2020-06-28 01:45:28', '2020-06-28 01:45:28', NULL),
(13, 'SABIN', 'admin@gmail.com', NULL, '$2y$10$Rp.36k7yAQ9xE7fFy69LouRmb1I3p5QPfdeCUsn.RWBT/9MFb89cq', NULL, '2020-06-28 01:46:31', '2020-06-28 01:46:31', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
