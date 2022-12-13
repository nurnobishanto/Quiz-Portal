-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:14 AM
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
-- Database: `eduhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `result_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quiz_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mcq_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attempt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attempts`
--

INSERT INTO `attempts` (`id`, `user_id`, `result_id`, `quiz_id`, `mcq_id`, `attempt`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'op3', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(2, 1, 1, 1, 2, 'op2', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(3, 1, 1, 1, 3, 'op2', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(4, 1, 1, 1, 4, 'op1', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(5, 1, 1, 1, 5, 'op4', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(6, 1, 1, 1, 6, 'none', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(7, 1, 1, 1, 7, 'none', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(8, 1, 1, 1, 8, 'op1', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(9, 1, 1, 1, 9, 'op2', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(10, 1, 1, 1, 10, 'op2', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(11, 1, 2, 1, 1, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(12, 1, 2, 1, 2, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(13, 1, 2, 1, 3, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(14, 1, 2, 1, 4, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(15, 1, 2, 1, 5, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(16, 1, 2, 1, 6, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(17, 1, 2, 1, 7, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(18, 1, 2, 1, 8, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(19, 1, 2, 1, 9, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(20, 1, 2, 1, 10, 'none', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(21, 1, 3, 1, 1, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(22, 1, 3, 1, 2, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(23, 1, 3, 1, 3, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(24, 1, 3, 1, 4, 'op3', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(25, 1, 3, 1, 5, 'op3', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(26, 1, 3, 1, 6, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(27, 1, 3, 1, 7, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(28, 1, 3, 1, 8, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(29, 1, 3, 1, 9, 'none', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(30, 1, 3, 1, 10, 'op1', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(31, 3, 4, 1, 1, 'op1', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(32, 3, 4, 1, 2, 'op1', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(33, 3, 4, 1, 3, 'op1', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(34, 3, 4, 1, 4, 'op2', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(35, 3, 4, 1, 5, 'op2', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(36, 3, 4, 1, 6, 'op2', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(37, 3, 4, 1, 7, 'op2', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(38, 3, 4, 1, 8, 'op2', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(39, 3, 4, 1, 9, 'op1', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(40, 3, 4, 1, 10, 'op1', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(41, 1, 5, 1, 1, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(42, 1, 5, 1, 2, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(43, 1, 5, 1, 3, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(44, 1, 5, 1, 4, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(45, 1, 5, 1, 5, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(46, 1, 5, 1, 6, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(47, 1, 5, 1, 7, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(48, 1, 5, 1, 8, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(49, 1, 5, 1, 9, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48'),
(50, 1, 5, 1, 10, 'none', '2022-12-13 07:27:48', '2022-12-13 07:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

CREATE TABLE `blog_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_handle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_handle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_authors`
--

INSERT INTO `blog_authors` (`id`, `name`, `email`, `photo`, `bio`, `github_handle`, `twitter_handle`, `created_at`, `updated_at`) VALUES
(1, 'Md. Nurnobi Hosen', 'nurnobishanto1@gmail.com', NULL, '<p>Developer</p>', NULL, NULL, '2022-12-11 13:35:24', '2022-12-11 13:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT 0,
  `seo_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `description`, `is_visible`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Default', 'default', '<p>Default</p>', 1, NULL, NULL, '2022-12-11 13:36:01', '2022-12-11 13:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` bigint(20) DEFAULT 0,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blog_author_id`, `blog_category_id`, `title`, `slug`, `excerpt`, `banner`, `content`, `view`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', 'blog/BmZNgIj2TATYJYBWO73ynMaMpakzrw-metac29oaWQgbWluYXIucG5n-.png', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><h2>Where does it come from?</h2><p><br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.<br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br>&nbsp;</p>', 46, '2022-12-28', '2022-12-11 13:41:47', '2022-12-13 06:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `deposit_or_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_post_id`, `name`, `email`, `website`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nurnobi Shanto', 'nurnobishanto1@gmail.com', NULL, 'Thanks', '2022-12-11 13:45:54', '2022-12-11 13:45:54'),
(2, 1, 'Shanto', 'hello@gmail.com', NULL, 'WOW', '2022-12-13 06:11:18', '2022-12-13 06:11:18'),
(3, 1, 'Chadni', 'chadni@gmail.com', NULL, 'Awesome', '2022-12-13 06:12:23', '2022-12-13 06:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'nurnobi', 'a@gmail.com', '01770634816', 'Hello', 'checking', '2022-12-13 06:22:45', '2022-12-13 06:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `deposites`
--

CREATE TABLE `deposites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `method_id` bigint(20) UNSIGNED DEFAULT NULL,
  `trid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposites`
--

INSERT INTO `deposites` (`id`, `user_id`, `amount`, `method_id`, `trid`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 1, 'x', 'x', 'approved', '2022-11-29 14:36:50', '2022-11-29 14:37:12'),
(2, 1, -0.01, 1, 'Automatic', 'Take Exam - Math Quiz (Class-10)', 'approved', '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(3, 1, 0, 1, 'Automatic', 'Take Exam - Math Quiz (Class-10)', 'approved', '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(4, 1, 0, 1, 'Automatic', 'Take Exam - Math Quiz (Class-10)', 'approved', '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(5, 3, 651, 1, '12020', '565', 'pending', '2022-12-11 18:24:58', '2022-12-11 18:24:58'),
(6, 3, -0.02, 1, 'Automatic', 'Take Exam - Math Quiz (Class-10)', 'approved', '2022-12-12 17:18:10', '2022-12-12 17:18:10'),
(7, 1, 0, 1, 'Automatic', 'Take Exam - Math Quiz (Class-10)', 'approved', '2022-12-13 07:27:48', '2022-12-13 07:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Barguna  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Barisal  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bhola  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Jhalokati  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Patuakhali  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Pirojpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bandarban  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Brahmanbaria  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Chandpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Chittagong  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Comilla  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Cox\'s Bazar  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Feni  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Khagrachhari  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Lakshmipur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Noakhali  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Rangamati  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Dhaka  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Faridpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Gazipur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Gopalganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Jamalpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kishoreganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Madaripur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Manikganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Munshiganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Mymensingh  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Narayanganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Narsingdi  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Netrakona  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Rajbari  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Shariatpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Sherpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Tangail  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Bagerhat  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Chuadanga  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Jessore  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Jhenaidah  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Khulna  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Kushtia  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Magura  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Meherpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Narail  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Satkhira  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Bogra  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Joypurhat  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Naogaon  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Natore  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Nawabganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Pabna  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Rajshahi  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Sirajganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Dinajpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Gaibandha  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Kurigram  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Lalmonirhat  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Nilphamari  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Panchagarh  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Rangpur  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Thakurgaon  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Habiganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Moulvibazar  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Sunamganj  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Sylhet  ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_categories`
--

CREATE TABLE `exam_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_categories`
--

INSERT INTO `exam_categories` (`id`, `subject_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 5, 'Programing and Problem solving', 'programing-and-problem-solving', '2022-12-11 14:49:32', '2022-12-11 14:49:32'),
(2, 5, 'Computer Fandamental', 'computer-fandamental', '2022-12-11 14:50:09', '2022-12-11 14:50:09'),
(3, 5, 'Object Oriented Programing', 'object-oriented-programing', '2022-12-11 14:51:24', '2022-12-11 14:51:24'),
(4, 8, 'Bangla 1st part', 'bangla-1st-part', '2022-12-11 14:54:06', '2022-12-11 14:54:06'),
(5, 8, 'Bangla 2nd Paper', 'bangla-2nd-paper', '2022-12-11 14:55:16', '2022-12-11 14:55:16'),
(6, 9, 'Engenering Math', 'engenering-math', '2022-12-11 14:57:34', '2022-12-11 14:57:34'),
(7, 9, 'Higher Math', 'higher-math', '2022-12-11 14:57:54', '2022-12-11 14:57:54'),
(8, 6, 'Spoken English', 'spoken-english', '2022-12-11 14:58:45', '2022-12-11 14:58:45'),
(9, 6, 'Writing and Complehention', 'writing-and-complehention', '2022-12-11 14:59:14', '2022-12-11 14:59:14');

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
-- Table structure for table `filament_email_log`
--

CREATE TABLE `filament_email_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bcc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `html_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `raw_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_debug_info` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filament_email_log`
--

INSERT INTO `filament_email_log` (`id`, `from`, `to`, `cc`, `bcc`, `subject`, `text_body`, `html_body`, `created_at`, `updated_at`, `raw_body`, `sent_debug_info`) VALUES
(1, 'a@gmail.com', 'nurnobishanto1@gmail.com <EduHub>', '', '', 'Hello', NULL, '<h2>Hey !</h2> <br><br>\n\nYou received an email from : Shanto <br><br>\n\nUser details: <br><br>\n\n\nName:  Shanto<br>\nEmail:  a@gmail.com<br>\nPhone:  01770634816<br>\nSubject:  Hello<br>\nMessage:  Hello<br><br>\n\nThanks\n', '2022-11-29 14:33:54', '2022-11-29 14:33:54', 'From: a@gmail.com\r\nTo: EduHub <nurnobishanto1@gmail.com>\r\nSubject: Hello\r\nMessage-ID: <dbe3a3b986fbf6471e2383e716087b9d@gmail.com>\r\nMIME-Version: 1.0\r\nDate: Tue, 29 Nov 2022 20:33:54 +0600\r\nContent-Type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n<h2>Hey !</h2> <br><br>\r\n\r\nYou received an email from : Shanto <br><br>=\r\n\r\n\r\nUser details: <br><br>\r\n\r\n\r\nName:  Shanto<br>\r\nEmail:  a@gmail.co=\r\nm<br>\r\nPhone:  01770634816<br>\r\nSubject:  Hello<br>\r\nMessage:  Hello<br>=\r\n<br>\r\n\r\nThanks\r\n', '< 220-raffles.sg.hostns.io ESMTP Exim 4.96 #2 Tue, 29 Nov 2022 14:33:54 +0000 \r\n< 220-We do not authorize the use of this system to transport unsolicited, \r\n< 220 and/or bulk e-mail.\r\n> EHLO [127.0.0.1]\n< 250-raffles.sg.hostns.io Hello [127.0.0.1] [103.150.68.138]\r\n< 250-SIZE 52428800\r\n< 250-8BITMIME\r\n< 250-PIPELINING\r\n< 250-PIPECONNECT\r\n< 250-AUTH PLAIN LOGIN\r\n< 250 HELP\r\n> AUTH LOGIN\n< 334 VXNlcm5hbWU6\r\n> ZWR1aGVscEBzb2Z0LWl0YmQuY29t\n< 334 UGFzc3dvcmQ6\r\n> RWR1SGVscEAx\n< 235 Authentication succeeded\r\n> MAIL FROM:<a@gmail.com>\n< 250 OK\r\n> RCPT TO:<nurnobishanto1@gmail.com>\n< 250 Accepted\r\n> DATA\n< 354 Enter message, ending with \".\" on a line by itself\r\n> .\n< 250 OK id=1p01gJ-001s6W-2R\r\n'),
(2, 'a@gmail.com', 'nurnobishanto1@gmail.com <EduHub>', '', '', 'Hello', NULL, '<h2>Hey !</h2> <br><br>\n\nYou received an email from : Shanto <br><br>\n\nUser details: <br><br>\n\n\nName:  Shanto<br>\nEmail:  a@gmail.com<br>\nPhone:  01770634816<br>\nSubject:  Hello<br>\nMessage:  Hello<br><br>\n\nThanks\n', '2022-11-29 14:34:28', '2022-11-29 14:34:28', 'From: a@gmail.com\r\nTo: EduHub <nurnobishanto1@gmail.com>\r\nSubject: Hello\r\nMessage-ID: <d254f30610fda2b7757d46725baf4522@gmail.com>\r\nMIME-Version: 1.0\r\nDate: Tue, 29 Nov 2022 20:34:28 +0600\r\nContent-Type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n<h2>Hey !</h2> <br><br>\r\n\r\nYou received an email from : Shanto <br><br>=\r\n\r\n\r\nUser details: <br><br>\r\n\r\n\r\nName:  Shanto<br>\r\nEmail:  a@gmail.co=\r\nm<br>\r\nPhone:  01770634816<br>\r\nSubject:  Hello<br>\r\nMessage:  Hello<br>=\r\n<br>\r\n\r\nThanks\r\n', '< 220-raffles.sg.hostns.io ESMTP Exim 4.96 #2 Tue, 29 Nov 2022 14:34:29 +0000 \r\n< 220-We do not authorize the use of this system to transport unsolicited, \r\n< 220 and/or bulk e-mail.\r\n> EHLO [127.0.0.1]\n< 250-raffles.sg.hostns.io Hello [127.0.0.1] [103.150.68.139]\r\n< 250-SIZE 52428800\r\n< 250-8BITMIME\r\n< 250-PIPELINING\r\n< 250-PIPECONNECT\r\n< 250-AUTH PLAIN LOGIN\r\n< 250 HELP\r\n> AUTH LOGIN\n< 334 VXNlcm5hbWU6\r\n> ZWR1aGVscEBzb2Z0LWl0YmQuY29t\n< 334 UGFzc3dvcmQ6\r\n> RWR1SGVscEAx\n< 235 Authentication succeeded\r\n> MAIL FROM:<a@gmail.com>\n< 250 OK\r\n> RCPT TO:<nurnobishanto1@gmail.com>\n< 250 Accepted\r\n> DATA\n< 354 Enter message, ending with \".\" on a line by itself\r\n> .\n< 250 OK id=1p01gr-001t49-26\r\n'),
(3, 'eduhelp@soft-itbd.com <EduHelp>', 'asif15-11895@diu.edu.bd', '', '', 'Verify Email Address', '[EduHelp](http://192.168.1.104:80)\n\n# Hello!\n\nPlease click the button below to verify your email address.\n\nVerify Email Address: http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9\n\nIf you did not create an account, no further action is required.\n\nRegards,\nEduHelp\n\nIf you\'re having trouble clicking the \"Verify Email Address\" button, copy and paste the URL below\ninto your web browser: [http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9](http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9)\n\n© 2022 EduHelp. All rights reserved.\n', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta name=\"color-scheme\" content=\"light\">\n<meta name=\"supported-color-schemes\" content=\"light\">\n<style>\n@media only screen and (max-width: 600px) {\n.inner-body {\nwidth: 100% !important;\n}\n\n.footer {\nwidth: 100% !important;\n}\n}\n\n@media only screen and (max-width: 500px) {\n.button {\nwidth: 100% !important;\n}\n}\n</style>\n</head>\n<body style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -webkit-text-size-adjust: none; background-color: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;\">\n\n<table class=\"wrapper\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2f7; margin: 0; padding: 0; width: 100%;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 0; padding: 0; width: 100%;\">\n<tr>\n<td class=\"header\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; padding: 25px 0; text-align: center;\">\n<a href=\"http://192.168.1.104:80\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none; display: inline-block;\">\nEduHelp\n</a>\n</td>\n</tr>\n\n<!-- Email Body -->\n<tr>\n<td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2f7; border-bottom: 1px solid #edf2f7; border-top: 1px solid #edf2f7; margin: 0; padding: 0; width: 100%;\">\n<table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; width: 570px;\">\n<!-- Body content -->\n<tr>\n<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; max-width: 100vw; padding: 32px;\">\n<h1 style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;\">Hello!</h1>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">Please click the button below to verify your email address.</p>\n<table class=\"action\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padding: 0; text-align: center; width: 100%;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<a href=\"http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&amp;signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9\" class=\"button button-primary\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -webkit-text-size-adjust: none; border-radius: 4px; color: #fff; display: inline-block; overflow: hidden; text-decoration: none; background-color: #2d3748; border-bottom: 8px solid #2d3748; border-left: 18px solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #2d3748;\">Verify Email Address</a>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">If you did not create an account, no further action is required.</p>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">Regards,<br>\nEduHelp</p>\n\n\n<table class=\"subcopy\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; border-top: 1px solid #e8e5ef; margin-top: 25px; padding-top: 25px;\">\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-top: 0; text-align: left; font-size: 14px;\">If you\'re having trouble clicking the \"Verify Email Address\" button, copy and paste the URL below\ninto your web browser: <span class=\"break-all\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; word-break: break-all;\"><a href=\"http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&amp;signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3869d4;\">http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670695759&amp;signature=4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9</a></span></p>\n\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table class=\"footer\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; margin: 0 auto; padding: 0; text-align: center; width: 570px;\">\n<tr>\n<td class=\"content-cell\" align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; max-width: 100vw; padding: 32px;\">\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-top: 0; color: #b0adc5; font-size: 12px; text-align: center;\">© 2022 EduHelp. All rights reserved.</p>\n\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</body>\n</html>', '2022-12-10 17:09:23', '2022-12-10 17:09:23', 'From: EduHelp <eduhelp@soft-itbd.com>\r\nTo: asif15-11895@diu.edu.bd\r\nSubject: Verify Email Address\r\nMessage-ID: <bd4f578918638e0982b3372ec4d46c9f@soft-itbd.com>\r\nMIME-Version: 1.0\r\nDate: Sat, 10 Dec 2022 23:09:23 +0600\r\nContent-Type: multipart/alternative; boundary=vAgIUWXA\r\n\r\n--vAgIUWXA\r\nContent-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n[EduHelp](http://192.168.1.104:80)\r\n\r\n# Hello!\r\n\r\nPlease click the butt=\r\non below to verify your email address.\r\n\r\nVerify Email Address: http://19=\r\n2.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=\r\n=3D1670695759&signature=3D4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8b=\r\nb6e18c9c87f74a9\r\n\r\nIf you did not create an account, no further action is=\r\n required.\r\n\r\nRegards,\r\nEduHelp\r\n\r\nIf you\'re having trouble clicking t=\r\nhe \"Verify Email Address\" button, copy and paste the URL below\r\ninto your =\r\nweb browser: [http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70=\r\n638fab04b066d37?expires=3D1670695759&signature=3D4a6bb5a9c09d5bc94224e5cf25=\r\n802f1a213022e0e1b000b8bb6e18c9c87f74a9](http://192.168.1.104/verify-email/2=\r\n/508eea2612cb3002ceea88a70638fab04b066d37?expires=3D1670695759&signature=3D=\r\n4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9)\r\n\r\n=\r\n=C2=A9 2022 EduHelp. All rights reserved.\r\n\r\n--vAgIUWXA\r\nContent-Type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.=\r\nw3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=3D\"http://www.=\r\nw3.org/1999/xhtml\">\r\n<head>\r\n<meta name=3D\"viewport\" content=3D\"width=3Dd=\r\nevice-width, initial-scale=3D1.0\">\r\n<meta http-equiv=3D\"Content-Type\" cont=\r\nent=3D\"text/html; charset=3DUTF-8\">\r\n<meta name=3D\"color-scheme\" content=\r\n=3D\"light\">\r\n<meta name=3D\"supported-color-schemes\" content=3D\"light\">\r\n<=\r\nstyle>\r\n@media only screen and (max-width: 600px) {\r\n.inner-body {\r\nwidt=\r\nh: 100% !important;\r\n}\r\n\r\n.footer {\r\nwidth: 100% !important;\r\n}\r\n}\r\n=\r\n\r\n@media only screen and (max-width: 500px) {\r\n.button {\r\nwidth: 100% !i=\r\nmportant;\r\n}\r\n}\r\n</style>\r\n</head>\r\n<body style=3D\"box-sizing: border-=\r\nbox; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, He=\r\nlvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe U=\r\nI Symbol\'; position: relative; -webkit-text-size-adjust: none; background-c=\r\nolor: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; p=\r\nadding: 0; width: 100% !important;\">\r\n\r\n<table class=3D\"wrapper\" width=3D=\r\n\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"b=\r\nox-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Seg=\r\noe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe U=\r\nI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0;=\r\n -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2=\r\nf7; margin: 0; padding: 0; width: 100%;\">\r\n<tr>\r\n<td align=3D\"center\" sty=\r\nle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFon=\r\nt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'=\r\nSegoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<table class=3D=\r\n\"content\" width=3D\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presen=\r\ntation\" style=3D\"box-sizing: border-box; font-family: -apple-system, BlinkM=\r\nacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Colo=\r\nr Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premail=\r\ner-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margi=\r\nn: 0; padding: 0; width: 100%;\">\r\n<tr>\r\n<td class=3D\"header\" style=3D\"box=\r\n-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe=\r\n UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI =\r\nEmoji\', \'Segoe UI Symbol\'; position: relative; padding: 25px 0; text-align:=\r\n center;\">\r\n<a href=3D\"http://192.168.1.104:80\" style=3D\"box-sizing: borde=\r\nr-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, =\r\nHelvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe=\r\n UI Symbol\'; position: relative; color: #3d4852; font-size: 19px; font-weig=\r\nht: bold; text-decoration: none; display: inline-block;\">\r\nEduHelp\r\n</a>=\r\n\r\n</td>\r\n</tr>\r\n\r\n<!-- Email Body -->\r\n<tr>\r\n<td class=3D\"body\" width=\r\n=3D\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" style=3D\"box-sizing: border-b=\r\nox; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Hel=\r\nvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI=\r\n Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspa=\r\ncing: 0; -premailer-width: 100%; background-color: #edf2f7; border-bottom: =\r\n1px solid #edf2f7; border-top: 1px solid #edf2f7; margin: 0; padding: 0; wi=\r\ndth: 100%;\">\r\n<table class=3D\"inner-body\" align=3D\"center\" width=3D\"570\" c=\r\nellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"box-sizin=\r\ng: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', =\r\nRoboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\'=\r\n, \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premai=\r\nler-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; bor=\r\nder-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2p=\r\nx 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 aut=\r\no; padding: 0; width: 570px;\">\r\n<!-- Body content -->\r\n<tr>\r\n<td class=\r\n=3D\"content-cell\" style=3D\"box-sizing: border-box; font-family: -apple-syst=\r\nem, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'=\r\nApple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative=\r\n; max-width: 100vw; padding: 32px;\">\r\n<h1 style=3D\"box-sizing: border-box;=\r\n font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvet=\r\nica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Sy=\r\nmbol\'; position: relative; color: #3d4852; font-size: 18px; font-weight: bo=\r\nld; margin-top: 0; text-align: left;\">Hello!</h1>\r\n<p style=3D\"box-sizing:=\r\n border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Ro=\r\nboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', =\r\n\'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em;=\r\n margin-top: 0; text-align: left;\">Please click the button below to verify =\r\nyour email address.</p>\r\n<table class=3D\"action\" align=3D\"center\" width=3D=\r\n\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"b=\r\nox-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Seg=\r\noe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe U=\r\nI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0;=\r\n -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padd=\r\ning: 0; text-align: center; width: 100%;\">\r\n<tr>\r\n<td align=3D\"center\" st=\r\nyle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFo=\r\nnt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', =\r\n\'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<table width=\r\n=3D\"100%\" border=3D\"0\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presenta=\r\ntion\" style=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMac=\r\nSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color =\r\nEmoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<tr>=\r\n\r\n<td align=3D\"center\" style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative;\">\r\n<table border=3D\"0\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D=\r\n\"presentation\" style=3D\"box-sizing: border-box; font-family: -apple-system,=\r\n BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'App=\r\nle Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">=\r\n\r\n<tr>\r\n<td style=3D\"box-sizing: border-box; font-family: -apple-system, =\r\nBlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Appl=\r\ne Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">=\r\n\r\n<a href=3D\"http://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70=\r\n638fab04b066d37?expires=3D1670695759&amp;signature=3D4a6bb5a9c09d5bc94224e5=\r\ncf25802f1a213022e0e1b000b8bb6e18c9c87f74a9\" class=3D\"button button-primary\"=\r\n target=3D\"_blank\" rel=3D\"noopener\" style=3D\"box-sizing: border-box; font-f=\r\namily: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Ar=\r\nial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; =\r\nposition: relative; -webkit-text-size-adjust: none; border-radius: 4px; col=\r\nor: #fff; display: inline-block; overflow: hidden; text-decoration: none; b=\r\nackground-color: #2d3748; border-bottom: 8px solid #2d3748; border-left: 18=\r\npx solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #=\r\n2d3748;\">Verify Email Address</a>\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr=\r\n>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n<p style=3D\"box-sizing: border-bo=\r\nx; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helv=\r\netica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI =\r\nSymbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-to=\r\np: 0; text-align: left;\">If you did not create an account, no further actio=\r\nn is required.</p>\r\n<p style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: lef=\r\nt;\">Regards,<br>\r\nEduHelp</p>\r\n\r\n\r\n<table class=3D\"subcopy\" width=3D\"10=\r\n0%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"box-=\r\nsizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe =\r\nUI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI E=\r\nmoji\', \'Segoe UI Symbol\'; position: relative; border-top: 1px solid #e8e5ef=\r\n; margin-top: 25px; padding-top: 25px;\">\r\n<tr>\r\n<td style=3D\"box-sizing: =\r\nborder-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Rob=\r\noto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'=\r\nSegoe UI Symbol\'; position: relative;\">\r\n<p style=3D\"box-sizing: border-bo=\r\nx; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helv=\r\netica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI =\r\nSymbol\'; position: relative; line-height: 1.5em; margin-top: 0; text-align:=\r\n left; font-size: 14px;\">If you\'re having trouble clicking the \"Verify Emai=\r\nl Address\" button, copy and paste the URL below\r\ninto your web browser: <s=\r\npan class=3D\"break-all\" style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative; word-break: break-all;\"><a href=3D\"http://192.168.1.104/verify-emai=\r\nl/2/508eea2612cb3002ceea88a70638fab04b066d37?expires=3D1670695759&amp;signa=\r\nture=3D4a6bb5a9c09d5bc94224e5cf25802f1a213022e0e1b000b8bb6e18c9c87f74a9\" st=\r\nyle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFo=\r\nnt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', =\r\n\'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3869d4;\">h=\r\nttp://192.168.1.104/verify-email/2/508eea2612cb3002ceea88a70638fab04b066d37=\r\n?expires=3D1670695759&amp;signature=3D4a6bb5a9c09d5bc94224e5cf25802f1a21302=\r\n2e0e1b000b8bb6e18c9c87f74a9</a></span></p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n=\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n\r\n<tr>\r\n<td style=3D\"box-sizin=\r\ng: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', =\r\nRoboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\'=\r\n, \'Segoe UI Symbol\'; position: relative;\">\r\n<table class=3D\"footer\" align=\r\n=3D\"center\" width=3D\"570\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"prese=\r\nntation\" style=3D\"box-sizing: border-box; font-family: -apple-system, Blink=\r\nMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Col=\r\nor Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premai=\r\nler-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; mar=\r\ngin: 0 auto; padding: 0; text-align: center; width: 570px;\">\r\n<tr>\r\n<td c=\r\nlass=3D\"content-cell\" align=3D\"center\" style=3D\"box-sizing: border-box; fon=\r\nt-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica,=\r\n Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol=\r\n\'; position: relative; max-width: 100vw; padding: 32px;\">\r\n<p style=3D\"box=\r\n-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe=\r\n UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI =\r\nEmoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-t=\r\nop: 0; color: #b0adc5; font-size: 12px; text-align: center;\">=C2=A9 2022 Ed=\r\nuHelp. All rights reserved.</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</t=\r\nr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n</body>\r\n</html>\r\n--vAgIUWXA--\r\n', '< 220-raffles.sg.hostns.io ESMTP Exim 4.96 #2 Sat, 10 Dec 2022 17:09:23 +0000 \r\n< 220-We do not authorize the use of this system to transport unsolicited, \r\n< 220 and/or bulk e-mail.\r\n> EHLO [127.0.0.1]\n< 250-raffles.sg.hostns.io Hello [127.0.0.1] [103.150.68.139]\r\n< 250-SIZE 52428800\r\n< 250-8BITMIME\r\n< 250-PIPELINING\r\n< 250-PIPECONNECT\r\n< 250-AUTH PLAIN LOGIN\r\n< 250 HELP\r\n> AUTH LOGIN\n< 334 VXNlcm5hbWU6\r\n> ZWR1aGVscEBzb2Z0LWl0YmQuY29t\n< 334 UGFzc3dvcmQ6\r\n> RWR1SGVscEAx\n< 235 Authentication succeeded\r\n> MAIL FROM:<eduhelp@soft-itbd.com>\n< 250 OK\r\n> RCPT TO:<asif15-11895@diu.edu.bd>\n< 250 Accepted\r\n> DATA\n< 354 Enter message, ending with \".\" on a line by itself\r\n> .\n< 250 OK id=1p43Lo-001jtS-39\r\n');
INSERT INTO `filament_email_log` (`id`, `from`, `to`, `cc`, `bcc`, `subject`, `text_body`, `html_body`, `created_at`, `updated_at`, `raw_body`, `sent_debug_info`) VALUES
(4, 'eduhelp@soft-itbd.com <EduHelp>', 'asif15-11895@diu.edu.bd', '', '', 'Verify Email Address', '[EduHelp](http://192.168.1.104:80)\n\n# Hello!\n\nPlease click the button below to verify your email address.\n\nVerify Email Address: http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383\n\nIf you did not create an account, no further action is required.\n\nRegards,\nEduHelp\n\nIf you\'re having trouble clicking the \"Verify Email Address\" button, copy and paste the URL below\ninto your web browser: [http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383](http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383)\n\n© 2022 EduHelp. All rights reserved.\n', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta name=\"color-scheme\" content=\"light\">\n<meta name=\"supported-color-schemes\" content=\"light\">\n<style>\n@media only screen and (max-width: 600px) {\n.inner-body {\nwidth: 100% !important;\n}\n\n.footer {\nwidth: 100% !important;\n}\n}\n\n@media only screen and (max-width: 500px) {\n.button {\nwidth: 100% !important;\n}\n}\n</style>\n</head>\n<body style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -webkit-text-size-adjust: none; background-color: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;\">\n\n<table class=\"wrapper\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2f7; margin: 0; padding: 0; width: 100%;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 0; padding: 0; width: 100%;\">\n<tr>\n<td class=\"header\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; padding: 25px 0; text-align: center;\">\n<a href=\"http://192.168.1.104:80\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none; display: inline-block;\">\nEduHelp\n</a>\n</td>\n</tr>\n\n<!-- Email Body -->\n<tr>\n<td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2f7; border-bottom: 1px solid #edf2f7; border-top: 1px solid #edf2f7; margin: 0; padding: 0; width: 100%;\">\n<table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; width: 570px;\">\n<!-- Body content -->\n<tr>\n<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; max-width: 100vw; padding: 32px;\">\n<h1 style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;\">Hello!</h1>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">Please click the button below to verify your email address.</p>\n<table class=\"action\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padding: 0; text-align: center; width: 100%;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<tr>\n<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<a href=\"http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&amp;signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383\" class=\"button button-primary\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -webkit-text-size-adjust: none; border-radius: 4px; color: #fff; display: inline-block; overflow: hidden; text-decoration: none; background-color: #2d3748; border-bottom: 8px solid #2d3748; border-left: 18px solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #2d3748;\">Verify Email Address</a>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">If you did not create an account, no further action is required.</p>\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">Regards,<br>\nEduHelp</p>\n\n\n<table class=\"subcopy\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; border-top: 1px solid #e8e5ef; margin-top: 25px; padding-top: 25px;\">\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-top: 0; text-align: left; font-size: 14px;\">If you\'re having trouble clicking the \"Verify Email Address\" button, copy and paste the URL below\ninto your web browser: <span class=\"break-all\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; word-break: break-all;\"><a href=\"http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&amp;signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3869d4;\">http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=1670703961&amp;signature=f974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383</a></span></p>\n\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n\n<tr>\n<td style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\n<table class=\"footer\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; margin: 0 auto; padding: 0; text-align: center; width: 570px;\">\n<tr>\n<td class=\"content-cell\" align=\"center\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; max-width: 100vw; padding: 32px;\">\n<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-top: 0; color: #b0adc5; font-size: 12px; text-align: center;\">© 2022 EduHelp. All rights reserved.</p>\n\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</td>\n</tr>\n</table>\n</body>\n</html>', '2022-12-10 19:26:06', '2022-12-10 19:26:06', 'From: EduHelp <eduhelp@soft-itbd.com>\r\nTo: asif15-11895@diu.edu.bd\r\nSubject: Verify Email Address\r\nMessage-ID: <7229e2c0663ae768ad3d1ac638dc5191@soft-itbd.com>\r\nMIME-Version: 1.0\r\nDate: Sun, 11 Dec 2022 01:26:06 +0600\r\nContent-Type: multipart/alternative; boundary=NetaSGty\r\n\r\n--NetaSGty\r\nContent-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n[EduHelp](http://192.168.1.104:80)\r\n\r\n# Hello!\r\n\r\nPlease click the butt=\r\non below to verify your email address.\r\n\r\nVerify Email Address: http://19=\r\n2.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=\r\n=3D1670703961&signature=3Df974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b=\r\n718547a96b84383\r\n\r\nIf you did not create an account, no further action is=\r\n required.\r\n\r\nRegards,\r\nEduHelp\r\n\r\nIf you\'re having trouble clicking t=\r\nhe \"Verify Email Address\" button, copy and paste the URL below\r\ninto your =\r\nweb browser: [http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70=\r\n638fab04b066d37?expires=3D1670703961&signature=3Df974037fef1bb7c98ab97e2a02=\r\n604fada2cd1c35be3c5ac7b718547a96b84383](http://192.168.1.104/verify-email/3=\r\n/508eea2612cb3002ceea88a70638fab04b066d37?expires=3D1670703961&signature=3D=\r\nf974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383)\r\n\r\n=\r\n=C2=A9 2022 EduHelp. All rights reserved.\r\n\r\n--NetaSGty\r\nContent-Type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.=\r\nw3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=3D\"http://www.=\r\nw3.org/1999/xhtml\">\r\n<head>\r\n<meta name=3D\"viewport\" content=3D\"width=3Dd=\r\nevice-width, initial-scale=3D1.0\">\r\n<meta http-equiv=3D\"Content-Type\" cont=\r\nent=3D\"text/html; charset=3DUTF-8\">\r\n<meta name=3D\"color-scheme\" content=\r\n=3D\"light\">\r\n<meta name=3D\"supported-color-schemes\" content=3D\"light\">\r\n<=\r\nstyle>\r\n@media only screen and (max-width: 600px) {\r\n.inner-body {\r\nwidt=\r\nh: 100% !important;\r\n}\r\n\r\n.footer {\r\nwidth: 100% !important;\r\n}\r\n}\r\n=\r\n\r\n@media only screen and (max-width: 500px) {\r\n.button {\r\nwidth: 100% !i=\r\nmportant;\r\n}\r\n}\r\n</style>\r\n</head>\r\n<body style=3D\"box-sizing: border-=\r\nbox; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, He=\r\nlvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe U=\r\nI Symbol\'; position: relative; -webkit-text-size-adjust: none; background-c=\r\nolor: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; p=\r\nadding: 0; width: 100% !important;\">\r\n\r\n<table class=3D\"wrapper\" width=3D=\r\n\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"b=\r\nox-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Seg=\r\noe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe U=\r\nI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0;=\r\n -premailer-cellspacing: 0; -premailer-width: 100%; background-color: #edf2=\r\nf7; margin: 0; padding: 0; width: 100%;\">\r\n<tr>\r\n<td align=3D\"center\" sty=\r\nle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFon=\r\nt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'=\r\nSegoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<table class=3D=\r\n\"content\" width=3D\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presen=\r\ntation\" style=3D\"box-sizing: border-box; font-family: -apple-system, BlinkM=\r\nacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Colo=\r\nr Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premail=\r\ner-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%; margi=\r\nn: 0; padding: 0; width: 100%;\">\r\n<tr>\r\n<td class=3D\"header\" style=3D\"box=\r\n-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe=\r\n UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI =\r\nEmoji\', \'Segoe UI Symbol\'; position: relative; padding: 25px 0; text-align:=\r\n center;\">\r\n<a href=3D\"http://192.168.1.104:80\" style=3D\"box-sizing: borde=\r\nr-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, =\r\nHelvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe=\r\n UI Symbol\'; position: relative; color: #3d4852; font-size: 19px; font-weig=\r\nht: bold; text-decoration: none; display: inline-block;\">\r\nEduHelp\r\n</a>=\r\n\r\n</td>\r\n</tr>\r\n\r\n<!-- Email Body -->\r\n<tr>\r\n<td class=3D\"body\" width=\r\n=3D\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" style=3D\"box-sizing: border-b=\r\nox; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Hel=\r\nvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI=\r\n Symbol\'; position: relative; -premailer-cellpadding: 0; -premailer-cellspa=\r\ncing: 0; -premailer-width: 100%; background-color: #edf2f7; border-bottom: =\r\n1px solid #edf2f7; border-top: 1px solid #edf2f7; margin: 0; padding: 0; wi=\r\ndth: 100%;\">\r\n<table class=3D\"inner-body\" align=3D\"center\" width=3D\"570\" c=\r\nellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"box-sizin=\r\ng: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', =\r\nRoboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\'=\r\n, \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0; -premai=\r\nler-cellspacing: 0; -premailer-width: 570px; background-color: #ffffff; bor=\r\nder-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2p=\r\nx 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 aut=\r\no; padding: 0; width: 570px;\">\r\n<!-- Body content -->\r\n<tr>\r\n<td class=\r\n=3D\"content-cell\" style=3D\"box-sizing: border-box; font-family: -apple-syst=\r\nem, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'=\r\nApple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative=\r\n; max-width: 100vw; padding: 32px;\">\r\n<h1 style=3D\"box-sizing: border-box;=\r\n font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvet=\r\nica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Sy=\r\nmbol\'; position: relative; color: #3d4852; font-size: 18px; font-weight: bo=\r\nld; margin-top: 0; text-align: left;\">Hello!</h1>\r\n<p style=3D\"box-sizing:=\r\n border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Ro=\r\nboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', =\r\n\'Segoe UI Symbol\'; position: relative; font-size: 16px; line-height: 1.5em;=\r\n margin-top: 0; text-align: left;\">Please click the button below to verify =\r\nyour email address.</p>\r\n<table class=3D\"action\" align=3D\"center\" width=3D=\r\n\"100%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"b=\r\nox-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Seg=\r\noe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe U=\r\nI Emoji\', \'Segoe UI Symbol\'; position: relative; -premailer-cellpadding: 0;=\r\n -premailer-cellspacing: 0; -premailer-width: 100%; margin: 30px auto; padd=\r\ning: 0; text-align: center; width: 100%;\">\r\n<tr>\r\n<td align=3D\"center\" st=\r\nyle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFo=\r\nnt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', =\r\n\'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<table width=\r\n=3D\"100%\" border=3D\"0\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presenta=\r\ntion\" style=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMac=\r\nSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color =\r\nEmoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">\r\n<tr>=\r\n\r\n<td align=3D\"center\" style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative;\">\r\n<table border=3D\"0\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D=\r\n\"presentation\" style=3D\"box-sizing: border-box; font-family: -apple-system,=\r\n BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'App=\r\nle Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">=\r\n\r\n<tr>\r\n<td style=3D\"box-sizing: border-box; font-family: -apple-system, =\r\nBlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Appl=\r\ne Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative;\">=\r\n\r\n<a href=3D\"http://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70=\r\n638fab04b066d37?expires=3D1670703961&amp;signature=3Df974037fef1bb7c98ab97e=\r\n2a02604fada2cd1c35be3c5ac7b718547a96b84383\" class=3D\"button button-primary\"=\r\n target=3D\"_blank\" rel=3D\"noopener\" style=3D\"box-sizing: border-box; font-f=\r\namily: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Ar=\r\nial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; =\r\nposition: relative; -webkit-text-size-adjust: none; border-radius: 4px; col=\r\nor: #fff; display: inline-block; overflow: hidden; text-decoration: none; b=\r\nackground-color: #2d3748; border-bottom: 8px solid #2d3748; border-left: 18=\r\npx solid #2d3748; border-right: 18px solid #2d3748; border-top: 8px solid #=\r\n2d3748;\">Verify Email Address</a>\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr=\r\n>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n<p style=3D\"box-sizing: border-bo=\r\nx; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helv=\r\netica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI =\r\nSymbol\'; position: relative; font-size: 16px; line-height: 1.5em; margin-to=\r\np: 0; text-align: left;\">If you did not create an account, no further actio=\r\nn is required.</p>\r\n<p style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: lef=\r\nt;\">Regards,<br>\r\nEduHelp</p>\r\n\r\n\r\n<table class=3D\"subcopy\" width=3D\"10=\r\n0%\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"presentation\" style=3D\"box-=\r\nsizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe =\r\nUI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI E=\r\nmoji\', \'Segoe UI Symbol\'; position: relative; border-top: 1px solid #e8e5ef=\r\n; margin-top: 25px; padding-top: 25px;\">\r\n<tr>\r\n<td style=3D\"box-sizing: =\r\nborder-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Rob=\r\noto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'=\r\nSegoe UI Symbol\'; position: relative;\">\r\n<p style=3D\"box-sizing: border-bo=\r\nx; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helv=\r\netica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI =\r\nSymbol\'; position: relative; line-height: 1.5em; margin-top: 0; text-align:=\r\n left; font-size: 14px;\">If you\'re having trouble clicking the \"Verify Emai=\r\nl Address\" button, copy and paste the URL below\r\ninto your web browser: <s=\r\npan class=3D\"break-all\" style=3D\"box-sizing: border-box; font-family: -appl=\r\ne-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-se=\r\nrif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: re=\r\nlative; word-break: break-all;\"><a href=3D\"http://192.168.1.104/verify-emai=\r\nl/3/508eea2612cb3002ceea88a70638fab04b066d37?expires=3D1670703961&amp;signa=\r\nture=3Df974037fef1bb7c98ab97e2a02604fada2cd1c35be3c5ac7b718547a96b84383\" st=\r\nyle=3D\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFo=\r\nnt, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', =\r\n\'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; color: #3869d4;\">h=\r\nttp://192.168.1.104/verify-email/3/508eea2612cb3002ceea88a70638fab04b066d37=\r\n?expires=3D1670703961&amp;signature=3Df974037fef1bb7c98ab97e2a02604fada2cd1=\r\nc35be3c5ac7b718547a96b84383</a></span></p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n=\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n\r\n<tr>\r\n<td style=3D\"box-sizin=\r\ng: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', =\r\nRoboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\'=\r\n, \'Segoe UI Symbol\'; position: relative;\">\r\n<table class=3D\"footer\" align=\r\n=3D\"center\" width=3D\"570\" cellpadding=3D\"0\" cellspacing=3D\"0\" role=3D\"prese=\r\nntation\" style=3D\"box-sizing: border-box; font-family: -apple-system, Blink=\r\nMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Col=\r\nor Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; position: relative; -premai=\r\nler-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px; mar=\r\ngin: 0 auto; padding: 0; text-align: center; width: 570px;\">\r\n<tr>\r\n<td c=\r\nlass=3D\"content-cell\" align=3D\"center\" style=3D\"box-sizing: border-box; fon=\r\nt-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica,=\r\n Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol=\r\n\'; position: relative; max-width: 100vw; padding: 32px;\">\r\n<p style=3D\"box=\r\n-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, \'Segoe=\r\n UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI =\r\nEmoji\', \'Segoe UI Symbol\'; position: relative; line-height: 1.5em; margin-t=\r\nop: 0; color: #b0adc5; font-size: 12px; text-align: center;\">=C2=A9 2022 Ed=\r\nuHelp. All rights reserved.</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</t=\r\nr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table>\r\n</body>\r\n</html>\r\n--NetaSGty--\r\n', '< 220-raffles.sg.hostns.io ESMTP Exim 4.96 #2 Sat, 10 Dec 2022 19:26:06 +0000 \r\n< 220-We do not authorize the use of this system to transport unsolicited, \r\n< 220 and/or bulk e-mail.\r\n> EHLO [127.0.0.1]\n< 250-raffles.sg.hostns.io Hello [127.0.0.1] [103.150.68.139]\r\n< 250-SIZE 52428800\r\n< 250-8BITMIME\r\n< 250-PIPELINING\r\n< 250-PIPECONNECT\r\n< 250-AUTH PLAIN LOGIN\r\n< 250 HELP\r\n> AUTH LOGIN\n< 334 VXNlcm5hbWU6\r\n> ZWR1aGVscEBzb2Z0LWl0YmQuY29t\n< 334 UGFzc3dvcmQ6\r\n> RWR1SGVscEAx\n< 235 Authentication succeeded\r\n> MAIL FROM:<eduhelp@soft-itbd.com>\n< 250 OK\r\n> RCPT TO:<asif15-11895@diu.edu.bd>\n< 250 Accepted\r\n> DATA\n< 354 Enter message, ending with \".\" on a line by itself\r\n> .\n< 250 OK id=1p45U7-000Epl-2X\r\n'),
(5, 'a@gmail.com', 'nurnobishanto1@gmail.com <EduHub>', '', '', 'Hello', NULL, '<h2>Hey !</h2> <br><br>\n\nYou received an email from : nurnobi <br><br>\n\nUser details: <br><br>\n\n\nName:  nurnobi<br>\nEmail:  a@gmail.com<br>\nPhone:  01770634816<br>\nSubject:  Hello<br>\nMessage:  Hello<br><br>\n\nThanks\n', '2022-12-13 06:22:55', '2022-12-13 06:22:55', 'From: a@gmail.com\r\nTo: EduHub <nurnobishanto1@gmail.com>\r\nSubject: Hello\r\nMessage-ID: <3ad5634f3a0ff6ef64458d02978dc879@gmail.com>\r\nMIME-Version: 1.0\r\nDate: Tue, 13 Dec 2022 12:22:54 +0600\r\nContent-Type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: quoted-printable\r\n\r\n<h2>Hey !</h2> <br><br>\r\n\r\nYou received an email from : nurnobi <br><br>=\r\n\r\n\r\nUser details: <br><br>\r\n\r\n\r\nName:  nurnobi<br>\r\nEmail:  a@gmail.c=\r\nom<br>\r\nPhone:  01770634816<br>\r\nSubject:  Hello<br>\r\nMessage:  Hello<br=\r\n><br>\r\n\r\nThanks\r\n', '< 220-raffles.sg.hostns.io ESMTP Exim 4.96 #2 Tue, 13 Dec 2022 06:22:54 +0000 \r\n< 220-We do not authorize the use of this system to transport unsolicited, \r\n< 220 and/or bulk e-mail.\r\n> EHLO [127.0.0.1]\n< 250-raffles.sg.hostns.io Hello [127.0.0.1] [37.111.198.17]\r\n< 250-SIZE 52428800\r\n< 250-8BITMIME\r\n< 250-PIPELINING\r\n< 250-PIPECONNECT\r\n< 250-AUTH PLAIN LOGIN\r\n< 250 HELP\r\n> AUTH LOGIN\n< 334 VXNlcm5hbWU6\r\n> ZWR1aGVscEBzb2Z0LWl0YmQuY29t\n< 334 UGFzc3dvcmQ6\r\n> RWR1SGVscEAx\n< 235 Authentication succeeded\r\n> MAIL FROM:<a@gmail.com>\n< 250 OK\r\n> RCPT TO:<nurnobishanto1@gmail.com>\n< 250 Accepted\r\n> DATA\n< 354 Enter message, ending with \".\" on a line by itself\r\n> .\n< 250 OK id=1p4ygo-000Oq8-2s\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `op1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `op2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `op3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `op4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `explain_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `name`, `subject_id`, `image`, `details`, `op1`, `op2`, `op3`, `op4`, `ca`, `explain`, `explain_img`, `created_at`, `updated_at`) VALUES
(1, 'The decimal expansion of 22/7  is', 9, NULL, NULL, '(a) Terminating', '(b) Non-terminating and repeating', '(c) Non-terminating and Non-repeating', '(d) None of the above', 'op2', NULL, NULL, '2022-12-11 15:17:07', '2022-12-11 15:17:07'),
(2, '2. For some integer n, the odd integer is represented in the form of:', 9, NULL, NULL, '(a) n', '(b) n + 1', '(c) 2n + 1', '(d) 2n', 'op3', 'Explanation: Since 2n represents the even numbers, hence 2n + 1 will always represent the odd numbers. Suppose if n = 2, then 2n = 4 and 2n + 1 = 5.', NULL, '2022-12-11 15:19:41', '2022-12-11 15:19:41'),
(3, '3. HCF of 26 and 91 is:', 9, NULL, NULL, '(a) 15', '(b) 13', '(c) 19', '(d) 11', 'op2', 'Explanation: The prime factorisation of 26 and 91 is;\n\n26 = 2 x 13\n\n91 = 7 x 13\n\nHence, HCF (26, 91) = 13', NULL, '2022-12-11 15:25:19', '2022-12-11 15:25:19'),
(4, '4. Which of the following is not irrational?', 9, NULL, NULL, '(a) (3 + √7)', '(b) (3 – √7)', '(c) (3 + √7) (3 – √7)', '(d) 3√7', 'op3', 'Explanation: If we solve, (3 + √7) (3 – √7), we get;\n\n(3 + √7) (3 – √7) = 32 – (√7)2 = 9 – 7 = 2 [By a2 – b2 = (a – b) (a + b)] ', NULL, '2022-12-11 15:29:23', '2022-12-11 15:29:23'),
(5, '5. The addition of a rational number and an irrational number is equal to:', 9, NULL, NULL, '(a) rational number', '(b) Irrational number', '(c) Both', '(d) None of the above', 'op2', 'The addition of a rational number and an irrational number is equal to irrational number.', NULL, '2022-12-11 15:31:59', '2022-12-11 15:31:59'),
(6, '6. The multiplication of two irrational numbers is: ', 9, NULL, NULL, ' (a) irrational number', '  (b) rational number   ', '(c) Maybe rational or irrational ', '  (d) None', 'op3', ' The multiplication of two irrational numbers is maybe rational or irrational.', NULL, '2022-12-11 15:33:39', '2022-12-11 15:33:39'),
(7, '7. If set A = {1, 2, 3, 4, 5,…} is given, then it represents:', 9, NULL, NULL, '(a) Whole numbers', '(b) Rational Numbers', '(c) Natural numbers', '(d) Complex numbers', 'op3', 'If set A = {1, 2, 3, 4, 5,…} is given, then it represents natural numbers.', NULL, '2022-12-11 15:35:10', '2022-12-11 15:35:10'),
(8, '8. If p and q are integers and is represented in the form of p/q, then it is a:', 9, NULL, NULL, '(a) Whole number', '(b) Rational number', '(c) Natural number', '(d) Even number', 'op2', '\nIf p and q are integers and is represented in the form of p/q, then it is a rational number.', NULL, '2022-12-11 15:38:35', '2022-12-11 15:38:35'),
(9, '9. The largest number that divides 70 and 125, which leaves the remainders 5 and 8, is:', 9, NULL, NULL, '(a) 65', '(b) 15', '(c) 13', '(d) 25', 'op3', 'Explanation: 70 – 5 = 65 and 125 – 8 = 117\n\nHCF (65, 117) is the largest number that divides 70 and 125 and leaves remainder 5 and 8.\n\nHCF (65, 117) = 13', NULL, '2022-12-11 15:40:22', '2022-12-11 15:40:22'),
(10, '10. The least number that is divisible by all the numbers from 1 to 5 is:', 9, NULL, NULL, '(a) 70', '(b) 60', '(c) 80', '(d) 90', 'op2', 'Explanation: The least number will be LCM of 1, 2, 3, 4, 5.\n\nHence, LCM (1, 2, 3, 4, 5) = 2 x 2 x 3 x 5 = 60', NULL, '2022-12-11 15:41:18', '2022-12-11 15:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_quiz`
--

CREATE TABLE `mcq_quiz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mcq_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quiz_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcq_quiz`
--

INSERT INTO `mcq_quiz` (`id`, `mcq_id`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`id`, `name`, `account_number`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Take Quiz', 'null', 'null', '2022-11-29 14:35:31', '2022-12-11 18:34:02'),
(2, 'Purches ', 'null', 'nul', '2022-11-29 14:35:52', '2022-12-11 18:33:50'),
(3, 'Bkash Personal', '01770634816', 'Send Money With Charge', '2022-12-11 18:36:28', '2022-12-11 18:36:28');

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
(1, '2013_09_25_125504_create_districts_table', 1),
(2, '2013_09_25_140236_create_upazilas_table', 1),
(3, '2013_09_26_021704_create_post_offices_table', 1),
(4, '2013_11_14_134414_create_methods_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_04_18_132920_create_navigations_table', 1),
(10, '2022_04_21_203420_make_items_longtext_on_navigations_table', 1),
(12, '2022_09_18_171826_add_two_factor_columns_to_table', 1),
(13, '2022_09_21_094218_create_media_table', 1),
(14, '2022_09_21_095950_create_filament_blog_tables', 1),
(15, '2022_09_21_095950_create_tag_tables', 1),
(16, '2022_09_23_122433_create_filament_email_log_table', 1),
(17, '2022_09_23_122434_add_raw_and_debug_fields_to_filament_email_log_table', 1),
(18, '2022_09_24_154820_create_filament-social-networks_table', 1),
(19, '2022_09_26_173741_create_subjects_table', 1),
(20, '2022_11_14_021749_create_notifications_table', 1),
(21, '2022_11_14_021916_create_exam_categories_table', 1),
(22, '2022_11_14_025226_create_quizzes_table', 1),
(23, '2022_11_14_025245_create_types_table', 1),
(24, '2022_11_14_025335_quiz_type', 1),
(25, '2022_11_14_050531_create_mcqs_table', 1),
(26, '2022_11_14_051402_mcq_quiz', 1),
(27, '2022_11_14_063939_create_results_table', 1),
(28, '2022_11_14_064018_create_coins_table', 1),
(29, '2022_11_14_065822_create_notices_table', 1),
(30, '2022_11_14_070133_create_deposites_table', 1),
(31, '2022_11_14_070810_create_withdraws_table', 1),
(32, '2022_11_14_233953_create_settings_table', 1),
(33, '2022_11_15_101210_create_contacts_table', 1),
(34, '2022_11_15_122031_create_comments_table', 1),
(35, '2022_11_18_083824_create_attempts_table', 1),
(36, '2022_09_18_155906_create_permission_tables', 2),
(37, '2022_12_12_124134_create_settings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `handle`, `items`, `created_at`, `updated_at`) VALUES
(1, 'Front Header', 'front-header', '{\"0519ecc1-41a4-41e5-b272-cd0b6417b243\":{\"label\":\"Home\",\"type\":\"external-link\",\"data\":{\"url\":\"http:\\/\\/192.168.1.104\\/\",\"target\":null},\"children\":[]},\"9024d8c9-9322-4ef6-9441-8a0822c88619\":{\"label\":\"Quiz\",\"type\":\"external-link\",\"data\":{\"url\":\"http:\\/\\/192.168.1.104\\/quiz\",\"target\":null},\"children\":[]},\"cd698c20-1e1d-4e48-a03e-6ffc321c52a9\":{\"label\":\"About\",\"type\":\"external-link\",\"data\":{\"url\":\"http:\\/\\/192.168.1.104\\/about\",\"target\":null},\"children\":[]},\"73156a71-32bf-49aa-b510-53b92bd0d762\":{\"label\":\"Blog\",\"type\":\"external-link\",\"data\":{\"url\":\"http:\\/\\/192.168.1.104\\/blog\",\"target\":null},\"children\":[]},\"e0b246dd-8e19-4402-9154-bfae7b50ec88\":{\"label\":\"Contact\",\"type\":\"external-link\",\"data\":{\"url\":\"http:\\/\\/192.168.1.104\\/contact\",\"target\":null},\"children\":[]}}', '2022-11-29 07:09:19', '2022-12-10 22:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(2, 'view_any_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(3, 'create_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(4, 'update_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(5, 'restore_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(6, 'restore_any_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(7, 'replicate_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(8, 'reorder_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(9, 'delete_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(10, 'delete_any_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(11, 'force_delete_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(12, 'force_delete_any_attempt', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(13, 'view_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(14, 'view_any_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(15, 'create_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(16, 'update_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(17, 'restore_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(18, 'restore_any_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(19, 'replicate_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(20, 'reorder_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(21, 'delete_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(22, 'delete_any_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(23, 'force_delete_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(24, 'force_delete_any_author', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(25, 'view_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(26, 'view_any_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(27, 'create_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(28, 'update_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(29, 'restore_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(30, 'restore_any_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(31, 'replicate_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(32, 'reorder_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(33, 'delete_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(34, 'delete_any_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(35, 'force_delete_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(36, 'force_delete_any_category', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(37, 'view_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(38, 'view_any_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(39, 'create_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(40, 'update_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(41, 'restore_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(42, 'restore_any_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(43, 'replicate_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(44, 'reorder_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(45, 'delete_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(46, 'delete_any_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(47, 'force_delete_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(48, 'force_delete_any_comment', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(49, 'view_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(50, 'view_any_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(51, 'create_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(52, 'update_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(53, 'restore_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(54, 'restore_any_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(55, 'replicate_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(56, 'reorder_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(57, 'delete_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(58, 'delete_any_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(59, 'force_delete_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(60, 'force_delete_any_contact', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(61, 'view_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(62, 'view_any_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(63, 'create_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(64, 'update_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(65, 'restore_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(66, 'restore_any_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(67, 'replicate_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(68, 'reorder_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(69, 'delete_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(70, 'delete_any_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(71, 'force_delete_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(72, 'force_delete_any_deposite', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(73, 'view_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(74, 'view_any_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(75, 'create_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(76, 'update_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(77, 'restore_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(78, 'restore_any_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(79, 'replicate_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(80, 'reorder_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(81, 'delete_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(82, 'delete_any_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(83, 'force_delete_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(84, 'force_delete_any_district', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(85, 'view_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(86, 'view_any_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(87, 'create_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(88, 'update_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(89, 'restore_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(90, 'restore_any_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(91, 'replicate_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(92, 'reorder_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(93, 'delete_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(94, 'delete_any_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(95, 'force_delete_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(96, 'force_delete_any_email', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(97, 'view_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(98, 'view_any_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(99, 'create_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(100, 'update_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(101, 'restore_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(102, 'restore_any_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(103, 'replicate_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(104, 'reorder_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(105, 'delete_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(106, 'delete_any_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(107, 'force_delete_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(108, 'force_delete_any_exam::category', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(109, 'view_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(110, 'view_any_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(111, 'create_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(112, 'update_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(113, 'restore_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(114, 'restore_any_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(115, 'replicate_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(116, 'reorder_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(117, 'delete_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(118, 'delete_any_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(119, 'force_delete_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(120, 'force_delete_any_m::c::q', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(121, 'view_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(122, 'view_any_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(123, 'create_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(124, 'update_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(125, 'restore_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(126, 'restore_any_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(127, 'replicate_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(128, 'reorder_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(129, 'delete_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(130, 'delete_any_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(131, 'force_delete_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(132, 'force_delete_any_method', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(133, 'view_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(134, 'view_any_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(135, 'create_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(136, 'update_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(137, 'restore_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(138, 'restore_any_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(139, 'replicate_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(140, 'reorder_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(141, 'delete_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(142, 'delete_any_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(143, 'force_delete_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(144, 'force_delete_any_navigation', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(145, 'view_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(146, 'view_any_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(147, 'create_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(148, 'update_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(149, 'restore_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(150, 'restore_any_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(151, 'replicate_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(152, 'reorder_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(153, 'delete_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(154, 'delete_any_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(155, 'force_delete_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(156, 'force_delete_any_notice', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(157, 'view_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(158, 'view_any_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(159, 'create_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(160, 'update_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(161, 'restore_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(162, 'restore_any_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(163, 'replicate_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(164, 'reorder_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(165, 'delete_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(166, 'delete_any_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(167, 'force_delete_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(168, 'force_delete_any_post', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(169, 'view_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(170, 'view_any_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(171, 'create_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(172, 'update_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(173, 'restore_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(174, 'restore_any_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(175, 'replicate_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(176, 'reorder_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(177, 'delete_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(178, 'delete_any_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(179, 'force_delete_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(180, 'force_delete_any_post::office', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(181, 'view_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(182, 'view_any_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(183, 'create_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(184, 'update_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(185, 'restore_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(186, 'restore_any_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(187, 'replicate_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(188, 'reorder_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(189, 'delete_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(190, 'delete_any_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(191, 'force_delete_quiz', 'web', '2022-11-29 07:07:57', '2022-11-29 07:07:57'),
(192, 'force_delete_any_quiz', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(193, 'view_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(194, 'view_any_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(195, 'create_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(196, 'update_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(197, 'restore_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(198, 'restore_any_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(199, 'replicate_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(200, 'reorder_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(201, 'delete_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(202, 'delete_any_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(203, 'force_delete_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(204, 'force_delete_any_result', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(205, 'view_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(206, 'view_any_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(207, 'create_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(208, 'update_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(209, 'restore_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(210, 'restore_any_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(211, 'replicate_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(212, 'reorder_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(213, 'delete_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(214, 'delete_any_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(215, 'force_delete_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(216, 'force_delete_any_role', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(217, 'view_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(218, 'view_any_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(219, 'create_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(220, 'update_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(221, 'restore_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(222, 'restore_any_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(223, 'replicate_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(224, 'reorder_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(225, 'delete_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(226, 'delete_any_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(227, 'force_delete_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(228, 'force_delete_any_subject', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(229, 'view_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(230, 'view_any_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(231, 'create_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(232, 'update_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(233, 'restore_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(234, 'restore_any_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(235, 'replicate_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(236, 'reorder_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(237, 'delete_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(238, 'delete_any_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(239, 'force_delete_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(240, 'force_delete_any_type', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(241, 'view_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(242, 'view_any_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(243, 'create_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(244, 'update_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(245, 'restore_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(246, 'restore_any_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(247, 'replicate_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(248, 'reorder_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(249, 'delete_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(250, 'delete_any_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(251, 'force_delete_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(252, 'force_delete_any_upazila', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(253, 'view_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(254, 'view_any_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(255, 'create_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(256, 'update_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(257, 'restore_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(258, 'restore_any_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(259, 'replicate_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(260, 'reorder_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(261, 'delete_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(262, 'delete_any_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(263, 'force_delete_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(264, 'force_delete_any_user', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(265, 'view_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(266, 'view_any_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(267, 'create_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(268, 'update_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(269, 'restore_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(270, 'restore_any_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(271, 'replicate_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(272, 'reorder_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(273, 'delete_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(274, 'delete_any_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(275, 'force_delete_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(276, 'force_delete_any_withdraw', 'web', '2022-11-29 07:07:58', '2022-11-29 07:07:58'),
(277, 'page_Browser', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(278, 'page_Artisan', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(279, 'page_Dashboard', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(280, 'page_SettingPage', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(281, 'page_MyProfile', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(282, 'page_LogViewerPage', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(283, 'page_LogViewerViewLogPage', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(284, 'page_LogViewerViewDetailsPage', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(285, 'widget_AccountWidget', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(286, 'widget_FilamentInfoWidget', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(287, 'widget_FilamentVersionsWidget', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_offices`
--

CREATE TABLE `post_offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `upazila_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_offices`
--

INSERT INTO `post_offices` (`id`, `district_id`, `upazila_id`, `name`, `code`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 47, 23, 'N', '6500', 1, '2022-12-10 19:27:27', '2022-12-10 19:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `attempt_limit` int(11) NOT NULL,
  `positive_mark` double NOT NULL,
  `negative_mark` double NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `subject_id`, `exam_category_id`, `name`, `password`, `description`, `duration`, `attempt_limit`, `positive_mark`, `negative_mark`, `start`, `end`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 9, 7, 'Math Quiz (Class-10)', '123', NULL, 30, 2, 1, 0.5, '2022-12-09 00:00:00', '2022-12-11 00:00:00', 3, '2022-12-11 15:11:41', '2022-12-11 18:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_type`
--

CREATE TABLE `quiz_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_type`
--

INSERT INTO `quiz_type` (`id`, `quiz_id`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quiz_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ca` int(11) NOT NULL,
  `wa` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `mark` double NOT NULL,
  `time` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `quiz_id`, `ca`, `wa`, `na`, `mark`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 6, 2, -1, 34, '2022-12-11 15:57:59', '2022-12-11 15:57:59'),
(2, 1, 1, 0, 0, 10, 0, 55, '2022-12-11 16:52:50', '2022-12-11 16:52:50'),
(3, 1, 1, 1, 2, 7, 0, 8, '2022-12-11 16:55:42', '2022-12-11 16:55:42'),
(4, 3, 1, 2, 8, 0, -2, 26, '2022-12-12 17:18:09', '2022-12-12 17:18:09'),
(5, 1, 1, 0, 0, 10, 0, 156, '2022-12-13 07:27:48', '2022-12-13 07:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-11-29 07:07:56', '2022-11-29 07:07:56'),
(2, 'Admin', 'web', '2022-11-29 07:07:59', '2022-11-29 07:07:59'),
(3, 'Teacher', 'web', '2022-11-29 07:11:50', '2022-11-29 07:11:50'),
(4, 'Student', 'web', '2022-11-29 07:12:32', '2022-11-29 07:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(97, 2),
(97, 3),
(98, 1),
(98, 2),
(98, 3),
(99, 1),
(99, 2),
(99, 3),
(100, 1),
(100, 2),
(100, 3),
(101, 1),
(101, 2),
(101, 3),
(102, 1),
(102, 2),
(102, 3),
(103, 1),
(103, 2),
(103, 3),
(104, 1),
(104, 2),
(104, 3),
(105, 1),
(105, 2),
(105, 3),
(106, 1),
(106, 2),
(106, 3),
(107, 1),
(107, 2),
(107, 3),
(108, 1),
(108, 2),
(108, 3),
(109, 1),
(109, 2),
(109, 3),
(110, 1),
(110, 2),
(110, 3),
(111, 1),
(111, 2),
(111, 3),
(112, 1),
(112, 2),
(112, 3),
(113, 1),
(113, 2),
(113, 3),
(114, 1),
(114, 2),
(114, 3),
(115, 1),
(115, 2),
(115, 3),
(116, 1),
(116, 2),
(116, 3),
(117, 1),
(117, 2),
(117, 3),
(118, 1),
(118, 2),
(118, 3),
(119, 1),
(119, 2),
(119, 3),
(120, 1),
(120, 2),
(120, 3),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(157, 2),
(158, 1),
(158, 2),
(159, 1),
(159, 2),
(160, 1),
(160, 2),
(161, 1),
(161, 2),
(162, 1),
(162, 2),
(163, 1),
(163, 2),
(164, 1),
(164, 2),
(165, 1),
(165, 2),
(166, 1),
(166, 2),
(167, 1),
(167, 2),
(168, 1),
(168, 2),
(169, 1),
(169, 2),
(170, 1),
(170, 2),
(171, 1),
(171, 2),
(172, 1),
(172, 2),
(173, 1),
(173, 2),
(174, 1),
(174, 2),
(175, 1),
(175, 2),
(176, 1),
(176, 2),
(177, 1),
(177, 2),
(178, 1),
(178, 2),
(179, 1),
(179, 2),
(180, 1),
(180, 2),
(181, 1),
(181, 2),
(181, 3),
(182, 1),
(182, 2),
(182, 3),
(183, 1),
(183, 2),
(183, 3),
(184, 1),
(184, 2),
(184, 3),
(185, 1),
(185, 2),
(185, 3),
(186, 1),
(186, 2),
(186, 3),
(187, 1),
(187, 2),
(187, 3),
(188, 1),
(188, 2),
(188, 3),
(189, 1),
(189, 2),
(189, 3),
(190, 1),
(190, 2),
(190, 3),
(191, 1),
(191, 2),
(191, 3),
(192, 1),
(192, 2),
(192, 3),
(193, 1),
(193, 3),
(194, 1),
(194, 3),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(217, 2),
(217, 3),
(218, 1),
(218, 2),
(218, 3),
(219, 1),
(219, 2),
(219, 3),
(220, 1),
(220, 2),
(220, 3),
(221, 1),
(221, 2),
(221, 3),
(222, 1),
(222, 2),
(222, 3),
(223, 1),
(223, 2),
(223, 3),
(224, 1),
(224, 2),
(224, 3),
(225, 1),
(225, 2),
(225, 3),
(226, 1),
(226, 2),
(226, 3),
(227, 1),
(227, 2),
(227, 3),
(228, 1),
(228, 2),
(228, 3),
(229, 1),
(229, 3),
(230, 1),
(230, 3),
(231, 1),
(231, 3),
(232, 1),
(232, 3),
(233, 1),
(233, 3),
(234, 1),
(234, 3),
(235, 1),
(235, 3),
(236, 1),
(236, 3),
(237, 1),
(237, 3),
(238, 1),
(238, 3),
(239, 1),
(239, 3),
(240, 1),
(240, 3),
(241, 1),
(241, 2),
(242, 1),
(242, 2),
(243, 1),
(243, 2),
(244, 1),
(244, 2),
(245, 1),
(245, 2),
(246, 1),
(246, 2),
(247, 1),
(247, 2),
(248, 1),
(248, 2),
(249, 1),
(249, 2),
(250, 1),
(250, 2),
(251, 1),
(251, 2),
(252, 1),
(252, 2),
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(263, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(271, 1),
(272, 1),
(273, 1),
(274, 1),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1),
(279, 2),
(279, 3),
(279, 4),
(280, 1),
(281, 1),
(281, 2),
(281, 3),
(281, 4),
(282, 1),
(282, 2),
(283, 1),
(283, 2),
(284, 1),
(285, 1),
(285, 2),
(285, 3),
(286, 1),
(286, 2),
(286, 3),
(287, 1),
(287, 2),
(287, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(50) UNSIGNED NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `options`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Title', 'Quiz Portal', NULL, 'text', 1, 'Site Identy'),
(2, 'site.tagline', 'Tagline', 'tagline', NULL, 'text', 1, 'Site Identy'),
(3, 'site.description', 'Description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, 'text_area', 1, 'Site Identy'),
(4, 'site.logo', 'Logo', 'uploads/settings/7mFByUnbC0qFC3soXFFYY2PDeqm0ATE2rkdgDOi3.png', NULL, 'image', 1, 'Site Identy'),
(5, 'site.logodark', 'Dark Logo', 'uploads/settings/HuybMPL9wyVgdKbRZPl3R4r7sHj3M3JxXFr4taeZ.png', NULL, 'image', 1, 'Site Identy'),
(6, 'site.favicon', 'Favicon', 'uploads/settings/pv3YyiVoZ80wwkgd0zhsqOgNaLxOs2V9X1airoAv.png', NULL, 'image', 1, 'Site Identy'),
(7, 'site.email', 'Email Address', 'a@gmail.com', NULL, 'text', 1, 'Site Identy'),
(8, 'site.phone', 'Phone Number', '0000000', NULL, 'text', 1, 'Site Identy'),
(9, 'site.whatsapp', 'What\'s App Number', NULL, NULL, 'text', 1, 'Site Identy'),
(10, 'site.address', 'Adsress', '#fg', NULL, 'text_area', 1, 'Site Identy'),
(11, 'facebook', 'Facebook', '#', NULL, 'text', 1, 'Social Address'),
(12, 'youtube', 'Youtube', '#', NULL, 'text', 1, 'Social Address'),
(13, 'instagram', 'Instagram', '#', NULL, 'text', 1, 'Social Address'),
(14, 'website', 'Website', '#', NULL, 'text', 1, 'Social Address'),
(15, 'linkedin', 'Linkedin', '#', NULL, 'text', 1, 'Social Address'),
(16, 'twitter', 'Twitter', '#', NULL, 'text', 1, 'Social Address'),
(17, 'pinterest', 'Pinterest', NULL, NULL, 'text', 1, 'Social Address'),
(18, 'dribbble', 'Dribbble', NULL, NULL, 'text', 1, 'Social Address'),
(19, 'vimeo', 'Vimeo', NULL, NULL, 'text', 1, 'Social Address'),
(20, 'behance', 'Behance', NULL, NULL, 'text', 1, 'Social Address'),
(21, 'site.copyright ', 'Copyright Text', '\n', NULL, 'text_area', 1, 'Site Identy'),
(22, 'site.home.1.title', 'First Title', 'Result Based Digital Market', NULL, 'text', 1, 'Front Home'),
(23, 'site.home.1.content', 'First Conent', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.', NULL, 'text_area', 1, 'Front Home'),
(24, 'site.home.1.url', 'First Button Url', 'google.com', NULL, 'text', 1, 'Front Home'),
(25, 'site.home.1.button', 'First Button ', 'google', NULL, 'text', 1, 'Front Home'),
(26, 'site.home.1.image', 'First Image', 'uploads/settings/h71Z1wkW006bbm7EZxCIVbk022TSWxONgxi1XTb6.png', NULL, 'image', 1, 'Front Home'),
(27, 'site.home.2.title', 'Second Title', 'Lorem Ipsum is simply dummy text of the printing ', NULL, 'text', 2, 'Front Home'),
(28, 'site.home.2.content', 'Second Content', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 'text_area', 2, 'Front Home'),
(29, 'site.home.2.image', 'Second Image', 'uploads/settings/AhXYuu0m7ryT3Kae3xk3fLmassVlIR0uFoOnxBIV.png', NULL, 'image', 2, 'Front Home'),
(30, 'site.home.2.button', 'Second Button', NULL, NULL, 'text', 2, 'Front Home'),
(31, 'site.home.2.url', 'Second Button Url', '#', NULL, 'text', 2, 'Front Home'),
(32, 'site.home.3.title', 'Third Section Title', '', NULL, 'text', 3, 'Front Home'),
(33, 'site.home.3.content', 'Third Section Content', '', NULL, 'text_area', 3, 'Front Home'),
(34, 'site.home.3.image', 'Third Section Image', NULL, NULL, 'image', 3, 'Front Home'),
(35, 'site.home.3.button', 'Third Section Button', '', NULL, 'text', 3, 'Front Home'),
(36, 'site.home.3.url', 'Third Section Button Url', '', NULL, 'text', 3, 'Front Home'),
(37, 'site.about.1.title', 'First Section Title', 'First Section Title', NULL, 'text', 1, 'Front About'),
(38, 'site.about.1.content', 'First Section Content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.', NULL, 'text_area', 1, 'Front About'),
(39, 'site.about.1.image', 'First Section Image', 'uploads/settings/BUu7n3mtW5UEZEsQT46c1hsY5FopCigfv0KVGAFQ.png', NULL, 'image', 1, 'Front About'),
(40, 'site.about.1.image2', 'First Section Image 2', 'uploads/settings/8IPLyVW7dcudHQT63D45dw3QIIBN1OVTNNRjq5RO.png', NULL, 'image', 1, 'Front About'),
(41, 'site.iframe', 'Location Map iframe url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246247!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1611838825763!5m2!1sen!2sin', NULL, 'text', 1, 'Site Identy'),
(42, 'site.about.2.title', 'Second Section Title', 'seee', NULL, 'text', 1, 'Front About'),
(43, 'site.about.2.content', 'Second Section Content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.', NULL, 'text_area', 1, 'Front About'),
(44, 'site.about.2.image', 'Second Section Image', 'uploads/settings/xn29AKvKLzCy35u7I1MXZvchgoBfNDdNC2nd0Nyv.png', NULL, 'image', 1, 'Front About'),
(45, 'site.about.2.button', 'Second Section Button ', NULL, NULL, 'text', 1, 'Front About'),
(46, 'site.about.2.url', 'Second Section Button url', NULL, NULL, 'text', 1, 'Front About'),
(47, 'site.about.3.title', 'Third Section Title', 'Third Section Title', NULL, 'text', 1, 'Front About'),
(48, 'site.about.3.content', 'Third Section Content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.', NULL, 'text_area', 1, 'Front About'),
(49, 'site.about.3.image', 'Third Section Image', 'uploads/settings/oXVJHfszCdetDreB3Yvh7jvjInENkbwzQF1yvOov.png', NULL, 'image', 1, 'Front About'),
(50, 'site.about.3.button', 'Third Section Button', NULL, NULL, 'text', 1, 'Front About'),
(51, 'site.about.3.url', 'Third Section Button url', '#', NULL, 'text', 1, 'Front About'),
(52, 'site.terms', 'Terms & Conditions', '<h2>Introduction</h2> \n  \n<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Quiz Portal BD accessible at #.</p>\n\n<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. These Terms and Conditions have been generated with the help of the <a href=\"https://www.termsandcondiitionssample.com\">Terms And Conditiions Sample Generator</a>.</p>\n\n<p>Minors or people below 18 years old are not allowed to use this Website.</p>\n\n<h2>Intellectual Property Rights</h2>\n\n<p>Other than the content you own, under these Terms, Quiz Portal BD and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>\n\n<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>\n\n<h2>Restrictions</h2>\n\n<p>You are specifically restricted from all of the following:</p>\n\n<ul>\n    <li>publishing any Website material in any other media;</li>\n    <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>\n    <li>publicly performing and/or showing any Website material;</li>\n    <li>using this Website in any way that is or may be damaging to this Website;</li>\n    <li>using this Website in any way that impacts user access to this Website;</li>\n    <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>\n    <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>\n    <li>using this Website to engage in any advertising or marketing.</li>\n</ul>\n\n<p>Certain areas of this Website are restricted from being access by you and Quiz Portal BD may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>\n\n<h2>Your Content</h2>\n\n<p>In these Website Standard Terms and Conditions, \"Your Content\" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Quiz Portal BD a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>\n\n<p>Your Content must be your own and must not be invading any third-party’s rights. Quiz Portal BD reserves the right to remove any of Your Content from this Website at any time without notice.</p>\n\n<h2>Your Privacy</h2>\n\n<p>Please read Privacy Policy.</p>\n\n<h2>No warranties</h2>\n\n<p>This Website is provided \"as is,\" with all faults, and Quiz Portal BD express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>\n\n<h2>Limitation of liability</h2>\n\n<p>In no event shall Quiz Portal BD, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Quiz Portal BD, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>\n\n<h2>Indemnification</h2>\n\n<p>You hereby indemnify to the fullest extent Quiz Portal BD from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>\n\n<h2>Severability</h2>\n\n<p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>\n\n<h2>Variation of Terms</h2>\n\n<p>Quiz Portal BD is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>\n\n<h2>Assignment</h2>\n\n<p>The Quiz Portal BD is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>\n\n<h2>Entire Agreement</h2>\n    \n<p>These Terms constitute the entire agreement between Quiz Portal BD and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>\n\n<h2>Governing Law & Jurisdiction</h2>\n\n<p>These Terms will be governed by and interpreted in accordance with the laws of the State of bd, and you submit to the non-exclusive jurisdiction of the state and federal courts located in bd for the resolution of any disputes.</p>', NULL, 'text_area', 1, 'Others'),
(53, 'site.policy', 'Privacy Policy', '<h2>Introduction</h2> \n  \n<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Quiz Portal BD accessible at #.</p>\n\n<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. These Terms and Conditions have been generated with the help of the <a href=\"https://www.termsandcondiitionssample.com\">Terms And Conditiions Sample Generator</a>.</p>\n\n<p>Minors or people below 18 years old are not allowed to use this Website.</p>\n\n<h2>Intellectual Property Rights</h2>\n\n<p>Other than the content you own, under these Terms, Quiz Portal BD and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>\n\n<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>\n\n<h2>Restrictions</h2>\n\n<p>You are specifically restricted from all of the following:</p>\n\n<ul>\n    <li>publishing any Website material in any other media;</li>\n    <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>\n    <li>publicly performing and/or showing any Website material;</li>\n    <li>using this Website in any way that is or may be damaging to this Website;</li>\n    <li>using this Website in any way that impacts user access to this Website;</li>\n    <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>\n    <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>\n    <li>using this Website to engage in any advertising or marketing.</li>\n</ul>\n\n<p>Certain areas of this Website are restricted from being access by you and Quiz Portal BD may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>\n\n<h2>Your Content</h2>\n\n<p>In these Website Standard Terms and Conditions, \"Your Content\" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Quiz Portal BD a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>\n\n<p>Your Content must be your own and must not be invading any third-party’s rights. Quiz Portal BD reserves the right to remove any of Your Content from this Website at any time without notice.</p>\n\n<h2>Your Privacy</h2>\n\n<p>Please read Privacy Policy.</p>\n\n<h2>No warranties</h2>\n\n<p>This Website is provided \"as is,\" with all faults, and Quiz Portal BD express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>\n\n<h2>Limitation of liability</h2>\n\n<p>In no event shall Quiz Portal BD, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Quiz Portal BD, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>\n\n<h2>Indemnification</h2>\n\n<p>You hereby indemnify to the fullest extent Quiz Portal BD from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>\n\n<h2>Severability</h2>\n\n<p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>\n\n<h2>Variation of Terms</h2>\n\n<p>Quiz Portal BD is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>\n\n<h2>Assignment</h2>\n\n<p>The Quiz Portal BD is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>\n\n<h2>Entire Agreement</h2>\n    \n<p>These Terms constitute the entire agreement between Quiz Portal BD and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>\n\n<h2>Governing Law & Jurisdiction</h2>\n\n<p>These Terms will be governed by and interpreted in accordance with the laws of the State of bd, and you submit to the non-exclusive jurisdiction of the state and federal courts located in bd for the resolution of any disputes.</p>', NULL, 'text_area', 1, 'Others'),
(54, 'code.header', 'Header Code', NULL, NULL, 'text_area', 1, 'Insert Header Footer Code'),
(55, 'code.footer', 'Footer Code', NULL, NULL, 'text_area', 1, 'Insert Header Footer Code'),
(56, 'code.body', 'Body Code', NULL, NULL, 'text_area', 1, 'Insert Header Footer Code'),
(57, 'portal.bg.color', 'Portal Background Color', '#DC2626', NULL, 'text', 1, 'Portal Settongs');

-- --------------------------------------------------------

--
-- Table structure for table `social_networks`
--

CREATE TABLE `social_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `code`, `created_at`, `updated_at`) VALUES
(5, 'Computer Science', 'computer-science', 'null', '2022-12-11 14:20:05', '2022-12-11 14:20:05'),
(6, 'English', 'english', 'null', '2022-12-11 14:20:13', '2022-12-11 14:20:13'),
(7, 'Genaral Knoledge', 'genaral-knoledge', 'null', '2022-12-11 14:20:42', '2022-12-11 14:20:42'),
(8, 'Bangla', 'bangla', 'null', '2022-12-11 14:20:54', '2022-12-11 14:20:54'),
(9, 'Math', 'math', 'null', '2022-12-11 14:21:36', '2022-12-11 14:21:36'),
(10, 'Bangladesh Studys', 'bangladesh-studys', 'null', '2022-12-11 14:22:36', '2022-12-11 14:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`tag_id`, `taggable_type`, `taggable_id`) VALUES
(1, 'Stephenjude\\FilamentBlog\\Models\\Post', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`slug`)),
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_column` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `order_column`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Default\"}', '{\"en\":\"default\"}', NULL, 1, '2022-12-11 13:41:47', '2022-12-11 13:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Global', 'global', '2022-12-11 15:10:36', '2022-12-11 15:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 46, 'Akkelpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 46, 'Joypurhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 46, 'Kalai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 46, 'Khetlal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 46, 'Panchbibi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 45, 'Adamdighi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 45, 'Bogra Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 45, 'Dhunat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 45, 'Dhupchanchia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 45, 'Gabtali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 45, 'Kahaloo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 45, 'Nandigram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 45, 'Sariakandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 45, 'Shajahanpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 45, 'Sherpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 45, 'Shibganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 45, 'Sonatola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 47, 'Atrai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 47, 'Badalgachhi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 47, 'Manda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 47, 'Dhamoirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 47, 'Mohadevpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 47, 'Naogaon Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 47, 'Niamatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 47, 'Patnitala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 47, 'Porsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 47, 'Raninagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 47, 'Sapahar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 48, 'Bagatipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 48, 'Baraigram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 48, 'Gurudaspur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 48, 'Lalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 48, 'Natore Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 48, 'Singra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 48, 'Naldanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 49, 'Bholahat', 1, '0000-00-00 00:00:00', '2022-12-10 20:40:48'),
(37, 49, 'Gomastapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 49, 'Nachole', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 49, 'Nawabganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 49, 'Shibganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 50, 'Ataikula', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 50, 'Atgharia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 50, 'Bera', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 50, 'Bhangura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 50, 'Chatmohar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 50, 'Faridpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 50, 'Ishwardi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 50, 'Pabna Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 50, 'Santhia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 50, 'Sujanagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 52, 'Belkuchi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 52, 'Chauhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 52, 'Kamarkhanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 52, 'Kazipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 52, 'Raiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 52, 'Shahjadpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 52, 'Sirajganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 52, 'Tarash', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 52, 'Ullahpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 51, 'Bagha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 51, 'Bagmara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 51, 'Charghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 51, 'Durgapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 51, 'Godagari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 51, 'Mohanpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 51, 'Paba', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 51, 'Puthia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 51, 'Tanore', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 51, 'Boalia Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 51, 'Matihar Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 51, 'Rajpara Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 51, 'Shah Mokdum Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 53, 'Birampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 53, 'Birganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 53, 'Biral', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 53, 'Bochaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 53, 'Chirirbandar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 53, 'Phulbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 53, 'Ghoraghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 53, 'Hakimpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 53, 'Kaharole', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 53, 'Khansama', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 53, 'Dinajpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 53, 'Nawabganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 53, 'Parbatipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 54, 'Phulchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 54, 'Gaibandha Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 54, 'Gobindaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 54, 'Palashbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 54, 'Sadullapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 54, 'Sughatta', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 54, 'Sundarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 55, 'Bhurungamari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 55, 'Char Rajibpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 55, 'Chilmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 55, 'Phulbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 55, 'Kurigram Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 55, 'Nageshwari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 55, 'Rajarhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 55, 'Raomari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 55, 'Ulipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 56, 'Aditmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 56, 'Hatibandha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 56, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 56, 'Lalmonirhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 56, 'Patgram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 57, 'Dimla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 57, 'Domar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 57, 'Jaldhaka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 57, 'Kishoreganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 57, 'Nilphamari Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 57, 'Saidpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 58, 'Atwari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 58, 'Boda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 58, 'Debiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 58, 'Panchagarh Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 58, 'Tetulia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 59, 'Badarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 59, 'Gangachhara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 59, 'Kaunia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 59, 'Rangpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 59, 'Mithapukur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 59, 'Pirgachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 59, 'Pirganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 59, 'Taraganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 60, 'Baliadangi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 60, 'Haripur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 60, 'Pirganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 60, 'Ranisankail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 60, 'Thakurgaon Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 1, 'Amtali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 1, 'Bamna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 1, 'Barguna Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:32:37'),
(134, 1, 'Betagi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 1, 'Patharghata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 1, 'Taltoli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 2, 'Agailjhara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 2, 'Babuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 2, 'Bakerganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 2, 'Banaripara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 2, 'Gaurnadi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 2, 'Hizla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 2, 'Barisal Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:33:25'),
(144, 2, 'Mehendiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 2, 'Muladi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 2, 'Wazirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 3, 'Bhola Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:33:46'),
(148, 3, 'Burhanuddin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 3, 'Char Fasson', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 3, 'Daulatkhan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 3, 'Lalmohan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 3, 'Manpura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 3, 'Tazumuddin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 4, 'Jhalokati Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:34:03'),
(155, 4, 'Kathalia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 4, 'Nalchity', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 4, 'Rajapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 5, 'Bauphal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 5, 'Dashmina', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 5, 'Galachipa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 5, 'Kalapara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 5, 'Mirzaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 5, 'Patuakhali Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:34:25'),
(164, 5, 'Rangabali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 5, 'Dumki', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 6, 'Bhandaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 6, 'Kawkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 6, 'Mathbaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 6, 'Nazirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 6, 'Pirojpur Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:34:51'),
(171, 6, 'Nesarabad (Swarupkati)', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 6, 'Zianagor', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 7, 'Ali Kadam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 7, 'Bandarban Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:35:01'),
(175, 7, 'Lama', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 7, 'Naikhongchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 7, 'Rowangchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 7, 'Ruma', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 7, 'Thanchi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 8, 'Akhaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 8, 'Bancharampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 8, 'Brahmanbaria Sadar', 1, '0000-00-00 00:00:00', '2022-12-10 20:35:13'),
(183, 8, 'Kasba', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 8, 'Nabinagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 8, 'Nasirnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 8, 'Sarail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 8, 'Ashuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 8, 'Bijoynagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 9, 'Chandpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 9, 'Faridganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 9, 'Haimchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 9, 'Haziganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 9, 'Kachua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 9, 'Matlab Dakshin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 9, 'Matlab Uttar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 9, 'Shahrasti', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 10, 'Anwara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 10, 'Banshkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 10, 'Boalkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 10, 'Chandanaish', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 10, 'Fatikchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 10, 'Hathazari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 10, 'Lohagara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 10, 'Mirsharai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 10, 'Patiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 10, 'Rangunia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 10, 'Raozan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 10, 'Sandwip', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 10, 'Satkania', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 10, 'Sitakunda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 10, 'Bandor (Chittagong Port) Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 10, 'Chandgaon Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 10, 'Double Mooring Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 10, 'Kotwali Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 10, 'Pahartali Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 10, 'Panchlaish Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 11, 'Barura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 11, 'Brahmanpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 11, 'Burichang', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 11, 'Chandina', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 11, 'Chauddagram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 11, 'Daudkandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 11, 'Debidwar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 11, 'Homna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 11, 'Laksam', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 11, 'Muradnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 11, 'Nangalkot', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 11, 'Comilla Adarsha Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 11, 'Meghna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 11, 'Titas', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 11, 'Monohargonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 11, 'Comilla Sadar Dakshin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 12, 'Chakaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 12, 'Cox\'s Bazar Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 12, 'Kutubdia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 12, 'Maheshkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 12, 'Ramu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 12, 'Teknaf', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 12, 'Ukhia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 12, 'Pekua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 13, 'Chhagalnaiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 13, 'Daganbhuiyan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 13, 'Feni Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 13, 'Parshuram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 13, 'Sonagazi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 13, 'Fulgazi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 14, 'Dighinala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 14, 'Khagrachhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 14, 'Lakshmichhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 14, 'Mahalchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 14, 'Manikchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 14, 'Matiranga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 14, 'Panchhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 14, 'Ramgarh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 15, 'Lakshmipur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 15, 'Raipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 15, 'Ramganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 15, 'Ramgati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 15, 'Kamalnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 16, 'Begumganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 16, 'Noakhali Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 16, 'Chatkhil', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 16, 'Companiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 16, 'Hatiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 16, 'Senbagh', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 16, 'Sonaimuri', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 16, 'Subarnachar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 16, 'Kabirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 17, 'Bagaichhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 17, 'Barkal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 17, 'Kawkhali (Betbunia)', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 17, 'Belaichhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 17, 'Kaptai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 17, 'Juraichhari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 17, 'Langadu', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 17, 'Naniyachar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 17, 'Rajasthali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 17, 'Rangamati Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 18, 'Dhamrai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 18, 'Dohar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 18, 'Keraniganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 18, 'Nawabganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 18, 'Savar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 19, 'Alfadanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 19, 'Bhanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 19, 'Boalmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 19, 'Charbhadrasan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 19, 'Faridpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 19, 'Madhukhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 19, 'Nagarkanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 19, 'Sadarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 19, 'Saltha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 20, 'Gazipur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 20, 'Kaliakair', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 20, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 20, 'Kapasia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 20, 'Sreepur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 21, 'Gopalganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 21, 'Kashiani', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 21, 'Kotalipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 21, 'Muksudpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 21, 'Tungipara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 22, 'Baksiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 22, 'Dewanganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 22, 'Islampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 22, 'Jamalpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 22, 'Madarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 22, 'Melandaha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 22, 'Sarishabari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 23, 'Astagram', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 23, 'Bajitpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 23, 'Bhairab', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 23, 'Hossainpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 23, 'Itna', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 23, 'Karimganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 23, 'Katiadi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 23, 'Kishoreganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 23, 'Kuliarchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 23, 'Mithamain', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 23, 'Nikli', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 23, 'Pakundia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 23, 'Tarail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 24, 'Rajoir', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 24, 'Madaripur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 24, 'Kalkini', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 24, 'Shibchar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 25, 'Daulatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 25, 'Ghior', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 25, 'Harirampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 25, 'Manikgonj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 25, 'Saturia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 25, 'Shivalaya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 25, 'Singair', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 26, 'Gazaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 26, 'Lohajang', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 26, 'Munshiganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 26, 'Sirajdikhan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 26, 'Sreenagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 26, 'Tongibari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 27, 'Bhaluka', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 27, 'Dhobaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 27, 'Fulbaria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 27, 'Gaffargaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 27, 'Gauripur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 27, 'Haluaghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 27, 'Ishwarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 27, 'Mymensingh Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 27, 'Muktagachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 27, 'Nandail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 27, 'Phulpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 27, 'Trishal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 27, 'Tara Khanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 28, 'Araihazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 28, 'Bandar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 28, 'Narayanganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 28, 'Rupganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 28, 'Sonargaon', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 30, 'Atpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 30, 'Barhatta', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 30, 'Durgapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 30, 'Khaliajuri', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 30, 'Kalmakanda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 30, 'Kendua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 30, 'Madan', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 30, 'Mohanganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 30, 'Netrokona Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 30, 'Purbadhala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 31, 'Baliakandi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 31, 'Goalandaghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 31, 'Pangsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 31, 'Rajbari Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 31, 'Kalukhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 32, 'Bhedarganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 32, 'Damudya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 32, 'Gosairhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 32, 'Naria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 32, 'Shariatpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 32, 'Zanjira', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 32, 'Shakhipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 33, 'Jhenaigati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 33, 'Nakla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 33, 'Nalitabari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 33, 'Sherpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 33, 'Sreebardi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 34, 'Gopalpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 34, 'Basail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 34, 'Bhuapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 34, 'Delduar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 34, 'Ghatail', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 34, 'Kalihati', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 34, 'Madhupur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 34, 'Mirzapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 34, 'Nagarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 34, 'Sakhipur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 34, 'Dhanbari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 34, 'Tangail Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 29, 'Narsingdi Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 29, 'Belabo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 29, 'Monohardi', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 29, 'Palash', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 29, 'Raipura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 29, 'Shibpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 35, 'Bagerhat Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 35, 'Chitalmari', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 35, 'Fakirhat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 35, 'Kachua', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 35, 'Mollahat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 35, 'Mongla', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 35, 'Morrelganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 35, 'Rampal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 35, 'Sarankhola', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 36, 'Alamdanga', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 36, 'Chuadanga Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 36, 'Damurhuda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 36, 'Jibannagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 37, 'Abhaynagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 37, 'Bagherpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 37, 'Chaugachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 37, 'Jhikargachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 37, 'Keshabpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 37, 'Jessore Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 37, 'Manirampur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 37, 'Sharsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 38, 'Harinakunda', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 38, 'Jhenaidah Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 38, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 38, 'Kotchandpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 38, 'Maheshpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 38, 'Shailkupa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 39, 'Batiaghata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 39, 'Dacope', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 39, 'Dumuria', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 39, 'Dighalia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 39, 'Koyra', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 39, 'Paikgachha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 39, 'Phultala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 39, 'Rupsha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 39, 'Terokhada', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(439, 39, 'Daulatpur Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(440, 39, 'Khalishpur Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(441, 39, 'Khan Jahan Ali Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(442, 39, 'Kotwali Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(443, 39, 'Sonadanga Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(444, 39, 'Harintana Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(445, 40, 'Bheramara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(446, 40, 'Daulatpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 40, 'Khoksa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 40, 'Kumarkhali', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 40, 'Kushtia Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 40, 'Mirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 40, 'Shekhpara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 41, 'Magura Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 41, 'Mohammadpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 41, 'Shalikha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(455, 41, 'Sreepur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(456, 42, 'Gangni', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(457, 42, 'Meherpur Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(458, 42, 'Mujibnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(459, 43, 'Kalia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(460, 43, 'Lohagara', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(461, 43, 'Narail Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 43, 'Naragati Thana', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(463, 44, 'Assasuni', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(464, 44, 'Debhata', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(465, 44, 'Kalaroa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(466, 44, 'Kaliganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(467, 44, 'Satkhira Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(468, 44, 'Shyamnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(469, 44, 'Tala', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(470, 61, 'Ajmiriganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(471, 61, 'Bahubal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(472, 61, 'Baniyachong', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(473, 61, 'Chunarughat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(474, 61, 'Habiganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(475, 61, 'Lakhai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(476, 61, 'Madhabpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(477, 61, 'Nabiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(478, 62, 'Barlekha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(479, 62, 'Kamalganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(480, 62, 'Kulaura', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(481, 62, 'Moulvibazar Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(482, 62, 'Rajnagar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(483, 62, 'Sreemangal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(484, 62, 'Juri', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(485, 63, 'Bishwamvarpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(486, 63, 'Chhatak', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(487, 63, 'Derai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(488, 63, 'Dharampasha', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(489, 63, 'Dowarabazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(490, 63, 'Jagannathpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(491, 63, 'Jamalganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(492, 63, 'Sullah', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(493, 63, 'Sunamganj Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(494, 63, 'Tahirpur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(495, 63, 'South Sunamganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(496, 64, 'Balaganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(497, 64, 'Beanibazar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(498, 64, 'Bishwanath', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(499, 64, 'Companigonj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(500, 64, 'Fenchuganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(501, 64, 'Golapganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(502, 64, 'Gowainghat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(503, 64, 'Jaintiapur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(504, 64, 'Kanaighat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(505, 64, 'Sylhet Sadar', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(506, 64, 'Zakiganj', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(507, 64, 'South Shurma', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `upazila_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `school`, `profession`, `dob`, `district_id`, `upazila_id`, `post_office_id`, `address`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Nurnobi Hosen', 'user/202212131321qp favicon.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nurnobishanto1@gmail.com', NULL, NULL, '$2y$10$eYayBgRHWI7Hzm3vF2sgl.kyU6Pn7/sCD7rf1.bck3HZA.hL/4wBG', NULL, NULL, NULL, '0He5ZRreC9aiDY0yNjJKe0cRxPYYkcT8bDWaRtDKIyNk1MMpouMXM2iPhefr', '2022-11-29 07:08:33', '2022-12-13 07:22:00'),
(3, 'Asif Iqbal Niloy', 'user/202212120036IMG_20210913_150540.jpg', 'DIU', 'TEACHER', '2 Feb, 2002', 47, 23, 2, '..........', 'asif15-11895@diu.edu.bd', '01763388891', NULL, '$2y$10$uN/lN0wOm5QohrRFof0SVOde.RbqSqgA0xL.0MU2YwQwqu3bni8XW', NULL, NULL, NULL, NULL, '2022-12-10 19:26:01', '2022-12-12 19:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` double NOT NULL,
  `method_id` bigint(20) UNSIGNED DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `amount`, `method_id`, `account_number`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 2, '0170634816', 'xxxxx', 'approved', '2022-11-29 14:37:51', '2022-11-29 14:38:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attempts_user_id_foreign` (`user_id`),
  ADD KEY `attempts_result_id_foreign` (`result_id`),
  ADD KEY `attempts_quiz_id_foreign` (`quiz_id`),
  ADD KEY `attempts_mcq_id_foreign` (`mcq_id`);

--
-- Indexes for table `blog_authors`
--
ALTER TABLE `blog_authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_authors_email_unique` (`email`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_posts_slug_unique` (`slug`),
  ADD KEY `blog_posts_blog_author_id_foreign` (`blog_author_id`),
  ADD KEY `blog_posts_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coins_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_post_id_foreign` (`blog_post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposites`
--
ALTER TABLE `deposites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposites_user_id_foreign` (`user_id`),
  ADD KEY `deposites_method_id_foreign` (`method_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_categories`
--
ALTER TABLE `exam_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_categories_slug_unique` (`slug`),
  ADD KEY `exam_categories_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filament_email_log`
--
ALTER TABLE `filament_email_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mcqs_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `mcq_quiz`
--
ALTER TABLE `mcq_quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mcq_quiz_mcq_id_foreign` (`mcq_id`),
  ADD KEY `mcq_quiz_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `navigations_handle_unique` (`handle`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notices_slug_unique` (`slug`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_offices`
--
ALTER TABLE `post_offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_offices_district_id_foreign` (`district_id`),
  ADD KEY `post_offices_upazila_id_foreign` (`upazila_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_subject_id_foreign` (`subject_id`),
  ADD KEY `quizzes_exam_category_id_foreign` (`exam_category_id`),
  ADD KEY `quizzes_user_id_foreign` (`user_id`);

--
-- Indexes for table `quiz_type`
--
ALTER TABLE `quiz_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_type_quiz_id_foreign` (`quiz_id`),
  ADD KEY `quiz_type_type_id_foreign` (`type_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_slug_unique` (`slug`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_slug_unique` (`slug`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upazilas_district_id_foreign` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_district_id_foreign` (`district_id`),
  ADD KEY `users_upazila_id_foreign` (`upazila_id`),
  ADD KEY `users_post_office_id_foreign` (`post_office_id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdraws_user_id_foreign` (`user_id`),
  ADD KEY `withdraws_method_id_foreign` (`method_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `blog_authors`
--
ALTER TABLE `blog_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposites`
--
ALTER TABLE `deposites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `exam_categories`
--
ALTER TABLE `exam_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filament_email_log`
--
ALTER TABLE `filament_email_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mcq_quiz`
--
ALTER TABLE `mcq_quiz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `methods`
--
ALTER TABLE `methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_offices`
--
ALTER TABLE `post_offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_type`
--
ALTER TABLE `quiz_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attempts`
--
ALTER TABLE `attempts`
  ADD CONSTRAINT `attempts_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcqs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attempts_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attempts_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attempts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_blog_author_id_foreign` FOREIGN KEY (`blog_author_id`) REFERENCES `blog_authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_posts_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `coins`
--
ALTER TABLE `coins`
  ADD CONSTRAINT `coins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_post_id_foreign` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deposites`
--
ALTER TABLE `deposites`
  ADD CONSTRAINT `deposites_method_id_foreign` FOREIGN KEY (`method_id`) REFERENCES `methods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deposites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_categories`
--
ALTER TABLE `exam_categories`
  ADD CONSTRAINT `exam_categories_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD CONSTRAINT `mcqs_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mcq_quiz`
--
ALTER TABLE `mcq_quiz`
  ADD CONSTRAINT `mcq_quiz_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcqs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `mcq_quiz_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_offices`
--
ALTER TABLE `post_offices`
  ADD CONSTRAINT `post_offices_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_offices_upazila_id_foreign` FOREIGN KEY (`upazila_id`) REFERENCES `upazilas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_exam_category_id_foreign` FOREIGN KEY (`exam_category_id`) REFERENCES `exam_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quizzes_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quiz_type`
--
ALTER TABLE `quiz_type`
  ADD CONSTRAINT `quiz_type_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `quiz_type_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_post_office_id_foreign` FOREIGN KEY (`post_office_id`) REFERENCES `post_offices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_upazila_id_foreign` FOREIGN KEY (`upazila_id`) REFERENCES `upazilas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD CONSTRAINT `withdraws_method_id_foreign` FOREIGN KEY (`method_id`) REFERENCES `methods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `withdraws_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
