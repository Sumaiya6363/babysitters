-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `bn_title`, `slug`, `category_id`, `image`, `description`, `meta_title`, `meta_description`, `meta_tags`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Lorem Ipsum is simply dummy', 'Lorem Ipsum is simply dummy', 'lorem-ipsum-is-simply-dummy', 1, 'uploads/blogs/16666070842116372251.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, NULL, NULL, 1, NULL, '2022-10-24 04:24:44', '2022-10-24 04:24:44'),
(6, 'Many desktop publishing packages and web page', 'Many desktop publishing packages and web page editors', 'many-desktop-publishing-packages-and-web-page', 2, 'uploads/blogs/1666607138659175534.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, NULL, NULL, 1, NULL, '2022-10-24 04:25:38', '2022-10-24 04:25:38'),
(7, 'It was popularised in the 1960s with the release of Letraset', 'It was popularised in the 1960s with the release of Letraset', 'it-was-popularised-in-the-1960s-with-the-release-of-letraset', 1, 'uploads/blogs/1666607166431413952.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, NULL, NULL, 1, NULL, '2022-10-24 04:26:06', '2022-10-24 04:26:06'),
(8, 'typesetting, remaining essentially unchanged. It was popularised', 'typesetting, remaining essentially unchanged. It was popularised', 'typesetting-remaining-essentially-unchanged-it-was-popularised', 2, 'uploads/blogs/16666072041781468738.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, NULL, NULL, 1, NULL, '2022-10-24 04:26:44', '2022-10-24 04:26:44'),
(9, 'a galley of type and scrambled it to make a type specimen book', 'a galley of type and scrambled it to make a type specimen book', 'a-galley-of-type-and-scrambled-it-to-make-a-type-specimen-book', 2, 'uploads/blogs/16666072381549434580.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>', NULL, NULL, NULL, 1, NULL, '2022-10-24 04:27:18', '2022-10-24 04:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `bn_name`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'case category 1', 'case category 1', 'uploads/blog-categories/1666596426929050451.jpg', 1, NULL, '2022-10-24 01:27:06', '2022-10-24 01:27:06'),
(2, 'case category 2', 'case category 2', 'uploads/blog-categories/16665964482036054035.jpg', 1, NULL, '2022-10-24 01:27:28', '2022-10-24 01:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Md Abu Taleb', '01779325718', 'admin@gmail.com', 'Need to change Hosting package', 'na', 1, NULL, '2022-04-23 01:23:16', '2022-04-23 01:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expired_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_times` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `bn_name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'Dhaka', 0, NULL, NULL),
(2, 'Dinajpur', 'Dinajpur', 0, NULL, NULL),
(3, 'Rangpur', 'Rangpur', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `email`, `rating`, `rating_number`, `image`, `comments`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '5', '4', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 2, NULL, '2022-08-30 02:27:49', '2022-08-30 03:45:29'),
(5, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '2', '5', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 1, NULL, '2022-08-30 02:27:49', '2022-08-30 02:27:49'),
(6, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '3', '6', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 1, NULL, '2022-08-30 02:27:49', '2022-08-30 02:27:49'),
(7, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '4', '7', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 2, NULL, '2022-08-30 02:27:49', '2022-08-30 03:45:35'),
(8, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '5', '8', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 1, NULL, '2022-08-30 02:27:49', '2022-08-30 02:27:49'),
(9, 'MD. ABU TALEB', '01998139009', 'abutalebgmtt@gmail.com', '1', '4', 'public/images/feedbacks/630dca056b992.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.', 1, NULL, '2022-08-30 02:27:49', '2022-08-30 02:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `menu_types`
--

CREATE TABLE `menu_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_types`
--

INSERT INTO `menu_types` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Breakfast', '20220321082938.png', 1, '2022-03-21 02:29:38', '2022-03-21 02:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_03_13_092013_create_product_categories_table', 1),
(11, '2022_03_13_092028_create_products_table', 1),
(12, '2022_03_13_092110_create_contacts_table', 1),
(13, '2022_03_13_092123_create_feedback_table', 1),
(14, '2022_03_13_092142_create_websettings_table', 1),
(15, '2022_03_13_092205_create_blog_categories_table', 1),
(17, '2022_03_13_092236_create_orders_table', 1),
(18, '2022_03_13_092247_create_order_details_table', 1),
(19, '2022_03_13_092454_create_reservations_table', 1),
(20, '2022_03_13_092555_create_countries_table', 1),
(21, '2022_03_13_092608_create_districts_table', 1),
(22, '2022_03_13_092652_create_coupons_table', 1),
(24, '2022_03_21_075231_create_menu_types_table', 2),
(27, '2022_09_18_162344_create_sitter_information_table', 4),
(29, '2022_03_13_092217_create_blogs_table', 6),
(30, '2022_10_12_062114_create_subscribes_table', 6),
(31, '2022_09_19_094004_create_sitter_requests_table', 7),
(34, '2022_10_25_133117_create_shippings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `subtotal` double(10,2) NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double(10,2) NOT NULL,
  `vat` double(10,2) NOT NULL,
  `shipping` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `payment_status` int(2) NOT NULL DEFAULT 1,
  `payment_method` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_account` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderuid`, `user_id`, `billing_id`, `subtotal`, `coupon`, `discount`, `vat`, `shipping`, `total`, `payment_status`, `payment_method`, `payment_account`, `status`, `created_at`, `updated_at`) VALUES
(1, '123', 7, 1, 717.00, '0', 0.00, 0.00, 40.00, 757.00, 2, NULL, NULL, 1, '2022-04-23 00:02:06', '2022-08-30 03:46:06'),
(2, '123', 8, 1, 478.00, '0', 0.00, 47.80, 40.00, 565.80, 1, NULL, NULL, 1, '2022-04-27 00:24:26', '2022-10-26 02:20:41'),
(3, '123', 9, 1, 955.00, '0', 0.00, 95.50, 40.00, 1090.50, 1, NULL, NULL, 2, '2022-08-29 22:37:26', '2022-08-29 22:37:26'),
(4, '123', 9, 1, 478.00, '0', 0.00, 47.80, 40.00, 565.80, 1, NULL, NULL, 2, '2022-08-29 22:44:27', '2022-08-29 22:44:27'),
(5, '123', 9, 1, 859.00, '0', 0.00, 85.90, 40.00, 984.90, 1, NULL, NULL, 2, '2022-08-29 22:48:43', '2022-08-29 22:48:43'),
(6, '123', 1, 1, 478.00, '0', 0.00, 47.80, 40.00, 565.80, 1, NULL, NULL, 2, '2022-08-30 02:22:22', '2022-08-30 02:22:22'),
(7, '123', 13, 1, 1000.00, '0', 0.00, 100.00, 40.00, 1140.00, 1, NULL, NULL, 2, '2022-10-25 05:13:45', '2022-10-25 05:13:45'),
(8, '123', 13, 1, 717.00, '0', 0.00, 71.70, 40.00, 828.70, 1, NULL, NULL, 2, '2022-10-25 05:36:13', '2022-10-25 05:36:13'),
(9, '123', 18, 1, 2239.00, '0', 0.00, 223.90, 40.00, 2502.90, 1, NULL, NULL, 2, '2022-10-25 23:42:58', '2022-10-25 23:42:58'),
(10, '123', 18, 1, 478.00, '0', 0.00, 47.80, 40.00, 565.80, 1, NULL, NULL, 2, '2022-10-25 23:52:26', '2022-10-25 23:52:26'),
(11, '123', 18, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 1, NULL, NULL, 2, '2022-10-25 23:56:16', '2022-10-25 23:56:16'),
(12, '123', 18, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 1, NULL, NULL, 2, '2022-10-25 23:58:20', '2022-10-25 23:58:20'),
(13, '123', 18, 1, 381.00, '0', 0.00, 38.10, 40.00, 459.10, 1, NULL, NULL, 2, '2022-10-26 00:00:54', '2022-10-26 00:00:54'),
(14, '123', 18, 1, 0.00, '0', 0.00, 0.00, 40.00, 40.00, 1, NULL, NULL, 2, '2022-10-26 00:18:08', '2022-10-26 00:18:08'),
(15, '123', 18, 1, 0.00, '0', 0.00, 0.00, 40.00, 40.00, 1, NULL, NULL, 2, '2022-10-26 00:18:42', '2022-10-26 00:18:42'),
(16, '123', 18, 1, 381.00, '0', 0.00, 38.10, 40.00, 459.10, 1, NULL, NULL, 2, '2022-10-26 00:19:13', '2022-10-26 00:19:13'),
(17, '123', 18, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 1, NULL, NULL, 2, '2022-10-26 00:20:42', '2022-10-26 00:20:42'),
(18, '123', 18, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 1, NULL, NULL, 3, '2022-10-26 01:34:20', '2022-10-26 05:12:56'),
(19, '123', 19, 1, 668.00, '0', 0.00, 66.80, 40.00, 774.80, 1, NULL, NULL, 2, '2022-10-26 05:35:40', '2022-10-26 05:35:40'),
(20, '123', 19, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 1, NULL, NULL, 2, '2022-10-26 06:34:14', '2022-10-26 06:34:14'),
(21, '123', 19, 1, 239.00, '0', 0.00, 23.90, 40.00, 302.90, 2, 'bkash', '01796722657', 2, '2022-10-26 07:40:14', '2022-10-26 07:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `qty`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 239, 1, 239, 1, '2022-04-23 00:02:06', '2022-04-23 00:02:06'),
(2, 1, 2, 239, 1, 239, 1, '2022-04-23 00:02:06', '2022-04-23 00:02:06'),
(3, 1, 3, 239, 1, 239, 1, '2022-04-23 00:02:06', '2022-04-23 00:02:06'),
(4, 2, 1, 239, 1, 262.9, 1, '2022-04-27 00:24:26', '2022-04-27 00:24:26'),
(5, 2, 3, 239, 1, 262.9, 1, '2022-04-27 00:24:26', '2022-04-27 00:24:26'),
(6, 3, 5, 287, 1, 315.7, 1, '2022-08-29 22:37:26', '2022-08-29 22:37:26'),
(7, 3, 6, 287, 1, 315.7, 1, '2022-08-29 22:37:26', '2022-08-29 22:37:26'),
(8, 3, 9, 381, 1, 419.1, 1, '2022-08-29 22:37:26', '2022-08-29 22:37:26'),
(9, 4, 1, 239, 1, 262.9, 1, '2022-08-29 22:44:27', '2022-08-29 22:44:27'),
(10, 4, 2, 239, 1, 262.9, 1, '2022-08-29 22:44:27', '2022-08-29 22:44:27'),
(11, 5, 3, 239, 1, 262.9, 1, '2022-08-29 22:48:43', '2022-08-29 22:48:43'),
(12, 5, 4, 333, 1, 366.3, 1, '2022-08-29 22:48:43', '2022-08-29 22:48:43'),
(13, 5, 5, 287, 1, 315.7, 1, '2022-08-29 22:48:43', '2022-08-29 22:48:43'),
(14, 6, 1, 239, 1, 262.9, 1, '2022-08-30 02:22:22', '2022-08-30 02:22:22'),
(15, 6, 3, 239, 1, 262.9, 1, '2022-08-30 02:22:22', '2022-08-30 02:22:22'),
(16, 7, 12, 1000, 1, 1100, 1, '2022-10-25 05:13:46', '2022-10-25 05:13:46'),
(17, 8, 2, 239, 3, 788.7, 1, '2022-10-25 05:36:13', '2022-10-25 05:36:13'),
(18, 9, 12, 1000, 2, 2200, 1, '2022-10-25 23:42:58', '2022-10-25 23:42:58'),
(19, 9, 2, 239, 1, 262.9, 1, '2022-10-25 23:42:58', '2022-10-25 23:42:58'),
(20, 10, 2, 239, 2, 525.8, 1, '2022-10-25 23:52:26', '2022-10-25 23:52:26'),
(21, 11, 2, 239, 1, 262.9, 1, '2022-10-25 23:56:16', '2022-10-25 23:56:16'),
(22, 12, 2, 239, 1, 262.9, 1, '2022-10-25 23:58:20', '2022-10-25 23:58:20'),
(23, 13, 9, 381, 1, 419.1, 1, '2022-10-26 00:00:54', '2022-10-26 00:00:54'),
(24, 16, 9, 381, 1, 419.1, 1, '2022-10-26 00:19:13', '2022-10-26 00:19:13'),
(25, 17, 3, 239, 1, 262.9, 1, '2022-10-26 00:20:42', '2022-10-26 00:20:42'),
(26, 18, 3, 239, 1, 262.9, 1, '2022-10-26 01:34:20', '2022-10-26 01:34:20'),
(27, 19, 2, 239, 1, 262.9, 1, '2022-10-26 05:35:40', '2022-10-26 05:35:40'),
(28, 19, 10, 429, 1, 471.9, 1, '2022-10-26 05:35:40', '2022-10-26 05:35:40'),
(29, 20, 3, 239, 1, 262.9, 1, '2022-10-26 06:34:14', '2022-10-26 06:34:14'),
(30, 21, 3, 239, 1, 262.9, 1, '2022-10-26 07:40:14', '2022-10-26 07:40:14');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `menu_type_id` int(10) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `discount_price` double(10,2) DEFAULT NULL,
  `price_active` double NOT NULL DEFAULT 1,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `bn_name`, `slug`, `category_id`, `menu_type_id`, `image`, `price`, `discount_price`, `price_active`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Wonton', 'Wonton', 'Wonton', 1, 3, '20220327063736.png', 239.00, 239.00, 1, 'Wonton', 1, NULL, '2022-03-27 00:35:36', '2022-03-27 00:37:36'),
(2, 'Vegetable Spring Roll', 'Vegetable Spring Roll', 'Vegetable Spring Roll', 1, 3, '20220327063808.png', 239.00, 239.00, 1, 'Vegetable Spring Roll', 1, NULL, '2022-03-27 00:38:08', '2022-03-27 00:38:08'),
(3, 'Chicken Spring Roll', 'Chicken Spring Roll', 'Chicken Spring Roll', 1, 3, '20220327063830.png', 239.00, 239.00, 1, 'Chicken Spring Roll', 1, NULL, '2022-03-27 00:38:30', '2022-03-27 00:38:30'),
(4, 'Fried Chicken', 'Fried Chicken', 'Fried Chicken', 1, 3, '20220327063856.png', 333.00, NULL, 1, 'Fried Chicken', 1, NULL, '2022-03-27 00:38:56', '2022-03-27 00:38:56'),
(5, 'Chicken wings', 'Chicken wings', 'Chicken wings', 1, 3, '20220327063931.png', 287.00, 287.00, 1, 'Chicken wings', 1, NULL, '2022-03-27 00:39:31', '2022-03-27 00:39:31'),
(6, 'Chicken Lollipop', 'Chicken Lollipop', 'Chicken Lollipop', 1, 3, '20220327063957.png', 287.00, 287.00, 1, 'Chicken Lollipop', 1, NULL, '2022-03-27 00:39:57', '2022-03-27 00:39:57'),
(7, 'Beef with Basil Leaf', 'Beef with Basil Leaf', 'Beef with Basil Leaf', 2, 3, '20220327064034.png', 333.00, 333.00, 1, 'Beef with Basil Leaf', 1, NULL, '2022-03-27 00:40:34', '2022-03-27 00:40:34'),
(8, 'Beef Black Pepper', 'Beef Black Pepper', 'Beef Black Pepper', 2, 3, '20220327064121.png', 381.00, 381.00, 1, 'Beef Black Pepper', 1, NULL, '2022-03-27 00:41:21', '2022-03-27 00:41:21'),
(9, 'Beef Sizzling', 'Beef Sizzling', 'Beef Sizzling', 2, 3, '20220327064144.png', 381.00, 381.00, 1, 'Beef Sizzling', 1, NULL, '2022-03-27 00:41:44', '2022-03-27 00:41:44'),
(10, 'Beef Mongolian', 'Beef Mongolian', 'Beef Mongolian', 2, 3, '20220327064210.png', 429.00, 429.00, 1, 'Beef Mongolian', 1, NULL, '2022-03-27 00:42:10', '2022-03-27 00:42:10'),
(11, 'Beef Red Curry', 'Beef Red Curry', 'Beef Red Curry', 2, 3, '20220327064236.png', 429.00, 429.00, 1, 'Beef Red Curry', 1, NULL, '2022-03-27 00:42:36', '2022-03-27 00:42:36'),
(12, 'new food name', 'new food name', 'new food name', 12, 3, '20221025105912.jpg', 1000.00, 900.00, 1, 'asfasdfasfasfa asdfs', 1, NULL, '2022-10-25 04:59:12', '2022-10-25 04:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `bn_name`, `slug`, `image`, `banner`, `parent_id`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Appetizer', 'Appetizer', 'Appetizer', '20220327060651.png', NULL, NULL, 'Appetizer', 1, NULL, '2022-03-27 00:06:51', '2022-03-27 00:06:51'),
(2, 'Beef', 'Beef', 'Beef', NULL, NULL, NULL, 'Beef', 1, NULL, '2022-03-27 00:07:08', '2022-03-27 00:07:08'),
(3, 'Cake', 'Cake', 'Cake', NULL, NULL, NULL, 'Cake', 1, NULL, '2022-03-27 00:07:18', '2022-03-27 00:07:18'),
(4, 'Chicken', 'Chicken', 'Chicken', NULL, NULL, NULL, 'Chicken', 1, NULL, '2022-03-27 00:07:27', '2022-03-27 00:07:27'),
(5, 'Classic Beverage', 'Classic Beverage', 'Classic Beverage', NULL, NULL, NULL, 'Classic Beverage', 1, NULL, '2022-03-27 00:07:35', '2022-03-27 00:07:35'),
(6, 'Fish', 'Fish', 'Fish', NULL, NULL, NULL, 'Fish', 1, NULL, '2022-03-27 00:07:45', '2022-03-27 00:07:45'),
(7, 'Mini cake', 'Mini cake', 'Mini cake', NULL, NULL, NULL, 'Mini cake', 1, NULL, '2022-03-27 00:07:53', '2022-03-27 00:07:53'),
(8, 'Noodles', 'Noodles', 'Noodles', NULL, NULL, NULL, 'Noodles', 1, NULL, '2022-03-27 00:07:59', '2022-03-27 00:07:59'),
(9, 'Rice', 'Rice', 'Rice', NULL, NULL, NULL, 'Rice', 1, NULL, '2022-03-27 00:08:08', '2022-03-27 00:08:08'),
(10, 'Salad', 'Salad', 'Salad', NULL, NULL, NULL, 'Salad', 1, NULL, '2022-03-27 00:08:16', '2022-03-27 00:08:16'),
(11, 'Savourys', 'Savourys', 'Savourys', NULL, NULL, NULL, 'Savourys', 1, NULL, '2022-03-27 00:08:24', '2022-03-27 00:08:24'),
(12, 'Shots', 'Shots', 'Shots', NULL, NULL, NULL, 'Shots', 1, NULL, '2022-03-27 00:08:34', '2022-03-27 00:08:34'),
(13, 'Soup', 'Soup', 'Soup', NULL, NULL, NULL, 'Soup', 1, NULL, '2022-03-27 00:08:41', '2022-03-27 00:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `person`, `reservation_date`, `reservation_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Abu Taleb', 'abutaleb@gmail.com', '01779325718', '2', '03/23/2022', '11:00am', 'na', '0', '2022-03-23 02:46:52', '2022-04-22 23:54:19'),
(2, 'Md Abu Taleb', 'admin@gmail.com', '01779325718', '2', '03/24/2022', '12:00pm', 'na', '2', '2022-03-23 22:30:09', '2022-04-22 23:56:26'),
(3, 'Md Abu Taleb', 'abutaleb@gmail.com', '01779325718', '2', '03/24/2022', '12:00pm', 'na', '4', '2022-03-23 22:33:00', '2022-03-23 22:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_alternet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `name`, `email`, `mobile`, `mobile_alternet`, `zila`, `thana`, `address`, `message`, `created_at`, `updated_at`) VALUES
(1, 18, 'Arafat Sharker', 'arafat@gmail.com', '01544545345435', '0164645665', 'dinajpur', 'kotoali', 'Shobotpur, Sadar, Dinajpur', 'emerjency order needed', '2022-10-25 22:23:24', '2022-10-25 23:52:26'),
(2, 19, 'rubal', 'rubal@gmail.com', '01796722657', '01353535', 'dinajpur', 'kotoali', 'Shobotpur, Sadar, Dinajpur', 'some message', '2022-10-26 05:33:51', '2022-10-26 05:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `sitter_information`
--

CREATE TABLE `sitter_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_district` int(11) DEFAULT NULL,
  `current_district` int(11) DEFAULT NULL,
  `nid_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `self_cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_nid_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_nid_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_nid_back` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relationshp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_salary` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_salary` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitter_information`
--

INSERT INTO `sitter_information` (`id`, `user_id`, `image`, `home_district`, `current_district`, `nid_no`, `nid_front`, `nid_back`, `self_cv`, `guardian_name`, `guardian_mobile`, `guardian_email`, `guardian_photo`, `guardian_nid_no`, `guardian_nid_front`, `guardian_nid_back`, `guardian_relationshp`, `degree_name`, `degree_institute`, `degree_group`, `passing_year`, `available_time`, `expected_salary`, `approved_salary`, `user_salary`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 'uploads/users/1663518822891361670.jpg', 2, 2, '0234245435', 'uploads/nid/16635188221492467888.jpg', 'uploads/nid/1663518822775326617.jpg', 'uploads/cv/1663518822102761578.docx', 'md aburaihan', '01796722657', 'bokul@gmail.com', 'uploads/guardian/16637611032038218281.jpg', '8770098709', 'uploads/guardian_nid/16635188221328897616.jpg', 'uploads/guardian_nid/1663518822194162993.jpg', 'father', 'BSC In CSE', 'Northan University', 'Science', '2021', 'Full Time', '30000', '2500', '3000', 2, '2022-09-18 10:33:42', '2022-10-25 01:53:50'),
(2, 19, 'uploads/users/16667840311922144719.jpg', NULL, 2, '0234245435', 'uploads/nid/1666784031885680683.jpg', 'uploads/nid/166678403162316241.jpg', 'uploads/cv/16667840311432498998.docx', 'md aburaihan', '01796722657', 'bokul@gmail.com', 'uploads/guardian/16667840311810467914.jpg', '8770098709', 'uploads/guardian_nid/1666784031898423955.jpg', 'uploads/guardian_nid/16667840311697061385.jpg', 'father', 'BSC In CSE', 'Northan University', 'Science', '2021', 'Full Time', '40000', NULL, NULL, 2, '2022-10-26 05:33:51', '2022-10-26 05:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `sitter_requests`
--

CREATE TABLE `sitter_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `sitter_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hire_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitter_requests`
--

INSERT INTO `sitter_requests` (`id`, `user_id`, `sitter_id`, `name`, `email`, `mobile`, `address`, `start_date`, `end_date`, `hire_type`, `payment_period`, `amount`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 11, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', 'Shobotpur, Sadar, Dinajpur', '2022-10-11', '2022-10-29', 'Monthly', 'Monthly', '5000', 'asdfasf', 1, '2022-10-24 23:04:41', '2022-10-25 02:43:32'),
(2, 12, 11, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', 'Shobotpur, Sadar, Dinajpur', '2022-10-11', '2022-10-29', 'Monthly', 'Monthly', '4500', 'asdfasf', 1, '2022-10-24 23:06:40', '2022-10-25 02:08:27'),
(3, 13, 11, 'naim islam', 'naim@gmail.com', '01796722657', 'Shobotpur, Sadar, Dinajpur', '2022-10-31', '2022-11-30', 'Monthly', 'Monthly', '7000', 'this is emarjency', 1, '2022-10-25 03:12:00', '2022-10-25 03:32:04'),
(4, 18, 11, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', 'Shobotpur, Sadar, Dinajpur', '2022-10-19', '2022-11-05', 'Monthly', 'Monthly', NULL, 'some comment', 2, '2022-10-26 05:57:44', '2022-10-26 05:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `bn_name`, `mobile`, `email`, `email_verified_at`, `password`, `remember_token`, `address`, `is_admin`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin user', 'Admin', '01778325719', 'admin@gmail.com', NULL, '$2y$10$N5hchDHIYdwPAwY556ZarO1gZUaoKGhzy7aFhlV2SULmBeHUu6Ble', NULL, 'dhaka bangladesh', 'admin', 1, NULL, '2022-03-13 11:06:57', '2022-09-21 06:35:04'),
(7, 'Md Taleb update', 'Md Abu Taleb', '01988139002', 'abutaleb@gmail.com', NULL, '$2y$10$8QXr1cMg9qpKlTT/5CgGh.MkXHaGrM96Fi1eKHpEKF8N.zLtE6d6y', NULL, 'Badda', 'user', 1, NULL, '2022-03-27 22:38:04', '2022-09-21 06:57:24'),
(8, 'Shahariar Shatil', 'Shahariar Shatil', '01779325718', 'shahariar@gmail.com', NULL, '$2y$10$IJh6VHihgHdhQjcT/XsusO8TzUtPYMUMGt29U0AJjU6gqC6MPMrY6', NULL, 'Badda', 'user', 1, NULL, '2022-04-27 00:24:11', '2022-04-27 00:24:11'),
(9, 'MD. ABU TALEB', 'MD. ABU TALEB', '01998139009', 'abutaleb.bdg@gmail.com', NULL, '$2a$12$BDshRyOLYU6sFxp0IC/gve02TwRAp84UoxoMWLooXKHqKgK9sdcNG', NULL, 'Dhaka', 'user', 1, NULL, '2022-08-29 22:36:19', '2022-08-29 22:36:19'),
(11, 'Alfahad Hossai', 'Alfahad Hossai', '01796722657', 'bokul@gmail.com', NULL, '$2a$12$LvKr5Z3T5uUXTPXAFRQ1DeHvt0Lz69uPXcJYSp0Lc/UHCXB5I5MSS', NULL, 'Shobotpur, Sadar, Dinajpur', 'sitter', 1, NULL, '2022-09-18 10:33:42', '2022-10-25 01:59:22'),
(12, 'md bokul islam', 'md bokul islam', '014554545', 'bokuluser@gmail.com', NULL, '$2y$10$YqCdugOFg.68YEKQ8PwQZe68oUi0mf7NkXzpl7.kXa/E8hEJWx2cy', NULL, 'Dhaka , Bangladesh', 'user', 1, NULL, '2022-09-19 00:14:19', '2022-09-19 00:14:19'),
(13, 'naim islam', 'naim', '01996722657', 'naim@gmail.com', NULL, '$2y$10$cEGyXaeoGNZY4mw7s3osv.u6/GO4NIhDkQUS9wQ9EwV1LYdEKniv.', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 03:09:56', '2022-10-25 03:10:19'),
(15, 'lota moni', NULL, '0165665545', 'lota@gmail.com', NULL, '$2y$10$/JQuDAF..oIoHH4j5HxmPuflw3.TIZgEZJS8Vt.X1MixCEd5.xjGq', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 07:54:21', '2022-10-25 07:54:21'),
(16, 'tajmin akter', NULL, '5345345345', 'tajmin@gmail.com', NULL, '$2y$10$J7R.WueK4zulefc2yUYN3uq9jBnxStU9SevdedbvW82u95mhFsNVm', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 07:57:04', '2022-10-25 07:57:04'),
(17, 'sujon', NULL, '0256456456546', 'sujon@gmaill.com', NULL, '$2y$10$tRxueYRAdDXzXLJxPU1tceW4r.SAy2G.E2gJQHL8LcHVF.3ReO88u', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 08:08:42', '2022-10-25 08:08:42'),
(18, 'Arafat Sharker', NULL, '01544545345435', 'arafat@gmail.com', NULL, '$2y$10$l0l6/E9QtDgrfGQACGRsO.eWr9oJ4GhW9RDr3Ljltv5dx9DrvPzPi', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 22:23:24', '2022-10-25 22:23:24'),
(19, 'rubal', 'rubal', '01796722657', 'rubal@gmail.com', NULL, '$2y$10$kagH9GCbausEPRwPhuoANuHc8ni1sUS4fIIvntOqyWb/ai6x71MoG', NULL, 'Shobotpur, Sadar, Dinajpur', 'sitter', 2, NULL, '2022-10-26 05:33:51', '2022-10-26 05:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `websettings`
--

CREATE TABLE `websettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websettings`
--

INSERT INTO `websettings` (`id`, `site_name`, `bn_site_name`, `url_name`, `mobile`, `email`, `logo`, `banner`, `footer_logo`, `address`, `status`, `footer_text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Baby Sitters', 'Baby Sitters', 'Baby Sitters', '01628676016', 'info@babysitters.com', 'uploads/websettings/16665959832091493061.svg', 'uploads/websettings/16665959831417500776.svg', NULL, 'Dhaka,Bangladesh', 1, NULL, NULL, NULL, '2022-10-24 01:19:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_types`
--
ALTER TABLE `menu_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitter_information`
--
ALTER TABLE `sitter_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitter_requests`
--
ALTER TABLE `sitter_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_types`
--
ALTER TABLE `menu_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sitter_information`
--
ALTER TABLE `sitter_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sitter_requests`
--
ALTER TABLE `sitter_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
