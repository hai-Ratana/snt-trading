-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 27, 2017 at 01:21 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `snt`
--

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
(3, '2017_07_24_031023_create_slider', 2);

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
-- Table structure for table `snt-tbl-slider`
--

CREATE TABLE `snt-tbl-slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `imageSlide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backgroundSlide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `snt-tbl-slider`
--

INSERT INTO `snt-tbl-slider` (`id`, `imageSlide`, `backgroundSlide`, `title`, `subTitle`, `description`) VALUES
(1, 'images/slider/2017_07_25_slide-1.png', 'images/slider/2017_07_25_slider_bg-1.jpg', 'Best Production', 'It \'s good for teen.', 'Hello work'),
(2, 'images/slider/2017_07_25_slide-2.png', 'images/slider/2017_07_25_slider_bg-2.jpg', 'Elixir T-08', 'best for teen', 'Hello world'),
(3, 'images/slider/2017_07_25_slide-1.png', 'images/slider/2017_07_25_slider_bg-2.jpg', 'boy T8', 'Hello boy', 'How are you'),
(4, 'images/slider/2017_07_25_slide-2.png', 'images/slider/2017_07_25_slider_bg-1.jpg', 'what is', 'Hello world', 'bye'),
(5, 'images/slider/2017_07_25_slide-1.png', 'images/slider/2017_07_25_slider_bg-1.jpg', 'bye bye', 'Helllo', 'what'),
(6, 'images/slider/2017_07_25_slide-2.png', 'images/slider/2017_07_25_slider_bg-2.jpg', 'baby', 'smile', 'bye bye');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ratana', 'hairatana@gmail.com', 1, '$2y$10$nooMx2fG5w37aZYSK.BOAOElxG3eE.dFQtu4MQ.eiQTRvWAz1j7P6', 'nZtCkCZos6ZWOyOkLBcmwn08VOapixzHWo0zQKiGlBxuHJn7Hrexx25qAkbL', NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `snt-tbl-slider`
--
ALTER TABLE `snt-tbl-slider`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `snt-tbl-slider`
--
ALTER TABLE `snt-tbl-slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
