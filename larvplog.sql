-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 10:46 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larvplog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'web Development', '2018-11-30 21:29:54', '2018-11-30 21:29:54'),
(4, 'mobile Development', '2018-11-30 21:31:08', '2018-11-30 21:31:08'),
(5, 'web Design', '2018-11-30 21:31:08', '2018-11-30 21:31:08'),
(6, 'Machin Learning', '2018-11-30 21:32:37', '2018-11-30 21:32:37'),
(7, 'Data minng', '2018-11-30 21:32:37', '2018-11-30 21:32:37'),
(8, 'Game Development', '2018-11-30 21:33:10', '2018-11-30 21:33:10'),
(9, 'Graphic Design', '2018-11-30 21:33:10', '2018-11-30 21:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upVote` int(11) NOT NULL DEFAULT '0',
  `downVote` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `upVote`, `downVote`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdadsdasdad', 2, 0, 1, 1, '2018-11-27 21:59:16', '2018-11-30 04:17:38'),
(2, 'klmlkmklc', 0, 0, 1, 2, '2018-11-30 04:17:48', '2018-11-30 04:17:48'),
(3, '.', 1, 0, 1, 2, '2018-11-30 04:25:00', '2018-11-30 04:51:21'),
(4, 'bnbmbn', 0, 0, 1, 2, '2018-11-30 04:51:04', '2018-11-30 04:51:04'),
(5, 'vdfdb', 0, 0, 4, 1, '2018-11-30 07:22:59', '2018-11-30 07:22:59'),
(6, 'hgnghnhg', 0, 0, 1, 2, '2018-11-30 10:27:00', '2018-11-30 10:27:00'),
(7, '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 1, 0, 6, 2, '2018-11-30 12:25:28', '2018-11-30 16:29:13'),
(12, 'AXXXXXXXXXXXXXXXX', 0, 0, 8, 1, '2018-11-30 13:40:00', '2018-11-30 14:02:24'),
(14, 'sacascas', 0, 0, 6, 1, '2018-11-30 13:43:43', '2018-11-30 13:43:43'),
(15, '111111111', 0, 0, 10, 1, '2018-11-30 14:07:42', '2018-11-30 14:07:53'),
(16, 'cssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscssssssssssssssssssscsssssssssssssssssss', 0, 0, 10, 1, '2018-11-30 14:15:53', '2018-11-30 14:15:53'),
(17, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 0, 0, 6, 1, '2018-11-30 16:29:01', '2018-11-30 16:29:01'),
(18, 'asmadmdsf', 0, 0, 7, 1, '2018-11-30 16:53:17', '2018-11-30 16:53:17'),
(19, 'think youe', 0, 0, 12, 1, '2018-11-30 19:37:55', '2018-11-30 19:37:55');

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
(20, '2018_11_21_111912_create_fakes_table', 1),
(32, '2018_11_27_103558_create_products_table', 3),
(48, '2014_10_12_000000_create_users_table', 4),
(49, '2014_10_12_100000_create_password_resets_table', 4),
(50, '2018_11_02_192626_create_comments_table', 4),
(51, '2018_11_02_221602_create_posts_table', 4),
(52, '2018_11_25_091503_create_categories_table', 4),
(53, '2018_11_30_183214_create_reports_table', 5);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `categorie_id`, `created_at`, `updated_at`) VALUES
(12, 'What is Mobile Decelopment?', 'What is Mobile Development???\r\nHow I start it??', 1, 4, '2018-11-30 19:35:17', '2018-11-30 19:35:17'),
(13, 'web Development Learning Path', 'Front End:\r\nHtml Css Js  \r\nBack end:\r\nphp', 1, 3, '2018-11-30 19:37:21', '2018-11-30 19:37:34'),
(14, 'What is Game Development', 'what is Game development   ??\r\nHow Can I be develop games?', 1, 8, '2018-11-30 19:43:28', '2018-11-30 19:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, 1, 18, '2018-11-30 16:55:06', '2018-11-30 16:55:06'),
(2, 1, 7, '2018-11-30 17:21:08', '2018-11-30 17:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@gmail.com', NULL, '$2y$10$M902MlV1ulnA7dhbgXGm0OzarqJNP/uvI9DCwd6BPzML4PuIxeIbi', 'dIyI0jcALRP3XQc6oprdxv2xFFC4SwogGBWO9mCYyNnR6tgs7P01BL4TBsV8', '2018-11-27 21:55:54', '2018-11-30 07:52:11'),
(2, 'salah mahmoud ali', 'devsalah18@gmail.com', NULL, '$2y$10$O.S9cbGybOHf2zbHNO.HNuK/2VAXSLk9pgHAX.x6OfimPKdx1xjj6', 'JHONphpQaZkOBSvgvhkHURdFm2NJqV0poaON5JK8XEpi4vTG4InK2x0bk4d1', '2018-11-30 04:17:19', '2018-11-30 10:30:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
