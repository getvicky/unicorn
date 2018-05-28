-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 07:34 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unileads`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `extn_number` int(11) DEFAULT NULL,
  `alias_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `ctc` float DEFAULT NULL,
  `travel_allowance` float DEFAULT NULL,
  `cab_service` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allowance` float DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Agent',
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sales',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `emergency_contact`, `emp_id`, `extn_number`, `alias_name`, `current_address`, `permanent_address`, `date_of_joining`, `agent_id`, `ctc`, `travel_allowance`, `cab_service`, `allowance`, `type`, `department`, `active`, `created_by`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sumit', 'prashantsoam28@gmail.com', '$2y$10$wZe3Kc5rhCkAxPnJ0Eh66uYCfXHAebVTALt8zOPRHnjno/ZuYmfjy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Agent', 'Sales', 1, NULL, NULL, 'QxzD7QTAfBUlHUadF3ysa9YsMPkM1gFQA9QoFZGzTevExUqVAMyXOLciMFay', '2018-05-25 03:17:06', '2018-05-25 03:17:06'),
(2, 'Prashant', 'prashant@whizadvert.com', '$2y$10$24BA7tw4TIM86alh/hEIVenmMKuKxbEvElBql7/U6mRomfIwb4bKq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Agent', 'Sales', 1, NULL, NULL, 'o83R1JY1U8edmix58LStoObB2MzoKK0AaZFOgO2P89XnVXUadWFF2TEO3RX6', '2018-05-25 03:54:54', '2018-05-25 03:54:54'),
(3, 'vivek sharma', 'vivek.allalgos@gmail.com', '$2y$10$261vPydd6BnBmeXpyDr1v.ob0j64UvHxv/fAJaNaEnX4iaMYzXxFS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Agent', 'Sales', 1, NULL, NULL, NULL, '2018-05-28 06:27:19', '2018-05-28 06:27:19'),
(5, 'test user', 'test@gmail.com', '$2y$10$XcvlPtWmoQDD0xkgMjWdeuW11gihdbigsphWNSyx0MVm/62sRH5pi', '897562135', '9784653215', 5, 56, 'testalias', 'test curr address', 'test perma address', NULL, 78, 21, 45, NULL, 21, 'Supervisor', 'MIS', 1, 3, NULL, NULL, '2018-05-28 08:31:56', '2018-05-28 08:31:56');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
