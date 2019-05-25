-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 02:03 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kib`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double(8,2) NOT NULL,
  `lang` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `address`, `lat`, `lang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'asd', 'شارع الامين', 40.73, -73.82, '2019-04-02 08:08:15', '2019-04-02 08:08:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_name_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicant_name_en`, `applicant_name_ar`, `service_id`, `user_id`, `date`, `code`, `created_at`, `updated_at`) VALUES
(7, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:48:29', '648501', '2019-05-24 20:48:29', '2019-05-24 20:48:29'),
(8, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:49:13', '458399', '2019-05-24 20:49:13', '2019-05-24 20:49:13'),
(9, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:50:04', '433677', '2019-05-24 20:50:04', '2019-05-24 20:50:04'),
(10, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:50:45', '740687', '2019-05-24 20:50:45', '2019-05-24 20:50:45'),
(11, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:51:40', '274251', '2019-05-24 20:51:40', '2019-05-24 20:51:40'),
(12, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:52:08', '655572', '2019-05-24 20:52:08', '2019-05-24 20:52:08'),
(13, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:52:34', '109772', '2019-05-24 20:52:34', '2019-05-24 20:52:34'),
(14, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:54:22', '503075', '2019-05-24 20:54:22', '2019-05-24 20:54:22'),
(15, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:54:51', '658471', '2019-05-24 20:54:51', '2019-05-24 20:54:51'),
(16, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:56:50', '879547', '2019-05-24 20:56:50', '2019-05-24 20:56:50'),
(17, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:57:19', '799794', '2019-05-24 20:57:19', '2019-05-24 20:57:19'),
(18, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:59:17', '487789', '2019-05-24 20:59:17', '2019-05-24 20:59:17'),
(19, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-24 23:59:57', '846932', '2019-05-24 20:59:57', '2019-05-24 20:59:57'),
(20, 'hamza hossen yaghi', 'حمزة حسين ياغي', 5, 1, '2019-05-25 00:00:18', '789343', '2019-05-24 21:00:18', '2019-05-24 21:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `application_options`
--

CREATE TABLE `application_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_options`
--

INSERT INTO `application_options` (`id`, `application_id`, `option_id`, `option_value`, `created_at`, `updated_at`) VALUES
(1, 20, 4, 'hello', '2019-05-24 21:00:18', '2019-05-24 21:00:18'),
(2, 20, 11, 'test', '2019-05-24 21:00:18', '2019-05-24 21:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `ar_title`, `en_title`, `city_id`, `created_at`, `updated_at`) VALUES
(4, 'سوريا', 'Syria', 0, '2019-05-12 14:25:51', '2019-05-12 14:25:51'),
(5, 'دمشق', 'damascus', 4, '2019-05-12 14:25:59', '2019-05-12 14:25:59'),
(6, 'حمص', 'homs', 4, '2019-05-12 14:26:14', '2019-05-12 14:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `type`, `data`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'facebook1', 'facebook.com', '2019-04-02 08:18:36', '2019-04-02 08:18:41', NULL),
(2, 'phone', '+963111234567', '2019-05-17 22:54:14', '2019-05-17 22:54:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `en_title`, `ar_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'asdasd', 'sadasda', '2019-04-06 19:29:31', '2019-04-06 19:29:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `url`, `media_type`, `content_id`, `content_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, '/1554589771commercial.jpg', 'image', 1, 'gallery', '2019-04-06 19:29:32', '2019-04-06 19:29:32', NULL),
(20, '/1554589772download.jpg', 'image', 1, 'gallery', '2019-04-06 19:29:32', '2019-04-06 19:29:32', NULL),
(21, '/1554589794slide4.jpg', 'image', 1, 'news', '2019-04-06 19:29:54', '2019-04-06 19:29:54', NULL),
(22, '/1554589794vo28ssjt25l21.jpg', 'image', 1, 'news\r\n', '2019-04-06 19:29:54', '2019-04-06 19:29:54', NULL),
(43, '1558487748.jpg', 'image', 1, 'service', '2019-05-21 22:15:48', '2019-05-21 22:15:48', NULL),
(44, '1558487894.jpg', 'image', 3, 'service', '2019-05-21 22:18:14', '2019-05-21 22:18:14', NULL),
(45, '1558487941.jpg', 'image', 2, 'service', '2019-05-21 22:19:01', '2019-05-21 22:19:01', NULL),
(46, '/1558488809general_carpentry.jpg', 'image', 4, 'service', '2019-05-21 22:33:29', '2019-05-21 22:33:29', NULL),
(47, '/1558488809.pdf', 'quotation', 4, 'service', '2019-05-21 22:33:29', '2019-05-21 22:33:29', NULL),
(48, '/1558488841bespoke carpentry 1.jpg', 'image', 5, 'service', '2019-05-21 22:34:01', '2019-05-21 22:34:01', NULL),
(49, '/1558488841.pdf', 'quotation', 5, 'service', '2019-05-21 22:34:01', '2019-05-21 22:34:01', NULL),
(50, '/1558487278.pdf', 'quotation', 1, 'service', '2019-05-21 22:07:58', '2019-05-21 22:07:58', NULL),
(51, '/1558487479.pdf', 'quotation', 2, 'service', '2019-05-21 22:11:19', '2019-05-21 22:11:19', NULL),
(52, '/1558487548.pdf', 'quotation', 3, 'service', '2019-05-21 22:12:28', '2019-05-21 22:12:28', NULL),
(55, '/1558490519bespoke carpentry 1.jpg', 'image', 10, 'product', '2019-05-21 23:01:59', '2019-05-21 23:01:59', NULL),
(57, '/1558490961bespoke carpentry 1.jpg', 'image', 11, 'product', '2019-05-21 23:09:21', '2019-05-21 23:09:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_21_204936_create_media_table', 1),
(4, '2019_03_21_211201_create_services_table', 1),
(5, '2019_03_21_211635_create_news_table', 1),
(6, '2019_03_21_213546_create_galleries_table', 2),
(7, '2019_03_21_213732_create_contacts_table', 3),
(8, '2019_03_21_213841_create_about_us_table', 4),
(10, '2019_03_21_224526_create_sliders_table', 5),
(11, '2019_03_21_224759_create_partners_table', 6),
(15, '2019_03_21_225155_create_complaints_table', 7),
(16, '2019_03_21_225843_create_notifications_table', 8),
(27, '2019_03_21_230302_create_companies_table', 9),
(31, '2019_05_10_214019_create_cities_table', 9),
(32, '2019_05_06_125507_create_options_table', 10),
(34, '2019_03_21_230422_create_banks_table', 12),
(37, '2019_05_21_152639_create_prices_table', 13),
(42, '2019_05_14_011211_create_applications_table', 14),
(43, '2019_05_24_205119_create_partner_services_table', 14),
(44, '2019_05_24_210813_create_application_options_table', 14),
(45, '2019_05_21_181854_create_option_services_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `en_title`, `ar_title`, `en_body`, `ar_body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sadasda', 'asdasd', 'asdasdasdasdasdasdasdasd', 'asdasdasdasdasdasdasdasd', '2019-04-06 19:29:54', '2019-04-06 19:29:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `type`, `value`, `service_id`, `created_at`, `updated_at`) VALUES
(4, 'data', 'dropdown', 'hello@test', 5, '2019-05-17 21:47:14', '2019-05-19 21:26:20'),
(11, 'data123', 'input', ' ', 5, '2019-05-24 20:53:43', '2019-05-24 20:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `option_services`
--

CREATE TABLE `option_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `option_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `image`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(2, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(3, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(4, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(5, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(6, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(7, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL),
(8, 'bemo', '1558313616.jpg', 'https://www.bemobank.com/', '2019-05-19 21:53:36', '2019-05-19 21:53:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partner_services`
--

CREATE TABLE `partner_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parnter_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `option_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `portal_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `en_title`, `ar_title`, `en_subtitle`, `ar_subtitle`, `ar_description`, `en_description`, `parent_id`, `active`, `company_id`, `portal_link`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Life insucrance', 'Life insucrance', 'Life insucrance', 'Life insucrance', 'Life insucranceLife insucranceLife insucranceLife insucranceLife insucrance', 'Life insucranceLife insucranceLife insucrance', 0, 1, 0, '/Life insucrance', 'service', '2019-05-21 22:07:58', '2019-05-21 22:07:58', NULL),
(2, 'Life insucrance son', 'Life insucrance son', 'Life insucrance sonLife insucrance son', 'Life insucrance sonLife insucrance sonLife insucrance son', 'Life insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance son', 'Life insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance sonLife insucrance son', 1, 1, 0, 'Life insucrance son', 'service', '2019-05-21 22:11:19', '2019-05-21 22:11:19', NULL),
(3, 'Life insucrance son2', 'Life insucrance son2', 'Life insucrance son2', 'Life insucrance son2', 'Life insucrance son2Life insucrance son2Life insucrance son2Life insucrance son2', 'Life insucrance son2Life insucrance son2Life insucrance son2', 1, 1, 0, 'Life insucrance son2', 'service', '2019-05-21 22:12:28', '2019-05-21 22:12:28', NULL),
(4, 'insurace 2', 'insurace 2', 'insurace 2', 'insurace 2', 'insurace 2insurace 2insurace 2', 'insurace 2insurace 2insurace 2', 0, 1, 0, 'insurace 2insurace 2', 'service', '2019-05-21 22:33:29', '2019-05-21 22:33:29', NULL),
(5, 'insurace 2 son1', 'insurace 2 son1', 'insurace 2 son1insurace 2 son1', 'insurace 2 son1insurace 2 son1insurace 2 son1', 'insurace 2 son1insurace 2 son1insurace 2 son1insurace 2 son1', 'insurace 2 son1insurace 2 son1insurace 2 son1', 4, 1, 0, 'insurace 2 son1', 'service', '2019-05-21 22:34:01', '2019-05-21 22:34:01', NULL),
(10, 'sadasda', 'sadasda', 'sadasda', 'sadasda', 'sadasda', 'sadasda', 0, 1, 0, 'sadasda', 'product', '2019-05-21 23:01:59', '2019-05-21 23:01:59', NULL),
(11, 'sadasdasadasdasadasda', 'sadasdasadasdasadasda', 'sadasdasadasdasadasda', 'sadasdasadasdasadasdasadasda', 'sadasdasadasdasadasda', 'sadasdasadasdasadasda', 10, 1, NULL, '0', 'sadasda', '2019-05-21 23:09:21', '2019-05-21 23:09:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `fcmtoken` text COLLATE utf8mb4_unicode_ci,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_options`
--
ALTER TABLE `application_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_services`
--
ALTER TABLE `option_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_services`
--
ALTER TABLE `partner_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `application_options`
--
ALTER TABLE `application_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `option_services`
--
ALTER TABLE `option_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partner_services`
--
ALTER TABLE `partner_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
