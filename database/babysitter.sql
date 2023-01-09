-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 12:31 PM
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
(10, 'Young Baby Sitter', 'Young Baby Sitter', 'young-baby-sitter', 3, 'uploads/blogs/1671895265637180790.jpg', '<p><span style=\"color: rgb(12, 13, 13); font-family: &quot;iStock Maquette&quot;, Helvetica, Arial, sans-serif; font-size: 12px; letter-spacing: normal; background-color: rgb(232, 237, 237);\">Loving young baby sitter lying on warm home floor with cute small daughters construct with building wooden bricks, happy mum have fun playing with little girl kids in living room, relaxing on weekend together.</span><br></p>', NULL, NULL, NULL, 1, NULL, '2022-12-24 09:21:05', '2022-12-24 09:21:05'),
(11, 'Caring baby sitter at home', 'Caring baby sitter at home', 'caring-baby-sitter-at-home', 4, 'uploads/blogs/16718955561680658723.jpg', '<p><span style=\"font-family: &quot;iStock Maquette&quot;, Helvetica, Arial, sans-serif; font-size: 12px; letter-spacing: normal; background-color: rgb(255, 255, 0);\"><b style=\"\"><font color=\"#000000\" style=\"\">Girl playing with colorful toy wood blocks,</font></b></span></p><p><span style=\"font-family: &quot;iStock Maquette&quot;, Helvetica, Arial, sans-serif; font-size: 12px; letter-spacing: normal; background-color: rgb(255, 255, 0);\"><b style=\"\"><font color=\"#000000\" style=\"\"> her mother is helping her, </font></b></span></p><p><span style=\"font-family: &quot;iStock Maquette&quot;, Helvetica, Arial, sans-serif; font-size: 12px; letter-spacing: normal; background-color: rgb(255, 255, 0);\"><b style=\"\"><font color=\"#000000\" style=\"\">education and fun concept</font></b></span><br></p>', NULL, NULL, NULL, 1, NULL, '2022-12-24 09:25:56', '2022-12-24 09:25:56'),
(12, 'Children Are Our Only Clients', 'Children Are Our Only Clients', 'children-are-our-only-clients', 1, 'uploads/blogs/1671907091914197002.jpg', '<p><span style=\"color: rgb(75, 79, 88); font-family: Helvetica, sans-serif; font-size: 17px; letter-spacing: normal; text-align: center;\">Children’s Home Care is a Texas licensed home health agency specializing in the care of medically fragile, technology dependent, and chronically ill children.&nbsp;At Children’s Home Care we average better than 95% staffing of all available authorized hours! That is 20% higher than Texas state average of 75%. The difference is that at Children’s Home Care, we really do CARE for you and your child and we work to get your case staffed to the maximum number of authorized hours.</span><br></p>', NULL, NULL, NULL, 1, NULL, '2022-12-24 12:38:11', '2022-12-24 12:38:55'),
(13, 'Friendly baby sitter', 'Friendly baby sitter', 'friendly-baby-sitter', 5, 'uploads/blogs/1671907904423008210.jpg', '<p style=\"outline: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; color: rgb(119, 119, 119); line-height: 22px; text-align: justify; letter-spacing: normal;\">Our expert babysitters know how to handle children of all ages. Over the years, their training and experience with children have given them great insights into how children behave. They know all the methods needed to keep them content and the nurturing techniques to make them feel happy and satisfied.</p><p style=\"outline: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: 0px; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; color: rgb(119, 119, 119); line-height: 22px; text-align: justify; letter-spacing: normal;\">These babysitters will make sure that your kids are fed properly and are well dressed, properly disciplined, get enough play time, and of course not be upset that their parents are not around. Our babysitters know all the babysitting techniques that need to be followed in any situation. By the time you return, you will find your little ones full of joy, after being coddled by their nanny.</p><div><br></div>', NULL, NULL, NULL, 1, NULL, '2022-12-24 12:51:44', '2022-12-24 12:51:44'),
(14, 'A Trusted Babysitter', 'A Trusted Babysitter', 'a-trusted-babysitter', 3, 'uploads/blogs/16719083091777335529.png', '<p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Choosing a babysitter is a daunting task for any parent, particularly first-time parents leaving their child for the first time.&nbsp;&nbsp;</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Getting a good childcare professional isn’t about luck. With the right planning, choosing childcare in the most appropriate way will ensure that you strike gold and find a sitter who you absolutely trust, and who your children love to be with.&nbsp;</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The first step to tracking down a trustworthy babysitter is to be sure they have the relevant background and experience.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">No matter how great someone appears on paper, to truly get a sense of their capabilities as a good babysitter you want to know they come with good references.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">It is ideal to have a clear understanding of your own expectations before you start looking for a sitter. This means knowing the scenario/s you’re looking for childcare in.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">This may be having someone coming to your home once your little one is already asleep. It may be that you need someone able to do the bedtime routine like you do.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">When choosing a babysitter, it can be useful to consider some things about your child or children. This may include their ages. A primary school teacher may be an ideal childcarer for daytime childcare needs in the school holidays when you need emergency cover, whereas a nursery nurse may be better suited if you’ve got a baby who tends to wake and need resettling.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">It can be helpful to have a chance to get to know the babysitter a little before leaving your child with them for the first time.</p><p style=\"margin-bottom: 15px; color: rgb(128, 128, 128); font-family: Quicksand, &quot;Open Sans&quot;, Calibri, Verdana, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">This helps children to transition to the care of the sitter and parents to feel confident before heading out.</p>', NULL, NULL, NULL, 1, NULL, '2022-12-24 12:58:29', '2022-12-24 12:58:29'),
(15, 'Babysitter Secretly Wants You to Know', 'Babysitter Secretly Wants You to Know', 'babysitter-secretly-wants-you-to-know', 6, 'uploads/blogs/1671909199388853127.jpg', '<p style=\"font-family: pluto-sans-light; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; font-size: 15px; line-height: 22px; color: rgb(0, 0, 0); letter-spacing: normal;\">Babysitting might be the toughest job in the world, and yet young teens go out there and do it every day.&nbsp; So, in the interest of making their lives just a little bit better, here are some things you should do as a responsible employer:</p><ol style=\"color: rgb(0, 0, 0); font-family: pluto-sans-light; font-size: medium; letter-spacing: normal;\"><li style=\"font-size: 15px; padding-bottom: 14px;\"><strong>Pay them.</strong>&nbsp;We know what you’re thinking,&nbsp;<em style=\"margin-bottom: 0px;\">Who doesn’t pay their babysitter</em>?&nbsp; It turns out, a lot of people.&nbsp; So here’s the deal: ask your babysitters what their hourly rate is for the number of children you have.&nbsp; If they insist on leaving it up to you to decide what fair compensation is, then determine what the average going rate is in your area, and offer that hourly rate (give them the opportunity to negotiate or turn the offer down). Don’t let their parents insist that they’ll babysit for free, and don’t pay them whatever you think you can get away with.</li><li style=\"font-size: 15px; padding-bottom: 14px;\"><strong style=\"margin-bottom: 0px;\">Pay them with money.</strong>&nbsp;Again, this should be a no brainer. Don’t pay them in movie coupons or cherry pie.&nbsp; Don’t order them pizza for the night and call it even. Don’t tell them you’re all out of cash and you’ll pay them later.&nbsp; That doesn’t work at the hair salon; it shouldn’t work with your babysitter.&nbsp; If they have completed the job, then they deserve to get paid. In cash.</li><li style=\"font-size: 15px; padding-bottom: 14px;\"><strong style=\"margin-bottom: 0px;\">Make sure transportation arrangements are made in advance.</strong>&nbsp;How is the babysitter getting home after the job? Are her parents picking her up?&nbsp; If she needs a ride home, are you able to drive her? Again, these arrangements should be made in advance.</li><li style=\"font-size: 15px; padding-bottom: 14px;\"><strong style=\"margin-bottom: 0px;\">Don’t ask them to do chores.</strong>&nbsp;The babysitter is there to watch your children, not do your housework.&nbsp; Her first, last, and sole responsibility is to keep your children safe and healthy while you’re away.&nbsp; Why would you want anything to interfere with that?</li><li style=\"font-size: 15px; margin-bottom: 0px; padding-bottom: 14px;\"><strong style=\"margin-bottom: 0px;\">Come home on time.</strong>&nbsp;How would you like it if your dinner reservations were at 6 pm and your babysitter showed up at 6:30 pm?&nbsp; Like you, your babysitter has a life.&nbsp; She might be meeting friends after you come home, or maybe she has to get up early the next morning. Be considerate and come home by the time you arranged in advance. If plans have changed (you’ve decided to go to a later movie or dinner is running long), call and let your babysitter know. If she can’t stay, then you may have to make other arrangements.</li></ol>', NULL, NULL, NULL, 1, NULL, '2022-12-24 13:13:19', '2022-12-24 13:13:19');

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
(3, 'Category 2', 'Category', 'uploads/blog-categories/16718948531430978659.jpg', 1, NULL, '2022-12-24 09:14:13', '2022-12-24 09:14:13'),
(4, 'Category 3', 'Category 3', 'uploads/blog-categories/16718948951560516636.jpg', 1, NULL, '2022-12-24 09:14:55', '2022-12-24 09:14:55'),
(5, 'Case Category', 'Case Category', 'uploads/blog-categories/167190752041484691.jpg', 1, NULL, '2022-12-24 12:45:20', '2022-12-24 12:45:20'),
(6, 'Food category', 'Food category', 'uploads/blog-categories/16719090591505221555.jpg', 1, NULL, '2022-12-24 13:10:59', '2022-12-24 13:10:59');

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
(1, '123', 27, 1, 875.00, '0', 0.00, 87.50, 40.00, 1002.50, 2, 'bkash', '01796722657', 2, '2022-12-25 04:53:45', '2022-12-25 04:53:58'),
(2, '123', 27, 1, 1750.00, '0', 0.00, 175.00, 40.00, 1965.00, 1, NULL, NULL, 2, '2022-12-25 04:55:11', '2022-12-25 04:55:11');

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
(1, 1, 15, 875, 1, 962.5, 1, '2022-12-25 04:53:45', '2022-12-25 04:53:45'),
(2, 2, 15, 875, 2, 1925, 1, '2022-12-25 04:55:11', '2022-12-25 04:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('abutaleb.bdg@gmail.com', '$2y$10$GqC4iN3EHHb/neYCvH5k0.3cBxV.pNGGhP2kiqs2YNZq8aqSdYdmy', '2022-12-24 02:05:44');

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
(15, 'Merritt Hebert', 'Magee Gentry', 'Dolorem voluptatibus', 14, 1, '20221225095003.jpg', 875.00, 664.00, 1, 'Magna do nihil non e', 1, NULL, '2022-12-25 03:50:03', '2022-12-25 03:50:03');

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
(1, 'Appetizer', 'Appetizer', 'Appetizer', '20220327060651.png', NULL, NULL, 'Appetizer', 1, '2022-12-24 09:00:02', '2022-03-27 00:06:51', '2022-12-24 09:00:02'),
(2, 'Beef', 'Beef', 'Beef', NULL, NULL, NULL, 'Beef', 1, '2022-12-24 09:00:14', '2022-03-27 00:07:08', '2022-12-24 09:00:14'),
(3, 'Cake', 'Cake', 'Cake', NULL, NULL, NULL, 'Cake', 1, '2022-12-24 09:00:21', '2022-03-27 00:07:18', '2022-12-24 09:00:21'),
(4, 'Chicken', 'Chicken', 'Chicken', NULL, NULL, NULL, 'Chicken', 1, '2022-12-24 09:00:29', '2022-03-27 00:07:27', '2022-12-24 09:00:29'),
(5, 'Classic Beverage', 'Classic Beverage', 'Classic Beverage', NULL, NULL, NULL, 'Classic Beverage', 1, '2022-12-24 09:00:36', '2022-03-27 00:07:35', '2022-12-24 09:00:36'),
(6, 'Fish', 'Fish', 'Fish', NULL, NULL, NULL, 'Fish', 1, '2022-12-24 09:00:43', '2022-03-27 00:07:45', '2022-12-24 09:00:43'),
(7, 'Mini cake', 'Mini cake', 'Mini cake', NULL, NULL, NULL, 'Mini cake', 1, '2022-12-24 09:00:48', '2022-03-27 00:07:53', '2022-12-24 09:00:48'),
(8, 'Noodles', 'Noodles', 'Noodles', NULL, NULL, NULL, 'Noodles', 1, '2022-12-24 09:29:09', '2022-03-27 00:07:59', '2022-12-24 09:29:09'),
(9, 'Rice', 'Rice', 'Rice', NULL, NULL, NULL, 'Rice', 1, '2022-12-24 09:29:08', '2022-03-27 00:08:08', '2022-12-24 09:29:08'),
(10, 'Salad', 'Salad', 'Salad', NULL, NULL, NULL, 'Salad', 1, '2022-12-24 09:29:07', '2022-03-27 00:08:16', '2022-12-24 09:29:07'),
(11, 'Savourys', 'Savourys', 'Savourys', NULL, NULL, NULL, 'Savourys', 1, '2022-12-24 09:29:05', '2022-03-27 00:08:24', '2022-12-24 09:29:05'),
(12, 'Shots', 'Shots', 'Shots', NULL, NULL, NULL, 'Shots', 1, '2022-12-24 09:29:02', '2022-03-27 00:08:34', '2022-12-24 09:29:02'),
(13, 'Soup', 'Soup', 'Soup', NULL, NULL, NULL, 'Soup', 1, '2022-12-24 09:28:59', '2022-03-27 00:08:41', '2022-12-24 09:28:59'),
(14, 'baby', 'baby', 'baby', '20221225084624.jpg', NULL, NULL, 'asdf', 1, NULL, '2022-12-25 02:46:24', '2022-12-25 02:46:24');

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
(3, 20, 'Sumaiya AKter', 'sumaiyaakter18sc462@gmail.com', '01628676016', NULL, NULL, NULL, 'Narayangonj,Dhaka', NULL, '2022-12-24 02:32:39', '2022-12-24 02:32:39'),
(4, 21, 'Jahanara Begum', 'jahanara@gmail.com', '01628676016', NULL, NULL, NULL, 'Singbord,Narayangonj,Dhakaa', NULL, '2022-12-24 02:34:19', '2022-12-24 02:34:19'),
(5, 22, 'Mimi Begum', 'mimibegum@gmail.com', '01628676016', NULL, NULL, NULL, 'Singbord,Narayangonj,Dhakaa', NULL, '2022-12-24 08:46:18', '2022-12-24 08:46:18'),
(6, 23, 'Labuni AKter', 'labuni@gmail.com', '01628676016', NULL, NULL, NULL, 'Narayangonj,Dhaka', NULL, '2022-12-24 13:32:39', '2022-12-24 13:32:39'),
(7, 24, 'Anika Rahman', 'anika1234@gmail.com', '01628676016', NULL, NULL, NULL, 'Singbord,Narayangonj,Dhakaa', NULL, '2022-12-24 13:34:03', '2022-12-24 13:34:03'),
(8, 25, 'Aklima Islam', 'aklima654@gmail.com', '01628676016', NULL, NULL, NULL, 'Dhaka', NULL, '2022-12-25 00:23:47', '2022-12-25 00:23:47'),
(9, 26, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', NULL, NULL, NULL, 'Shobotpur, Sadar, Dinajpur, Shobotpur, Sadar, Dinajpur', NULL, '2022-12-25 01:15:31', '2022-12-25 01:15:31'),
(10, 27, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', '01796722657', 'dinajpur', 'kotoali', 'Shobotpur, Sadar, Dinajpur', NULL, '2022-12-25 04:46:59', '2022-12-25 04:53:45'),
(11, 28, 'nobel islam', 'nobel@gmail.com', '01543534534', NULL, NULL, NULL, 'Mohakhali, Dhaka', NULL, '2022-12-25 05:09:01', '2022-12-25 05:09:01'),
(12, 29, 'Mehadi Hasan', 'mehadi@gmail.com', '017456456456', NULL, NULL, NULL, 'Shobotpur, Sadar, Dinajpur, Shobotpur, Sadar, Dinajpur', NULL, '2022-12-25 05:10:42', '2022-12-25 05:10:42');

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
(2, 19, 'uploads/users/16667840311922144719.jpg', NULL, 2, '0234245435', 'uploads/nid/1666784031885680683.jpg', 'uploads/nid/166678403162316241.jpg', 'uploads/cv/16667840311432498998.docx', 'md aburaihan', '01796722657', 'bokul@gmail.com', 'uploads/guardian/16667840311810467914.jpg', '8770098709', 'uploads/guardian_nid/1666784031898423955.jpg', 'uploads/guardian_nid/16667840311697061385.jpg', 'father', 'BSC In CSE', 'Northan University', 'Science', '2021', 'Full Time', '40000', NULL, NULL, 2, '2022-10-26 05:33:51', '2022-10-26 05:33:51'),
(3, 20, 'uploads/users/1671870759532315101.jpg', NULL, 1, '8261220241', 'uploads/nid/16718707591588917219.jpg', 'uploads/nid/1671870759579791561.jpg', 'uploads/cv/16718707592072369332.pdf', 'Labuni AKter', '01968246363', 'labuniakter123@gmail.com', 'uploads/guardian/167187075986481796.jpg', '6435542599', 'uploads/guardian_nid/1671870759385975903.jpg', 'uploads/guardian_nid/16718707591866335760.jpg', 'sister', 'HSC', 'Shiddeshwari Girls Collage', 'Science', '2018', 'Part Time', '8000', NULL, NULL, 2, '2022-12-24 02:32:39', '2022-12-24 02:32:39'),
(4, 23, 'uploads/users/16719103591681999.jpg', NULL, 1, '6435542599', 'uploads/nid/16719103591659379880.jpg', 'uploads/nid/1671910359874848571.jpg', 'uploads/cv/16719103591625252146.pdf', 'Sumaiya AKter', '01968246363', 'sumaiyaakter18sc462@gmai.com', 'uploads/guardian/1671910359527292852.jpg', '8261220241', 'uploads/guardian_nid/16719103591102239807.jpg', 'uploads/guardian_nid/16719103592097566668.jpg', 'Sister', 'HSC', 'Shiddeshwari Girls Collage', 'Science', '2014', 'Full Time', '20000', '15000', '20000', 2, '2022-12-24 13:32:39', '2022-12-25 04:09:16');

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
(5, 15, 20, 'Alfahad Hossain', 'bokul@gmail.com', '01796722657', 'Shobotpur, Sadar, Dinajpur', '2022-12-14', '2022-12-30', 'Monthly', 'Monthly', '1000', 'asf', 1, '2022-12-25 03:57:37', '2022-12-25 03:58:56');

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

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sumaiyaakter18sc462@gmail.com', 1, '2022-12-24 13:23:55', '2022-12-24 13:23:55');

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
(1, 'Admin user', 'Admin', '01778325719', 'admin@gmail.com', '2022-12-24 07:26:52', '$2a$12$w1P569tlTwzw7WOkkJdzre7vOpEJDPQ03FiyzSPrpA8ndw5R2c5li', NULL, 'dhaka bangladesh', 'admin', 1, NULL, '2022-03-13 11:06:57', '2022-09-21 06:35:04'),
(15, 'lota moni', NULL, '0165665545', 'lota@gmail.com', '2022-12-24 07:26:52', '$2y$10$/JQuDAF..oIoHH4j5HxmPuflw3.TIZgEZJS8Vt.X1MixCEd5.xjGq', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 07:54:21', '2022-10-25 07:54:21'),
(16, 'tajmin akter', NULL, '5345345345', 'tajmin@gmail.com', NULL, '$2y$10$J7R.WueK4zulefc2yUYN3uq9jBnxStU9SevdedbvW82u95mhFsNVm', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 07:57:04', '2022-10-25 07:57:04'),
(17, 'sujon', NULL, '0256456456546', 'sujon@gmaill.com', NULL, '$2y$10$tRxueYRAdDXzXLJxPU1tceW4r.SAy2G.E2gJQHL8LcHVF.3ReO88u', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 08:08:42', '2022-10-25 08:08:42'),
(18, 'Arafat Sharker', NULL, '01544545345435', 'arafat@gmail.com', NULL, '$2y$10$l0l6/E9QtDgrfGQACGRsO.eWr9oJ4GhW9RDr3Ljltv5dx9DrvPzPi', NULL, 'Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-10-25 22:23:24', '2022-10-25 22:23:24'),
(19, 'rubal', 'rubal', '01796722657', 'abutaleb.bdg@gmail.com', NULL, '$2y$10$kagH9GCbausEPRwPhuoANuHc8ni1sUS4fIIvntOqyWb/ai6x71MoG', NULL, 'Shobotpur, Sadar, Dinajpur', 'sitter', 2, NULL, '2022-10-26 05:33:51', '2022-10-26 05:33:51'),
(20, 'Sumaiya AKter', 'Sumaiya AKter', '01628676016', 'sumaiyaakter18sc462@gmail.com', NULL, '$2y$10$P/tOnxd8aHhS3MiqH.mQuO6WmKwfPm.Bn7z01xrDfB2ykNfSef3zK', NULL, 'Narayangonj,Dhaka', 'sitter', 1, NULL, '2022-12-24 02:32:39', '2022-12-24 08:52:48'),
(21, 'Jahanara Begum', NULL, '01628676016', 'jahanara@gmail.com', NULL, '$2y$10$TF8r9dBkBai/F3FoNLI6eOfPHiJh.vc9xDazrp.XJnfp4m.uwqLXy', NULL, 'Singbord,Narayangonj,Dhakaa', 'user', 1, NULL, '2022-12-24 02:34:19', '2022-12-24 02:34:19'),
(22, 'Mimi Begum', NULL, '01628676016', 'mimibegum@gmail.com', NULL, '$2y$10$bXKeJBDFZxRvv6.MAAwJHeN6luRaOr2WY3oILD3PSVg5Q0YZdN/3K', NULL, 'Singbord,Narayangonj,Dhakaa', 'user', 1, NULL, '2022-12-24 08:46:18', '2022-12-24 08:46:18'),
(23, 'Labuni AKter', 'Labuni AKter', '01628676016', 'labuni@gmail.com', NULL, '$2y$10$umhkpZlbqteZ896WWYPjdusrqtqWX8KefOOzyyuPeoufwDAaQutVW', NULL, 'Narayangonj,Dhaka', 'sitter', 1, NULL, '2022-12-24 13:32:39', '2022-12-25 04:05:54'),
(24, 'Anika Rahman', NULL, '01628676016', 'anika1234@gmail.com', NULL, '$2y$10$rTAz3AJAfWGhofCyNZcI6uIosd89LRgHK8Q3oAFhBd1jmdXZiCI5O', NULL, 'Singbord,Narayangonj,Dhakaa', 'user', 1, NULL, '2022-12-24 13:34:03', '2022-12-24 13:34:03'),
(25, 'Aklima Islam', NULL, '01628676016', 'aklima654@gmail.com', NULL, '$2y$10$imyFyVL1ef9az6E5oiYw3uqxjJC6FZ0AMqlzJThUP2Y1xXrNVc00e', NULL, 'Dhaka', 'user', 1, NULL, '2022-12-25 00:23:47', '2022-12-25 00:23:47'),
(26, 'Alfahad Hossain', NULL, '01796722657', 'bokul@gmail.com', NULL, '$2y$10$mgudynzC7WK6JuccNSxPxe/XOY9pwQn/Fn5a2.gzFGIG33KoEbm/q', NULL, 'Shobotpur, Sadar, Dinajpur, Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-12-25 01:15:31', '2022-12-25 01:15:31'),
(27, 'Naim Islam', NULL, '0145345345', 'naim@gmail.com', '2022-12-25 04:51:27', '$2y$10$zbazSGExAJDQHG0hn4uETeyL457htyAiSUe44HDqix6BXBNb.HEgC', NULL, 'Shobotpur, Sadar, Dinajpur, Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-12-25 04:46:59', '2022-12-25 04:51:27'),
(28, 'nobel islam', NULL, '01543534534', 'nobel@gmail.com', NULL, '$2y$10$dBybMD5RFQjRqD/u7cLS8e7NyuSAvvqYA3JYdgmkcWflqFzMqHh5u', NULL, 'Mohakhali, Dhaka', 'user', 1, NULL, '2022-12-25 05:09:01', '2022-12-25 05:09:01'),
(29, 'Mehadi Hasan', NULL, '017456456456', 'mehadi@gmail.com', NULL, '$2y$10$X36S4UGjABp0zFV5Q.ffmegJ56Umtal.dzxCbAekAeUkTzsBQnasG', NULL, 'Shobotpur, Sadar, Dinajpur, Shobotpur, Sadar, Dinajpur', 'user', 1, NULL, '2022-12-25 05:10:42', '2022-12-25 05:10:42');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sitter_information`
--
ALTER TABLE `sitter_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sitter_requests`
--
ALTER TABLE `sitter_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
