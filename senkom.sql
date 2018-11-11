-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 11:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `callsign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_tampil` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status_pemantauan` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `photo`, `callsign`, `tlp`, `pesan`, `tgl`, `jam`, `status_tampil`, `status_pemantauan`, `created_at`, `updated_at`) VALUES
(1, NULL, 'GGWP', '0816863212', '123213', '2018-11-08', '07:30 am', 'tampil', 'tidak tampil', '2018-11-08 00:22:58', '2018-11-08 00:22:58'),
(2, NULL, '/infoharga', '0816863212', '/infoharga', '2018-11-08', '09:12 am', 'tampil', 'tidak tampil', '2018-11-08 02:18:12', '2018-11-08 02:18:12'),
(3, NULL, 'A', '0816863212', 'A', '2018-11-08', '09:54 am', 'tampil', 'tidak tampil', '2018-11-08 02:19:54', '2018-11-08 02:19:54'),
(4, NULL, 'A', '0816863212', 'A', '2018-11-08', '09:23 am', 'tampil', 'tidak tampil', '2018-11-08 02:20:23', '2018-11-08 02:20:23'),
(5, NULL, 'Hafid bau', '0816863212', 'Hafid bau', '2018-11-08', '10:03 am', 'tampil', 'tidak tampil', '2018-11-08 03:14:03', '2018-11-08 03:14:03'),
(6, NULL, 'Call', '1243234234', 'qdsafqwweqwrqw', '2018-11-08', '10:05 am', 'tampil', 'tidak tampil', '2018-11-08 03:14:50', '2018-11-08 03:14:50'),
(7, NULL, 'fsddds', '123123123', 'asfsdaw', '2018-11-08', '10:50 am', 'tampil', 'tidak tampil', '2018-11-08 03:15:25', '2018-11-08 03:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'judul', '1541662229.jpg', '', '2018-11-08 00:30:29', '2018-11-08 00:30:29');

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
(21, '2018_10_10_105629_create_beritas_table', 1),
(22, '2018_10_12_114737_create_pemantauans_table', 1),
(23, '2018_10_16_100209_create_users_table', 1),
(24, '2018_10_18_161414_create_galeris_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemantauans`
--

CREATE TABLE `pemantauans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$mqvMa7tPNVQvwPaGEczJ6OsECMIsSGeW2RdhGCZi.9CEPEm.Ujyjq', 'admin', 'AA', NULL, NULL),
(2, 'bayong', '$2y$10$64lb9W8hZqhZmbz83KQmr.vHeziQDhm3rdP6pi6YzX1QCTkYA.MYm', 'basic', 'Asep', '2018-11-08 00:31:56', '2018-11-08 00:31:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemantauans`
--
ALTER TABLE `pemantauans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pemantauans`
--
ALTER TABLE `pemantauans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
